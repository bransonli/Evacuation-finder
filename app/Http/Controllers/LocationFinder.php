public function get_evacuation_near($latitude, $longitude, $radius = 1){

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