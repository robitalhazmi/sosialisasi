<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function __construct()
  {

  }

  public function loginPage(){
      if(!Auth::check()){
          return view('login');
      }
      else{
          return redirect()->route('dashboard');
      }
  }
}
