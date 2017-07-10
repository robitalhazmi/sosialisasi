<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Add Agenda - Unair SOS</title>
		<link rel="stylesheet" href="assets/css/style.processed.css" />
</head>

<body>
    <header role="banner">
        <h1>Admin Panel</h1>
        <ul class="utilities">
            <li class="home"><a href="/">Home</a></li>
            <li class="users"><a href="edit-account.html">My Account</a></li>
            <li class="logout warn"><a href="logout">Log Out</a></li>
        </ul>
    </header>

		<nav role="navigation">
        <ul class="main">
            <li class="write"><a href="adminPanel">Add Agenda</a></li>
            <li class="edit"><a href="manage-posts.html">Edit Agendas</a></li>
            <li class="users"><a href="manage-users.html">Manage Users</a></li>
        </ul>
		</nav>

		<main role="main">
				<section class="panel important">
						<h2>Add a agenda</h2>
						<form action="#">
								<div class="twothirds">
										<label for="date">Date:</label>
										<input type="date" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" name="date" id="date" placeholder="Please use the YYYY-MM-DD format." required>

										<label for="body">Activity Event:</label>
										<textarea cols="40" rows="8" name="activity" id="activity"></textarea required>

                    <label for="Location">Location:</label>
                    <input type="text" name="institute" id="institute" placeholder="Institute name" required>
                    <br>
                    <input type="text" name="location" id="location" placeholder="City" required>

                    <label for="cp">Contact Person:</label>
                    <input type="tel" pattern="[\+]\d{14}" name="telephone" id="telephone" placeholder="Phone Number (Format: +xxxxxxxxxxxxxx)" required>

								</div>
								<div class="onethird">

										<label for="officer">Officer:</label>
										<select name="officer" id="officer">
											<option value="Choice 1">Mr. Agus</option>
											<option value="Choice 2">Mr. Imam</option>
											<option value="Choice 3">Mrs. Fatma</option>
										</select>

										<input type="submit" value="Submit" />

								</div>
						</form>
				</section>

		</main>
		<footer role="contentinfo">Unair SOS</footer>
</body>

</html>
