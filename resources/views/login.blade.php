@extends('layouts.nav')

@section('title')
  Login - Unair SOS
@endsection

@section('link')
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="assets/css/form.css">
@endsection

@section('main')
    <div class="row column medium-6 large-5 align-center" id="login">
      <form class="callout text-center" method="post" id="login_form">
        <h2>Login</h2>
        <div class="floated-label-wrapper">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="floated-label-wrapper">
          <label for="pass">Password</label>
          <input type="password" id="password" name="password" placeholder="Password">
        </div>
        <input class="button expanded" type="submit" value="Sign up">
      </form>
    </div>
@endsection

@section('script')
  <script src="assets/js/form.js"></script>
  <script type="text/javascript" src="assets/js/api-json.js"></script>
@endsection
