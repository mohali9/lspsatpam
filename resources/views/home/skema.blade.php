@extends('home.navigation.master')

@section('content')

<!-- banner -->
<div class="banner inner-banner" id="home">
	<div class="container">

	</div>
</div>
<!-- //banner -->

<!-- Skema Sertifikasi -->
<div class="container" style="margin-top:30px;">
	<div class="row">
		<div class="col-lg skema-card" style="">
			<a data-toggle="modal" href="#index3">
				<div class="card mb-3">
					<div class="card-header">Gada Pratama</div>
					<div class="card-body">
						<h1 class="card-text text-center mt-5 mb-5">
							<img src="/assets1/images/security.jpg" alt="">
						</h1>
					</div>
				</div>
			</a>
		</div>

		<div class="skema-modal modal fade" id="index3" tabindex="-1" role="dialog" aria-labelledby="indexTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header mt-3">

						<center>
							<div class="d-inline-flex">
								<ul class="nav nav-tabs" id="myTab">
									<li class="nav-item">
										<a href="#info3" class="nav-link active" id="info-tab" data-toggle="tab">Info</a>
									</li>
									<li class="nav-item">
										<a href="#skema3" class="nav-link" id="skema-tab" data-toggle="tab">Skema</a>
									</li>
									<li class="nav-item">
										<a href="#cost3" class="nav-link" id="cost-tab" data-toggle="tab">Biaya</a>
									</li>
								</ul>
							</div>
						</center>
					</div>
					<div class="scroll">
						<div class="modal-body">

							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade mt-5 show active text-justify" id="info3">
									Level I - Dasar atau disebut juga Gada Pratama
									Spesifikasi level ini adalah memahami dan mengerjakan tugas, fungsi dan peranan sekuriti sebagai pelaksana tugas pengamanan.
								</div>
								<div class="tab-pane fade mt-5" id="skema3">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Kode Unit</th>
												<th scope="col">Uji Kompetensi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>SEC.PM01.001.01</td>
												<td>Melaksanakan persiapan untuk menjalankan tugas sebagai petugas sekuriti</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>SEC.PM01.002.01</td>
												<td>Melakukan baris-berbaris dan Penghormatan Militer</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>SEC.PM01.003.01</td>
												<td>Melakukan beladiri</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>SEC.PM01.004.01</td>
												<td>Melakukan Pencatatan dan pelaporan</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>SEC.PM01.005.01</td>
												<td>Berkomunikasi melalui telepon</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade mt-5" id="cost3">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">Jenis Biaya</th>
												<th scope="col">Nominal</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Biaya Asesmen</td>
												<td>Rp.700.000</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg skema-card" style="">
			<a data-toggle="modal" href="#index5">
				<div class="card mb-3">
					<div class="card-header">Gada Madya</div>
					<div class="card-body">
						<h1 class="card-text text-center mt-5 mb-5">
							<img src="/assets1/images/security.jpg" alt="">
						</h1>
					</div>
				</div>
			</a>
		</div>

		<div class="skema-modal modal fade" id="index5" tabindex="-1" role="dialog" aria-labelledby="indexTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header mt-3">

						<center>
							<div class="d-inline-flex">
								<ul class="nav nav-tabs" id="myTab">
									<li class="nav-item">
										<a href="#info5" class="nav-link active" id="info-tab" data-toggle="tab">Info</a>
									</li>
									<li class="nav-item">
										<a href="#skema5" class="nav-link" id="skema-tab" data-toggle="tab">Skema</a>
									</li>
									<li class="nav-item">
										<a href="#cost5" class="nav-link" id="cost-tab" data-toggle="tab">Biaya</a>
									</li>
								</ul>
							</div>
						</center>
					</div>
					<div class="scroll">
						<div class="modal-body">

							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade mt-5 show active text-justify" id="info5">
									Spesifikasi level ini adalah memahami dan melaksanakan tugas sebagai Supervisor dalam mengatur tugas, fungsi dan peran sekuriti. Untuk memperoleh sertifikat kompetensi level II, maka seorang peserta UJK mutlak harus memiliki terlebih dahulu sertifikat kompetensi level I.
								</div>
								<div class="tab-pane fade mt-5" id="skema5">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Kode Unit</th>
												<th scope="col">Uji Kompetensi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>SEC.PM01.001.01</td>
												<td>Melaksanakan persiapan untuk menjalankan tugas sebagai petugas sekuriti</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>SEC.PM01.002.01</td>
												<td>Melakukan baris-berbaris dan Penghormatan Militer</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>SEC.PM01.003.01</td>
												<td>Melakukan beladiri</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>SEC.PM01.004.01</td>
												<td>Melakukan Pencatatan dan pelaporan</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>SEC.PM01.005.01</td>
												<td>Berkomunikasi melalui telepon</td>
											</tr>
											<tr>
												<th scope="row">6</th>
												<td>SEC.PM02.001.01</td>
												<td>Mengenal senjata api dan bahan peledak</td>
											</tr>
											<tr>
												<th scope="row">7</th>
												<td>SEC.PM02.002.01</td>
												<td>Mengatur dan menegakkan tata tertib yang berlaku di lingkungan kerja</td>
											</tr>
											<tr>
												<th scope="row">8</th>
												<td>SEC.PM02.003.01</td>
												<td>Melakukan penjagaan untuk mengawasi dan mengamankan keluar masuknya lalu-lintas orang dan barang</td>
											</tr>
											<tr>
												<th scope="row">9</th>
												<td>SEC.PM02.004.01</td>
												<td>Melakukan perondaan / patroli di sekitar kawasan kerja</td>
											</tr>
											<tr>
												<th scope="row">10</th>
												<td>SEC.PM02.005.01</td>
												<td>Mengawal uang, barang-barang berharga dan tahanan</td>
											</tr>
											<tr>
												<th scope="row">11</th>
												<td>SEC.PM02.006.01</td>
												<td>Melakukan tindakan pertama di Tempat Kejadian Perkara/ Tindak Pidana</td>
											</tr>
											<tr>
												<th scope="row">12</th>
												<td>SEC.PM02.007.01</td>
												<td>Menjaga, menggunakan sistem perlindungan dan pendeteksian</td>
											</tr>
											<tr>
												<th scope="row">13</th>
												<td>SEC.PM02.008.01</td>
												<td>Melakukan pencegahan bahaya kebakaran dan ancaman peledakan bom</td>
											</tr>
											<tr>
												<th scope="row">14</th>
												<td>SEC.PM02.009.01</td>
												<td>Menginterpretasikan informasi tanda bahaya</td>
											</tr>
											<tr>
												<th scope="row">15</th>
												<td>SEC.PM02.010.01</td>
												<td>Menentukan dan menggunakan petugas sekuriti yang memadai untuk mengawasi akses menuju dan keluar lokasi</td>
											</tr>
											<tr>
												<th scope="row">16</th>
												<td>SEC.PM02.011.01</td>
												<td>Melakukan Intelijen Dasar</td>
											</tr>
											<tr>
												<th scope="row">17</th>
												<td>SEC.PM02.012.01</td>
												<td>Melakukan Administrasi di kantor</td>
											</tr>
											<tr>
												<th scope="row">18</th>
												<td>SEC.PM02.016.01</td>
												<td>Mengoperasikan perlengkapan dasar komunikasi</td>
											</tr>
											<tr>
												<th scope="row">19</th>
												<td>SEC.PM03.001.01</td>
												<td>Berkomunikasi dalam Bahasa Inggris</td>
											</tr>
											<tr>
												<th scope="row">20</th>
												<td>SEC.PM03.002.01</td>
												<td>Melakukan komunikasi dengan bahasa sandi dan bahasa isyarat</td>
											</tr>
											<tr>
												<th scope="row">21</th>
												<td>SEC.PM03.003.01</td>
												<td>Menangani anjing-anjing untuk patroli</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade mt-5" id="cost5">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">Jenis Biaya</th>
												<th scope="col">Nominal</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Biaya Sertifikasi</td>
												<td>Rp.800.000</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- iki -->
		<div class="col-lg skema-card" style="">
			<a data-toggle="modal" href="#index6">
				<div class="card mb-3">
					<div class="card-header">Gada Utama</div>
					<div class="card-body">
						<h1 class="card-text text-center mt-5 mb-5">
							<img src="/assets1/images/security.jpg" alt="">
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
								</ul>
							</div>
						</center>
					</div>
					<div class="scroll">
						<div class="modal-body">

							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade mt-5 show active text-justify" id="info6">
									Level III - Manajer atau disebut juga Gada Utama <br>
									Spesifikasi pada level ini adalah memahami dan mengamati, menjelaskan,
									mendengar, meringkas dan umpan balik serta memecahkan masalah, selanjutnya membangun kerjasama serta melakukan analisa
									<br>
									Untuk memperoleh sertifikat kompetensi level III, maka seorang peserta UJK mutlak harus memiliki terlebih dahulu sertifikat kompetensi level II, sehingga peserta UJK yang bersangkutan harus menguasai dan lulus unit-unit kompetensi berikut :
								</div>
								<div class="tab-pane fade mt-5" id="skema6">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Kode Unit</th>
												<th scope="col">Uji Kompetensi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>SEC.PM01.001.01</td>
												<td>Melaksanakan persiapan untuk menjalankan tugas sebagai petugas sekuriti</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>SEC.PM01.002.01</td>
												<td>Melakukan baris-berbaris dan Penghormatan Militer</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>SEC.PM01.003.01</td>
												<td>Melakukan beladiri</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>SEC.PM01.004.01</td>
												<td>Melakukan Pencatatan dan pelaporan</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>SEC.PM01.005.01</td>
												<td>Berkomunikasi melalui telepon</td>
											</tr>
											<tr>
												<th scope="row">6</th>
												<td>SEC.PM02.001.01</td>
												<td>Mengenal senjata api dan bahan peledak</td>
											</tr>
											<tr>
												<th scope="row">7</th>
												<td>SEC.PM02.002.01</td>
												<td>Mengatur dan menegakkan tata tertib yang berlaku di lingkungan kerja</td>
											</tr>
											<tr>
												<th scope="row">8</th>
												<td>SEC.PM02.003.01</td>
												<td>Melakukan penjagaan untuk mengawasi dan mengamankan keluar masuknya lalu-lintas orang dan barang</td>
											</tr>
											<tr>
												<th scope="row">9</th>
												<td>SEC.PM02.004.01</td>
												<td>Melakukan perondaan / patroli di sekitar kawasan kerja</td>
											</tr>
											<tr>
												<th scope="row">10</th>
												<td>SEC.PM02.005.01</td>
												<td>Mengawal uang, barang-barang berharga dan tahanan</td>
											</tr>
											<tr>
												<th scope="row">11</th>
												<td>SEC.PM02.006.01</td>
												<td>Melakukan tindakan pertama di Tempat Kejadian Perkara/ Tindak Pidana</td>
											</tr>
											<tr>
												<th scope="row">12</th>
												<td>SEC.PM02.007.01</td>
												<td>Menjaga, menggunakan sistem perlindungan dan pendeteksian</td>
											</tr>
											<tr>
												<th scope="row">13</th>
												<td>SEC.PM02.008.01</td>
												<td>Melakukan pencegahan bahaya kebakaran dan ancaman peledakan bom</td>
											</tr>
											<tr>
												<th scope="row">14</th>
												<td>SEC.PM02.009.01</td>
												<td>Menginterpretasikan informasi tanda bahaya</td>
											</tr>
											<tr>
												<th scope="row">15</th>
												<td>SEC.PM02.010.01</td>
												<td>Menentukan dan menggunakan petugas sekuriti yang memadai untuk mengawasi akses menuju dan keluar lokasi</td>
											</tr>
											<tr>
												<th scope="row">16</th>
												<td>SEC.PM02.011.01</td>
												<td>Melakukan Intelijen Dasar</td>
											</tr>
											<tr>
												<th scope="row">17</th>
												<td>SEC.PM02.012.01</td>
												<td>Melakukan Administrasi di kantor</td>
											</tr>
											<tr>
												<th scope="row">18</th>
												<td>SEC.PM02.013.01</td>
												<td>Melakukan Administrasi keuangan di kantor</td>
											</tr>
											<tr>
												<th scope="row">19</th>
												<td>SEC.PM02.014.01</td>
												<td>Melakukan pemeliharaan dan perawatan asset</td>
											</tr>
											<tr>
												<th scope="row">20</th>
												<td>SEC.PM02.015.01</td>
												<td>Melakukan pengaturan Pyrotechnic</td>
											</tr>
											<tr>
												<th scope="row">21</th>
												<td>SEC.PM02.016.01</td>
												<td>Mengoperasikan perlengkapan dasar komunikasi</td>
											</tr>
											<tr>
												<th scope="row">22</th>
												<td>SEC.PM02.017.01</td>
												<td>Melakukan K3</td>
											</tr>
											<tr>
												<th scope="row">23</th>
												<td>SEC.PM02.018.01</td>
												<td>Melakukan sistem penilaian kerja</td>
											</tr>
											<tr>
												<th scope="row">24</th>
												<td>SEC.PM02.019.01</td>
												<td>Merencanakan sistem dan prosedur</td>
											</tr>
											<tr>
												<th scope="row">25</th>
												<td>SEC.PM02.020.01</td>
												<td>Menyediakan keamanan untuk tamu VIP</td>
											</tr>
											<tr>
												<th scope="row">26</th>
												<td>SEC.PM03.001.01</td>
												<td>Berkomunikasi dalam Bahasa Inggris</td>
											</tr>
											<tr>
												<th scope="row">27</th>
												<td>SEC.PM03.002.01</td>
												<td>Melakukan komunikasi dengan bahasa sandi dan bahasa isyarat</td>
											</tr>
											<tr>
												<th scope="row">28</th>
												<td>SEC.PM03.003.01</td>
												<td>Mengkoordinasikan anak buah dalam upaya memimpin regu atau peleton</td>
											</tr>
											<tr>
												<th scope="row">29</th>
												<td>SEC.PM03.004.01</td>
												<td>Menangani anjing-anjing untuk patroli</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade mt-5" id="cost6">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">Jenis Biaya</th>
												<th scope="col">Nominal</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Biaya Sertifikasi</td>
												<td>Rp.900.000</td>
											</tr>
										</tbody>
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


