<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\CommonModel;

class categories_ctrl extends Controller
{
	public function __construct()
    {

	}
    public function getCategories(Request $request)
	{
		$Result = [];
		$CategoryId = isset($request->CategoryId) ? $request->CategoryId : 0;
		$Result = DB::select('call fit_sel_categories(?,?)',array($request->SearchBox, $CategoryId));
		if(count($Result)){
			$Arr = [];
			foreach($Result as $Row){
				if($Row->CategoryParentId == 0)
				{
					$Row->CategoryStatus = "MAIN"; 
					$Arr[] = $Row;
					foreach($Result as $ChildRow){
						if($Row->CategoryId == $ChildRow->CategoryParentId )
						{
							$ChildRow->CategoryStatus = "SUB"; 
							$Arr[] = $ChildRow;
						}
					}
					
				}
			}
			return response()->json(['status' => true, 'message' => "categories list!", 'data' => $Arr]);
		}else{
			return response()->json(['status' => true, 'message' => "Record not available!",  'data' => $Result]);
		}
	}

	public function getParentCategories(Request $request)
	{
		$Result = [];
		$Where = [
			['CategoryParentId'	,'=',	0],
		];
		$Result = CommonModel::DB_All('category', $Where, 'CategoryName', 'ASC');
		if(count($Result)){
			return response()->json(['status' => true, 'message' => "categories list!", 'data' => $Result]);
		}else{
			return response()->json(['status' => true, 'message' => "Record not available!",  'data' => $Result]);
		}
	}

	public function categories_save(Request $request)
	{
		DB::beginTransaction();
		try
		{
			$response="";

			// Check Categories is Exist ?
			$CategoryName = strtoupper($request->CategoryName);
			$Where = [
				['CategoryParentId'	,'=',	$request->CategoryParentId],
				['CategoryName'		,'=',	strtoupper($request->CategoryName)],
			];
			$IsExist = CommonModel::DB_Select('category', $Where);
			if($IsExist){
				return response()->json(['status' => false, 'message' => "Category is already exist!", 'key'=>'']);
				die();
			}
			
			$InsertArr = [
				'CategoryParentId'	=>	$request->CategoryParentId,
				'CategoryName'		=>	strtoupper($request->CategoryName),
				'CategoryImage'		=>	CommonModel::Base64ToImage($request->CategoryImage),
				'IsAllow'			=>	'1',
			];
			$response = CommonModel::DB_Save('category', $InsertArr, true);	
			
			if($response){
				//CommonModel::System_Logs(strtoupper($request->CommanMasterName)." - Feedback CommanMaster Added!", 'comman_master', 'CommanMasterId', $response);
				DB::commit(); // if there was no errors, your query will be executed
				return response()->json(['status' => true, 'message' => "Category has been added successfully!"]);
			}else
			{
				DB::rollback();
				return response()->json(['status' => false, 'message' => "Something went wrong!"]);
			}
		}catch(\Exception $e)
		{
			DB::rollback(); // either it won't execute any statements and rollback your database to previous state
			return response()->json(['status' => false, 'message' => $e->getMessage()]);
		}
	}

	
	public function categories_update(Request $request)
	{
		DB::beginTransaction();
		try
		{
			if($request->CategoryId!="" && $request->Status !="" && $request->CategoryName !="")
			{
				$Response = "";
				$Status = $request->Status;
				$Where = [
					['CategoryId'	,'=',	$request->CategoryId],
					['RecordStatus'		,'!=',	'D'],
				];
				if($Status=="Info"){
					// Check CommanMasterName is Exist ?
					$IsWhere = [
						['CategoryName'	,'=',	strtoupper($request->CategoryName)],
					];
					$IsExist = DB::table('category')->where($IsWhere)->first();
					if($IsExist){
						if($IsExist->RecordStatus == 'S'){
							return response()->json(['status' => false, 'message' => "Category is system protected! You are not able to update."]);
							die();
						}
						return response()->json(['status' => false, 'message' => "Category is already exist!"]);
						die();
					}
					
					$Arr = [
						'CategoryName'		=> strtoupper($request->CategoryName),
					];
					$Response = CommonModel::DB_Update('category', $Arr, $Where, true);
				}
				if($Response){
					//CommonModel::System_Logs("Category Updated!", 'category', 'CategoryId', $request->CategoryId);
					DB::commit(); 
					return response()->json(['status' => true, 'message' => "Category (".$Status.") has been updated successfully!", 'data' => $Response]);
				}else{
					DB::rollback();
					return response()->json(['status' => false, 'message' => "Something went wrong!"]);
				}
			}else{
				DB::rollback();
				return response()->json(['status' => false, 'message' => "Please enter all valid fields!"]);
			}
		}catch(\Exception $e)
		{
			DB::rollback(); // either it won't execute any statements and rollback your database to previous state
			return response()->json(['status' => false, 'message' => $e->getMessage()]);
		}
	}






	// Start Fr Functions

	public function getParentCategories_fr(Request $request)
	{
		$Result = [];
		$Where = [
			['CategoryParentId'	,'=',	0],
		];
		$Result = CommonModel::DB_All('category', $Where, 'CategoryName', 'DESC');
		if(count($Result)){
			return response()->json(['status' => true, 'message' => "categories list!", 'data' => $Result]);
		}else{
			return response()->json(['status' => true, 'message' => "Record not available!",  'data' => $Result]);
		}
	}

	public function getSubCategories_fr(Request $request)
	{
		$Result = [];
		$Where = [
			['CategoryParentId'	,'=',	$request->CategoryId],
		];
		$Result = CommonModel::DB_All('category', $Where, 'CategoryName', 'DESC');
		if(count($Result)){
			return response()->json(['status' => true, 'message' => "categories list!", 'data' => $Result]);
		}else{
			return response()->json(['status' => true, 'message' => "Record not available!",  'data' => $Result]);
		}
	}

}
