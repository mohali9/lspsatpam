@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">
		<form action="/admin/skemapendaftaran/{{ $skemapendaftaran->id }}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="exampleInputEmail1">Judul</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{$skemapendaftaran->judul}}" name="judul">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Info</label>
				<input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="info" value="{{$skemapendaftaran->info}}" name="info">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea">Skema</label>
				<textarea class="form-control" id="exampleFormControlTextarea" rows="3" name="skema">{{$skemapendaftaran->skema}}</textarea>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail3">Biaya</label>
				<input type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Contoh Rp.800.000,-" value="{{$skemapendaftaran->biaya}}" name="biaya">
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Masukan File Gambar</label>
				<input type="file" class="form-control-file" id="gambar" name="gambar">
				{{$skemapendaftaran->gambar}}
				<small id="gambar" class="form-text text-muted">Format Harus JPG,PNG</small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>

@endsection

@section('js')
<script>
	CKEDITOR.replace('skema');
</script>
@endsection