<!-- Testimonials -->
{{-- <section class="testi py-5">
	<div class="container py-md-3">
		<h3 class="heading text-light mb-5"> Testimonials</h3>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="testimonials">
					<div class="active item">
						<blockquote><p><span class="fa mr-2 fa-quote-left"></span>Nunc elit diam, sodales necet est sed, fringilla laoreet lorem. Nullamr phare tra pharetra gravida. Mauris lorem dictum ligula. Sed molestie augue sodales necet est ipsum.</p></blockquote>
						<div class="carousel-info">
							<img alt="" src="/assets1/images/t1.jpg" class="pull-left">
							<div class="pull-left">
								<span class="testimonials-name">Lina Mars</span>
								<span class="testimonials-post">Real Estate Buyer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
				<div class="testimonials">
					<div class="active item">
						<blockquote><p><span class="fa mr-2 fa-quote-left"></span>Nunc elit diam, sodales necet est sed, fringilla laoreet lorem. Nullamr phare tra pharetra gravida. Mauris lorem dictum ligula. Sed molestie augue sodales necet est ipsum.</p></blockquote>
						<div class="carousel-info">
							<img alt="" src="/assets1/images/t1.jpg" class="pull-left">
							<div class="pull-left">
								<span class="testimonials-name">Lina Mars</span>
								<span class="testimonials-post">Real Estate Buyer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
				<div class="testimonials">
					<div class="active item">
						<blockquote><p><span class="fa mr-2 fa-quote-left"></span>Nunc elit diam, sodales necet est sed, fringilla laoreet lorem. Nullamr phare tra pharetra gravida. Mauris lorem dictum ligula. Sed molestie augue sodales necet est ipsum.</p></blockquote>
						<div class="carousel-info">
							<img alt="" src="/assets1/images/t1.jpg" class="pull-left">
							<div class="pull-left">
								<span class="testimonials-name">Lina Mars</span>
								<span class="testimonials-post">Real Estate Buyer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- //Testimonials -->

<!-- pricing plan -->
{{-- <section class="pricing py-5" id="pricing">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize mb-lg-5 mb-4">Pricing Plans</h3>
		<div class="row pricing-grids">
			<div class="col-lg-3 col-sm-6">
				<div class="pricing-grid1 mb-md-0 mb-sm-5 mb-4">
					<h3>Basic</h3>
					<h4 class="mb-3">10$</h4>
					<p> Extra Features</p>
					<p> Rent / Sell houses</p>
					<p> Properties Sales</p>
					<p> User Rating</p>
					<p class="mb-4"> upto 200$</p>
					<a href="contact.php">Buy Now </a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<div class="pricing-grid1">
					<h3>Standard</h3>
					<h4 class="mb-3">12$</h4>
					<p> Extra Features</p>
					<p> Rent / Sell houses</p>
					<p> Properties Sales</p>
					<p> User Rating</p>
					<p class="mb-4"> upto 200$</p>
					<a href="contact.php">Buy Now </a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-sm-0 mb-4">
				<div class="pricing-grid1">
					<h3>Business</h3>
					<h4 class="mb-3">15$</h4>
					<p> Extra Features</p>
					<p> Rent / Sell houses</p>
					<p> Properties Sales</p>
					<p> User Rating</p>
					<p class="mb-4"> upto 200$</p>
					<a href="contact.php">Buy Now </a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="pricing-grid1">
					<h3>Premium</h3>
					<h4 class="mb-3">20$</h4>
					<p> Extra Features</p>
					<p> Rent / Sell houses</p>
					<p> Properties Sales</p>
					<p> User Rating</p>
					<p class="mb-4"> upto 200$</p>
					<a href="contact.php">Buy Now </a>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- //pricing plan -->
@endsection