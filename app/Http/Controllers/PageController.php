<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\LocationFinder;

class PageController extends Controller 
{
    public function show($pagename)
    {
        $error = "";
        return view ("{$pagename}");
    }


    public function store()
    {
       
        dump(request()->all());

        $user = new User();
        $user->name = request('name');
        $address1 = request('address1');
        $address2 = request('address2');
        $address3 = request('address3');
        $address4 = request('address4');
        $user->phone = request('phone');


        $location_finder = new LocationFinder();

        $user->longhitude = $location_finder->get_location_longhitude($address1, $address2, $address3, $address4);
        $user->latitude = $location_finder->get_location_latitude($address1, $address2, $address3, $address4);

        $user->phone = request('phone');

        $user->save();

        



        return redirect("thank_signup");
    }

        
    public function check_user()
    {

        $users = \App\User::get();

        request()->all();

        $user =  request('name');

        foreach ($users as $reg_user)
           
            if ($user== $reg_user->name) {

                $location_finder = new LocationFinder();
                $nearest_evac = $location_finder->find_nearest_evac($reg_user->latitude,$reg_user->longhitude);
                $nearest_evac_name = $nearest_evac[0][0];
                $nearest_evac_lat = $nearest_evac[0][1];
                $nearest_evac_long = $nearest_evac[0][2];


                return view('map',[
                    'longhitude'=> $reg_user->longhitude,
                    'latitude'=> $reg_user->latitude,
                    'nearest_evac_name' => $nearest_evac_name,
                    'nearest_evac_lat' => $nearest_evac_lat,
                    'nearest_evac_long'  => $nearest_evac_long

                    
                ]);

            }

    }

  








}
