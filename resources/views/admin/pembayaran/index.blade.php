@extends('adminlte::page')
@section('content')

<div class="panel panel-default">
	<div class="modal-body">
		<h2>User Yang Sudah Lunas</h2>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">User_ID</th>
					<th scope="col">Nama Penyetor</th>
					<th scope="col">Nomor Kartu</th>
					<th scope="col">Biaya</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<!--Menampilkan Data-->
			@foreach($kondisiBayar as $data)

			<tbody>
				<tr>
					<td>{{$data->user_id}}</td>
					<td>{{$data->nama_penyetor}}</td>
					<td>{{$data->nomor_kartu}}</td>
					<td>{{$data->biaya}}</td>
					<td>
						@if ( count ($data->sertifikasi) )
						<p>Sudah Mengirim Jadwal Sertifikasi</p>
						@else
						<a href="{{route('show.datapembayaran',$data->id)}}" title="" target="_blank">Show</a>
						@endif
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
</div>

@endsection