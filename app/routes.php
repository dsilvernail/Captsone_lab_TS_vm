<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*---- Route for the Home Page ----*/
Route::get('/', 'HomeController@getIndex');

/*---- Route for the Web application registration ----*/
Route::get('login', 'HomeController@login');

/*---- Route for the page that shows the team and bios ----*/
Route::get('aboutus', 'HomeController@about');

Route::get('divein', 'WebserviceController@divein');

Route::get('demosignin', 'WebserviceController@demosignin');

Route::get('register', 'HomeController@getRegister');

Route::post('register', 'HomeController@postRegister');

Route::get('google', 'WebserviceController@loginWithGoogle');