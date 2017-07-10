<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
    <link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="assets/css/style.processed.css" />
</head>

<body>
		<header role="banner">
				<h1>Dashboard</h1>
				<ul class="utilities">
						<li class="home"><a href="/">Home</a></li>
						<li class="logout warn"><a href="logout">Log Out</a></li>
				</ul>
		</header>

		<nav role="navigation">
				<ul class="main">
						<li class="dashboard"><a href="dashboard">Dashboard</a></li>
						<li class="edit"><a href="profile">Edit Profile</a></li>
				</ul>
		</nav>

    @yield('main')

		<footer role="contentinfo">Unair SOS</footer>

		@yield('script')

</body>

</html>
