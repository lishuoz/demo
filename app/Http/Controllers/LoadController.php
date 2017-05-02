<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoadController extends Controller
{	
	
	public function fetch(Request $request)
	{	
		//Get json file from api
		$path = storage_path() . "/json/loads.json";
		$json = json_decode(file_get_contents($path), true);

		//Separate string from query into city, province, and country
		list($origin_city, $origin_province, $orgin_country) = explode(", ", $request->origin);
		list($dest_city, $dest_province, $dest_country) = explode(", ", $request->destination);

		$loads = array();
		for($i=0; $i<count($json); $i++){
			if($json[$i]['origin_province'] == $origin_province && $json[$i]['destination_province'] == $dest_province ){
				array_push($loads, $json[$i]);
			}
		}
		// if (Auth::check()) {
		// 	return $loads;
		// }
		// $loads = array_slice($loads, 0, 5);
		$data = array(
			'loads' => $loads,
			'auth' => Auth::check(),
			);
		return $data;
	}


	public function index(Request $request){
		if (empty($request->all())){
			return view('landing');
		}

		//Get json file from api
		$path = storage_path() . "/json/loads.json";
		$json = json_decode(file_get_contents($path), true);

		//Separate string from query into city, province, and country
		list($origin_city, $origin_province, $orgin_country) = explode(", ", $request->origin);
		list($dest_city, $dest_province, $dest_country) = explode(", ", $request->dest);

		$loads = array();
		for($i=0; $i<count($json); $i++){
			if($json[$i]['origin_province'] == $origin_province && $json[$i]['destination_province'] == $dest_province ){
				array_push($loads, $json[$i]);
			}
		}

		$data = array(
			// 'origin' => $request->origin,
			// 'dest' => $request->dest,
			// 'loads' => $loads,
			'auth' => 'tet',
			);
		return $data;
	}
}
