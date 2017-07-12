<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Petugas;
use Hash;

class SignUpController extends Controller
{
  public function signUp()
  {
    if(!Auth::check()){
      return view('signup');
    }
    else{
        return redirect('dashboard');
    }
  }

  public function postSignUp(Request $req)
  {
    $email  = $req->email;
    $password = $req->password;

    $data_login = User::where('email', $email)->first();

    if ($data_login == null) {
      $insert = new User;
      $insertProfile = new Petugas;

      $insert->email  = $email;
      $insert->password = Hash::make($password);

      $insert->save();
      $insertProfile->save();

      return redirect()->intended('dashboard');
    }
    else {
      return redirect('signup')->with('status', 'Email already have taken!');
    }
  }
}
