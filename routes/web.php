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
	return $request->session()->flush();
});

Route::get('/testview', function (Request $request) {
	return view('test');
});

Route::post('/test', function (Request $request) {
	dd($request->all());
});

Route::get('/live', 'LoadController@live');

Route::get('/fetchAllLoads', 'LoadController@fetchAllLoads')->middleware('cors');

// Route::get('/loads', function(Request $request){
// 	$origin = \Session::get('origin');
// 	return view('loads')->with('origin', $origin);
// });

Route::get('/loads', 'LoadController@loads');

Route::get('/rates', function(Request $request){
	return view('rates');
});

Route::get('/fetch', 'LoadController@fetch');

Route::get('/checkout', function(Request $request){
	return view('checkout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
