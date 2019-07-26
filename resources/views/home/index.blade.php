@extends('home.navigation.master')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="/assets1/images/security3.jpg" alt="First slide" style="margin-top: 70px;">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="/assets1/images/security1.jpg" alt="Second slide" style="margin-top: 70px;">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="/assets1/images/security.jpg" alt="Third slide" style="margin-top: 70px;">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- video -->
<section class="video bg-light py-5" id="video">
	<div class="container">
		<div class="inner-sec-w3ls py-lg-5 py-3">
			<div class="row">
				<div class="col-lg-6 video-right px-lg-5 px-2">
					{{-- <h3 class="tittle-w3">Perfect Business Real Estate Agency</h3> --}}
					<p class="mt-4">
						@foreach($beranda as $data)
						<h3 class="tittle-w3">{!! $data->judul !!}</h3>
						{!! $data->deskripsi !!}
						@endforeach
					</p>
				</div>
				<div class="col-lg-6 video-img mt-lg-0 mt-4">
					<img src="{{ asset('storage/'.$data->gambar) }}" alt="" height="">
					{{-- <img src="/assets1/images/right.png" alt="" class="img-fluid"> --}}
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //video -->

<!-- why choose us -->
<section class="choose bg-light py-5">
	<div class="container py-md-3">
		<h3 class="heading mb-5"> Layanan Kami</h3>
		<p>Sebagai sebuah perusahaan yang bergerak dalam bidang usaha Jasa Pengamanan yang dikelola secara profesional dengan dukungan SDM yang handal dan berkompeten, serta didukung oleh sarana dan prasarana yang memadai. maka PATRIA TAMA SURYA INDONESIA memberikan layanan sebagai berikut:</p>
		<div class="feature-grids row">
			<div class="col-lg-3 col-sm-6">
				<div class="f1 bg-white icon1 p-4">
					<span class="fa fa-building"></span>
					<p class="my-3">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
							Konsultasi Keamanan
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Konsultasi Keamanan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										Memberikan jasa kepada pengguna jasa berupa saran, pertimbangan atau pendapat dan membantu dalam pengelolaan tentang cara dan prosedur pengamanan suatu objek.
										<br> 
										• Melakukan jasa penilaian kelayakan pengamanan objek, asset, dan lingkungan. 
										<br>
										• Membuat perencanaan bentuk dasar dan desain pengamanan yang berstruktur dan sistematis sesuai dengan potensi kerawanan objek yang diamankan. 
										<br>• Mengadakan penelitian dan pengembangan tentang cara dan prosedur pengamanan suatu objek.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</p>
					<p>(Security Consultancy)</p>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
				<div class="f1 bg-white icon2 p-4">
					<span class="fa fa-home"></span>
					<p class="my-3">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
							Pelatihan Keamanan
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Pelatihan Keamanan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										sebagai perusahaan terdepan di bidang keamanan sadar bahwa pembangunan kompetensi terhadap satuan pengamanan adalah penting sehingga dibangunlah Training Center sebagai upaya untuk menjamin kualitas sumber daya anggota security yang profesional, memiliki kemampuan memenangkan persaingan di bidang keamanan.Dengan mata pelajaran antara lain: 
										<br>
										<b>Program Security Guard Selama Lapangan (+12 Hari)</b>
										<br>
										PBB. 
										Tata Upacara.
										<br> 
										Senam Tongkat.
										<br>
										Senam Borgol.
										<br>
										Lalu Lintas.
										<br>
										Bela Diri POLRI.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</p>
					<p>(Security Training)</p>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 bg-white icon3 p-4">
					<span class="fa fa-dollar"></span>
					<p class="my-3">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
							Peralatan Keamanan
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Penerapan Peralatan Keamanan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										PATRIA TAMA SURYA INDONESIA juga bekerja sama dengan beberapa perusahaan pemegang lisensi produk, yang bertujuan untuk memasok berbagai jenis peralatan keamanan bagi klien-klien yang membutuhkan.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</p>
					<p>(Security Device)</p>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 bg-white icon4 p-4">
					<span class="fa fa-cogs"></span>
					<p class="my-3">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3">
							Tenaga Keamanan
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Penyedia Tenaga Keamanan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										Anggota Satuan Pengamanan yang telah dibekali dengan kemampuan dan ketrampilan yang berkaitan dengan tugas – tugas pengamanan di lapangan. Sehingga mereka mampu menyelenggarakan keamanan dan ketertiban di lingkungan/tempat kerjanya yang meliputi aspek pengamanan fisik, personel, informasi dan pengamanan teknis lainnya.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</p>
					<p>(Guard Services)</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //why choose us -->

