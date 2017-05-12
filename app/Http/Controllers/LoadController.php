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
		$data = array(
			'loads' => $loads,
			'auth' => Auth::check(),
			);
		return $data;
	}

	public function fetchAllLoads(Request $request){
		$path = storage_path() . "/json/live-loads.json";
		$json = json_decode(file_get_contents($path), true);

		return $json;
	}

	public function live(Request $request){
		$path = storage_path() . "/json/live-loads.json";
		$json = json_decode(file_get_contents($path), true);
		return $json[rand(0, count($json))];
	}

	public function loads(Request $request){
		if($request->has('origin') && $request->has('destination')){

			$loads = array();
			$origin = $request->origin;
			$destination = $request->destination;

			// Separate string from query into city, province, and country
			list($origin_city, $origin_province, $orgin_country) = explode(", ", $request->origin);
			list($destination_city, $destination_province, $destination_country) = explode(", ", $request->destination);
			
			//Get json file from api
			$path = storage_path() . "/json/loads.json";
			$json = json_decode(file_get_contents($path), true);

			for($i=0; $i<count($json); $i++){
				if($json[$i]['origin_province'] == $origin_province && $json[$i]['destination_province'] == $destination_province ){
					array_push($loads, $json[$i]);
				}
			}

			$data = array(
				'origin' => $origin,
				'destination' => $destination,
				'loads' => $loads,
				);

			return view('loads')->with($data);
		}

		return view('loads');
	}
}
