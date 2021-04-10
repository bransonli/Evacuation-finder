<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home_page');
});

Route::get('/near', 'LocationFinder@nearest');

Route::post('/store_user', 'PageController@store');

Route::post('/check_user', 'PageController@check_user');

Route::get('/{pagename}', 'PageController@show');