{{-- <!-- Team page -->
<section class="section py-5" id="agents">
	<div class="container py-lg-5">
		<h3 class="heading mb-5"> Our Agents Team</h3>
		<div class="section_header">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="teamy_preview">
						<img src="/assets1/images/team1.jpg" class="teamy_avatar" alt="The demo photo">
					</div>
					<div class="teamy_content mt-3">
						<h3 class="teamy_name">Suzan Lois</h3>
						<span class="teamy_post">Estate Agent</span>
					</div>
					<div class="teamy_back">
						<div class="teamy_back-inner">
							<a href="#0" class="social"> 
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-envelope-open"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mt-sm-0 mt-4">
					<div class="teamy_preview">
						<img src="/assets1/images/team2.jpg" class="teamy_avatar" alt="The demo photo">
					</div>
					<div class="teamy_content mt-3">
						<h3 class="teamy_name">Dora Caelan</h3>
						<span class="teamy_post">Estate Agent</span>
					</div>
					<div class="teamy_back">
						<div class="teamy_back-inner">
							<a href="#0" class="social"> 
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-envelope-open"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
					<div class="teamy_preview">
						<img src="/assets1/images/team3.jpg" class="teamy_avatar" alt="The demo photo">
					</div>    
					<div class="teamy_content mt-3">
						<h3 class="teamy_name">Rosanna</h3>
						<span class="teamy_post">Estate Agent</span>
					</div>
					<div class="teamy_back">
						<div class="teamy_back-inner">
							<a href="#0" class="social"> 
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-envelope-open"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
					<div class="teamy_preview">
						<img src="/assets1/images/team4.jpg" class="teamy_avatar" alt="The demo photo">
					</div>
					<div class="teamy_content mt-3">
						<h3 class="teamy_name">Rose Alpha</h3>
						<span class="teamy_post">Estate Agent</span>
					</div>
					<div class="teamy_back">
						<div class="teamy_back-inner">
							<a href="#0" class="social"> 
								<span class="fa fa-facebook"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="#0" class="social">
								<span class="fa fa-envelope-open"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Team page --> --}}

<!--/Partners-->
{{-- <section class="partners py-5" id="partners">
	<div class="container py-md-3">
		<h3 class="heading text-white mb-5">Our Estate Partners</h3>
		<div class="inner-sec-w3ls">
			<div class="sponsers-icon text-center">
				<ul class="list-unstyled partners-icon row">
					<li class="col-md-2 col-4">
						<i class="fa fa-codepen" aria-hidden="true"></i>
					</li>
					<li class="col-md-2 col-4 border-left border-right">
						<i class="fa fa-lastfm" aria-hidden="true"></i>
					</li>
					<li class="col-md-2 col-4 border-right">
						<i class="fa fa-codiepie" aria-hidden="true"></i>
					</li>
					<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
						<i class="fa fa-drupal" aria-hidden="true"></i>
					</li>
					<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
						<i class="fa fa-dashcube" aria-hidden="true"></i>
					</li>
					<li class="col-md-2 col-4 mt-md-0 mt-3">
						<i class="fa fa-skyatlas" aria-hidden="true"></i>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> --}}
<!-- //Partners -->

@endsection
