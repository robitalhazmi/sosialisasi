<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/css/layout.css">

    @yield('link')

  </head>
  <body>
      <nav id="main">
        <div>Unair SOS</div>
         <div>
           <a href="/">Home</a>
           <a href="/#splash">About</a>
           <a href="/#schedule">Schedule</a>
           @if(Auth::check())
             @if(Auth::user()->email == 'robitalhazmi@gmail.com')
               <a href="dashboard">Admin Panel</a>
             @else
               <a href="dashboard">Dashboard</a>
             @endif
             <a href="logout">Log Out</a>
           @else
             <a href="signup">Sign Up</a>
             <a href="login">Login</a>
           @endif
        </div>
      </nav>

    @yield('main')

    <footer class="colophon grid" id="footer">
      <aside>Binti Lathifatul Qolbi : 081511633012</aside>
      <aside>Ahmad Alif Robit Alhazmi : 081511633038</aside>
    </footer>

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/what-input.js"></script>
    <script src="js/foundation.js"></script>
    <script src="assets/js/footer.js"></script>

    @yield('script')

  </body>
</html>
