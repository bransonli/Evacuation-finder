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









}
