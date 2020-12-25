<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Validator;
use DB;
use App\Models\CommonModel;
use Session;


class login_ctrl extends Controller
{
	//public String $RoutePrefix = "";
	public function __construct()
    {
		//'/' = CommonModel::getRoutePrefix('');
	}
		
    public function login_user(Request $request)
	{

		try
		{
			
			date_default_timezone_set('Asia/Kolkata');

			$this->validate($request, [
				"login_username"	=> 'required',
				"login_password"	=> 'required|min:3',
			]);
		
			$Password = MD5(strtoupper($request->login_password));
			$LoginData = [
				["UserName"			,'=',	strtoupper($request->login_username)],
				["Password"			,'=',	$Password],
				["RecordStatus"		,'!=',	'D'],
			];
			
			$login = DB::table('login')->where($LoginData)->get("*")->first();
			if($login){
			
				if($login->LoginStatus==1){
					if($login->Password==$Password){
						
								$RoleWhere = [
									["RoleId"	,'=',	$login->LoginType],
									["IsAllow"	,'=',	1],
									["RecordStatus"		,'!=',	'D'],
								];
								$Role = DB::table('role')->where($RoleWhere)->get("*")->first();
								if($Role){
									$SessionArray = [
										"LoginId"	=>	$login->LoginId,
										"LoginName"	=>	$login->LoginName,
										"UserName"	=>	$login->UserName,
										"LoginType"	=>	$login->LoginType,
										"RoleId"	=>	$login->LoginType,
										"Mobile"	=>	$login->Mobile,
										"RoleName"	=>	$Role->RoleName,
										"RoleType"	=>	"USER",
									];
									if($login->LedgerId != 0){
										$LedgerWhere = [
											["LedgerId"	,'=',	$login->LedgerId],
											["RecordStatus"		,'!=',	'D'],
										];
										$Ledger = DB::table('ledger')->where($LedgerWhere)->get("*")->first();
										if($Ledger){
											if($Ledger->IsHide==0){
												if($Ledger->AccountStatus==1){
													$SessionArray['RoleType'] = "LEDGER";
													$SessionArray['LedgerId'] = $Ledger->LedgerId;
													$SessionArray['ParentLedgerId'] = $Ledger->ParentLedgerId;
													$SessionArray['LedgerName'] = $Ledger->LedgerName;
													$SessionArray['GroupId'] = $Ledger->GroupId;
													session()->put($SessionArray);
													//CommonModel::System_Logs("Ledger Login Successfully!", 'login', 'LoginId', $login->LoginId);
													return redirect()->to('home');
												}else{
													return redirect()->to('/')->withErrors('Account has been temporarily disabled!');
												}
											}else{
												return redirect()->to('/')->withErrors('Account has been permanently disabled!');
											}
										}else{
											return redirect()->to('/')->withErrors('Ledger not exist!');
										}
									}else{
										session()->put($SessionArray);
										//CommonModel::System_Logs("User Without Ledger has been Login Successfully!", 'login', 'LoginId', $login->LoginId);
										$Url = (session()->get('login_url')=="" ? "home" : session()->get('login_url'));
										return redirect()->to("admin/".$Url);
									}
								}else{
									return redirect()->to('/')->withErrors('Role has not asigned to this account! Contact with service provider.');
								}
					
					
					}else
					{
						return redirect()->to('/')->withErrors('Fuck You ! Wrong Way!');
					}
				}else
				{
					return redirect()->to('/')->withErrors('Login has been disabled!');
				}
			}else
			{
				return redirect()->to('/')->withErrors('Please enter valid Username/Password!');
			}
		}catch(\Exception $e)
		{
			return redirect()->to('/')->withErrors(['catch_exception'=>$e->getMessage()]);
		}
	}

