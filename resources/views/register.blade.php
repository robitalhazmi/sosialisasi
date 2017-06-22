@extends('layouts.nav')

@section('title')
  Sign Up - Unair SOS
@endsection

@section('link')
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="assets/css/register.css">
@endsection

@section('main')
    <div class="row column medium-6 large-5 align-center" id="register">
      <form class="callout text-center">
        <h2>Become A Member</h2>
        <div class="floated-label-wrapper">
          <label for="full-name">Full name</label>
          <input type="text" id="full-name" name="full name input" placeholder="Full name">
        </div>
        <div class="floated-label-wrapper">
          <label for="email">Email</label>
          <input type="email" id="email" name="email input" placeholder="Email">
        </div>
        <div class="floated-label-wrapper">
          <label for="pass">Password</label>
          <input type="password" id="pass" name="password input" placeholder="Password">
        </div>
        <input class="button expanded" type="submit" value="Sign up">
      </form>
    </div>
@endsection

@section('script')
  <script src="assets/js/register.js"></script>
@endsection
