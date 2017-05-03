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

Route::get('/', function (Request $request) {
	$origin = $request->origin;
	return view('welcome')->with('origin', $origin);
});

Route::get('/test', function (Request $request) {
	return 'test';
});

Route::get('/live', 'LoadController@live');

// Route::get('/test', 'LoadController@fetch');

Route::get('/fetchAllLoads', 'LoadController@fetchAllLoads');

Route::get('/loads', function(Request $request){
	return view('loads');
});

Route::get('/fetch', 'LoadController@fetch');

// Route::get('/testfetch', 'LoadController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
