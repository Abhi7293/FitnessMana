<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Validator;
use DB;
use App\Models\CommonModel;
use Laravel\Socialite\Facades\Socialite;
use Session;

class sign_up_ctrl extends Controller
{
    //
    public function fr_sign_up_user(Request $request)
	{
        //echo "<pre>"; print_r($request->input()); die;
		try
		{
            
            DB::beginTransaction();
			date_default_timezone_set('Asia/Kolkata');
            if($request->loginType == 'email'){
                $SignUpWhere = [
                    ["Email"            ,'=',   strtoupper($request->Email)],
                    ["RecordStatus"     ,'!=',  'D'],
                    ["RecordStatus"     ,'!=',  'S'],
                ];
            }else{
                $SignUpWhere = [
                    ["Mobile"			,'=',	strtoupper($request->Phone)],
                    ["RecordStatus"		,'!=',	'D'],
                    ["RecordStatus"		,'!=',	'S'],
    			];
            }
            $IsSignUp = DB::table('login')->where($SignUpWhere)->get("*")->first();

            if(empty($IsSignUp)){
                $ledgerArr = CommonModel::AddSystemField([
                    'ParentLedgerId'    =>  '0',
                    'GroupId'           =>  $request->SignUp_GroupId,
                    'SignUp_GroupId'    =>  $request->SignUp_GroupId,
                    'LedgerName'        =>  strtoupper($request->Name),
                    'CompanyCommission' =>  '0',
                    'AccountStatus'     =>  '1',
                    'IsHide'            =>  '0',
                ]);

                $LedgerId = CommonModel::DB_Save('ledger',$ledgerArr, false);

                $loginArr  =  CommonModel::AddSystemField([
                    'ParentLoginId'     =>   '0',
                    'LedgerId'          =>    $LedgerId,
                    'LoginName'         =>   strtoupper($request->Name),
                    'UserName'          =>   strtoupper(strstr($request->Email, '@', true)),
                    'Password'          =>   MD5(strtoupper($request->Password)),
                    'LoginType'         =>   $request->SignUp_GroupId,
                    'IsMobileVerify'    =>   '0',
                    'IsEmailVerify'     =>   '0',
                    'Country'           =>   '0',
                    'State'             =>   '0',
                    'City'              =>   '0',
                    'Address'           =>   '',
                    'LoginStatus'       =>   '1',
                ]);
                if($request->loginType == 'email'){
                    $loginArr["Email"]      =   strtoupper($request->Email);
                }else{
                    $loginArr["Mobile"]     =   $request->Phone;
                }
                $LoginId = CommonModel::DB_Save('login',$loginArr, false);
                if(!empty($LoginId)){
                    DB::commit();
                    $TempSignUp = [
                        'TempSignUp_status'          	=>   'success',
                        'TempSignUp_message'          	=>   'Successfully Sign Up Please Update Your Profile',
                    ];
                    session()->put($TempSignUp);
                    $login_ctrl = new login_ctrl();
                    $response = $login_ctrl->fr_login_user($request);
                    return redirect()->to('/Profile');
                }else{
                    DB::rollback();
                    $TempSignUp = [
                        'TempSignUp_status'          	=>   'error',
                        'TempSignUp_message'          	=>   'Error in Sign Up Please Try Again',
                    ];
                    session()->put($TempSignUp);
                    return redirect()->to('/signup')->withErrors();
                }
			}else
			{
                DB::rollback();
                $TempSignUp = [
                    'TempSignUp_status'          	=>   'error',
                    'TempSignUp_message'          	=>   'Email Address Already Exist!',
                ];
                session()->put($TempSignUp);
				return redirect()->to('/signup')->withErrors('Email Address Already Exist!');
			}
		}catch(\Exception $e)
		{
            DB::rollback();
		  	return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
		}
	}

    public function google_login(){
        return Socialite::driver('google')->redirect();
    }

