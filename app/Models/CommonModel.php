<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use DB;

class CommonModel extends Model
{
    public static function CommonEnum()
	{
		$data = [];
		$data['BaseUrl'] = config('app.url');

		$data['AccountStatus'] = [
			0 => 'Deactive',
			1 => 'Active',
			2 => 'Limited',
			3 => 'Blocked',
		];

		$data['IsAllow'] = [
			0 => 'Deactive',
			1 => 'Active',
		];

		$data['RecordStatus'] = [
			'S' => 'System Protected',
			'A' => 'Add | Edit',
			'D' => 'Delete',
		];

		$data['MeetingType'] = [
			0 => 'None',
			1 => 'Private',
			2 => 'Group',
		];

		$data['MeetingStatus'] = [
			0 => 'None',
			1 => 'Free',
			2 => 'Paid',
		];

		$data['MettingAs'] = [
			0 => 'None',
			1 => 'Created',
			2 => 'Joined',
		];

		$data['RestricedWords'] = array('SUPER', 'COMPANY', 'MASTER', 'ADMIN', 'USER', 'DEMO', 'TEST');
		
		$data['ExpenseTypes'] = [
			"Car Diesel",
			"Car/bike Petrol",
			"Car service",
			"Car washing",
			"Car Maintanace",
			"Bus Fair",
			"Train Fair",
			"Car rent",
			"Breakfast/Lunch/Dinner",
			"Hotel expenses",
			"Mobile recharge",
			"New Mobile set",
			"Other expenses",
		];
		
		return $data;
	}

	public static function getRoutePrefix($IsAdmin)
	{
		return ($IsAdmin == "admin" ? "/"."admin"."/" : "/");
	}

	public static function Base64ToImage($data){
		$image_parts = explode(";base64,", $data);
		$image_type_aux = explode("image/", $image_parts[0]);
		$image_type = $image_type_aux[1];
		$image_base64 = base64_decode($image_parts[1]);
		$image_name = uniqid().date('dmY').time() . '.png';
		$file = dirname(__FILE__)."/../../public/uploads/" . $image_name;
		file_put_contents($file, $image_base64);
		return $image_name;
	}


	public static function RestricedWords($dt, $CheckArr)
	{
		$data = self::CommonEnum();
		$RestricedWords = $data['RestricedWords'];
		$response = array('status'=>true, 'msg' =>'', 'key' =>'');
		foreach($CheckArr as $item)
		{
			foreach($RestricedWords as $Words)
			{
				if (strpos($dt[$item], $Words) !== false) {
					$response = array('status'=>false, 'msg' =>$item.' conatins word ('. $Words . '). Please enter another '.$item.' !' , 'key' =>''.$item);
					break;
				}
			}
		}
		return $response;
	}
	
	public static function NewUniqueId($LedgerId)
	{
		$microtime=substr((int)(round(microtime(true) * 1000)),-6);
		$_NewString = self::RandomNumber(6);
		return session()->get('LoginId').$LedgerId.$microtime.str_shuffle($_NewString);
	}

