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
// Route Login
Route::get('login','backend\LoginController@GetLogin')->middleware('CheckLogout');
Route::post('login','backend\LoginController@PostLogin');

// Forgot password
Route::get('forgot','backend\ForgotPasswordController@GetForgot');
Route::post('forgot','backend\ForgotPasswordController@PostForgot');
// Route Registration
Route::get('register', 'backend\RegistrationController@GetRegister')->middleware('CheckRegistration');
Route::post('register', 'backend\RegistrationController@PostRegister');


// Gruop Admin
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    Route::get('','backend\LoginController@GetIndex');
    Route::get('logout','backend\LoginController@logout');
});

