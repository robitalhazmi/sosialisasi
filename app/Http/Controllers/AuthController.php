<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Crypt;

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

  public function postLogin(Request $req){
      $email = $req->input('email');
      $password = $req->input('password');
      $data_auth = User::where('email', $email)->first();

      if($data_auth != null){
          if(Crypt::decrypt($data_auth->password) == $password){
              $token = str_random(32);
              User::where('email', $email)->update(['remember_token' => $token]);
              return response()->json(['success'=>true, 'message'=>'berhasil login'], 200)->header('token', $token);
          }else{
              return response()->json(['success'=>false, 'message' => 'invalid email and password'], 401);
          }
      }else{
          return response()->json(['success'=>false, 'message' => 'invalid email and password'], 401);
      }
  }
}
