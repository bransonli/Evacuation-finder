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

        dump(request()->all());

        $user =  request('name');
        $Flag = '0';

        foreach ($users as $reg_user)
           
            if ($user== $reg_user->name) {
                return view('map',[
                    'address1'=> $reg_user->address1,
                    'address2'=> $reg_user->address2,
                    'address3'=> $reg_user->address3,
                    'address4'=> $reg_user->address4
                    
                ]);

            }
        
                

       

          
        dd($Flag);

    }

  








}
