<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

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

  public function postRegister(Request $request)
  {
      $email = $request->input('email');
      $pass = $request->input('password');
      $confirm_pass = $request->input('confirm_password');
      if($email != null){
          if($pass == $confirm_pass){
              $user = new User();
              $user->email = $email;
              $user->password = Crypt::encrypt($pass);

              $data = User::where('email', $email)->get()->count();

              if($data == 0){
                  /*Mail::send('email', ['token'=>$user->password], function($send) use($email)  {
                      $send->to($email)->subject('Verifikasi alamat email yang telah didaftarkan');
                      $send->from('the.enumeration@gmail.com', 'Pendaftaran Enumeration');
                  });*/

                  $user->save();
                  $token = str_random(32);
                  User::where('email', $email)->update(['remember_token' => $token]);
              }else{
                  $token = User::where('email', $email)->first()->remember_token;
              }
              return response()->json(['success'=>true, 'message'=>'Successfull Register!'])->header('token', $token);
          }else{
              return response()->json(['success'=>false, 'message'=>'Password and Confirm Password not same']);
          }
      }else{
          return response()->json(['success'=>false, 'message'=>'Invalid post Data']);
      }
  }
}
