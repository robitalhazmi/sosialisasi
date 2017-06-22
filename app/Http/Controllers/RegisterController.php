<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class RegisterController extends Controller
{
  public function __construct()
  {

  }

  public function registerPage()
  {
    if (!Auth::check()) {
      return view('register');
    }
    else {
      return redirect()->route('dashboard');
    }
  }
}
