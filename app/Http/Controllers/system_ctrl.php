<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommonModel;
use Validator;
use Auth;
use DB;


class system_ctrl extends Controller
{
		
    public function SystemVersionUpdate(Request $request)
	{
		//$Version = "v".CommonModel::Version();
		$Version = "";

		echo $this->Run($Version, "tables");
		echo $this->Run($Version, "procedure");
		echo $this->Run($Version, "default_data");
		
	}

	public function Run($Version, $file)
	{
		$result="";
		$path = 'resources/views/'.$Version.'/db_version/'.$file.'.sql';
		$content = trim(file_get_contents($path));
		if($content){
			$result = DB::unprepared($content);
			if($result)
			{
				return response()->json([
                    'status' => true,
                    'message' => $file." has been run successfully!"
                ]);
			}
		}
	}


	public function history(Request $request)
	{
		$FromDate = date('Y-m-d',strtotime($request->FromDate));
		$ToDate = date('Y-m-d',strtotime($request->ToDate));
		$result = DB::select('call history_login_of_organization(?,?,?,?)',array(session()->get('OrganizationId'),session()->get('LoginId'),$FromDate, $ToDate));
		if($result){
			return response()->json(['status' => true, 'message' => "History list!", 'data' => $result]);
		}else{
			return response()->json(['status' => false, 'message' => "History not avaliable!"]);
		}
	}

}
