<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\CommonModel;
class meetings_ctrl extends Controller
{
    //
    public function getMeetings_fr(Request $request){ 
		$Result = [];
		$LedgerId			=	isset($request->LedgerId) ? $request->LedgerId : 0;
		$CategoryId 		=	isset($request->CategoryId) ? $request->CategoryId : 0;
		$SubCategoryId 		=	isset($request->SubCategoryId) ? $request->SubCategoryId : 0;
		$Result = DB::select('call fit_sel_mettings_fr(?,?,?)',array($LedgerId, $CategoryId, $SubCategoryId));
		if(count($Result)){
			return response()->json(['status' => true, 'message' => "Meeting list!", 'data' => $Result]);
		}else{
			return response()->json(['status' => true, 'message' => "Record not available!",  'data' => $Result]);
		}
	}

	public function getBookedMeetings(Request $request){ 
		$Result = [];
		$LedgerId			=	$request->LedgerId;
		if(!empty($LedgerId)){
			$Result = DB::select('call fit_sel_checkoutBookedMettings_fr(?)',array($LedgerId));
			if(count($Result)){
				return response()->json(['status' => true, 'message' => "Meeting list!", 'data' => $Result]);
			}else{
				return response()->json(['status' => true, 'message' => "Record not available!",  'data' => $Result]);		
			}
		}
		return response()->json(['status' => false, 'message' => "Error!"]);
	}
}
