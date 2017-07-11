<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="assets/css/style.processed.css"/>
</head>

<body>
    <header role="banner">
        <h1>Admin Panel</h1>
        <ul class="utilities">
            <li class="home"><a href="/">Home</a></li>
            <li class="logout warn"><a href="logout">Log Out</a></li>
        </ul>
    </header>

		<nav role="navigation">
        <ul class="main">
            <li class="write"><a href="dashboard">Add Agenda</a></li>
            <li class="agenda"><a href="agenda">Agenda</a></li>
        </ul>
		</nav>

		<main role="main">
				<section class="panel important">
					@yield('main')
				</section>

		</main>
		<footer role="contentinfo">Unair SOS</footer>

		@yield('script')

</body>

</html>
