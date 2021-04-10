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
					  "Eusebio Elementary School, Barangay Wawa", "Taguig Science, Barangay Wawa", "Central Bicutan Covered Court, Barangay Central Bicutan", "EM’s Elementary School, Barangay Central Signal", "Gat Andres Bonifacio, Barangay Fort Bonifacio", "Diosdado Macapagal High School, Barangay Katuparan", "Trade Center, Barangay Maharlika", "Daanghari Elementary School, Barangay North Daanghari", "Kapitan Eddie T. Reyes Integrated School, Barangay Pinagsama", "Cardones Elementary School, Barangay South Signal", "Bagong Tanyag Elementary School Main, Barangay Tanyag", "Silangan Elementary School, Barangay Upper Bicutan", "Tenement Elementary School, Barangay Western Bicutan", "Bagong Tanyag Elementary School Annex A, Barangay South Daanghari", "Bagong Tanyag Elementary School Annex B, Barangay South Daanghari", "C.P. Sta. Teresa Elementary School, Barangay Bagumbayan", "Taguig Integrated School, Barangay Bambang", "Tipas Elementary School Annex, Barangay Calzada Tipas", "Hagonoy Gym, Barangay Hagonoy", " Katwiran Covered Court, Barangay Ibayo Tipas", "RP. Cruz Elementary School, Barangay Lower Bicutan", "Tipas Elementary School Annex, Barangay Palingon Tipas", "Eusebio Elementary School, Barangay San Miguel", "Ususan Elementary School, Barangay Ususan", "Cayetano Science High School, Barangay Ususan",
					  "Valenzuela National High School", "Cupang Senior High School", "Baywalk Covered Court", "Alabang Elementary School", "San Roque Elementary School, Barangay San Roque", "Palanyag Gym, Barangay San Dionisio"



			
					  

					
					
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
					 14.52017474446684, 
					 14.52052840257572, 
					 14.493532035139467, 
					 14.511469401146487, 
					 14.530021424579923, 
					 14.521703004113352, 
					 14.497187131948097, 
					 14.486872754523178, 
					 14.533799077461477, 
					 14.504328674482258, 
					 14.48010759627466, 
					 14.502336696720441, 
					 14.509110282961995, 
					 14.466775531011708, 
					 14.470935531933634, 
					 14.473787019261593, 
					 14.526355025913457,  
					 14.532050791284679, 
					 14.512065271827732, 
					 14.538410843561861, 
					 14.5001738552001,
					 14.532123171401297, 
					 14.520119857738157, 
					 14.534338815513218, 
					 14.525733384974604,
					 14.676535894140882, 
					 4.432577673303788,
					 9.371188073879532, 
					 14.42101119662653, 
					 14.671126496192436, 
					 14.487801118706285


					 
					
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
					  121.07371797707584, 121.07362390455367, 121.0561398213401, 121.05772124539968, 121.02368126997388, 121.0578483924728, 121.05510240791821, 121.04702857769662, 121.05629429048709, 121.05646631438783, 121.04703475850262, 121.04849704279805, 121.03814248762215, 121.05116336224405, 121.04761884315742, 121.05865868545558, 121.07438334033347, 121.07937121872637, 121.07104517671104, 121.08651827594878, 121.06359989973355, 121.0793787345705, 121.07369472286432, 121.06708689924149, 121.0615823686658,
					  120.98396773417826, 121.05210156322937, 125.94889910763197, 121.04912780996618, 120.93876129647816, 120.9894803118195







					
					
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