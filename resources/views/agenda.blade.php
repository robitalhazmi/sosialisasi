@extends('layouts.adminLayout')

@section('title')
	Admin Panel - Unair SOS
@endsection

@section('main')
<h2>Sosialization Schedule</h2>
<table>
	<tr>
		<th>Id</th>
		<th>Date</th>
		<th>Activity</th>
		<th>Contact Person</th>
		<th>Location</th>
		<th>Officer</th>
		<th>Add Officer</th>
	</tr>
		@foreach ($agenda as $agendaValue)
			<tr>
					<td>{{ $agendaValue->id }}</td>
					<td>{{ $agendaValue->tanggal }}</td>
					<td>{{ $agendaValue->kegiatan }}</td>
					<td>{{ $agendaValue->kontak }}</td>
					<td>{{ $agendaValue->lokasi }}</td>
					<td>
						@foreach ($sosialisasi as $sos)
							@if ($sos->agendas_id == $agendaValue->id)
								{{$sos->nama}} | {{$sos->jabatan}}
								<br>
							@endif
						@endforeach
					</td>
					<td><p><button id="button_id" class="button" data-open="modal-{{ $agendaValue->id }}" value="{{ $agendaValue->id }}">Add officer</button></p>
					</td>

					<div class="reveal" id="modal-{{ $agendaValue->id }}" data-reveal>
						<h1>Add Officer</h1>
						<form action="petugas" method="post">
							<input type="hidden" name="agendas_id" value="{{ $agendaValue->id }}">
							<label>Select Officer
							<select name="petugas_id">
								@foreach ($petugas as $petugasValue)
									<option value="{{ $petugasValue->id }}">{{ $petugasValue->nama }}</option>
								@endforeach
							</select>
							<label>Select Position
							<select name="jabatan">
								<option value="ketua">Manager</option>
								<option value="anggota">Member</option>
							</select>
						</label>
							<input type="submit" class="button" value="Submit">
						</form>
						<button class="close-button" data-close aria-label="Close modal" type="button">
								<span aria-hidden="true">&times;</span>
						</button>
					</div>
			</tr>
		@endforeach
	</table>
@endsection

@section('script')
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/what-input.js"></script>
	<script src="js/foundation.js"></script>

	<script>
		$(document).foundation();
	</script>


@endsection
