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
//public
  //getPage
  Route::get('/', ['as' =>  'landing', 'uses' =>  'LandingController@landingPage']);
  Route::get('register', ['as'  =>  'login', 'uses' =>  'RegisterController@registerPage']);
  Route::get('login', ['as' => 'login', 'uses' => 'AuthController@loginPage']);


  //postData
  Route::post('register', 'RegisterController@postRegister');
