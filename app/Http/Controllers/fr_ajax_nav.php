<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonModel;
use DB;

class fr_ajax_nav extends Controller
{
	public function __construct()
    {
		
	}

	protected function index(Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$response = response()->json(['status' => false, 'message' => "Invalid request!"]);

		$method = $request->Method;
		if(session()->exists('LoginId'))
		{
			/*
			$IsPageAllow = CommonModel::IsPageAllow($request->nav);
			if($IsPageAllow){
				if($IsPageAllow->IsPageAllow=="0"){
					return $response;
				}else{
					$request->ViewType = $IsPageAllow->ViewType;
				}
			}
			*/
			switch($method)
			{ 
				// Categories
				case 'ajax_categories':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->getCategories($request);
					break;
				case 'ajax_parent_categories':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->getParentCategories_fr($request);
					break;
					
				case 'ajax_categories_save':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->categories_save($request);
					break;
				case 'ajax_categories_update':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->categories_update($request);
					break;
				case 'ajax_categories_delete':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->categories_delete($request);
					break;

				// Sub Categories
				case 'ajax_parentSub_categories':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->getSubCategories_fr($request);
					break;

				// Get Meetings
				case 'ajax_GetParentMeetings':
					$meetings_ctrl = new meetings_ctrl();
					$response = $meetings_ctrl->getMeetings_fr($request);
					break;
					

				// Get Booked Meetings
				case 'ajax_getBookedMeetings':
					$meetings_ctrl = new meetings_ctrl();
					$response = $meetings_ctrl->getBookedMeetings($request);
					break;
					

				// Add Class
				case 'ajax_addClass_fr':
					$class_ctrl = new class_ctrl();
					$response = $class_ctrl->fr_addClass_user($request);
					break;

				// Become Instructor
				case 'ajax_updateInstructorProfile_fr':  
					$login_ctrl = new login_ctrl();
					$response = $login_ctrl->ajax_updateInstructorProfile_fr($request);
					break;

				// Update Profile
				case 'ajax_updateProfile_fr':
					$profile_ctrl = new profile_ctrl();
					$response = $profile_ctrl->fr_updateProfile_user($request);
					break;

				// get Reviews
				case 'ajax_reviews_fr':
					$rating_ctrl = new rating_ctrl();
					$response = $rating_ctrl->review($request);
					break;

				// get Reviews
				case 'ajax_addReview_fr':
					$rating_ctrl = new rating_ctrl();
					$response = $rating_ctrl->addReview($request);
					break;

				// Feature Videos
				case 'ajax_updateFeatureVideos_fr':
					$profile_ctrl = new profile_ctrl();
					$response = $profile_ctrl->addFeatureVideos($request);
					break;

				default:
					$response = response()->json(['status' => false, 'message' => "Invalid request!"]);
					break;
			}
			
		}else{ 
			switch($method)
			{ 
				// Categories
				case 'ajax_parent_categories':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->getParentCategories_fr($request);
					break;

				// Sub Categories
				case 'ajax_parentSub_categories':
					$categories_ctrl = new categories_ctrl();
					$response = $categories_ctrl->getSubCategories_fr($request);
					break;

				// Get Meetings
				case 'ajax_GetParentMeetings':
					$meetings_ctrl = new meetings_ctrl();
					$response = $meetings_ctrl->getMeetings_fr($request);
					break;

				// get Reviews
				case 'ajax_reviews_fr':
					$rating_ctrl = new rating_ctrl();
					$response = $rating_ctrl->review($request);
					break;


				default:
					$response = response()->json(['status' => false, 'message' => "Invalid request!"]);
					break;
			}
		}
		return $response;
	}
}
