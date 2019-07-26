@extends('home.navigation.master')

@section('content')

<!-- banner -->
<div class="banner" id="home">
	<div class="container">
		<div class="row banner-text">

		</div>
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<h3 class="tittle-w3">Tentang Kami</h3>
				<p class="mt-3">Jasa sekuriti sebagai salah satu sektor profesi ketenagakerjaan, juga mengalami kondisi yang serupa dengan sektor-sektor profesi lainnya, sehingga penting memperhatikan kompetensinya dalam persaingan pasar kerja profesi sekuriti. Mengutip dari pernyataan Hindarto (Ketua Umum Asosiasi Badan Usaha Jasa Pengamanan Indonesia / ABUJAPI, 2014), “Bila tidak dilakukan upaya-upaya antisipasi, nanti tidak heran kalau kantor-kantor atau komplek-komplek perumahan dijaga oleh satpam dari negara-negara yang sudah siap seperti Nepal, Filipina, Thailand atau Malaysia. Sebab negara-negara tersebut telah mempersiapkan tenaga securitynya dengan bekal kompetensi yang mumpuni dan perlindungan melalui sertifikasi profesi", seperti yang tertulis dalam Harian Pikiran Rakyat Online (Klik : http://www.pikiran-rakyat.com/bandung-raya/2014/05/15/281503/usaha-jasa-pengamanan-masih-banyak-yang-ilegal).</p>
			</div> 
			<div class="col-lg-4 col-md-6 about-img">
				<img src="/assets1/images/14.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

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

{{-- <!-- why choose us -->
<section class="choose bg-light py-5">
	<div class="container py-md-3">
		<h3 class="heading mb-5"> What are you looking for?</h3>
		<div class="feature-grids row">
			<div class="col-lg-3 col-sm-6">
				<div class="f1 bg-white icon1 p-4">
					<span class="fa fa-building"></span>
					<h3 class="my-3">Apartments</h3>
					<p>Excepteur sint occaecat non proident maximus.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
				<div class="f1 bg-white icon2 p-4">
					<span class="fa fa-home"></span>
					<h3 class="my-3">Houses</h3>
					<p>Excepteur sint occaecat non proident maximus.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 bg-white icon3 p-4">
					<span class="fa fa-dollar"></span>
					<h3 class="my-3">Properties</h3>
					<p>Excepteur sint occaecat non proident maximus.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 bg-white icon4 p-4">
					<span class="fa fa-cogs"></span>
					<h3 class="my-3">Sales</h3>
					<p>Excepteur sint occaecat non proident maximus.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //why choose us --> --}}

<!-- video -->
<section class="video bg-light py-5" id="visi">
	<div class="container">
		<div class="inner-sec-w3ls py-lg-5 py-3">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="tittle-w3">Visi Misi</h3>
					<p class="mt-4"><b>VISI</b> Menjadi Lembaga Profesi Sertifikasi jasa sekuriti yang mengutamakan kualitas dan memberikan manfaat sebesar-besarnya kepada para stakeholder.<br><br><b>MISI</b>  ✓ Menciptakan tenaga pengamanan / sekuriti yang berkualitas dan professional melalui serangkaian uji sertifikasi kompetensi;
						<br>
					✓ Terwujudnya kerjasama (MOU) dengan semua stakeholder baik negeri maupun swasta.</p>

				</div>
					<!-- <div class="col-lg-6 video-img mt-lg-0 mt-4">
						<img src="images/about.png" alt="" class="img-fluid">
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- //video -->
	
	<!-- Tujuan -->
	<section class="video bg-light py-5" id="tujuan">
		<div class="container">
			<div class="inner-sec-w3ls py-lg-5 py-3">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="tittle-w3">Tujuan</h3>
						<p class="mt-4">✓ Untuk adanya suatu acuan yang sama dalam hal kemampuan yang mencakup pengetahuan, ketrampilan dan sikap kerja minimal yang harus dimiliki oleh seorang tenaga kerja sekuriti yang berlaku secara nasional;
							<br>
						✓ Adanya kesinambungan, konsistensi dalam pembinaan tenaga kerja sekuriti serta sekaligus mengawasi kalitas tenaga kerja sekuriti yang bersangkutan, sehingga tenaga kerja sekuriti dapat melaksanakan tugas dan tanggungjawabnya secara proposional, integral, efektif dan efisien;</p>

					</div>
					<!-- <div class="col-lg-6 video-img mt-lg-0 mt-4">
						<img src="images/about.png" alt="" class="img-fluid">
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- //Tujuan -->

	<!-- Team page -->
	<section class="section py-5" id="struktur">
		<div class="container py-lg-5">
			<h3 class="heading mb-5"> Struktur Organisasi</h3>
			<div class="section_header">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="teamy_preview">
							<img src="/assets1/images/team1.jpg" class="teamy_avatar" alt="The demo photo">
						</div>
						<div class="teamy_content mt-3">
							<h3 class="teamy_name">Dewan Pendiri</h3>

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								Show
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Dewan Pendiri</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul>
												<li>Peter Soewondo (APSI) - Ex Officio</li>
												<li>Elijas Hendrajana, S.H., S.IK., M.Si (POLDA) - Ex Officio</li>
												<li>Cuk Haryanto - By Name</li>
											</ul>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 mt-sm-0 mt-4">
						<div class="teamy_preview">
							<img src="/assets1/images/team2.jpg" class="teamy_avatar" alt="The demo photo">
						</div>
						<div class="teamy_content mt-3">
							<h3 class="teamy_name">Dewan Pengarah</h3>

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
								Show
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Dewan Pengarah</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul>
												<li>Peter Soewondo (APSI) - Ex Officio</li>
												<li>Elijas Hendrajana, S.H., S.IK., M.Si - By Name</li>
												<li>IKG. Ketut Suastawa, S.H (POLDA) - Ex Officio</li>
												<li>Drs. Muhammad Al Irsyad, MM - By Name</li>
												<li>Dr. Harry Soegiri, M.Si</li>
											</ul>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
						<div class="teamy_preview">
							<img src="/assets1/images/team3.jpg" class="teamy_avatar" alt="The demo photo">
						</div>

						<div class="teamy_content mt-3">
							<h3 class="teamy_name">Dewan Pelaksana</h3>
							
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
								Show
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Dewan Pelaksana</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul>
												<li>Direktur : CUK HARYANTO</li>
												<li>Wakil Direktur: AGUS HERMANTO, S.Kom., M.MT., ITIL., COBIT</li>
												<li>MANAGER SERTIFIKASI : Noven Indra Prasetya, S.Kom., M.Kom</li>
												<li>MANAGER ADM. DAN KEU : Fijar Rika Chandra Ayu, SE.</li>
												<li>MANAGER MUTU : Dwi Harini Sulistyawati, S.ST., MT</li>
												<li>MANAGER KOMUNIKASI : Achmad Dhofir</li>
											</ul>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
						<div class="teamy_preview">
							<img src="/assets1/images/team4.jpg" class="teamy_avatar" alt="The demo photo">
						</div>
						<div class="teamy_content mt-3">
							<h3 class="teamy_name">Komite Skema</h3>
							
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
								Show
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Komite Skema</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul>
												<li>POLDA</li>
												<li>BUPJ</li>
												<li>APSI</li>
												<li>M.Junaidi.AR</li>
											</ul>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //Team page -->
	@endsection