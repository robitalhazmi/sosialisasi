<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Petugas;
use Hash;

class SignUpController extends Controller
{
  public function signUp()
  {
    return view('signup');
  }

  public function postSignUp(Request $req)
  {
    $email  = $req->email;
    $password = $req->password;

    $insert = new User;
    $insertProfile = new Petugas;

    $insert->email  = $email;
    $insert->password = Hash::make($password);

    $insert->save();
    $insertProfile->save();

    return redirect('login');
  }
}
