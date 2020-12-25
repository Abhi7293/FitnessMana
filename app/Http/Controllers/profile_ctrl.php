<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\CommonModel;

class profile_ctrl extends Controller{
    //
    public function fr_updateProfile_user(Request $request){
		try{
            DB::beginTransaction();
            date_default_timezone_set('Asia/Kolkata');
            if(empty($request->Name)){
                return response()->json(['status' => false, 'message' => "Name should not be empty!"]);
            }

            $ledgerArr = [
                'LedgerName'          	=>   strtoupper($request->Name),
            ];

            $LedgerIdWhere = [
                'LedgerId'			=>	session()->get('LedgerId'),
            ];

            $LedgerId = CommonModel::DB_Update('ledger', $ledgerArr, $LedgerIdWhere, true);
            
            $loginArr = [
                'LoginName'          	=>  strtoupper($request->Name),
                'Mobile'                =>  $request->Mobile,
            ];
            
            if(!empty($request->ProfileImage)){
                $profilePhoto = CommonModel::Base64ToImage($request->ProfileImage);
                $loginArr['LoginPhoto'] =   $profilePhoto;
            }
            $loginIdWhere = [
                'LoginId'			    =>	session()->get('LoginId'),
            ];

            $LoginId = CommonModel::DB_Update('login', $loginArr, $loginIdWhere, true);
            if(!empty($LoginId)){
                DB::commit();
                session()->put($loginArr);
                return response()->json(['status' => true, 'message' => "Profile Update Successfully!", 'data' => $LoginId]);
            }else{
                DB::rollback();
                return response()->json(['status' => false, 'message' => "Profile Not Update!",  'data' => $LoginId]);
            }
		 }catch(\Exception $e){
            DB::rollback();
		 	return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
		 }
    }
    
    public function instructorProfile(Request $request){
        try{
            DB::beginTransaction();
            date_default_timezone_set('Asia/Kolkata');
            $LoginWhere =[
                "LedgerId"  =>  $request->i,
            ];
            
            $InstructorData = DB::table('login')->where($LoginWhere)->get("*")->first();

            $AvgRating = DB::select('call fit_sel_avgUserRating_fr(?)',array($request->i));

            $ReviewWhere = [
                    ["LedgerId"         ,'=',   $request->i],
                    ["RecordStatus"     ,'!=',  'D'],
                ];
            $ReviewData = DB::table('review_rating')->where($ReviewWhere)->orderBy('ReviewRatingId', 'desc')->limit('3')->get("*")->toArray();

            if(!empty($AvgRating['0']->rating) && $ReviewData){
                $returnData['AvgRating']    =   $AvgRating['0']->rating;
                $returnData['Reviews']      =   $ReviewData;
            }else{
                $returnData['AvgRating']    =   0;
                $returnData['Reviews']      =   0;
            }

            $ReviewWhere = [
                    ["LedgerId"         ,'=',   $request->LedgerId],
                    ["RecordStatus"     ,'!=',  'D'],
                ];
            $returnData['Instructor']   =   $InstructorData;
            return $returnData;
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
        }
    }

    public function profile(Request $request){
        $data['BookedMeeting']   =  DB::select('call fit_sel_getUserBookedMeetings_fr(?)',array(session()->get('LedgerId')));
        return $data;
    }

    public function addFeatureVideos(Request $request){
        try{
            DB::beginTransaction();
            date_default_timezone_set('Asia/Kolkata');

            $file=$request->file("Video1"); 
            if(!empty($request->file("Video1"))){
                $file       =   $request->file("Video1");
                $VideoNo    =   "Video1";
            }elseif(!empty($request->file("Video2"))){
                $file       =   $request->file("Video2");
                $VideoNo    =   "Video2";
            }elseif(!empty($request->file("Video3"))){
                $file       =   $request->file("Video3");
                $VideoNo    =   "Video3";
            }else{
                return response()->json(['status' => false, 'message' => "Profile Not Update!"]);
            }
            
            $fileName =   uniqid().date('dmY').time() . '.'.$file->getClientOriginalExtension();
            $destinationPath = 'public/uploads';

            if($file->move($destinationPath,$fileName)){
                $VideoWhere     =   [
                    ["LedgerId"         ,'=',   session()->get('LedgerId')],
                    ["VideoNo"          ,'=',   $VideoNo],
                    ["RecordStatus"     ,'!=',  'D'],
                ];
                $VideoData = DB::table('feature_videos')->where($VideoWhere)->get("*")->first();

                if(!empty($VideoData)){
                    $VideoArr = [
                        'VideoNo'           =>  $VideoNo,
                        'VideoName'         =>   $fileName,
                    ];

                    $FeatureVideoIdWhere = [
                        'FeatureVideoId'    =>  $VideoData->FeatureVideoId,
                        'LedgerId'          =>  session()->get('LedgerId'),
                    ];

                    $VideoId = CommonModel::DB_Update('feature_videos', $VideoArr, $FeatureVideoIdWhere, true);
                    if($VideoId){
                        DB::commit();
                        return response()->json(['status' => true, 'message' => "Video Updated!",  'data' => $VideoId]);
                    }else{
                        DB::rollback();
                        return response()->json(['status' => false, 'message' => "Video Not Update!"]);
                    }
                }else{
                    $VideoArr  =  [
                        'LedgerId'          =>  session()->get('LedgerId'),
                        'VideoNo'           =>  $VideoNo,
                        'VideoName'         =>  $fileName,
                    ];

                    $VideoId = CommonModel::DB_Save('feature_videos', $VideoArr, true);
                    if($VideoId){
                        DB::commit();
                        return response()->json(['status' => true, 'message' => "Video Added!",  'data' => $VideoId]);
                    }else{
                        DB::rollback();
                        return response()->json(['status' => false, 'message' => "Video Not Added!"]);
                    }
                }
            }else{
                DB::rollback();
                return response()->json(['status' => false, 'message' => "Error in adding Adding Video!"]);
            }
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
        }
    }
}
