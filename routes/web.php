<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\bk_nav;
use App\Http\Controllers\bk_ajax_nav;

use App\Http\Controllers\fr_nav;
use App\Http\Controllers\fr_ajax_nav;

use App\Http\Controllers\login_ctrl;

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsLedger;
use App\Http\Controllers\sign_up_ctrl;
use App\Http\Controllers\class_ctrl;
use App\Http\Controllers\home_ctrl;
use App\Http\Controllers\profile_ctrl;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('internet', [fr_nav::class, 'internet']);

// Login
Route::get('', [fr_nav::class, 'home']);



Route::get('login', [fr_nav::class, 'login']);
Route::get('logout', [fr_nav::class, 'logout']);
Route::get('signup', [fr_nav::class, 'signup']);
Route::get('addClass', [fr_nav::class, 'addClass']);
Route::get('updateProfile', [fr_nav::class, 'updateProfile']);
Route::get('Profile', [fr_nav::class, 'Profile']);
Route::get('home', [fr_nav::class, 'home']);
Route::get('becomeAnIsntructor', [fr_nav::class, 'becomeAnIsntructor']);
Route::get('updateInstructorProfile', [fr_nav::class, 'updateInstructorProfile']);
Route::get('class', [fr_nav::class, 'class']);
Route::get('instructorProfile', [fr_nav::class, 'instructorProfile']);
Route::get('bookingClasses', [fr_nav::class, 'bookingClasses']);
Route::get('Checkout', [fr_nav::class, 'Checkout']);
Route::get('classPayment', [fr_nav::class, 'classPayment']);
Route::get('rating', [fr_nav::class, 'rating']);
Route::get("Physical/{subCategory?}", [fr_nav::class, "physical"]);
Route::get("Mental/{subCategory?}", [fr_nav::class, "mental"]);
Route::get("Emotional/{subCategory?}", [fr_nav::class, "emotional"]);

Route::any('SubscribProcess', [fr_nav::class, 'SubscribProcess']);
Route::post('SubscribeResponse', [fr_nav::class, 'SubscribeResponse']);
Route::post('SubscribeCancel', [fr_nav::class, 'SubscribeCancel']);

Route::post('fr_addClass_user', [class_ctrl::class, 'fr_addClass_user']);
Route::post('fr_login_user', [login_ctrl::class, 'fr_login_user']);
Route::post('fr_sign_up_user', [sign_up_ctrl::class, 'fr_sign_up_user']);
Route::post('ajax_index', [fr_ajax_nav::class, 'index'])->middleware(IsLedger::class);

Route::post('video', [profile_ctrl::class, 'addFeatureVideos']);

Route::any('google', [sign_up_ctrl::class, 'google_login']);
Route::get('google/callback', [sign_up_ctrl::class, 'google_login_callback']);

Route::get('facebook', [sign_up_ctrl::class, 'facebook_login']);
Route::get('facebook/callback', [sign_up_ctrl::class, 'facebook_login_callback']);