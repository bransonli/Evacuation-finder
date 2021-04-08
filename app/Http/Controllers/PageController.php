<?php

namespace App\Http\Controllers;


class PageController extends Controller 
{
    public function show($pagename)
    {
        return view ("{$pagename}");
    }










}
