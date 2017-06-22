<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
  public function __construct()
  {

  }

  public function landingPage()
  {
    return view('home');
  }
}
