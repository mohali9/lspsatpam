@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">
		<h1>Buka Jadwal Pendaftaran</h1>
		<br>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah Jadwal Pendaftaran
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{route('jadwal.store')}}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="sertifikasi">Sertifikasi</label>
								<input type="text" name="sertifikasi" class="form-control" id="sertifikasi">
							</div>
							<div class="form-group">
								<label for="tgl">Tanggal</label>
								<input type="date" name="tgl" class="form-control" id="tgl">
							</div>
							<div class="form-group">
								<label for="kegiatan">Kegiatan</label>
								<input type="text" name="kegiatan" class="form-control" id="kegiatan">
							</div>
							<div class="form-group">
								<label for="gambar">gambar</label>
								<input type="file" name="gambar" class="form-control" id="gambar">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>

		<table class="table">
			<thead>
				<tr>
					<th>SERTIFIKASI</th>
					<th>TANGGAL</th>
					<th>KEGIATAN</th>
					<th>GAMBAR</th>
					<th>AKSI</th>
				</tr>
			</thead>
			@foreach ($jadwal_pendaftaran as $jadwal)
			<tbody>
				<tr>
					<td>{{$jadwal->sertifikasi}}</td>
					<td>{{$jadwal->tgl}}</td>
					<td>{{$jadwal->kegiatan}}</td>
					<td><img src="{{ asset('storage/'.$jadwal->gambar) }}" title="" height="100"></td>
					<td>
						<a href="/admin/jadwalpendaftaran/{{$jadwal->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
					</td>
					<td>
						<a href="/admin/jadwalpendaftaran/{{$jadwal->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

	</div>
</div>


@endsection