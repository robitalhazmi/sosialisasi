<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login()
  {
    if(!Auth::check()){
        return view('login');
    }
    else{
        return redirect('dashboard');
    }
  }

  public function postLogin(Request $req)
  {
    $email = $req->email;
    $password = $req->password;


      if (Auth::attempt(['email'  =>  $email, 'password'  =>  $password])) {
        return redirect()->intended('/');
      }
      else {
        return redirect('login');
      }
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
}
