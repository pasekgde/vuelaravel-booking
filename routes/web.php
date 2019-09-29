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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function(){
	Route::get('/', array(
		'as'=>'home', 
		'uses'=> 'BookingController@homepage')
	);

	Route::get('/tes', array(
		'as'=>'home', 
		'uses'=> 'BookingController@tes')
	);

	Route::get('/createbooking', array(
		'as'=>'data', 
		'uses'=> 'BookingController@index')
	);

	Route::post('/createbooking/create', array(
		'as'=>'create', 
		'uses'=> 'BookingController@store')
	);

	
	//Route::resource('/createbooking', 'BookingController');
	//Route::resource('/createbooking/create', 'BookingController');
});