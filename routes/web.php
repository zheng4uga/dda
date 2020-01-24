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
Route::view('/','index');
Route::get('api/counties','CountyController@allCountry');
Route::get('api/county/available/{id}','CountyController@countyAvailable');

Route::get('api/zipcodes','ZipcodeController@allZipcodes');
Route::get('api/zipcode/available/{id}','ZipcodeController@zipcodeAvailable');

Route::view('estimate','estimate');
