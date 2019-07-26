@extends('adminlte::page')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

{{-- <div class="box">
	<h2>Konfirmasi Pembayaran</h2>
	<h3>{{$data_pembayaran->nama_depan .' '. $data_pembayaran->nama_belakang}}</h3>

	{{Session::get('nama_depan')}}
	
	<form method="POST" enctype="multipart/form-data" accept-charset="utf-8">
		{{csrf_field()}}
		<br>
		<div class="form-group">
			<label>Nama Penyetor</label>
			<input type="text" class="form-control" name="nama_penyetor">
		</div>

		<div class="form-group">
			<label>Bank</label>
			<input type="text" class="form-control" name="bank">
		</div>

		<div class="form-group">
			<label>Jumlah</label>
			<input type="number" class="form-control" name="jumlah" min="1">
		</div>

		<div class="form-group">
			<label>Foto Bukti</label>
			<input type="file" class="form-control" name="bukti">
			<p class="text-danger">Foto bukti harus jpg maksimal 2MB</p>
		</div>
		<button class="btn btn-primary" name="kirim">Kirim</button>
	</form>

</div> --}}

<div class="col-md-4">
	{{-- {{ dd(Auth::user()->id) }} --}}
	<h2>Pembayaran</h2>
	<h3>{{$data_pembayaran->nama_depan .' '. $data_pembayaran->nama_belakang}}</h3>
	<br>

	@if ($kondisiBayar != NULL)
	<h2 style="color: green"> Sudah dibayar</h2>
	@else

	<form action="{{ route('user.stripe') }}" method="POST">
		{{csrf_field()}}
		<div class="form-row">
			<div class="col-xs-12 form-group required">
				<label for="nama" class="control-label">Nama Kartu Kredit</label>
				<input class="form-control" size="4" type="text" id="nama" name="nama_penyetor" required="">
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-12 form-group card required">
				<label class="control-label">Nomor Kartu</label>
				<input autocomplete="off" class="form-control card-number" size="20" type="number" name="nomor_kartu" required="">
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-4 form-group cvc required">
				<label class="control-label">CVC</label>
				<input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" name="cvc" required="">
			</div>
			<div class="col-xs-4 form-group expiration required">
				<label class="control-label">Expirade Bulan</label>
				<input class="form-control card-expiry-month" placeholder="MM" size="2" type="text" name="bulan" required="">
			</div>
			<div class="col-xs-4 form-group expiration required">
				<label class="control-label">Expirade Tahun</label>
				<input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text" name="tahun" required="">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-12">
				<div class="form-control total btn btn-info">
					Total: <span class="amount">{{ $data_pembayaran->biaya }}</span>
					<input type="hidden" name="biaya" value="{{ $data_pembayaran->biaya }}">
					<input type="hidden" name="biaya_stripe" value="{{ $data_pembayaran->biaya }}00">
					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-12 form-group">
				<button class="form-control btn btn-primary" type="submit" required style="margin-top: 10px;">Pay »</button>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-12 error form-group hide">
				<div class="alert-danger alert">Please correct the errors and try
				again.</div>
			</div>
		</div>
	</form>
	@endif

</div>

@endsection

@section('js')
<script src="https://js.stripe.com/v2" type="text/javascript" charset="utf-8" async defer></script>
<script src="https://js.stripe.com/v2/" type="text/javascript"></script>
@endsection