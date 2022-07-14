<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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




Route::get('/admin', function () {
	if (session()->has('user_email')) {
			 return redirect()->route('dashboard');
		}else{
			 return view('login');
		}
})->name('login_default');



// form page
Route::get('/', function () {
	
	return view('multi_form.index');

})->name('index');
Route::post('/save_application','DashboardController@save_application')->name('save_application');

Route::post('/joinnow_save','DashboardController@joinnow_save')->name('joinnow_save');
Route::post('/joinnow_update','DashboardController@joinnow_update')->name('joinnow_update');
Route::get('/delete_user/{id}','DashboardController@delete_user')->name('delete_user');
Route::get('/joinnow_save', function () {
    return redirect()->route('login_default');
});

// fires



Route::get('/all_users','DashboardController@all_users')->name('users');



Route::get('/profile','DashboardController@profile')->name('profile');
Route::post('/save_profile','DashboardController@save_profile')->name('save_profile');
Route::get('/lost_password','UserController@lost_password')->name('lost_password');
Route::post('/check_lostpassword','UserController@check_lostpassword')->name('check_lostpassword');
Route::get('/reset_password/{reset_token}','UserController@reset_password')->name('reset_password');
Route::post('/reset_password_check','UserController@reset_password_check')->name('reset_password_check');





Route::get('/cronjob','DashboardController@cronjob')->name('cronjob');








Route::post('/lock','UserController@check_login')->name('check_login');
Route::get('/lock', function () {
    return view('lock');
});
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');





















// Slider
Route::get('admin/slider','DashboardController@sliders')->name('sliders');
Route::post('admin/slider','DashboardController@save_slider')->name('save_slider');
Route::get('admin/delete_slider/{id}','DashboardController@delete_slider')->name('delete_slider');

// bookings
Route::get('admin/booking','DashboardController@bookings')->name('show_bookings');
Route::post('admin/booking','DashboardController@save_booking')->name('save_booking');
Route::get('admin/delete_booking/{id}','DashboardController@delete_booking')->name('delete_booking');


// Offer
Route::get('admin/offer','DashboardController@offers')->name('offers');
Route::post('admin/offer','DashboardController@save_offer')->name('save_offer');


// service
Route::get('admin/service','DashboardController@services')->name('services');
Route::post('admin/service','DashboardController@save_service')->name('save_service');
Route::get('admin/delete_service/{id}','DashboardController@delete_service')->name('delete_service');


// member
Route::get('admin/member','DashboardController@members')->name('members');
Route::post('admin/member','DashboardController@save_member')->name('save_member');
Route::get('admin/delete_member/{id}','DashboardController@delete_member')->name('delete_member');

// Alert
Route::get('admin/alert','DashboardController@alerts')->name('alerts');
Route::post('admin/alert','DashboardController@save_alert')->name('save_alert');

// testimonial
Route::get('admin/testimonial','DashboardController@testimonials')->name('testimonials');
Route::post('admin/testimonial','DashboardController@save_testimonial')->name('save_testimonial');
Route::get('admin/delete_testimonial/{id}','DashboardController@delete_testimonial')->name('delete_testimonial');


// category
Route::get('admin/category','DashboardController@categorys')->name('categorys');
Route::post('admin/category','DashboardController@save_category')->name('save_category');
Route::get('admin/delete_category/{id}','DashboardController@delete_category')->name('delete_category');

// post
Route::get('admin/post','DashboardController@posts')->name('posts');
Route::post('admin/post','DashboardController@save_post')->name('save_post');
Route::get('admin/delete_post/{id}','DashboardController@delete_post')->name('delete_post');





// front page
Route::get('/service/{slug?}','FrontController@service')->name('service_details');

Route::get('/services','FrontController@services')->name('services_front');


// front page
Route::get('/member/{slug?}','FrontController@member')->name('member_details');


// front page
Route::get('/post/{slug?}','FrontController@post');

// front page
Route::get('/blogs','FrontController@news')->name('news');

// front page
Route::get('/about-us','FrontController@aboutus')->name('aboutus');

Route::get('/contact-us','FrontController@contactus')->name('contactus');
Route::post('/contactsend','FrontController@contactsend')->name('contactsend');

Route::get('/products','FrontController@products')->name('products');

Route::get('/booking','FrontController@booking')->name('booking');
Route::get('/book','FrontController@booking');

Route::get('book/{date}','FrontController@book')->name('book');
Route::post('book_save/{date}','FrontController@book_save')->name('book_save');

Route::post('/review','FrontController@review')->name('review');
