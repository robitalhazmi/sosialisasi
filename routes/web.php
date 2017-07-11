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
//getPage
Route::get('/', 'LandingController@landingPage');
Route::get('signup', 'SignUpController@signUp');
Route::get('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');
Route::get('dashboard', 'DashboardController@dashboard');
Route::get('profile', 'DashboardController@profile');
Route::get('agenda', 'DashboardController@agenda');
Route::get('map', 'DashboardController@map');
//postData
Route::post('signup', 'SignUpController@postSignUp');
Route::post('login', 'LoginController@postLogin');
Route::post('agenda', 'DashboardController@postAgenda');
Route::post('profile', 'DashboardController@postProfile');
Route::post('petugas', 'DashboardController@postPetugas');
Route::post('laporan', 'DashboardController@postLaporan');
