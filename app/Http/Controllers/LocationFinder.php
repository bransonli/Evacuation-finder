<?php
namespace App\Http\Controllers;

class LocationFinder extends Controller 
{

	


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

	public function find_nearest_evac($current_lat, $current_long){
		$loc_names = ["Building 3, Barangay 128", 
					  "Building 18, Barangay 128",
					  "Tondo Community Initiative (TCI)",
				  	  "Rosauro Almario Elementary School",
					  "Baseco Evacuation center",
					  "Barangay 105 Covered Court",
					  "Barangay 101 Covered Court"];

		$loc_lats = [14.64144832,
					 14.6328027,
					 14.63004165,
					 14.60243111,
					 14.59058001,
					 14.6208327,
					 14.6312591];
		
		$loc_longs = [120.9891239,
				  	  120.96233,
					  120.9606131,
					  120.9624241,
					  120.9592041,
					  120.9602087,
					  120.9621403];

		$Nearest = 10000000000000000000000000;
		$Nearest_index = 0 ;

		for ($i = 0; $i < 6; $i++)
			$lat_difference = $current_lat - $loc_lats[$i];
			$long_difference = $current_long - $loc_longs[$i];
			$difference = pow($lat_difference,2) + pow($long_difference,2);

			if ($difference < $Nearest) {
				$Nearest = $difference;
				$Nearest_index = $i;
			}


		

		dd($Nearest);

		

	}

	public function nearest(){
		$location_finder = new LocationFinder();

		dd($location_finder->find_nearest_evac(150,150));

	}

}