<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login()
  {
    return view('login');
  }

  public function postLogin(Request $req)
  {
    $email = $req->email;
    $password = $req->password;

    if (Auth::attempt(['email'  =>  $email, 'password'  =>  $password])) {
      return redirect()->intended('/');
    }
    else {
      return view('login');
    }
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
}
