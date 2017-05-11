<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;

class LocationController extends Controller
{
	public function welcome(Request $request){

		$location = geoip($ip = $request->ip());

		$locationString = $location->city.', '.$location->state.', '.$location->country;
		// Detect if come from Betterloads.com
		if($request->has('origin')){
			$origin = $request->origin;
			$request->session()->put('origin', $origin);
		}else if($request->session()->has('origin')){
			$origin = $request->session()->get('origin');
		}else{
			$origin = $location->city.', '.$location->state.', '.$location->country;
		}

		// Get GEO Location of the user
		// $location = \Location::get($request->ip());
		
		

		// Compare with origin 
		// If location != origin, we ask if they are looking for loads from location to origin
		// If location matches origin, then 

		$data = array(
			'origin' => $origin,
			'location' => $locationString,
			'match' => $origin == $locationString,
			);
		return view('welcome')->with($data);
	}

}
