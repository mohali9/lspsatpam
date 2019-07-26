@extends('adminlte::page')

@section('content')

<h1>Pemeliharaan Sertifikat</h1>
<br>

<div class="box">
	<div class="box-header">
		<div class="alert alert-warning">
			<div class="box-title">
				<i class="fa fa-certificate" aria-hidden="true"></i> Pemeliharaan Sertifikat
			</div>
		</div>
	</div>
	
	<div class="box-body">
		<form>
			<div class="form-group">
				<label for="kategori">Pilih yang sesuai</label>
				<select class="form-control" id="kategori-select" onchange="kategori()">
					<option selected="true" value="" disabled="true">Pilih Data</option>
					<option value="pekerjaan">Pekerjaan</option>
					<option value="pelatihan">Pelatihan</option>
					<option value="portofolio">Portofolio</option>
					<option value="assesor">assesor</option>
				</select>
			</div>
		</form>

		<button type="button" id="buttonmodal" onclick="validasi()" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Submit</button>

		<div class="modal fade" id="pekerjaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Nama Perusahaan</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Nama perusahaan tempat anda bekerja">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Jabatan</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Jabatan di tempat kerja">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Nama Atasan / Rekan Kerja</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Nama atasan/rekan kerja yg bisa dihubungi">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Tlp yg bisa dihubungi</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="No telp atasan / rekan kerja yg bisa dihubungi">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Bukti File</label>
								<input type="file" class="form-control" id="exampleFormControlFile1" placeholder="Program studi yang ditempuh">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="pelatihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Nama Pelatihan</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Nama Pelatihan">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Instansi Penyelenggara</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Instansi Penyelenggara">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Bukti File</label>
								<input type="file" class="form-control" id="exampleFormControlFile1" placeholder="Program studi yang ditempuh">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="portofolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Nama Portofolio</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Nama Portofolio">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Link / Website</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Link/website portofolio anda">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Bukti File</label>
								<input type="file" class="form-control" id="exampleFormControlFile1" placeholder="Program studi yang ditempuh">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="assesor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New message</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Nama Instansi</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Nama Portofolio">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Jenjang</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="D3,D4,S1 dsb">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Jurusan</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Program studi yang ditempuh">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Bukti File</label>
								<input type="file" class="form-control" id="exampleFormControlFile1" placeholder="Program studi yang ditempuh">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>

		<div class="row">
			<div class="col-md-12 tablex">
				<div id="table_sertifikat_us_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><table id="table_sertifikat_us" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" data-order="[[5,  &quot;desc&quot;]]" cellspacing="0" width="100%" role="grid" aria-describedby="table_sertifikat_us_info" style="width: 100%;">
					<thead>
						<tr role="row"><th width="5%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 38px;" aria-label="No">No</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 157px;" aria-label="Nama Sertifikat: activate to sort column ascending">Nama Sertifikat</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 85px;" aria-label="No Seri: activate to sort column ascending">No Seri</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 131px;" aria-label="No Sertifikat: activate to sort column ascending">No Sertifikat</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 87px;" aria-label="No Reg: activate to sort column ascending">No Reg</th><th class="sorting_desc" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 100px;" aria-sort="descending" aria-label="Tgl Terbit: activate to sort column ascending">Tgl Terbit</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 150px;" aria-label="Tgl Kadaluarsa: activate to sort column ascending">Tgl Kadaluarsa</th><th width="10%" class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 95px;" aria-label="Aksi">Aksi</th></tr>
					</thead>
					<tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">Data tidak ditemukan</td></tr></tbody>
				</table><div class="pull-left"><div class="dataTables_info" id="table_sertifikat_us_info" role="status" aria-live="polite">Data 0</div></div><div class="pull-right"><div class="dataTables_paginate paging_simple_numbers" id="table_sertifikat_us_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="table_sertifikat_us_previous"><a href="#" aria-controls="table_sertifikat_us" data-dt-idx="0" tabindex="0"><i class="fa fa-chevron-left"></i></a></li><li class="paginate_button next disabled" id="table_sertifikat_us_next"><a href="#" aria-controls="table_sertifikat_us" data-dt-idx="1" tabindex="0"><i class="fa fa-chevron-right"></i></a></li></ul></div></div></div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>

	alert("Anda Belum Pernah Melakukan Pemeliharaan Sertifikat");

	function validasi(){
		var x = document.getElementById("kategori-select").value;
		if (x == "") {
			alert('tidak boleh kosong')
		}
	}
	function kategori() {
		var x = document.getElementById("kategori-select").value;
		console.log(x)
		$("#buttonmodal").attr("data-target","#"+ x)
	}
</script>
@endsection