<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::get('round1/merah', 'Round1Controller@merah');
Route::get('round1/biru', 'Round1Controller@biru');
Route::get('round1/hijau', 'Round1Controller@hijau');
Route::get('round1/kuning', 'Round1Controller@kuning');
Route::get('round1/abuabu', 'Round1Controller@abuabu');

Route::get('round2', 'Round2Controller@index');

Route::get('round4', 'Round4Controller@index');