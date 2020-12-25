<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\CommonModel;
class rating_ctrl extends Controller
{
    //
    public function rating(Request $request){
    	if(!empty($request->l)){
	    	$LedgerWhere = [
	            ["LedgerId"     	,'=',	base64_decode($request->l)],
	            ["RecordStatus"     ,'!=',	'D'],
	            ["GroupId"     		,'=',	'2'],
	        ];
	        $LedgerData = DB::table('ledger')->where($LedgerWhere)->get("*")->first();
	        if(!empty($LedgerData)){
		        $AvgRating = DB::select('call fit_sel_avgUserRating_fr(?)',array(base64_decode($request->l)));
		        if(!empty($AvgRating['0']->rating)){
		            $returnData =   [
		                "status"    =>  "rating",
		                "rating"  	=>  $AvgRating['0']->rating,
		                "LedgerId"	=>	base64_decode($request->l),
		            ];
		            return $returnData;
		        }else{
	            	$returnData =   [
		                "status"    =>  "rating",
		                "rating" 	=>  "0",
		                "LedgerId"	=>	base64_decode($request->l),
		            ];
	            	return $returnData;
		        }
	        }else{
	        	$fleshData	=	"No Instructor Found";
	            $returnData =   [
	                "status"    =>  "redirect",
	                "redirect"  =>  "home",
	            ];
	            return $returnData;
	        }
	    }else{
	    	$fleshData	=	"No Instructor Found";
            $returnData =   [
                "status"    =>  "redirect",
                "redirect"  =>  "home",
            ];
            return $returnData;
	    }
    }

    public function review(Request $request){
    	try{
            date_default_timezone_set('Asia/Kolkata');
            $ReviewWhere = [
	            ["LedgerId"     	,'=',	$request->LedgerId],
	            ["RecordStatus"     ,'!=',	'D'],
	        ];
	        $ReviewData = DB::table('review_rating')->where($ReviewWhere)->orderBy('ReviewRatingId', 'desc')->get("*")->toArray();
            if(!empty($ReviewData)){
            	return response()->json(['status' => true, 'message' => "get Reviews Successfully!", 'data' => $ReviewData]);
            }else{
                return response()->json(['status' => false, 'message' => "No Reviews Found!"]);
            }
		 }catch(\Exception $e){
		 	return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
		 }
    }

    public function addReview(Request $request){
    	try{
            DB::beginTransaction();
            date_default_timezone_set('Asia/Kolkata');

            $reviewWhere = [
	            ["LedgerId"     	,'=',	$request->LedgerId],
	            ["ReviewLedgerId"   ,'=',	$request->ReviewLedgerId],
	        ];
	        $ReviewData = DB::table('review_rating')->where($reviewWhere)->get("*")->first();

	        if(empty($ReviewData)){
	            $addReviewArr  =  [
	                "LedgerId"          =>  $request->LedgerId,
	                "ReviewLedgerId"	=>  $request->ReviewLedgerId,
	                "Rating"    		=>  $request->Rating,
	                "Review"            =>  $request->Review,
	            ];
	            $ReviewId = CommonModel::DB_Save('review_rating',$addReviewArr, true);
	        }else{
	        	$addReviewArr = [
					'Rating'			=>	$request->Rating,
					'Review'			=>	$request->Review,
				];
				$ReviewId = CommonModel::DB_Update('review_rating', $addReviewArr, $reviewWhere, true);
	        }

            if($ReviewId){
                DB::commit();
                return response()->json(['status' => true, 'message' => "Review Added Successfully!", 'data' => $ReviewId]);
            }else{
                DB::rollback();
                return response()->json(['status' => false, 'message' => "Review Not Added!"]);
            }
		 }catch(\Exception $e){
            DB::rollback();
		 	return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
		 }
    }
}
