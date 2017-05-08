<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
	public function welcome(Request $request){
		$origin = 'Canada';
		// Detect if come from Betterloads.com
		if($request->has('origin')){
			$origin = $request->origin;
			$request->session()->put('origin', $origin);
		}else{
			$origin = $request->session()->get('origin');
		}

		dd($request->ip);
		// Get GEO Location of the user
		$location = \Location::get($request->ip);

		// Compare with origin 
		// If location != origin, we ask if they are looking for loads from location to origin
		// If location matches origin, then 

		$data = array(
			'origin' => $origin,
			'location' => $location,
			);
		return view('welcome')->with($data);
	}

}
