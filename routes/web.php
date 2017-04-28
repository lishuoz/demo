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

Route::get('/', function () {
	return view('landing');
});

Route::get('/test', function () {
	
	
});

Route::get('/loads', function(Request $request) {

	$path = storage_path() . "/json/loads.json";
	$json = json_decode(file_get_contents($path), true);

	list($origin_city, $origin_province, $orgin_country) = explode(", ", $request->origin);
	list($dest_city, $dest_province, $dest_country) = explode(", ", $request->dest);
	
	$loads = array();
	for($i=0; $i<count($json); $i++){
		if($json[$i]['origin_province'] == $origin_province && $json[$i]['destination_province'] == $dest_province ){
			array_push($loads, $json[$i]);
		}
	};
	$data = array(
		'origin' => $request->origin,
		'dest' => $request->dest,
		'loads' => $loads,
		);
	return view('loads')->with($data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
