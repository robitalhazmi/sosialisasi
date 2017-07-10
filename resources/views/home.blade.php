@extends('layouts.nav')

@section('title')
  Unair SOS
@endsection

@section('link')
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/home.processed.css">
@endsection

@section('main')
  <main id="content" class="main-area">
    <div class="logo">Unair SOS</div>
    <h2 class="site-title">Unair Socialization for Schools</h2>
    <div id="hero">
      <div>
        @if(Auth::check())
          @if(Auth::user()->email == 'robitalhazmi@gmail.com')
            <a href="dashboard">Admin Panel</a>
          @else
            <a href="dashboard">Dashboard</a>
          @endif
        @else
          <a href="signup">Sign Up</a>
          <a href="login">Login</a>
        @endif
      </div>
    </div>
    <img src="./assets/img/landing/unair.jpg" alt="Unair Kampus C.">
    <section class="splash grid" id="splash">
      <div class="splash-content">
        <h2 class="content-title">Apa itu Unair SOS?</h2>
        <div class="splash-text">
          <p>Unair Socialization for Schools atau Unair SOS merupakan aplikasi yang mengatur proses sosialisasi ke stakeholder khususnya SMA terkait dengan program penerimaan mahasiswa baru di Universitas Airlangga.</p>
        </div><!-- .splash-text -->
      </div><!-- .splash-content -->
    </section><!-- .splash -->

    <section class="buckets grid">
      <ul>
        <li>
          <img id="online" src="./assets/img//landing/online.jpg" alt="">
          <hr>
          <div class="bucket">
            <h3 class="bucket-title">Ayo daftar sistem online!</h3>
            <p>Petugas sosialisasi dapat melihat jadwal sosialisasi dan menuliskan laporan sosialisasi yang sudah selesai dilaksanakan secara online.</p>
          </div><!-- .bucket -->
        </li>
        <li>
          <img id="agenda" src="./assets/img//landing/agenda.jpg" alt="">
          <hr>
          <div class="bucket">
            <h3 class="bucket-title">Daftar agenda yang terperinci</h3>
            <p>Salah satu fitur Unair SOS adalah daftar agenda sosialisasi selama satu tahun yang terperinci.</p>
          </div><!-- .bucket -->
        </li>
        <li>
          <img id="report" src="./assets/img//landing/report.png" alt="">
          <hr>
          <div class="bucket">
            <h3 class="bucket-title">Unggah laporan hasil sosialisasi</h3>
            <p>Kirim laporan hasil sosialisasi dengan mengunggahnya melalui Unair SOS. Efektif dan efisien</p>
          </div><!-- .bucket -->
        </li>
      </ul>
    </section><!-- .buckets -->

    <section class="more grid" id="schedule">
    <div class="more-content">
      <h2 class="content-title">Sosialisasi tahun ini</h2>
      <table>
      	<tr>
      		<th>Id</th>
      		<th>Date</th>
      		<th>Activity</th>
      		<th>Contact Person</th>
      		<th>Location</th>
      		<th>Officer</th>
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
      								{{$sos->nama}}
      								<br>
      							@endif
      						@endforeach
      					</td>
      					</td>
      			</tr>
      		@endforeach
      	</table>
    </div><!-- .more-content -->
  </section><!-- .more -->

  </main>
@endsection
