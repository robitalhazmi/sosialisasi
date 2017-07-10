@extends('layouts.adminLayout')

@section('title')
	Admin Panel - Unair SOS
@endsection

@section('main')
	<h2>Add a agenda</h2>
	<form action="agenda" method="post">
			<div class="twothirds">
					<label for="date">Date:</label>
					<input type="date" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" name="date" id="date" placeholder="Please use the YYYY-MM-DD format." required>

					<label for="body">Activity Event:</label>
					<textarea cols="40" rows="8" name="activity" id="activity"></textarea required>

					<label for="Location">Location:</label>
					<input type="text" name="location" id="location" placeholder="Institution name" required>

					<label for="phone">Contact Person:</label>
					<input type="tel" pattern="^[0-9\-\+\s\(\)]*$" name="phone" id="phone" placeholder="Phone Number" required>

					<input type="submit" value="Submit" />

			</div>
	</form>
@endsection