	public function fr_login_user(Request $request){
		//echo "<pre>"; print_r($request->input());
		try
		{
			date_default_timezone_set('Asia/Kolkata');

			
		
			$Password = MD5(strtoupper($request->Password));
			if($request->loginType == 'email'){
                $LoginData = [
					["Email"			,'=',	strtoupper($request->Email)],
					["Password"			,'=',	$Password],
					["RecordStatus"		,'!=',	'D'],
				];
            }else{
                $LoginData = [
					["Mobile"			,'=',	$request->Phone],
					["Password"			,'=',	$Password],
					["RecordStatus"		,'!=',	'D'],
				];
            }
			
			$login = DB::table('login')->where($LoginData)->get("*")->first();
			//print_r($login); die;
			if($login){
				if($login->LoginStatus==1){
					if($login->Password==$Password){
						$RoleWhere = [
							["RoleId"	,'=',	$login->LoginType],
							["IsAllow"	,'=',	1],
							["RecordStatus"		,'!=',	'D'],
						];
						$Role = DB::table('role')->where($RoleWhere)->get("*")->first();
						if($Role){
							$SessionArray = [
								"LoginId"		=>	$login->LoginId,
								"LoginName"		=>	$login->LoginName,
								"UserName"		=>	$login->UserName,
								"Email"			=>	$login->Email,
								"Mobile"		=>	$login->Mobile,
								"LoginType"		=>	$login->LoginType,
								"RoleId"		=>	$login->LoginType,
								"LoginPhoto"	=>	$login->LoginPhoto,
								"Experience"	=>	$login->Experience,
								"Skills"		=>	$login->Skills,
								"CategoryId"	=>	$login->CategoryId,
								"RoleName"		=>	$Role->RoleName,
								"RoleType"		=>	"USER",
							];
							if($login->LedgerId != 0){
								$LedgerWhere = [
									["LedgerId"	,'=',	$login->LedgerId],
									["RecordStatus"		,'!=',	'D'],
								];
								$Ledger = DB::table('ledger')->where($LedgerWhere)->get("*")->first();
								if($Ledger){
									if($Ledger->IsHide==0){
										if($Ledger->AccountStatus==1){
											$SessionArray['RoleType'] = "LEDGER";
											$SessionArray['LedgerId'] = $Ledger->LedgerId;
											$SessionArray['ParentLedgerId'] = $Ledger->ParentLedgerId;
											$SessionArray['LedgerName'] = $Ledger->LedgerName;
											$SessionArray['GroupId'] = $Ledger->GroupId;
											session()->put($SessionArray);
											//CommonModel::System_Logs("Ledger Login Successfully!", 'login', 'LoginId', $login->LoginId); 
											Session::flash('status', 'true');
											Session::flash('message', 'Login Successfully'); 
											return redirect()->to('home');
										}else{
											Session::flash('status', 'false');
											Session::flash('message', 'Account has been temporarily disabled!'); 
											return redirect()->to('/')->withErrors('Account has been temporarily disabled!');
										}
									}else{
										Session::flash('status', 'false');
										Session::flash('message', 'Account has been permanently disabled!'); 
										return redirect()->to('/')->withErrors('Account has been permanently disabled!');
									}
								}else{
									Session::flash('status', 'false');
									Session::flash('message', 'Ledger not exist!'); 
									return redirect()->to('/')->withErrors('Ledger not exist!');
								}
							}else{
								Session::flash('status', 'ture');
								Session::flash('message', 'User Without Ledger has been Login Successfully!'); 
								session()->put($SessionArray);
								//CommonModel::System_Logs("User Without Ledger has been Login Successfully!", 'login', 'LoginId', $login->LoginId);
								$Url = (session()->get('login_url')=="" ? "home" : session()->get('login_url'));
								return redirect()->to("admin/".$Url);
							}
						}else{
							Session::flash('status', 'false');
							Session::flash('message', 'Role has not asigned to this account! Contact with service provider.'); 
							return redirect()->to('/')->withErrors('Role has not asigned to this account! Contact with service provider.');
						}
					}else{
						Session::flash('status', 'false');
						Session::flash('message', 'Wrong Way!'); 
						return redirect()->to('/')->withErrors('Wrong Way!');
					}
				}else{
					Session::flash('status', 'false');
					Session::flash('message', 'Login has been disabled!'); 
					return redirect()->to('/')->withErrors('Login has been disabled!');
				}
			}else{
				Session::flash('status', 'false');
				Session::flash('message', 'Please enter valid Username/Password!'); 
				return redirect()->to('/')->withErrors('Please enter valid Username/Password!');
			}
		}catch(\Exception $e){
			Session::flash('status', 'false');
			Session::flash('message', 'Error in Login'); 
			return redirect()->to('/')->withErrors(['catch_exception'=>$e->getMessage()]);
		}
	}

