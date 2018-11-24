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

Route::group(['middleware' => 'checkloggedout'], function(){
Route::get('login','HomeController@login');
Route::get('registration','HomeController@registration');
Route::post('loginstore','HomeController@postlogin');
Route::post('store','HomeController@store');
});


Route::group(['middleware' => 'checkloggedin'], function(){
Route::get('dashboard','HomeController@dashboard');
Route::get('/','HomeController@dashboard');
Route::get('logout','HomeController@logout');
});


  

