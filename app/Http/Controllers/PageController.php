<?php

namespace App\Http\Controllers;
use App\User;

class PageController extends Controller 
{
    public function show($pagename)
    {
        return view ("{$pagename}");
    }


    public function store()
    {
       
        dump(request()->all());

        $user = new User();
        $user->name = request('name');
        $user->address = request('address');
        $user->age = request('age');

        $user->save();

        dd('saved');
    }

        
    public function check_user()
    {

        $users = \App\User::get();

        dump(request()->all());

        $user =  request('name');
        $Flag = '0';

        foreach ($users as $reg_user)
           
            if ($user== $reg_user->name) {
                dd('found');

            }
                

       

          
        dd($Flag);

    
        


    }








}