	public function becomeAnIsntructor(Request $request){
		try{
			date_default_timezone_set('Asia/Kolkata');
				DB::beginTransaction();
				$ledgerArr = [
					'GroupId'          	=>   '2',
				];
				$LedgerIdWhere = [
					'LedgerId'			=>	session()->get('LedgerId'),
				];
				$LedgerId = CommonModel::DB_Update('ledger', $ledgerArr, $LedgerIdWhere, true);
				
				$loginArr = [
					'LoginType'			=>	'2',
				];
				$loginIdWhere = [
					'LoginId'			=>	session()->get('LoginId'),
				];
				$LoginId = CommonModel::DB_Update('login', $loginArr, $loginIdWhere, true);

				if(!empty($LoginId)){
					DB::commit();
					session()->put($ledgerArr);
					$TempInstructor = [
                        'TempInstructor_status'          	=>   'success',
                        'TempInstructor_message'          	=>   'Now you are Fitness Instructor!',
                    ];
                    session()->put($loginArr);
                    return true;
				}else{
					DB::rollback();
					$TempInstructor = [
                        'TempInstructor_status'          	=>   'error',
                        'TempInstructor_message'          	=>   'Error in Adding Fitness Instructor!',
                    ];
                    return false;
				}

		}catch(\Exception $e)
		{
			return redirect()->to('/')->withErrors(['catch_exception'=>$e->getMessage()]);
		}
	}

	public function ajax_updateInstructorProfile_fr(Request $request){
		try{

			date_default_timezone_set('Asia/Kolkata');
			DB::beginTransaction();
			$loginArr = [
				'Skills'			=>	$request->Skills,
				'Experience'		=>	$request->Experience,
				'CategoryId'		=>	json_encode($request->CategoryId),
			];
			if(!empty($request->ProfileImage)){
                $profilePhoto = CommonModel::Base64ToImage($request->ProfileImage);
                $loginArr['LoginPhoto'] =   $profilePhoto;
            }
			$loginIdWhere = [
				'LoginId'			=>	session()->get('LoginId'),
			];
			$LoginId = CommonModel::DB_Update('login', $loginArr, $loginIdWhere, true);

			if(!empty($LoginId)){
				DB::commit();
				$TempInstructor = [
                    'TempInstructor_Profile_status'          	=>   'success',
                    'TempInstructor_Profile_message'          	=>   'Instructor Profile Successfully Updated!',
                ];
                session()->put($loginArr);
                return response()->json(['status' => true, 'message' => "Instructor Profile Successfully Updated!!", 'data' => $LoginId]);
			}else{
				DB::rollback();
				$TempInstructor = [
                    'TempInstructor_status'          	=>   'error',
                    'TempInstructor_message'          	=>   'Error in Updating Instructor Profile!',
                ];
                return response()->json(['status' => false, 'message' => "Error in Updating Instructor Profile!"]);
			}
		}catch(\Exception $e){
			return redirect()->to('/')->withErrors(['catch_exception'=>$e->getMessage()]);
		}
	}

	
}