    public function google_login_callback(){

        try
        {
            $user = Socialite::driver('google')->user();
            if(!empty($user->id)){
                DB::beginTransaction();
                date_default_timezone_set('Asia/Kolkata');

                $SignUpWhere = [
                    ["Email"            ,'=',   strtoupper($user->email)],
                    ["RecordStatus"     ,'!=',  'D'],
                    ["RecordStatus"     ,'!=',  'S'],
                ];
                $IsSignUp = DB::table('login')->where($SignUpWhere)->get("*")->first();

                if(empty($IsSignUp)){
                    $ledgerArr = CommonModel::AddSystemField([
                        'ParentLedgerId'    =>  '0',
                        'GroupId'           =>  '3',
                        'SignUp_GroupId'    =>  '3',
                        'LedgerName'        =>  strtoupper($user->name),
                        'CompanyCommission' =>  '0',
                        'AccountStatus'     =>  '1',
                        'IsHide'            =>  '0',
                    ]);

                    $LedgerId = CommonModel::DB_Save('ledger',$ledgerArr, false);

                    $loginArr  =  CommonModel::AddSystemField([
                        'ParentLoginId'     =>   '0',
                        'LedgerId'          =>    $LedgerId,
                        'LoginName'         =>   strtoupper($user->name),
                        'UserName'          =>   strtoupper(strstr($user->email, '@', true)),
                        'Google_auth_id'    =>   $user->id,
                        'LoginType'         =>   '3',
                        'Mobile'            =>   '',
                        'IsMobileVerify'    =>   '0',
                        'Email'             =>   $user->email,
                        'IsEmailVerify'     =>   '0',
                        'Country'           =>   '0',
                        'State'             =>   '0',
                        'City'              =>   '0',
                        'Address'           =>   '',
                        'LoginStatus'       =>   '1',
                    ]);


                    $LoginId = CommonModel::DB_Save('login',$loginArr, false);

                    if(empty($LoginId)){
                        DB::rollback();
                        return redirect()->to('/signup')->withErrors();
                    }else{DB::commit();}

                }else if(empty($IsSignUp->Google_auth_id)){
                    $loginArr = [
                        'Google_auth_id'    =>  $user->id,
                    ];
                    $loginIdWhere = [
                        'LoginId'           =>  $IsSignUp->LoginId,
                    ];
                    $LoginId = CommonModel::DB_Update('login', $loginArr, $loginIdWhere, true);

                    if(empty($LoginId)){
                        DB::rollback();
                        return redirect()->to('/signup')->withErrors();
                    }else{DB::commit();}
                }

                $LoginData = [
                    ["Email"            ,'=',   strtoupper($user->email)],
                    ["Google_auth_id"   ,'=',   $user->id],
                    ["RecordStatus"     ,'!=',  'D'],
                ];
                
                $login = DB::table('login')->where($LoginData)->get("*")->first();
                if($login){
                    if($login->LoginStatus==1){
                        $RoleWhere = [
                            ["RoleId"           ,'=',   $login->LoginType],
                            ["IsAllow"          ,'=',   1],
                            ["RecordStatus"     ,'!=',  'D'],
                        ];

                        $Role = DB::table('role')->where($RoleWhere)->get("*")->first();
                        if($Role){
                            $SessionArray = [
                                "LoginId"       =>  $login->LoginId,
                                "LoginName"     =>  $login->LoginName,
                                "UserName"      =>  $login->UserName,
                                "Email"         =>  $login->Email,
                                "Mobile"        =>  $login->Mobile,
                                "LoginType"     =>  $login->LoginType,
                                "RoleId"        =>  $login->LoginType,
                                "LoginPhoto"    =>  $login->LoginPhoto,
                                "Experience"    =>  $login->Experience,
                                "Skills"        =>  $login->Skills,
                                "CategoryId"    =>  $login->CategoryId,
                                "RoleName"      =>  $Role->RoleName,
                                "RoleType"      =>  "USER",
                            ];

                            if($login->LedgerId != 0){
                                $LedgerWhere = [
                                    ["LedgerId"         ,'=',   $login->LedgerId],
                                    ["RecordStatus"     ,'!=',  'D'],
                                ];

                                $Ledger = DB::table('ledger')->where($LedgerWhere)->get("*")->first();
                                if($Ledger){
                                    if($Ledger->IsHide==0){
                                        if($Ledger->AccountStatus==1){
                                            $SessionArray['RoleType']       =   "LEDGER";
                                            $SessionArray['LedgerId']       =   $Ledger->LedgerId;
                                            $SessionArray['ParentLedgerId'] =   $Ledger->ParentLedgerId;
                                            $SessionArray['LedgerName']     =   $Ledger->LedgerName;
                                            $SessionArray['GroupId']        =   $Ledger->GroupId;
                                            session()->put($SessionArray);
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
                                $Url = (session()->get('login_url')=="" ? "home" : session()->get('login_url'));
                                return redirect()->to("admin/".$Url);
                            }
                        }else{
                            return redirect()->to('/')->withErrors('Role has not asigned to this account! Contact with service provider.');
                        }
                    }else                   {
                        return redirect()->to('/')->withErrors('Login has been disabled!');
                    }
                }else{
                    return redirect()->to('/')->withErrors('Please enter valid Username/Password!');
                }
                }else{
                    return redirect()->to('/signup')->withErrors();
                }
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
        }
    }

    public function facebook_login(){
        return Socialite::driver('facebook')->redirect();
    }

    public function facebook_login_callback(){
        // try
        // {
            $user = Socialite::driver('facebook')->user();
            if(!empty($user->id)){
                DB::beginTransaction();
                date_default_timezone_set('Asia/Kolkata');

                $SignUpWhere = [
                    ["Email"            ,'=',   strtoupper($user->email)],
                    ["RecordStatus"     ,'!=',  'D'],
                    ["RecordStatus"     ,'!=',  'S'],
                ];
                $IsSignUp = DB::table('login')->where($SignUpWhere)->get("*")->first();

                if(empty($IsSignUp)){
                    $ledgerArr = CommonModel::AddSystemField([
                        'ParentLedgerId'    =>  '0',
                        'GroupId'           =>  '3',
                        'SignUp_GroupId'    =>  '3',
                        'LedgerName'        =>  strtoupper($user->name),
                        'CompanyCommission' =>  '0',
                        'AccountStatus'     =>  '1',
                        'IsHide'            =>  '0',
                    ]);

                    $LedgerId = CommonModel::DB_Save('ledger',$ledgerArr, false);

                    $loginArr  =  CommonModel::AddSystemField([
                        'ParentLoginId'     =>   '0',
                        'LedgerId'          =>    $LedgerId,
                        'LoginName'         =>   strtoupper($user->name),
                        'UserName'          =>   strtoupper(strstr($user->email, '@', true)),
                        'Facebook_auth_id'  =>   $user->id,
                        'LoginType'         =>   '3',
                        'Mobile'            =>   '',
                        'IsMobileVerify'    =>   '0',
                        'Email'             =>   $user->email,
                        'IsEmailVerify'     =>   '0',
                        'Country'           =>   '0',
                        'State'             =>   '0',
                        'City'              =>   '0',
                        'Address'           =>   '',
                        'LoginStatus'       =>   '1',
                    ]);


                    $LoginId = CommonModel::DB_Save('login',$loginArr, false);

                    if(empty($LoginId)){
                        DB::rollback();
                        return redirect()->to('/signup')->withErrors();
                    }else{DB::commit();}

                }else if(empty($IsSignUp->Facebook_auth_id)){
                    $loginArr = [
                        'Facebook_auth_id'      =>  $user->id,
                    ];
                    $loginIdWhere = [
                        'LoginId'               =>  $IsSignUp->LoginId,
                    ];
          
                    $LoginId = CommonModel::DB_Update('login', $loginArr, $loginIdWhere, true);
                    if(empty($LoginId)){
                        DB::rollback();
                        return redirect()->to('/signup')->withErrors();
                    }else{DB::commit();}
                }

                $LoginData = [
                    ["Email"                ,'=',   strtoupper($user->email)],
                    ["Facebook_auth_id"     ,'=',   $user->id],
                    ["RecordStatus"         ,'!=',  'D'],
                ];
                
                $login = DB::table('login')->where($LoginData)->get("*")->first();
                if($login){
                    if($login->LoginStatus==1){
                        $RoleWhere = [
                            ["RoleId"           ,'=',   $login->LoginType],
                            ["IsAllow"          ,'=',   1],
                            ["RecordStatus"     ,'!=',  'D'],
                        ];

                        $Role = DB::table('role')->where($RoleWhere)->get("*")->first();
                        if($Role){
                            $SessionArray = [
                                "LoginId"       =>  $login->LoginId,
                                "LoginName"     =>  $login->LoginName,
                                "UserName"      =>  $login->UserName,
                                "Email"         =>  $login->Email,
                                "Mobile"        =>  $login->Mobile,
                                "LoginType"     =>  $login->LoginType,
                                "RoleId"        =>  $login->LoginType,
                                "LoginPhoto"    =>  $login->LoginPhoto,
                                "Experience"    =>  $login->Experience,
                                "Skills"        =>  $login->Skills,
                                "CategoryId"    =>  $login->CategoryId,
                                "RoleName"      =>  $Role->RoleName,
                                "RoleType"      =>  "USER",
                            ];

                            if($login->LedgerId != 0){
                                $LedgerWhere = [
                                    ["LedgerId"         ,'=',   $login->LedgerId],
                                    ["RecordStatus"     ,'!=',  'D'],
                                ];

                                $Ledger = DB::table('ledger')->where($LedgerWhere)->get("*")->first();
                                if($Ledger){
                                    if($Ledger->IsHide==0){
                                        if($Ledger->AccountStatus==1){
                                            $SessionArray['RoleType']       =   "LEDGER";
                                            $SessionArray['LedgerId']       =   $Ledger->LedgerId;
                                            $SessionArray['ParentLedgerId'] =   $Ledger->ParentLedgerId;
                                            $SessionArray['LedgerName']     =   $Ledger->LedgerName;
                                            $SessionArray['GroupId']        =   $Ledger->GroupId;
                                            session()->put($SessionArray);
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
                                $Url = (session()->get('login_url')=="" ? "home" : session()->get('login_url'));
                                return redirect()->to("admin/".$Url);
                            }
                        }else{
                            return redirect()->to('/')->withErrors('Role has not asigned to this account! Contact with service provider.');
                        }
                    }else                   {
                        return redirect()->to('/')->withErrors('Login has been disabled!');
                    }
                }else{
                    return redirect()->to('/')->withErrors('Please enter valid Username/Password!');
                }
                }else{
                    return redirect()->to('/signup')->withErrors();
                }
        // }catch(\Exception $e){
        //     DB::rollback();
        //     return redirect()->to('/signup')->withErrors(['catch_exception'=>$e->getMessage()]);
        // }
    }
}
