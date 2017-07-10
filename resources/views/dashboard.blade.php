<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Dashboard - Unair SOS</title>
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

		<main role="main">
				<section class="panel important">
						<h2>Welcome to Your Dashboard </h2>
						<ul>
								<li>Important panel that will always be really wide Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
								<li>Aliquam tincidunt mauris eu risus.</li>
								<li>Vestibulum auctor dapibus neque.</li>
						</ul>
				</section>
				<section class="panel">
						<h2>Agendas</h2>
						<ul>
								<li><b>2458 </b>Agendas</li>
								<li>Coming soon agenda: <b>This is an agenda date</b>.</li>
						</ul>
				</section>
				<section class="panel">
						<h2>More Stats</h2>
						<ul>
								<li>Lorem ipsum dolor sit amet, consectetuer adipiscing.</li>
								<li>Aliquam tincidunt mauris eu risus.</li>
								<li>Vestibulum auctor dapibus neque.</li>
						</ul>
				</section>

				<section class="panel important">
						<h2>Your Schedule</h2>
						<table>
								<tr>
										<th>Id</th>
										<th>Date</th>
										<th>Activity Event</th>
										<th>Location</th>
										<th>Contact Person</th>
										<th>Officer</th>
										<th>Upload Report</th>
								</tr>
								@foreach ($sosialisasi as $sos)
									@if ($sos->petugas_id	==	Auth::user()->id)
										<tr>
												<td>{{ $sos->agendas_id }}</td>
												<td>{{ $sos->tanggal }}</td>
												<td>{{ $sos->kegiatan }}</td>
												<td>{{ $sos->lokasi }}</td>
												<td>{{ $sos->kontak }}</td>
												<td>
													@foreach ($sosialisasi as $sosOfficer)
														@if ($sos->agendas_id == $sosOfficer->agendas_id)
															{{ $sosOfficer->nama }} | {{ $sosOfficer->jabatan }}
															<br>
														@endif
													@endforeach
												</td>
												<td>

													<div class="reveal" id="report-{{ $sos->agendas_id }}" data-reveal>
														<h1>Upload Report</h1>

														@if ($errors->any())
    													<div class="alert alert-danger">
        												<ul>
            										@foreach ($errors->all() as $error)
                									<li>{{ $error }}</li>
            										@endforeach
	        											</ul>
    													</div>
														@endif

														<form action="laporan" method="post" enctype="multipart/form-data">
															<input type="hidden" name="agendas_id" value="{{ $sos->agendas_id }}">
															<label>Detail Activity
															<textarea name="detail" rows="8" cols="80"></textarea>
															<label>Kendala
															<textarea name="kendala" rows="8" cols="80"></textarea>
															<label>Upload Document
															<input type="file" name="laporans[]" multiple>
														</label>
															<input type="submit" class="button" value="Submit">
														</form>
														<button class="close-button" data-close aria-label="Close modal" type="button">
																<span aria-hidden="true">&times;</span>
														</button>
													</div>

													<p><button id="button_id" class="button" data-open="report-{{ $sos->agendas_id }}" value="">Upload report</button></p>
												</td>
										</tr>
									@endif
								@endforeach
						</table>
				</section>

		</main>
		<footer role="contentinfo">Unair SOS</footer>

		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/what-input.js"></script>
		<script src="js/foundation.js"></script>

		<script>
			$(document).foundation();
		</script>

</body>

</html>
