<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\CommonModel;
class Class_ctrl extends Controller
{
    //
    public function class (Request $request){
        $MeetingData = DB::select('call fit_sel_metting_fr(?)',array($request->c));
        if(!empty($MeetingData)){
            $MeetingBookedWhere = [
                ["MeetingId"        ,'=',   $request->c],
                ["BookedLedgerId"   ,'=',   session()->get('LedgerId')],
                ["MeetingStatus"    ,'=',   'A'],
                ["RecordStatus"     ,'!=',  'D'],
            ];
            $BookedMeetingData = DB::table('meeting_booking')->where($MeetingBookedWhere)->get("*")->first();
            if(!empty($BookedMeetingData)){
                $MeetingData['0']->MeetingStatus  =   $BookedMeetingData->MeetingStatus;
            }
            return $MeetingData['0'];
        }else{
            return false;
        }
    }

    public function fr_addClass_user(Request $request){
		try{
            DB::beginTransaction();
            date_default_timezone_set('Asia/Kolkata');
            if(!empty($request->MeetingImage)){
                $MeetingImage = CommonModel::Base64ToImage($request->MeetingImage);
            } 
            $addClassArr  =  [
                "MeetingId"             =>  CommonModel::NewUniqueId(session()->get('LedgerId')),
                "MeetingName"	        =>  strtoupper($request->MeetingName),
                "MeetingDescription"    =>  $request->MeetingDescription,
                "MeetingUrl"            =>  $request->MeetingUrl,
                "MeetingDuration"       =>  $request->MeetingDuration,
                "MeetingPrice"          =>  isset($request->MeetingPrice) ? $request->MeetingPrice : 0,
                "CategoryId"	        =>  $request->CategoryId,
                "SubCategoryId"         =>  $request->SubCategoryId,
                "MeetingType"           =>  $request->MeetingType,
                "MeetingCapacity"       =>  $request->MeetingCapacity,
                "MeetingPriceStatus"    =>  $request->MeetingPriceStatus,
                "MettingDate"           =>  $request->MettingDate,
                "MettingTime"           =>  $request->MettingTime,
                'MeetingImage'          =>  isset($MeetingImage) ? $MeetingImage : 0,
                "LedgerId"              =>  session()->get('LedgerId'),
                "MettingSessionKey"     =>  '0',
            ];
            $MeetingId = CommonModel::DB_Save('meeting',$addClassArr, true);
            if($MeetingId == 0){
                DB::commit();
                return response()->json(['status' => true, 'message' => "Class Created Successfully!", 'data' => $MeetingId]);
            }else{
                DB::rollback();
                return response()->json(['status' => false, 'message' => "Class Not Added!",  'data' => $MeetingId]);
            }
		 }catch(\Exception $e){
            DB::rollback();
		 	return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
		 }
	}

    public function bookingClasses(Request $request){
        //echo "<pre>";

        DB::beginTransaction();
        date_default_timezone_set('Asia/Kolkata');

        $MeetingAvailable = DB::select('call fit_sel_checkAvailableMeetingBookingPayment_fr(?)',array($request->cid));

        if($MeetingAvailable){
            $MeetingDataWhere = [
                    ["MeetingId"        ,'=',   $request->cid],
                    ["BookedLedgerId"   ,'=',   session()->get('LedgerId')],
                ];

            $MeetingData = DB::table('meeting_booking')->where($MeetingDataWhere)->get("*")->first();

            if(empty($MeetingData)){
                $BookMeetingArr = [
                    "MeetingId"             =>  $request->cid,
                    "CategoryId"            =>  $MeetingAvailable['0']->CategoryId,
                    "BookedLedgerId"        =>  session()->get('LedgerId'),
                    "ClassCreatedLedgerId"  =>  $MeetingAvailable['0']->LedgerId,
                    "MeetingType"           =>  $MeetingAvailable['0']->MeetingType,
                    "MeetingStatus"         =>  $MeetingAvailable['0']->MeetingPriceStatus == '1' ? 'A' : 'I',
                ];
                $MeetingBookingId = CommonModel::DB_Save('meeting_booking',$BookMeetingArr, true);

                if($MeetingBookingId){
                    DB::commit();
                    $MeetingBookingData = DB::select('call fit_sel_getMeetingBooking_fr(?)',array($MeetingBookingId));

                    if($MeetingBookingData['0']->MeetingStatus == 'I'){
                        $returnData =   [
                            "status"    =>  "redirect",
                            "redirect"  =>  "Checkout",
                        ];
                        return $returnData;
                    }else{
                        $fleshData="Meeting Booked";
                        $returnData =   [
                            "status"    =>  "redirect",
                            "redirect"  =>  "Profile",
                        ];
                        return $returnData;
                    }
                }else{
                    DB::rollback();
                    $fleshData="Error in Meeting Booking";
                    $returnData =   [
                        "status"    =>  "redirect",
                        "redirect"  =>  "home",
                    ];
                    return $returnData;
                }
            }else{
                $MeetingBookingData = DB::select('call fit_sel_getMeetingBooking_fr(?)',array($MeetingData->MeetingBookingId));

                if($MeetingBookingData['0']->MeetingStatus == 'I'){
                    $returnData =   [
                        "status"    =>  "redirect",
                        "redirect"  =>  "Checkout",
                    ];
                    return $returnData;
                }else{
                    $fleshData="Meeting Already Booked";
                    $fleshData="Meeting Booked";
                    $returnData =   [
                        "status"    =>  "redirect",
                        "redirect"  =>  "Profile",
                    ];
                    return $returnData;
                }
            }
        }else{
            $fleshData="Meeting Expired!";
            $returnData =   [
                "status"    =>  "redirect",
                "redirect"  =>  "home",
            ];
            return $returnData;
        }
    }
}