	public static function RandomNumber($digit) {
		$alphabet = '1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < $digit; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	public static function RandomString($digit) {
		$alphabet = '1234567890abcdefghijklmonpqrstuvwxyz';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < $digit; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	public static function CreateAccessToken($Arr) {
		$Arr['Token'] = self::RandomString(64);
		return encrypt( $Arr );
	}

	public static function getAccessTokenData($Token) {
		return decrypt($Token);
	}

	public static function Version()
	{
		$version = 1;
		return (int)$version;
	}

	public static function IsPageAllow($page)
	{
		$Where = [
			["OrganizationId"	,'=',	session()->get('OrganizationId')],
			["RoleId"			,'=',	session()->get('RoleId')],
			["Page"				,'=',	$page],
			["RecordStatus"		,'!=',	'D'],
		];
		$result = DB::table('role_permission')->where($Where)->first();
		return $result;
	}

	public static function AddField($Arr)
	{
		$Arr["RecordStatus"]	=	'A';
		$Arr["AddedBy"]			=	session()->get('UserName');
		$Arr["AddedDate"]		=	date('Y-m-d H:i:s');
		$Arr["UpdatedBy"]		=	session()->get('UserName');
		$Arr["UpdatedDate"]		=	date('Y-m-d H:i:s');
		return $Arr;
	}

	public static function AddSystemField($Arr)
	{
		$Arr["RecordStatus"]	=	'A';
		$Arr["AddedBy"]			=	"SYSTEM_PROTECTED";
		$Arr["AddedDate"]		=	date('Y-m-d H:i:s');
		$Arr["UpdatedBy"]		=	"SYSTEM_PROTECTED";
		$Arr["UpdatedDate"]		=	date('Y-m-d H:i:s');
		return $Arr;
	}

	public static function UpdateField($Arr)
	{
		$Arr["UpdatedBy"]		=	session()->get('UserName');
		$Arr["UpdatedDate"]		=	date('Y-m-d H:i:s');
		return $Arr;
	}

	public static function DB_Select($tbl, $Where)
	{
		$result = DB::table($tbl)->where($Where)->first();
		return $result;
	}

	public static function DB_All($tbl, $Where, $OrderBy, $IsASC)
	{
		$result = DB::table($tbl)->select('*')->where($Where)->orderBy($OrderBy, $IsASC)->get();
		return $result;
	}

	public static function DB_SelectAll($tbl, $Where)
	{
		$result = DB::table($tbl)->select('*')->where($Where)->get();
		return $result;
	}

	public static function DB_Save($tbl, $Arr, $IsAddField)
	{
		if($IsAddField){
			$Arr["RecordStatus"]	=	'A';
			$Arr["AddedBy"]			=	session()->get('UserName');
			$Arr["AddedDate"]		=	date('Y-m-d H:i:s');
			$Arr["UpdatedBy"]		=	session()->get('UserName');
			$Arr["UpdatedDate"]		=	date('Y-m-d H:i:s');
		}
		$id = DB::table($tbl)->insertGetId($Arr);
		return $id;
	}

	public static function DB_BulkSave($tbl, $Arr)
	{
		$Status = DB::table($tbl)->insert($Arr);
		return (isset($Status) ? true : false);
	}

	public static function DB_Update($tbl, $Arr, $Where, $IsAddField)
	{
		if($IsAddField){
			$Arr["UpdatedBy"]		=	!empty(session()->get('UserName')) ? session()->get('UserName') : 'USER';
			$Arr["UpdatedDate"]		=	date('Y-m-d H:i:s');
		}
		$Status = DB::table($tbl)->where($Where)->update($Arr);
		return (isset($Status) ? true : false);
	}

	public static function DB_DeleteStatus($tbl,$Where)
	{
		$Status = 0;
		$Arr = [];
		$Arr["RecordStatus"]	=	'D';
		$Arr["UpdatedBy"]		=	session()->get('UserName');
		$Arr["UpdatedDate"]		=	date('Y-m-d H:i:s');
		$Status = DB::table($tbl)->where($Where)->update($Arr);
		return (isset($Status) ? true : false);
	}



	public static function System_Logs($msg, $tbl, $Field, $value)
	{
		date_default_timezone_set('Asia/Kolkata');
		$LogsArr = [
			'LoginId'		=>	session()->get('LoginId'),
			'Logs' 			=>	$msg,
			'TableName' 	=>	$tbl,
			'FieldName' 	=>	$Field,
			'FieldValue' 	=>	$value,
		];
		$Logs = static::DB_Save('sys_logs', $LogsArr, true);
	}

	public static function sys_options($slug)
	{
		$Where = [
			['slug'				,'=',	$slug],
			['RecordStatus'		,'!=',	'D'],
		];
		$IsMeta = DB::table('sys_options')->where($Where)->first();
		if($IsMeta){
			return $IsMeta->Value;
		}else{
			return'';
		}
	}

	public static function getCurrentUrl(){
		$DomainUrl = strtolower($_SERVER['SERVER_NAME']);
		if (strpos($DomainUrl, 'www.') !== false) {
			$DomainUrl = str_replace("www.", "",$DomainUrl);
		}
		return $DomainUrl;
	}

	public static function SendSms($numbers,$message)
	{
		$SmsWhere = [
			['OrganizationId'		,'=',	session()->get('OrganizationId')],
			['IsOrganizationAllow'	,'=',	1],
			['RecordStatus'			,'!=',	'D'],
		];
		$IsOrganization = self::DB_Select('organization', $SmsWhere);
		if($IsOrganization){
			if ($IsOrganization->OrganizationSms == "1")
			{
				$username = $IsOrganization->OrganizationSmsUsername;
				$password = $IsOrganization->OrganizationSmsPassword;
				$sender = $IsOrganization->OrganizationSmsSenderId;
				$url = $IsOrganization->OrganizationSmsUrl;
				$port = $IsOrganization->OrganizationSmsPort;
				
				$message = urlencode($message);
				$api_url = $url."?username=".urlencode($username)."&password=".urlencode($password)."&sender=". $sender ."&message=". $message."&numbers=".$numbers;
				$ch = curl_init( );
				curl_setopt ( $ch, CURLOPT_URL, $api_url );
				curl_setopt ( $ch, CURLOPT_PORT, $port );
				curl_setopt ( $ch, CURLOPT_POST, 1 );
				curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
				// Allowing cUrl funtions 20 second to execute
				curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
				// Waiting 20 seconds while trying to connect
				curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 20 );
				$response_string = curl_exec( $ch );
				//return $response_string;
				return ['status' => true, 'message' => "sms sent!"];
			}else{
				return ['status' => false, 'message' => "Organization SMS config is off !"];
			}
		}else{
			return ['status' => false, 'message' => "Organization is invalid!"];
		}
		
	}

