@extends('adminlte::page')

@section('content')

<div class="panel panel-default">
	<div class="modal-body">
		<h1>Skema Sertifikasi Yang Sudah Diambil</h1>
		<br>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">User_Id</th>
				<th scope="col">Nama</th>
				<th scope="col">Sertifikat</th>
				<th scope="col">Keterangan</th>
			</tr>
		</thead>
		@foreach($data_tuk as $track)
		<tbody>
			<tr>
				<td>{{$track->user_id}}</td>
				<td>{{$track->user->name}}</td>
				<td>{{$track->jadwal_tuk->daftar_uji}}</td>
				<td>{{$track->status}}</td>
			</tr>
		</tbody>
		@endforeach
	</table>
</div>

{{-- No	Nama Sertifikat	No Seri	No Sertifikat	No Reg	Tgl Terbit	Tgl Kadaluarsa	Aksi --}}

@endsection