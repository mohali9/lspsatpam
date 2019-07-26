@extends('home.navigation.master')

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
	<h1 class="display-4 text-center head-sans-light mb-5">Formulir Asesmen</h1>
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

	<form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label> Sertifikasi </label>
			<input class="form-control" type="text" value="{{ $skema->judul }}" readonly="">
		</div>
		<div class="form-group">
			<label>Harga Sertifikasi</label>
			<input class="form-control" type="text" value="{{ $skema->biaya }}" readonly="">
		</div>

		<div class="form-group">
			<label for="nik">NIK</label>
			<input id="nik" name="nik" onkeyup="getNik()" placeholder="ex: 1524623548756945" type="number" required="required" class="form-control form-number" maxlength="16" pattern=".{16,}" id="nik">
			<button type="button" class="btn btn-primary">Cari</button>
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
					<input name="gender" type="radio" required="required" class="custom-control-input" value="l" id="laki">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Laki-Laki</span>
				</label>
				<label class="custom-control custom-radio">
					<input name="gender" type="radio" required="required" class="custom-control-input" value="p" id="perempuan">
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
					<label for="tempat_lahir">Tempat Lahir</tempat_lahir>
					<div>
						<input id="tempat_lahir" name="tempat_lahir" tempat_lahir"required" class="form-control here">
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
						<input id="no_hp" name="no_hp" type="number" class="form-control form-number" maxlength="13" required>
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
						<input type="file" id="cv" name="cv" accept=".doc, .docx,.pdf" class="form-control" readonly>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<label for="ktp">KTP<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<input type="file" id="ktp" name="ktp" accept="image/*,.pdf" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-12 mb-3">
					<label for="ijazah">Ijazah Pendidikan<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<input type="file" id="ijazah" name="ijazah" accept="image/*,.pdf" class="form-control" readonly>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<label for="ijazah_satpam">Ijazah Satpam<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<input type="file" id="ijazah_satpam" name="ijazah_satpam" accept="image/*,.pdf" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-12 mb-3">
					<label for="kk">KK<br><small>(PDF, PNG, atau JPG)</small></label>
					<div class="input-group">
						<input type="file" id="kk" name="kk" accept="image/*,.pdf" class="form-control" readonly>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<label for="foto">Foto (3x4)<br><small>(PNG atau JPG)</small></label>
					<div class="input-group">
						<input type="file" id="foto" name="foto" accept="image/*" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<label for="firstName">.</label>
			<input id="firstName" name="biaya" value="{{ $skema->biaya }}" type="hidden" required="required" class="form-control here">
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

<script type="text/javascript">
    function getNik(){
    	var nik = $("#nik").val();
        fetch("/ngambil/nik/"+nik, {
        	method: 'get'
        }).then(function (response) {
        	return response.json()
        }).then(function (result) {
        	if (result.error === false) {
        		$("#firstName").val(result.data.nama_depan)
        		$("#lastName").val(result.data.nama_belakang)
        		$("#alamat").val(result.data.alamat)
        		$("#tempat_lahir").val(result.data.tempat_lahir)
        		$("#tgl_lahir").val(result.data.tgl_lahir)

        		if (result.data.gender.toLowerCase() == 'l') {
        			$("#laki").attr('checked', true);
        		} else {
        			$("#perempuan").attr('checked', true);
        		}
        	}
        });
    }
</script>
@endsection