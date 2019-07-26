@extends('adminlte::page')

@section('content')

<h1>Perpanjangan Sertifikat</h1>
<br>

<div class="box">
	<div class="box-header">
		<div class="alert alert-warning">
			<div class="box-title">
				<i class="fa fa-certificate" aria-hidden="true"></i>
				Perpanjangan Sertifikat
			</div>
		</div>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-sm-3 filter pull-right">
				<div class="input-group">
					<input type="text" id="txt_filter" name="filter" class="form-control" value="" placeholder="Cari...">
					<span class="input-group-btn">
						<button type="button" id="btn_filter" class="btn btn-primary"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 tablex">
				<div id="table_sertifikat_us_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><table id="table_sertifikat_us" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" data-order="[[5,  &quot;desc&quot;]]" cellspacing="0" width="100%" role="grid" aria-describedby="table_sertifikat_us_info" style="width: 100%;">
					<thead>
						<tr role="row"><th width="5%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 38px;" aria-label="No">No</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 157px;" aria-label="Nama Sertifikat: activate to sort column ascending">Nama Sertifikat</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 85px;" aria-label="No Seri: activate to sort column ascending">No Seri</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 131px;" aria-label="No Sertifikat: activate to sort column ascending">No Sertifikat</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 87px;" aria-label="No Reg: activate to sort column ascending">No Reg</th><th class="sorting_desc" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 100px;" aria-sort="descending" aria-label="Tgl Terbit: activate to sort column ascending">Tgl Terbit</th><th class="sorting" tabindex="0" aria-controls="table_sertifikat_us" rowspan="1" colspan="1" style="width: 150px;" aria-label="Tgl Kadaluarsa: activate to sort column ascending">Tgl Kadaluarsa</th><th width="10%" class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 95px;" aria-label="Aksi">Aksi</th></tr>
					</thead>
					<tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">Perpanjang Sertifikat Anda Sebelum Jatuh Tempo Masa Expired</td></tr></tbody>
				</table><div class="pull-left"><div class="dataTables_info" id="table_sertifikat_us_info" role="status" aria-live="polite">Data 0</div></div><div class="pull-right"><div class="dataTables_paginate paging_simple_numbers" id="table_sertifikat_us_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="table_sertifikat_us_previous"><a href="#" aria-controls="table_sertifikat_us" data-dt-idx="0" tabindex="0"><i class="fa fa-chevron-left"></i></a></li><li class="paginate_button next disabled" id="table_sertifikat_us_next"><a href="#" aria-controls="table_sertifikat_us" data-dt-idx="1" tabindex="0"><i class="fa fa-chevron-right"></i></a></li></ul></div></div></div>
			</div>
		</div>
	</div>
</div>

@endsection