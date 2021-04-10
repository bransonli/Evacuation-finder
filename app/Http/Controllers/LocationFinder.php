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
					  "Barangay 101 Covered Court",
					  "Marcel Covered Court, Barangay Pasong Tamo",
					  "Centre Ville Covered Court, Barangay Pasong Tamo",
					  "Pantranco Chapel, Barangay Pasong Tamo",
					  "Pingkian I Central Court, Barangay Pasong Tamo",
					  "Pasong Tamo Basketball Court",
					  "Pingkian Village III Covered Court",
					  "Apolonio Samson Elementary School",
					  "Sampalukan Elementary, Barangay 24",
					  "M.B. Asisto High School Main, Barangay 14",
					  "Bagong Silang Elementary School, Barangay 119",
					  " Llano Elementary School, Barangay 167",
					  "Cades, Barangay 178",
					  "Barangay 177 Evacuation Center",
					  "Barangay 178 Evacuation Center",
					  "Kalayaan Elementary School, Barangay 176",
					  "Glorietta Evacuation Center",
					  "Pangarap Central Elementary School, Barangay 182",
					  "St. Mary Elementary School",
					  "Fortune High School",
					  "Malanday Elementary School",
					  "Kalumpang Elementary School",
					  "Marikina Elementary School",
					  "Parang Elementary School",
					  "Parang High School",
					  "Concepcion Integrated School",
					  "Sto. Niño High School",
					  "H. Bautista Elementary School",
					  "San Roque Elementary School",
					  "Concepcion Elementary School",
					  "Tañong High School",
					  "Nangka Elementary School",
					  "Kap Moy Elementary School",
					  "SSS Vill Elementary School",
					  "Sto. Niño Elementary School",
					  "Fortune Elementary School",
					  "Marikina High School",
					  "Barangka Elementary School",
					  "Sta. Elena High School",


			
					  

					
					
					];

		$loc_lats = [14.64144832,
					 14.6328027,
					 14.63004165,
					 14.60243111,
					 14.59058001,
					 14.6208327,
					 14.6312591,
					 14.681654688731717,
					 14.685406427633215, 
					 14.678426813906844, 
					 14.688682031940525, 
					 14.68275185006838, 
					 14.697487220019758,
					 14.654920205976774,
					 14.644325667061862,
					 14.649073991329077,
					 14.64276104037795,
					 14.732064797750915,
					 14.757174495568453,
					 14.746799421925832,
					 14.75700723087099,
					 14.78076957951641,
					 14.551388224774662,
					 14.764176704477947,
					 14.668925347362272,
					 14.6597807199063,
					 14.650416630136235,
					 14.622310510488841,
					 14.631238511855738,
					 14.65745579548551,
					 14.663413064942691,
					 14.65003041899178,
					 14.639402683743173,
					 14.657929147228737,
					 14.622917337002885,
					 14.64781138687598,
					 14.63408401516277,
					 14.669509589024411,
					 14.648466712348535,
					 14.640079617957996,
					 14.637939413739629,
					 14.659232641171169,
					 14.646597368066214,
					 14.633420829493003,
					 14.632478536925474,

					 
					
					];
		
		$loc_longs = [120.9891239,
				  	  120.96233,
					  120.9606131,
					  120.9624241,
					  120.9592041,
					  120.9602087,
					  120.9621403,
					  121.04823542628506,
					  121.06999301758363,
					  121.04750534119341,
					  121.05982278395798,
					  121.06941008494573,
					  121.06057179552647,
					  121.00888953977538,
					  120.97324723433225,
					  120.96405215364695,
					  120.98520265549658,
					  121.01391832666124,
					  121.05631541111836,
					  121.05579271868366,
					  121.05645599308777,
					  121.03154543360199,
					  121.02535247022789,
					  121.09143369406169,
					  121.11371602851061,
					  121.12684399782523,
					  121.09439902779728,
					  121.09028936226534,
					  121.09758713556404,
					  121.11161736504923,
					  121.11231359210309,
					  121.10213726977132,
					  121.09626446898955,
					  121.10423630619272,
					  121.09710100430007,
					  121.1035434368517,
					  121.08537558659502,
					  121.10235346171427,
					  121.11899286521745,
					  121.12098946890845,
					  121.09642313328466,
					  121.12636819394426,
					  121.10303365205972,
					  121.0819147074807,
					  121.0973978008418,






					
					
					];

		$Nearest = 10000000000000000000000000;
		$Nearest_index = 0 ;

		for ($i = 0; $i < 13; $i++){
			$lat_difference = $current_lat - $loc_lats[$i];
			$long_difference = $current_long - $loc_longs[$i];
			$difference = pow($lat_difference,2) + pow($long_difference,2);
			

			if ($difference < $Nearest) {
				$Nearest = $difference;
				$Nearest_index = $i;
				
			}
		}


		

		return array([$loc_names[$Nearest_index],$loc_lats[$Nearest_index],$loc_longs[$Nearest_index]]);

		

	}

	public function nearest(){
		$location_finder = new LocationFinder();

		dd($location_finder->find_nearest_evac(120,120)[0][0]);

	}

}