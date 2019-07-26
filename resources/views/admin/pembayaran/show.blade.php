@extends('adminlte::page')
@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">
		<h2>Kirim Jadwal Tuk</h2>
		<br>
		<form action="{{route('store.user')}}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $data->id }}"> <!--ambil dari Datapembayaran-->
			<div class="form-group">
				<label for="hari">Hari</label>
				<input type="text" name="hari" class="form-control" id="hari" required="" placeholder="Hari">
			</div>
			<div class="form-group">
				<label for="tanggal">Tgl</label>
				<input type="date" name="tanggal" class="form-control" id="tanggal" required="">
			</div>
			<div class="form-group">
				<label for="time">Waktu Mulai</label>
				<input type="time" name="start_time" class="form-control" id="time" required="">
			</div>
			<div class="form-group">
				<label for="time">Waktu Selesai</label>
				<input type="time" name="end_time" class="form-control" id="time" required="">
			</div>
			<div class="form-group">
				<label for="daftaruji">Daftar Uji/Skema Sertifikasi</label>
				<input type="text" name="daftar_uji" class="form-control" id="daftaruji" placeholder="">
				<input type="hidden" name="user_id" value="{{ $data->user_id }}">
				<input type="hidden" name="status" value="{{ $data->status }}">
			</div>
			<div class="form-group">
				<label for="tuk">Tempat Uji Kompetensi</label>
				<input type="text" name="tuk" class="form-control" id="tuk" required="">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

@endsection