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

// Route::get('/test', function (Request $request) {
// 	header("Content-type: application/xml");
// 	$token="bef0bdd2838a6804c5b95a6d920a49bb";
// 	$url = "https://crm.zoho.com/crm/private/xml/Leads/insertRecords?";
// 	$xmlData = '<Leads>
// 	<row no="1">
// 		<FL val="Lead Source">Web Download</FL>
// 		<FL val="Company">Your Company</FL>
// 		<FL val="First Name">Hannah</FL>
// 		<FL val="Last Name">Smith</FL>
// 		<FL val="Email">testing@testing.com</FL>
// 		<FL val="Title">Manager</FL>
// 		<FL val="Phone">1234567890</FL>
// 		<FL val="Home Phone">0987654321</FL>
// 		<FL val="Other Phone">1212211212</FL>
// 		<FL val="Fax">02927272626</FL>
// 		<FL val="Mobile">292827622</FL>
// 	</row>
// </Leads>';

// $param= "newFormat=1&authtoken=".$token."&scope=crmapi"."&xmlData=".$xmlData;

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_TIMEOUT, 30);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
// $result = curl_exec($ch);
// curl_close($ch);
// echo $result;
// return $result;
// });

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
