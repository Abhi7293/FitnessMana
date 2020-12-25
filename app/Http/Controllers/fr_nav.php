<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonModel;
use DB;

class fr_nav extends Controller{
	//public String $RoutePrefix = "";

	public function __construct(){
		//$this->RoutePrefix = CommonModel::getRoutePrefix('admin');
		config(['session.same_site' => null]);
	}
	
	// Login

    public function login(Request $request){
		$data = [];
		$data['title'] = (session()->exists('LoginId')==true ? "home" : "Login") ;
		$data['Type'] = CommonModel::CommonEnum();
		if(!session()->exists('LoginId')){
			return $this->navPage($request->segment(1),$data);
		}else{
			return redirect()->to('home');
		}
	}

	// Logout

    public function logout(Request $request){
		if(session()->exists('LoginId')){
			//CommonModel::System_Logs("Logout successfully!", 'login', 'LoginId', session()->get('LoginId'));
		}
		session()->flush();
		return redirect()->to('/');
	}
	
	// SignUp

	public function signup(Request $request){
		$data = [];
		$data['title'] = "SignUp";
		$data['Type'] = CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// SubscribProcess

	public function SubscribProcess(Request $request){
		$data 						= 	[];
		$data['title'] 				= 	"Payment";
		if(empty(session()->get("LedgerId"))){
			return redirect()->to('login');
		}
		$payment_ctrl 				= 	new payment_ctrl();
		$returnData					= 	$payment_ctrl->getBooking($request);
		if($returnData['status'] == "redirect"){
			return redirect()->to($returnData['redirect']);
		}
		$data['meetingBookingData']	=	$returnData['data'];
		$data['Type'] 				= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// SubscribeCancel

	public function SubscribeCancel(Request $request){
       	$data 						= 	[];
		$data['title'] 				= 	"Cancel Booking Class";
		if(empty(session()->get("LedgerId"))){
			return redirect()->to('login');
		}
		$payment_ctrl 				= 	new payment_ctrl();
		$returnData					= 	$payment_ctrl->classPaymentCancel($request);
		if($returnData['status'] == "redirect"){
			return redirect()->to($returnData['redirect']);
		}
		$data['meetingBookingData']	=	$returnData['data'];
		$data['Type'] 				= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// SubscribeResponse

	public function SubscribeResponse(Request $request){
		$payment_ctrl 				= 	new payment_ctrl();
		$returnData					= 	$payment_ctrl->classPayment($request);
		if($returnData['status'] == "redirect"){
			return redirect()->to($returnData['redirect']);
		}
		$data = [];
		$data['title'] = "Subscribe Response";
		$data['Type'] = CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// AddClass

	public function addClass(Request $request){
		$data = [];
		if(empty(session()->get('CategoryId')) || empty(session()->get('Skills')) || empty(session()->get('LoginPhoto')) || empty(session()->get('Experience'))){
			$segment						=	'becomeAnIsntructor';
			$data['Please_update_Profile']	=	'Please Update Your Profile to add Class';
		}else{
			$segment						=	'addClass';
		}
		$data['title'] 						= 	"AddClass" ;
		$data['Type'] 						= 	CommonModel::CommonEnum();
		return $this->navPage($segment,$data);
	}

	// physical Home Page

	public function Physical(Request $request, $subCategory=null){
		$data = [];
		$data['title'] 		= 	"Physical";
		$home_ctrl 			= 	new home_ctrl();
		$data['Physical']	= 	$home_ctrl->physical($request, $subCategory);
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// Mental Home Page

	public function Mental(Request $request, $subCategory=null){
		$data = [];
		$data['title'] 		= 	"Mental";
		$home_ctrl 			= 	new home_ctrl();
		$data['Mental']		= 	$home_ctrl->mental($request, $subCategory);
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// Emotional Home Page

	public function Emotional(Request $request, $subCategory=null){
		$data = [];
		$data['title'] 		= 	"Emotional";
		$home_ctrl 			= 	new home_ctrl();
		$data['Emotional']	= 	$home_ctrl->emotional($request, $subCategory);
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// Class
	public function class(Request $request){
		$data = [];
		$data['title'] 		= 	"Class";
		$class_ctrl 		= 	new class_ctrl();
		$data['Meeting']	= 	$class_ctrl->class($request);
		if(empty($data['Meeting'])){
			return redirect()->to('home');
		}
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}


	// Class Booking
	public function bookingClasses(Request $request){
		$data 						= 	[];
		$data['title'] 				= 	"Booking Class";
		if(empty(session()->get("LedgerId"))){
			return redirect()->to('login');
		}
		$class_ctrl 				= 	new class_ctrl();
		$returnData					= 	$class_ctrl->bookingClasses($request);
		if($returnData['status'] == "redirect"){
			return redirect()->to($returnData['redirect']);
		}
		// $data['meetingBookingData']	=	$returnData['data'];
		// $data['Type'] 				= 	CommonModel::CommonEnum();
		// return $this->navPage($request->segment(1),$data);
	}

	// Checkout
	public function Checkout(Request $request){
		$data 			= 	[];
		$data['title']	= 	"Checkout";
		if(empty(session()->get("LedgerId"))){
			return redirect()->to('login');
		}
		$data['Type'] 	= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// Class Payment
	public function classPayment(Request $request){
		$data 						= 	[];
		$data['title'] 				= 	"Booking Class";
		if(empty(session()->get("LedgerId"))){
			return redirect()->to('login');
		}
		$payment_ctrl 				= 	new payment_ctrl();
		$returnData					= 	$payment_ctrl->classPayment($request);
		if($returnData['status'] == "redirect"){
			return redirect()->to($returnData['redirect']);
		}
		$data['meetingBookingData']	=	$returnData['data'];
		$data['Type'] 				= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}


	// Become Instructor
	public function becomeAnIsntructor(Request $request){
		$data 				= 	[];
		$data['title'] 		= 	"Update Instructor Profile";
		if(session()->get('LoginType') == 3){
			$login_ctrl 	= 	new login_ctrl();
			$login_ctrl->becomeAnIsntructor($request);
		}
		$data['redirectUrl']=	'addClass';
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// Update Instructor Profile
	public function updateInstructorProfile(Request $request){
		$data 				= 	[];
		$data['title'] 		= 	"Update Instructor Profile";
		$data['redirectUrl']=	'Profile';
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// Update User and Instructor Profile

	public function updateProfile(Request $request){
		$data = [];
		$data['title'] = "UpdateProfile";
		$data['Type'] = CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// User and Instructor Private Profile

	public function Profile(Request $request){
		$data 					= 	[];
		$data['title'] 			= 	"Profile";
		$profile_ctrl 			= 	new profile_ctrl();
		$data['profileData']	= 	$profile_ctrl->profile($request);
		$data['Type'] 			= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// Instructor Public Profile

	public function instructorProfile(Request $request){
		$data 				= 	[];
		$data['title'] 		= 	"Profile";
		$profile_ctrl 		= 	new profile_ctrl();
		$data['Instructor'] = 	$profile_ctrl->instructorProfile($request);
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	//add Rating and Review

	public function rating(Request $request){
		$data 				= 	[];
		if(empty($request->l)){
			return redirect()->to('home');
		}
		$data['title'] 		= 	"Rating";
		$rating_ctrl 		= 	new rating_ctrl();
		$returnData			= 	$rating_ctrl->rating($request);
		if($returnData['status'] == "redirect"){
			return redirect()->to($returnData['redirect']);
		}
		$data['rating']		=	$returnData;
		$data['Type'] 		= 	CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}

	// home

	public function home(Request $request){
		$data = [];
		$data['title'] = "home" ;
		$data['Type'] = CommonModel::CommonEnum();
		return $this->navPage($request->segment(1),$data);
	}
	

	public function categories(Request $request){
		$data = [];
		$data['title'] = "Categories";
		$data['Type'] = CommonModel::CommonEnum();
		return $this->navPage($request->segment(2),$data);
	}


########################################## nav page function  ################################################
	protected function navPage($method, $data){
		$ViewData = "";
		date_default_timezone_set('Asia/Kolkata');
		$data['nav'] = $method;
		if(session()->exists('LoginId')){
			
			$data['Page_IsOption'] = 1;
			$data['Page_Add'] = 1;
			$data['Page_Edit'] = 1;
			$data['Page_Delete'] = 1;
			$data['Page_Export'] = 1;
			$data['Page_ViewType'] = 1;
			/*
			$IsPageAllow = [];
			if($method!="home" && $method!=""){
				BackToPagePermission:
				$IsPageAllow = CommonModel::IsPageAllow($method);
				if($IsPageAllow){
					//$this->setMenuToPage($method, $IsPageAllow);
					if($IsPageAllow->IsPageAllow=="0"){
						CommonModel::System_Logs("Access Denied ! Try to open page: ". $method, 'role_permission', 'RolePermissionId', 	$IsPageAllow->RolePermissionId);
						return redirect()->to('/home');
					}else{
						$data['Page_IsOption'] = $IsPageAllow->IsOption;
						$data['Page_Add'] = $IsPageAllow->IsOption == 0 ? 0 : $IsPageAllow->Add;
						$data['Page_Edit'] = $IsPageAllow->IsOption == 0 ? 0 : $IsPageAllow->Edit;
						$data['Page_Delete'] = $IsPageAllow->IsOption == 0 ? 0 : $IsPageAllow->Delete;
						$data['Page_Export'] = $IsPageAllow->IsOption == 0 ? 0 : $IsPageAllow->Export;
						$data['Page_ViewType'] = $IsPageAllow->IsOption == 0 ? 0 : $IsPageAllow->ViewType;
					}
				}else{
					$this->setPermission($method, $data);
					goto BackToPagePermission;
				}
			}
			
			
			$Where = [
				['RecordStatus'		,'!=',	'D'],
			];
			$data['SetOrganizations'] = CommonModel::DB_SelectAll('organization', $Where);

			$Where = [
				['OrganizationId'	,'=',	session()->get('OrganizationId')],
				['RecordStatus'		,'!=',	'D'],
			];
			$data['CurrentOrganization'] = CommonModel::DB_Select('organization', $Where);

			$this->PageTitleUpdate($method, $data);
			*/
			
			
			//$data['MainMenu'] = $this->createMainMenu();
			//$ViewData = $this->setHeader(false, false, 'script.common_function', $data);
			switch($method){
				
				//Add Class
				case 'addClass':
					$ViewData .= $this->setHeader(true, true, 'class.addClass', $data); 
					$ViewData .= $this->setHeader(false, false, 'class.addClass_script', $data); 
					break;

				//View Class
				case 'class':
					$ViewData .= $this->setHeader(true, true, 'class.class', $data); 
					$ViewData .= $this->setHeader(false, false, 'class.class_script', $data); 
					break;


				// Meeting Booking	
				case 'bookingClasses':
					$ViewData .= $this->setHeader(true, true, 'class.bookClass', $data); 
					$ViewData .= $this->setHeader(false, false, 'class.bookClass_script', $data); 
					break;

				// Checkout Page
				case 'Checkout':
					$ViewData .= $this->setHeader(true, true, 'payment.checkout', $data); 
					$ViewData .= $this->setHeader(false, false, 'payment.checkout_script', $data); 
					break;

				// Update Profile
				case 'updateProfile':
					$ViewData .= $this->setHeader(true, true, 'profile.updateProfile', $data); 
					$ViewData .= $this->setHeader(false, false, 'profile.updateProfile_script', $data); 
					break;

					// Update Instructor Profile
				case 'updateInstructorProfile':
					$ViewData .= $this->setHeader(true, true, 'profile.updateInstructorProfile', $data); 
					$ViewData .= $this->setHeader(false, false, 'profile.updateInstructorProfile_script', $data); 
					break;

				// User and Instructor Private Profile
				case 'Profile':
					$ViewData .= $this->setHeader(true, true, 'profile.profile', $data); 
					$ViewData .= $this->setHeader(false, false, 'profile.profile_script', $data); 
					break;

				// Instructor Public Profile
				case 'instructorProfile':
					$ViewData .= $this->setHeader(true, true, 'profile.instructorProfile', $data); 
					$ViewData .= $this->setHeader(false, false, 'profile.instructorProfile_script', $data); 
					break;

				// Instructor Public Profile
				case 'becomeAnIsntructor':
					$ViewData .= $this->setHeader(true, true, 'profile.updateInstructorProfile', $data); 
					$ViewData .= $this->setHeader(false, false, 'profile.updateInstructorProfile_script', $data); 
					break;

				// Rating and Review
				case 'rating':
					$ViewData .= $this->setHeader(true, true, 'rating.ratingReview', $data); 
					$ViewData .= $this->setHeader(false, false, 'rating.ratingReview_script', $data); 
					break;

				// Rating and Review
				case 'SubscribProcess':
					$ViewData .= $this->setHeader(false, false, 'payment.payumoney', $data); 
					//$ViewData .= $this->setHeader(false, false, 'rating.ratingReview_script', $data); 
					break;

				// Physical Home Page
				case 'Physical':
					$ViewData .= $this->setHeader(true, true, 'home.physical', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.physical_script', $data); 
					break;

				// Mental Home Page
				case 'Mental':
					$ViewData .= $this->setHeader(true, true, 'home.mental', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.mental_script', $data); 
					break;

				// Emotional Home Page
				case 'Emotional':
					$ViewData .= $this->setHeader(true, true, 'home.emotional', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.emotional_script', $data); 
					break;

				// home
				case 'home':
					$ViewData .= $this->setHeader(true, true, 'home.home', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.home_script', $data); 
					break;
		

				default:
					return redirect()->to('home');
					break;
			}
			
		}else{
			
			
			switch($method)	{

				// home
				case 'home':
					$ViewData .= $this->setHeader(true, true, 'home.home', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.home_script', $data); 
					break;
				
				// Login
				case '':
					$ViewData .= $this->setHeader(true, true, 'home.home', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.home_script', $data); 
					break;
				case 'login':
					$ViewData .= $this->setHeader(true, true, 'login.login', $data);
					$ViewData .= $this->setHeader(false, false, 'login.login_script', $data); 
					break;

				// signup
				case 'signup':
					$ViewData .= $this->setHeader(true, true, 'signup.signup', $data); 
					$ViewData .= $this->setHeader(false, false, 'signup.signup_script', $data); 
					break;

				//View Class
				case 'class':
					$ViewData .= $this->setHeader(true, true, 'class.class', $data); 
					$ViewData .= $this->setHeader(false, false, 'class.class_script', $data); 
					break;

				// Instructor Public Profile
				case 'instructorProfile':
					$ViewData .= $this->setHeader(true, true, 'profile.instructorProfile', $data); 
					$ViewData .= $this->setHeader(false, false, 'profile.instructorProfile_script', $data); 
					break;

				// Rating and Review
				case 'rating':
					$ViewData .= $this->setHeader(true, true, 'rating.ratingReview', $data); 
					$ViewData .= $this->setHeader(false, false, 'rating.ratingReview_script', $data); 
					break;

				// Physical Home Page
				case 'Physical':
					$ViewData .= $this->setHeader(true, true, 'home.physical', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.physical_script', $data); 
					break;

				// Mental Home Page
				case 'Mental':
					$ViewData .= $this->setHeader(true, true, 'home.mental', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.mental_script', $data); 
					break;

				// Emotional Home Page
				case 'Emotional':
					$ViewData .= $this->setHeader(true, true, 'home.emotional', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.emotional_script', $data); 
					break;

				case 'announcment':
					$ViewData = $this->setHeader(false, false, 'announcment.announcment', $data); 
					break;

				default:	
					$ViewData .= $this->setHeader(true, true, 'home.home', $data); 
					$ViewData .= $this->setHeader(false, false, 'home.home_script', $data); 
					break;	
			}
		}
		return $ViewData;
	}
	
	protected function setHeader($IsHeaderFooter, $IsNavigation, $Page, $data)
	{
		$ViewPage = "";
		$Version="frontend";
		if($IsHeaderFooter){
			if($IsNavigation){
				$ViewPage = view($Version.'.header', $data); 
			}else{
				$ViewPage = view($Version.'.header', $data); 
			}
		}
		$ViewPage .= view($Version.'.'.$Page, $data); 
		if($IsHeaderFooter){
			$ViewPage .= view($Version.'.footer', $data); 
		}
		return $ViewPage;
	}


	protected function setPermission($Page, $data)
	{
		$RoleWhere = [
			['RecordStatus'		,'!=',	'D'],
		];
		$Roles = CommonModel::DB_SelectAll('sys_role', $RoleWhere);
		foreach($Roles as $Role){
			$PermissionWhere = [
				['RoleId'			,'=',	$Role->RoleId],
				['Page'				,'=',	$Page],
				['RecordStatus'		,'!=',	'D'],
			];
			$IsPermission = CommonModel::DB_Select('sys_role_permission', $PermissionWhere);
			if(!$IsPermission){
				$PermissionArr = [
					'OrganizationId'	=>	1001,
					'RoleId'			=>	$Role->RoleId,
					'MenuId'			=>	0,
					'Title'				=>	$data['title'],
					'Page'				=>	$Page,
					'IsPageAllow'		=>	'0',
					'IsOption'			=>	'0',
					'Add'				=>	'0',
					'Edit'				=>	'0',
					'Delete'			=>	'0',
					'Export'			=>	'0',
					'ViewType'			=>	'ALL',	
				];
				CommonModel::DB_Save('sys_role_permission', $PermissionArr, true);
			}else{
				$Arr = [
					'Title'			=>	$data['title'],
				];
				$response = CommonModel::DB_Update('sys_role_permission', $Arr, $PermissionWhere, true);
			}
		}

		$OrgWhere = [
			['RecordStatus'		,'!=',	'D'],
		];
		$Organizations = CommonModel::DB_SelectAll('organization', $OrgWhere);
		foreach($Organizations as $Organization)
		{
			$RoleWhere = [
				['OrganizationId'	,'=',	$Organization->OrganizationId],
				['RecordStatus'		,'!=',	'D'],
			];
			$Roles = CommonModel::DB_SelectAll('role', $RoleWhere);
			foreach($Roles as $Role){
				$PermissionWhere = [
					['OrganizationId'	,'=',	$Organization->OrganizationId],
					['RoleId'			,'=',	$Role->RoleId],
					['Page'				,'=',	$Page],
					['RecordStatus'		,'!=',	'D'],
				];
				$IsPermission = CommonModel::DB_Select('role_permission', $PermissionWhere);
				if(!$IsPermission){
					$RoleStatus = "0";
					if($Role->RoleId==1 || $Role->RoleId==2){
						$RoleStatus = "1";
					}
					$PermissionArr = [
						'OrganizationId'	=>	$Organization->OrganizationId,
						'RoleId'			=>	$Role->RoleId,
						'MenuId'			=>	0,
						'Title'				=>	$data['title'],
						'Page'				=>	$Page,
						'IsPageAllow'		=>	$RoleStatus,
						'IsOption'			=>	$RoleStatus,
						'Add'				=>	$RoleStatus,
						'Edit'				=>	$RoleStatus,
						'Delete'			=>	$RoleStatus,
						'Export'			=>	$RoleStatus,
						'ViewType'			=>	'ALL',	
					];
					CommonModel::DB_Save('role_permission', $PermissionArr, true);
				}else{
					$Arr = [
						'Title'			=>	$data['title'],
					];
					$response = CommonModel::DB_Update('role_permission', $Arr, $PermissionWhere, true);
				}
			}
		}
	}
	
	protected function PageTitleUpdate($Page, $data)
	{
		$PermissionWhere = [
			['OrganizationId'	,'=',	session()->get('OrganizationId')],
			['RoleId'			,'=',	session()->get('RoleId')],
			['Page'				,'=',	$Page],
			['RecordStatus'		,'!=',	'D'],
		];
		$IsPermission = CommonModel::DB_Select('role_permission', $PermissionWhere);
		if($IsPermission){
			$Arr = [
				'Title'			=>	$data['title'],
			];
			$response = CommonModel::DB_Update('role_permission', $Arr, $PermissionWhere, true);
		}
	}
	

	protected function setMenuToPage($Page, $IsPage)
	{
		$Where = [
			['OrganizationId'	,'=',	session()->get('OrganizationId')],
			['RoleId'			,'=',	$IsPage->RoleId],
			['Page'				,'=',	$Page],
			['RecordStatus'		,'!=',	'D'],
		];
		$Arr = [
			'MenuId'		=>	$IsPage->MenuId,
		];
		$response = CommonModel::DB_Update('role_permission', $Arr, $Where, true);
	}


	protected function createMainMenu()
	{
		$PageCount = 0;
		$MenuString = '';
		$Where = [
			['RecordStatus'		,'!=',	'D'],
		];
		$Menus = CommonModel::DB_SelectAll('sys_menu', $Where);
		foreach($Menus as $Menu){
			
			$Pages = DB::select('call config_menu_role_permission_of_organization(?,?,?)',array(session()->get('OrganizationId'),session()->get('RoleId'), $Menu->MenuId));
		
			$PagesIsAllowCount = 0;
			foreach($Pages as $Page){
				if($Page->IsPageAllow==1)
				{
					$PagesIsAllowCount ++;
				}
			}
			if($PagesIsAllowCount > 0){
					//print_r($Pages);
				$MenuString .= '<li class="nav-item dropdown">';
				$MenuString .= '<a class="nav-link dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$Menu->Menu.'</a>';
				$PageIndex = 0;
				foreach($Pages as $Page){
					if($Page->IsPageAllow==1){
						if($PageIndex==0){
							$MenuString .= '<ul class="dropdown-menu" aria-labelledby="doctoRs">';
						}
						$MenuString .= '<li><a class="dropdown-item" href="/'.$Page->Page.'">'.$Page->Title.'</a></li>';
						if($PageIndex==0){
							
						}
						$PageIndex++;
						$PageCount++;
					}
				}
				if($PageIndex > 0){
					$MenuString .= '</ul>';
				}
				$MenuString .= '</li>';
			}
		}
		//echo $MenuString;
		//die();
		return ['Menu'=>$MenuString, 'PageCount'=>$PageCount];
	}

	public function internet()
	{
		return response()->json(['status' => true, 'message' => "INTERNET_WORKING"]);
	}
	
}
