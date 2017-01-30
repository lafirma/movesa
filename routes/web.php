<?php

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

Route::get('/', 'LandingController@landing')->name('landing');
Route::post('lead', 'LandingController@lead')->name('lead');
Route::get('thanks', 'LandingController@thanks')->name('thanks');
