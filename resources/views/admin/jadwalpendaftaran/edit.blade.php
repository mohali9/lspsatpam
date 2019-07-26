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
		<form action="/admin/jadwalpendaftaran/{{$jadwal_pendaftaran->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="sertifikasi">Sertifikasi</label>
				<input type="text" name="sertifikasi" class="form-control" id="sertifikasi" value="{{$jadwal_pendaftaran->sertifikasi}}">
			</div>
			<div class="form-group">
				<label for="tgl">Tanggal</label>
				<input type="date" name="tgl" class="form-control" id="tgl" value="{{$jadwal_pendaftaran->tgl}}">
			</div>
			<div class="form-group">
				<label for="kegiatan">Kegiatan</label>
				<input type="text" name="kegiatan" class="form-control" id="kegiatan" value="{{$jadwal_pendaftaran->kegiatan}}">
			</div>
			<div class="form-group">
				<label for="gambar">gambar</label>
				<input type="file" name="gambar" class="form-control" id="gambar">
				{{$jadwal_pendaftaran->gambar}}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>

@endsection