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
Route::post('round1/merah', array('before' => 'csrf', 'uses' =>'Round1Controller@merah'));
Route::get('round1/biru', 'Round1Controller@biru');
Route::post('round1/biru', array('before' => 'csrf', 'uses' =>'Round1Controller@biru'));
Route::get('round1/hijau', 'Round1Controller@hijau');
Route::post('round1/hijau', array('before' => 'csrf', 'uses' =>'Round1Controller@hijau'));
Route::get('round1/kuning', 'Round1Controller@kuning');
Route::post('round1/kuning', array('before' => 'csrf', 'uses' =>'Round1Controller@kuning'));
Route::get('round1/abuabu', 'Round1Controller@abuabu');
Route::post('round1/abuabu', array('before' => 'csrf', 'uses' =>'Round1Controller@abuabu'));

Route::get('round2', 'Round2Controller@index');
Route::post('round2', array('before' => 'csrf', 'uses' =>'Round2Controller@index'));
Route::get('round2/soal', 'Round2Controller@getSoal');
Route::post('round2/soal', 'Round2Controller@getSoal');

Route::get('round3/merah', 'Round3Controller@merah');
Route::post('round3/merah', array('before' => 'csrf', 'uses' =>'Round3Controller@merah'));
Route::get('round3/biru', 'Round3Controller@biru');
Route::post('round3/biru', array('before' => 'csrf', 'uses' =>'Round3Controller@biru'));
Route::get('round3/hijau', 'Round3Controller@hijau');
Route::post('round3/hijau', array('before' => 'csrf', 'uses' =>'Round3Controller@hijau'));
Route::get('round3/kuning', 'Round3Controller@kuning');
Route::post('round3/kuning', array('before' => 'csrf', 'uses' =>'Round3Controller@kuning'));
Route::get('round3/abuabu', 'Round3Controller@abuabu');
Route::post('round3/abuabu', array('before' => 'csrf', 'uses' =>'Round3Controller@abuabu'));

Route::get('round4', 'Round4Controller@index');
Route::get('round4/merah', 'Round4Controller@merah');
Route::get('round4/biru', 'Round4Controller@biru');
Route::get('round4/hijau', 'Round4Controller@hijau');
Route::get('round4/kuning', 'Round4Controller@kuning');
Route::get('round4/abuabu', 'Round4Controller@abuabu');

Route::get('round5', 'Round5Controller@index');
Route::post('round5', 'Round5Controller@index');
Route::get('round5/test', 'Round5Controller@test');