<?php

namespace App\Http\Controllers;


class PageController extends Controller 
{
    public function show($pagename)
    {
        return view ("{$pagename}");
    }


    public function store()
    {
        dump(request()->all());

        $user = new users();
        $user->name = request('name');
        $user->address = request('address');
        $user->age = request('age');

        $user->save();

        dd('saved');
    }









}
