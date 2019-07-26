@extends('home.navigation.master')

@section('content')

<!-- banner -->
<div class="banner inner-banner" id="home">
	<div class="container">
		<div class="row">
			<marquee><h2 style="padding-top:140px; color:#007bff; ">Daftar Sesuai Kriteria Anda</h2></marquee>
		</div>
	</div>
</div>

<!-- Skema Pendaftaran -->
<form action="/show/{{$data_skema->id}}/show" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="container" style="margin-top:30px;">
		<div class="row">

			<!-- iki -->
			<div class="col-md-6 skema-card" style="margin-left:auto; margin-right:auto">
				<a data-toggle="modal" href="#index6">
					<div class="card mb-3">
						<div class="card-header"></div>
						<div class="card-body">
							<h1 class="card-text text-center mt-5 mb-5">
								<img src="/assets1/images/security.jpg" alt="">
								{{-- <img src="{{$data_skema->gambar}}" alt=""> --}}
							</h1>
						</div>
					</div>
				</a>
			</div>

			<div class="skema-modal modal fade" id="index6" tabindex="-1" role="dialog" aria-labelledby="indexTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header mt-3">

							<center>
								<div class="d-inline-flex">
									<ul class="nav nav-tabs" id="myTab">
										<li class="nav-item">
											<a href="#info6" class="nav-link active" id="info-tab" data-toggle="tab">Info</a>
										</li>
										<li class="nav-item">
											<a href="#skema6" class="nav-link" id="skema-tab" data-toggle="tab">Skema</a>
										</li>
										<li class="nav-item">
											<a href="#cost6" class="nav-link" id="cost-tab" data-toggle="tab">Biaya</a>
										</li>
										<br>
										<a href="{{route('formulir.pendaftaran', $data_skema->id)}}" title="" class="btn btn-primary">Daftar</a>
									</ul>
								</div>
							</center>
						</div>
						<div class="scroll">
							<div class="modal-body">

								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade mt-5 show active text-justify" id="info6">{{$data_skema->info}}</div>
									<div class="tab-pane fade mt-5" id="skema6">
										<table class="table">
											<thead>
												<tr>
													{!!$data_skema->skema!!}
												</tr>
											</thead>
										</table>
									</div>
									<div class="tab-pane fade mt-5" id="cost6">
										<table class="table">
											<thead>
												<tr>
													<th scope="col">Biaya Sertifikasi</th>
													<th scope="col">{{$data_skema->biaya}}</th>
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</form>

<!-- Route Id Formulir Pendaftaran -->
<div class="container">
	<div class="row">
		<div class="col text-center">
			<a href="{{route('formulir.pendaftaran', $data_skema->id)}}" title="" class="btn btn-primary">Daftar</a>
		</div>
	</div>
</div>
<br>
<!-- //Properties page -->
@endsection