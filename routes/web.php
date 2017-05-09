<?php

use Illuminate\Http\Request;

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

Route::get('/', 'LocationController@welcome');

Route::get('/test', function (Request $request) {
	return 'test';
});

Route::get('/testview', function (Request $request) {
	return view('test');
});

Route::get('/live', 'LoadController@live');

Route::get('/fetchAllLoads', 'LoadController@fetchAllLoads');

Route::get('/loads', function(Request $request){
	return view('loads');
});

Route::get('/rates', function(Request $request){
	return view('rates');
});

Route::get('/fetch', 'LoadController@fetch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
