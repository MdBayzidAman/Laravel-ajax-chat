<?php

use Illuminate\Support\Facades\Route;

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
/* 
Route::get('/', function () {
    return view('welcome');
});
 */

 
 //				index
route::get('/','indexController@index');
route::get('/friend','indexController@friend');



//---------ajax-----------//
route::get('/userdata','indexController@userData');

route::get('/add-contact-request','contactController@addContactReq');



//	   			massage
route::post('/massage-send','friendMassageControll@msgSend');
//route::get('/massage','friendMassageControll@msg');
//			CHAT BOX MESSEGE	---AJEX
route::get('/chat-massage','friendMassageControll@chatMsg');
//			INBOX PEOPLE 		----AJEX
route::get('/chat-people','friendMassageControll@chatPeople');



// 				register 
route::get('/register','registerController@index');
//				login
route::post('/login','registerController@login');
//				sign-up
route::post('/sign-up','registerController@signUp');
//				sign-up verify
//route::get('/user-verify','registerController@verifyPage');
route::post('/verify','registerController@verify');
//				sign-up verify resend
route::post('/resend','registerController@resend');

//		---  FORGET PASSWORD  ---
route::get('/forget','forgetControll@index');
route::post('/forget','forgetControll@forget');
route::post('/forget-email','forgetControll@selectEmail');
//route::get('/forget-verify','forgetControll@verifyPage');
route::post('/forget-verify','forgetControll@verify');
route::post('/forget-password','forgetControll@pwdChange');



//		---  logout  ---
route::get('/logout','registerController@logout');



//	--- update-profile-info ---
route::post('/update-profile-info','profileControll@update');


// 		search profile in ajax
route::get('/searchPeople','profileControll@search');


//			profile
route::get('/subUserProfile','friendMassageControll@subUserProfile');
route::get('/{name}','indexController@profile');


