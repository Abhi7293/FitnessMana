<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\CommonModel;
class payment_ctrl extends Controller
{


    
    public function classPayment(Request $request){
    	// echo "<pre>";
     //    print_r($request->input()); die;
    	DB::beginTransaction();

    	if(!empty($request->input())){
            $productinfo = $request['productinfo'];
            $productinfo = base64_decode($productinfo);
            $productinfo = json_decode($productinfo);

    		$PaymentArr  = [
                "PaymentTransactionId"      =>	$request['txnid'],
                "BookedLedgerId"            =>  $productinfo->LedgerId,
                "TransactionDate"           =>  $request['addedon'],
                "PaidAmount"                =>  $request['net_amount_debit'],
                "PaymentStatus"             =>  $request['status'] == 'success' ? '1' : '0',
            ];

            $PaymentId	=	CommonModel::DB_Save('payment',$PaymentArr, true);
            $MeetingBookingArr = [
                "MeetingStatus"     =>  'A',
            ];
            
            foreach($productinfo->Meetings as $key => $val){
                $TransactionArr = [
                    "PaymentTransactionId"     	=>	$request['txnid'],
                    "PaymentId"        			=>  $PaymentId,
                    "BookedLedgerId"            =>  $val->BookedLedgerId,
                    "ClassCreatedLedgerId"      =>  $val->ClassCreatedLedgerId,
                    "MeetingBookingId"          =>  $val->MeetingBookingId,
                    "MeetingId"                 =>  $val->MeetingId,
                    "TransactionDate"     		=>  $request['addedon'],
                    "PaidAmount"                =>  $val->MeetingPrice,
                    "PaymentStatus"             =>  $request['status'] == 'success' ? '1' : '0',
                ];

                $MeetingBookingWhere = [
                    'MeetingBookingId'          =>  $val->MeetingBookingId,
                ];

                $MeetingBookingStatus   =   CommonModel::DB_Update('meeting_booking', $MeetingBookingArr, $MeetingBookingWhere, true);
                $TransectionId          =   CommonModel::DB_Save('transaction',$TransactionArr, true);
            }
                
			if($PaymentArr['PaymentStatus'] == 1){
				if(!empty($MeetingBookingStatus)){
					DB::commit();
					$fleshData="Payment Success";
		            $returnData =   [
		                "status"    =>  "redirect",
		                "redirect"  =>  "Profile",
		            ];
		            return $returnData;
				}else{
					DB::rollback();
					$fleshData="Payment Failed";
		            $returnData =   [
		                "status"    =>  "redirect",
		                "redirect"  =>  "home",
		            ];
		            return $returnData;
				}
			}
    	}else{
            DB::rollback();
    		$fleshData="Payment Failed";
            $returnData =   [
                "status"    =>  "redirect",
                "redirect"  =>  "home",
            ];
            return $returnData;
    	}
    }

    public function classPaymentCancel(Request $request){
        // echo "<pre>";
     //    print_r($request->input()); die;
        DB::beginTransaction();

        if(!empty($request->input())){
            $productinfo = $request['productinfo'];
            $productinfo = base64_decode($productinfo);
            $productinfo = json_decode($productinfo);

            $PaymentArr  = [
                "PaymentTransactionId"      =>  $request['txnid'],
                "BookedLedgerId"            =>  $productinfo->LedgerId,
                "TransactionDate"           =>  $request['addedon'],
                "PaidAmount"                =>  '0.00',
                "PaymentStatus"             =>  $request['status'] == 'success' ? '1' : '0',
            ];

            $PaymentId  =   CommonModel::DB_Save('payment',$PaymentArr, true);

            foreach($productinfo->Meetings as $key => $val){
                $TransactionArr = [
                    "PaymentTransactionId"      =>  $request['txnid'],
                    "PaymentId"                 =>  $PaymentId,
                    "BookedLedgerId"            =>  $val->BookedLedgerId,
                    "ClassCreatedLedgerId"      =>  $val->ClassCreatedLedgerId,
                    "MeetingBookingId"          =>  $val->MeetingBookingId,
                    "MeetingId"                 =>  $val->MeetingId,
                    "TransactionDate"           =>  $request['addedon'],
                    "PaidAmount"                =>  '0.00',
                    "PaymentStatus"             =>  $request['status'] == 'success' ? '1' : '0',
                ];

                $TransectionId          =   CommonModel::DB_Save('transaction',$TransactionArr, true);
            }
                
            if(!empty($PaymentId)){
                DB::commit();
                $fleshData="Payment Failed";
                $returnData =   [
                    "status"    =>  "redirect",
                    "redirect"  =>  "Checkout",
                ];
                return $returnData;
            }else{
                DB::rollback();
                $fleshData="Payment Failed";
                $returnData =   [
                    "status"    =>  "redirect",
                    "redirect"  =>  "home",
                ];
                return $returnData;
            }
        }else{
            DB::rollback();
            $fleshData="Payment Failed";
            $returnData =   [
                "status"    =>  "redirect",
                "redirect"  =>  "home",
            ];
            return $returnData;
        }
    }


    public function getBooking(Request $request){
        $Meetings = DB::select('call fit_sel_checkoutBookedMettings_fr(?)',array(session()->get('LedgerId')));
        if(!empty($Meetings)){
            $price  =   0;
            foreach($Meetings as $key => $val){
                $price  =   $price+$val->MeetingPrice;
            }
            $MeetingBookingData['Meetings'] =   $Meetings;
            $MeetingBookingData['price']    =   $price;
            $MeetingBookingData['LedgerId'] =   session()->get('LedgerId');
            $returnData =   [
                "status"    =>  "payment",
                "data"      =>  $MeetingBookingData,
            ];
            return $returnData;
        }else{
            $fleshData="Error in Payment";
            $returnData =   [
                "status"    =>  "redirect",
                "redirect"  =>  "home",
            ];
            return $returnData;
        }
    }
}
