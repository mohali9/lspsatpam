@extends('adminlte::page')
@section('content')

<div class="panel panel-default">
	<div class="modal-body">
		<h2>Jadwal Tempat Uji Kompetensi</h2>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>User_id</th>
					<th>Hari</th>
					<th>Tanggal</th>
					<th>Waktu Mulai</th>
					<th>Waktu Selesai</th>
					<th>Skema Sertifikasi</th>
					<th>Tuk</th>
				</tr>
			</thead>
			@foreach($data_tuk as $tuk)
			<tbody>
				<tr>
					<td>{{$tuk->user_id}}</td>
					<td>{{$tuk->hari}}</td>
					<td>{{$tuk->tanggal}}</td>
					<td>{{$tuk->start_time}}</td>
					<td>{{$tuk->end_time}}</td>
					<td>{{$tuk->daftar_uji}}</td>
					<td>{{$tuk->tuk}}</td>
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
</div>
@endsection