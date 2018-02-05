<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('table', function () {
    return view('dashboard.fba-list');
});




Route::get('db','DashboardController@add');   //test

Route::post('admin-login','LoginController@login');
Route::get('register-user','LoginController@register_user');
Route::get('log-out','LoginController@logout');



Route::group(['middleware' => ['DashboardCheck','web']], function () {

Route::get('dashboard','DashboardController@dashboard');
Route::get('product-list','ProductController@product_list');
Route::get('product-add','ProductController@product_add');
Route::get('product/category-id','ProductController@category_id');
Route::POST('product-save','ProductController@product_save');

Route::get('category-list','ProductController@category_list');
Route::POST('category-save','ProductController@categorysave');
Route::get('sub-category-id','ProductController@sub_category_id');
Route::POST('sub-category-save','ProductController@sub_category_save');
Route::get('company-master','CompanyMasterController@companymaste');
Route::POST('company-master-save','CompanyMasterController@companymaste_save');

Route::get('documents','CompanyMasterController@documents_required');
Route::post('documents-submit','CompanyMasterController@documents_submit');
Route::post('documents-edit-submit','CompanyMasterController@documents_edit_submit');






Route::get('agent-list','AgentController@agent_list');
Route::POST('agent-save','AgentController@agent_save');

});