	public static function SendSms_Get($numbers,$message)
	{
		$SmsWhere = [
			['OrganizationId'		,'=',	session()->get('OrganizationId')],
			['IsOrganizationAllow'	,'=',	1],
			['RecordStatus'			,'!=',	'D'],
		];
		$IsOrganization = self::DB_Select('organization', $SmsWhere);
		if($IsOrganization){
			if ($IsOrganization->OrganizationSms == "1")
			{
				$username = $IsOrganization->OrganizationSmsUsername;
				$password = $IsOrganization->OrganizationSmsPassword;
				$sender = $IsOrganization->OrganizationSmsSenderId;
				$url = $IsOrganization->OrganizationSmsUrl;
				$port = $IsOrganization->OrganizationSmsPort;
				
				$message = urlencode($message);
				$api_url = $url."?username=".urlencode($username)."&password=".urlencode($password)."&sender=". $sender ."&message=". $message."&numbers=".$numbers;
				$ch = curl_init( );
				curl_setopt ( $ch, CURLOPT_URL, $api_url );
				curl_setopt ( $ch, CURLOPT_PORT, $port );
				curl_setopt ( $ch, CURLOPT_POST, 1 );
				curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
				// Allowing cUrl funtions 20 second to execute
				curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
				// Waiting 20 seconds while trying to connect
				curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 20 );
				$response_string = curl_exec( $ch );
				//return $response_string;
				return response()->json(['status' => true, 'message' => "sms sent!"]);
			}else{
				return response()->json(['status' => false, 'message' => "Organization SMS config is off !"]);
			}
		}else{
			return response()->json(['status' => false, 'message' => "Organization is invalid!"]);
		}
		
	}

	public static function SendSms_Post($numbers,$message,$unicode)
	{
		$SmsWhere = [
			['OrganizationId'		,'=',	session()->get('OrganizationId')],
			['IsOrganizationAllow'	,'=',	1],
			['RecordStatus'			,'!=',	'D'],
		];
		$IsOrganization = self::DB_Select('organization', $SmsWhere);
		if($IsOrganization){
			$username = $IsOrganization->OrganizationSmsUsername;
			$password = $IsOrganization->OrganizationSmsPassword;
			$sender = $IsOrganization->OrganizationSmsSenderId;
			$url = $IsOrganization->OrganizationSmsUrl;
			$port = $IsOrganization->OrganizationSmsPort;
			if ($IsOrganization->OrganizationSms == "1")
			{
				$message = urlencode($message);
				$message_ = "?message=". $message."&unicode=".$unicode;
				$PostData=array(
							"username"=>$username,
							"password"=>urlencode($password),
							"sender"=>$sender,
							"numbers"=>($numbers)
							);
				$PostD=http_build_query($PostData);
				$curl = curl_init();
				curl_setopt_array($curl, array(
					CURLOPT_URL => $url.$message_,
					CURLOPT_RETURNTRANSFER => 1,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_POST => 1,
					CURLOPT_PORT => 80,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "POST",
					CURLOPT_POSTFIELDS => $PostD,
					CURLOPT_HTTPHEADER => array(
						"cache-control: no-cache",
						"content-type: application/x-www-form-urlencoded",
					),
				));
				return $response = curl_exec($curl);

			}else{
				return response()->json(['status' => false, 'message' => "Organization SMS config is off !"]);
			}
		}else{
			return response()->json(['status' => false, 'message' => "Organization is invalid!"]);
		}
	}

	
}
