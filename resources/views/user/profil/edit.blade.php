@extends('adminlte::page')

@section('content')

<!-- banner -->
<div class="banner inner-banner" id="home">
	<div class="container">
		<div class="row banner-text">

		</div>
	</div>
</div>
<!-- //banner -->

<div class="container" style="margin-top:100px;">
	<h1 class="display-4 text-center head-sans-light mb-5">Data Peserta Asesmen</h1>
	<div class="row">
		<div class="col-12">
			@if ($message = Session::get('success'))
			<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				{{ $message }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endif
		</div>
		<div class="col-12">
			@if ($errors->any())
			<div class="alert alert-danger mb-3" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

	<form action="/user/profil/{{$index->id}}/update" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nik">NIK</label>
			<input id="nik" name="nik" placeholder="ex: 1524623548756945" type="text" required="required" class="form-control form-number" maxlength="16" pattern=".{16,}">
			<div class="invalid-feedback">
				Masukkan Data Dengan Benar!
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label for="firstName">Nama Depan</label>
					<input id="firstName" name="nama_depan" type="text" required="required" class="form-control here">
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
				<div class="col-md-6">
					<label for="lastName">Nama Belakang</label>
					<input id="lastName" name="nama_belakang" type="text" required="required" class="form-control here">
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<div>
				<label class="custom-control custom-radio">
					<input name="gender" type="radio" required="required" class="custom-control-input" value="l" checked="checked">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Laki-Laki</span>
				</label>
				<label class="custom-control custom-radio">
					<input name="gender" type="radio" required="required" class="custom-control-input" value="p">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Perempuan</span>
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea id="alamat" name="alamat" cols="40" rows="2" class="form-control" required="required"></textarea>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-12 mb-3">
					<label for="tempat_lahir">Tempat Lahir</label>
					<div>
						<input id="tempat_lahir" name="tempat_lahir" required="required" class="form-control here">
							{{-- @foreach ($jsonskab as $i)
							<option value="{!! $i->nama !!}">{!! $i->nama !!}</option>
							@endforeach --}}
						</input>
					</div>
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input id="tgl_lahir" name="tgl_lahir" type="date" required="required" class="form-control here">
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-12 mb-3">
					<label for="pendidikan_terakhir">Pendidikan Terakhir</label>
					<div>
						<select id="pendidikan_terakhir" name="pendidikan_terakhir" required="required" class="custom-select">
							<option value="sma">SMA/SMK</option>
							<option value="d3">D3</option>
							<option value="s1">D4/S1</option>
							<option value="s2">S2</option>
							<option value="s3">S3</option>
						</select>
					</div>
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
					<label for="berat" class="d-block">Berat Badan</label>
					<input placeholder="0" id="berat" name="berat" type="text" class="form-control form-number d-inline" maxlength="3"
					style="width: 50px;" required>
					<small class="d-inline">Kg</small>
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-6">
					<label for="tinggi" class="d-block">Tinggi Badan</label>
					<input placeholder="0" id="tinggi" name="tinggi" type="text" class="form-control form-number d-inline" maxlength="4"
					style="width: 50px;" required>
					<small class="d-inline">cm</small>
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-4 col-12">
					<label for="no_hp">No. Telp</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fas fa-phone"></i>
						</div>
						<input id="no_hp" name="no_hp" type="text" class="form-control form-number" maxlength="13" required>
						<div class="invalid-feedback">
							Tidak Boleh Kosong!
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-12 mb-3">
					<label for="email">Email</label>
					<input placeholder="contoh@mail.com" id="email" name="email" type="email" class="form-control here" required>
					<div class="invalid-feedback">
						Tidak Boleh Kosong!
					</div>
				</div>
				<div class="col-sm-4 col-12 mb-3">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-12 mb-3">
					<label for="cv">CV<br><small>(PDF, DOC, atau DOCX)</small></label>
					<div class="input-group">
						<label class="input-group-addon bg-info text-light">
							Browse
							<input id="cv" name="cv" type="file" style="display: none;" accept=".doc, .docx,.pdf">
						</label>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<label for="ktp">KTP<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<label class="input-group-addon bg-info text-light">
							Browse
							<input id="ktp" name="ktp" type="file" style="display: none;" accept="image/*,.pdf">
						</label>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-12 mb-3">
					<label for="ijazah">Ijazah Pendidikan<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<label class="input-group-addon bg-info text-light">
							Browse
							<input id="ijazah" name="ijazah" type="file" style="display: none;" accept="image/*,.pdf">
						</label>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<label for="ijazah_satpam">Ijazah Satpam<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<label class="input-group-addon bg-info text-light">
							Browse
							<input id="ijazah_satpam" name="ijazah_satpam" type="file" style="display: none;" accept="image/*,.pdf">
						</label>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-12 mb-3">
					<label for="kk">KK<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<label class="input-group-addon bg-info text-light">
							Browse
							<input id="kk" name="kk" type="file" style="display: none;" accept="image/*,.pdf">
						</label>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<label for="foto">Foto (3x4)<br><small>(PNG atau JPG)</small></label>
					<div class="input-group">
						<label class="input-group-addon bg-info text-light">
							Browse
							<input id="foto" name="foto" type="file" style="display: none;" accept="image/*">
						</label>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-12">
					<button type="submit" class="btn btn-primary center-block mx-auto d-block mt-3">Submit</button>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection