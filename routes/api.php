<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('test','UserController@data');
Route::post('errordata','UserController@errordata');
Route::post('getdata','ProductTypeController@getdata');
Route::post('insert','ProductTypeController@insertproducttype');
Route::post('add-user','UserController@insertdata');
Route::post('otp-insert','otpController@otpinsert');
Route::post('otp-verify','otpController@otpverify');
Route::post('getuser-details','UserController@getuser');
Route::post('update-user','UserController@updateuser');
Route::post('login','UserController@login');
Route::get('loadproduct','ProductTypeController@loadproduct');
Route::post('insertorder','ProductTypeController@insertorder');
Route::post('get-tasklist','ProductTypeController@getorderdetails');

Route::post('forgot-password','otpController@forgot_password');
Route::post('change-password','otpController@change_password');
Route::get('rto-location','AgentController@rto');

Route::post('get-orders','TransactionController@show_orders');


Route::post('update-order','TransactionController@update_orders');
