<?php
namespace App\Http\Controllers;

class LocationFinder extends Controller 
{

	public function get_evacuation_near($latitude, $longitude, $radius = 1)
	{

	$evacuations = evacuation::select('shelters.*')
		->selectRaw('( 3959 * acos( cos( radians(?) ) *
						cos( radians( shelters_lat ) )
						* cos( radians( shelters_long ) - radians(?)
						) + sin( radians(?) ) *
						sin( radians( shelters_lat ) ) )
						) AS distance', [$latitude, $longitude, $latitude])
		->havingRaw("distance < ?", [$radius])
		->get();

	return $evacuations;
	}


	public function get_location_latitude($address1, $address2, $address3, $address4)
	{
		$json_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$address1."+".$address2."+".$address3."+".$address4.",+CA&key=AIzaSyAslehPIAvH85Xx9imHwVFgX4OOiaN7NjY";
		$jsonResponse = file_get_contents($json_url);
		$jsonResponseDecode = json_decode($jsonResponse);
		$latitude = $jsonResponseDecode->results[0]->geometry->location->lat;
		return $latitude;
		
	}


	public function get_location_longhitude($address1, $address2, $address3, $address4)
	{
		$json_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$address1."+".$address2."+".$address3."+".$address4.",+CA&key=AIzaSyAslehPIAvH85Xx9imHwVFgX4OOiaN7NjY";
		$jsonResponse = file_get_contents($json_url);
		$jsonResponseDecode = json_decode($jsonResponse);
		$longhitude = $jsonResponseDecode->results[0]->geometry->location->lng;
		return $longhitude;
		
	}

}