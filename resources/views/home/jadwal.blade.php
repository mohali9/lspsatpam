@extends('home.navigation.master')

@section('content')

<!-- banner -->
<div class="banner inner-banner">
	
</div>
<h1 style="color:blue; text-align: center">Jadwal Pendaftaran Assessment</h1>
<br>
<table class="table" style="margin-left:auto; margin-right: auto;">
	<thead class="thead-light">
		<tr>
			<th scope="col">No</th>
			<th scope="col">Sertifikasi</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Kegiatan</th>
		</tr>
	</thead>
	@foreach($jadwal_pendaftaran as $jadwal)
	<tbody>
		<tr>
			<th scope="row">{{$loop->index+1}}</th>
			<td>{{$jadwal->sertifikasi}}</td>
			<td>{{$jadwal->tgl}}</td>
			<td>{{$jadwal->kegiatan}}</td>
		</tr>
	</tbody>
	@endforeach
</table>

<br>
<img src="{{ asset('storage/'.$jadwal->gambar) }}" style="max-width:60%; display:block; margin-left:auto; margin-right: auto;" class="img-fluid" alt="Responsive image">
<br>
@endsection