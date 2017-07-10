<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Edit Profile - Unair SOS</title>
		<link rel="stylesheet" href="assets/css/style.processed.css" />
</head>

<body>
    <header role="banner">
        <h1>Edit Profile</h1>
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

		<main role="main">
				<section class="panel important">
						<h2>Edit a profile</h2>
						<form action="profile" method="post">
								<div class="twothirds">
                    <label for="Location">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Your name" value="{{ $profile['nama'] }}" required>

                    <label for="cp">Phone Number:</label>
                    <input type="tel" pattern="^[0-9\-\+\s\(\)]*$" name="phone" id="phone" placeholder="Phone Number" value="{{ $profile['telepon'] }}" required>

										<label for="date">Born Date:</label>
										<input type="date" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" name="born" id="born" placeholder="Please use the YYYY-MM-DD format." value="{{ $profile['tgl_lahir'] }}" required>

								</div>
								<div class="onethird">

										<label for="gender">Gender:</label>
										<select name="gender" id="gender" required>
											<option selected disabled>Choose here</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>

										<input type="submit" value="Submit" />

								</div>
						</form>
				</section>

		</main>
		<footer role="contentinfo">Unair SOS</footer>
</body>

</html>
