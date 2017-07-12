@extends('layouts.nav')

@section('title')
  Sign Up - Unair SOS
@endsection

@section('link')
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="assets/css/form.css">
@endsection

@section('main')
    <div class="row column medium-6 large-5 align-center" id="register">
      <form class="callout text-center" action="/signup" method="post" id="register_email_form">
        <h2>Become A Member</h2>
        <div class="floated-label-wrapper">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="floated-label-wrapper">
          <label for="pass">Password</label>
          <input type="password" id="password" name="password" placeholder="Password">
        </div>
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        <input class="button expanded" type="submit" value="Sign up">
      </form>
    </div>
@endsection

@section('script')
  <script src="assets/js/form.js"></script>
@endsection
