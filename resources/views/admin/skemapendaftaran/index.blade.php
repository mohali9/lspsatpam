@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">

		<h1>Data Skema</h1>
		<br>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah Data
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<form action="{{ url('/admin/skemapendaftaran/tambah') }}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="exampleInputEmail1">Judul</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" name="judul" required="">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail2">Info</label>
								<input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="info" name="info" required="">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea">Skema</label>
								<textarea class="form-control" id="exampleFormControlTextarea" rows="3" name="skema" placeholder="Deskripsi skema" required=""></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail3">Biaya</label>
								<input type="number" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Contoh Rp.800.000,-" name="biaya" required="">
							</div>
							<div class="form-group">
								<label for="exampleFormControlFile1">Masukan File Gambar</label>
								<input type="file" class="form-control-file" id="gambar" name="gambar">
								<small id="gambar" class="form-text text-muted">Format Harus JPG,PNG</small>
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

		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Judul</th>
					<th scope="col">Gambar</th>
					<th scope="col">Info</th>
					<th scope="col">Skema</th>
					<th scope="col">Biaya</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<br>
				<br>
				@foreach($data_skema as $skemapendaftaran)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$skemapendaftaran->judul}}</td>
					<td><img src="{{ asset('storage/'.$skemapendaftaran->gambar) }}" height="100"></td>
					<td>{{$skemapendaftaran->info}}</td>
					<td>{!!$skemapendaftaran->skema!!}</td>
					<td>{{$skemapendaftaran->biaya}}</td>
					<td><a href="/admin/skemapendaftaran/{{$skemapendaftaran->id}}/edit" class="btn btn-warning btn btn-sm">Edit</a></td>
					<td><a href="/admin/skemapendaftaran/{{$skemapendaftaran->id}}/delete" class="btn btn-danger btn btn-sm" onclick="return confirm('Yakin mau dihapus')">Hapus</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection

@section('js')
@endsection