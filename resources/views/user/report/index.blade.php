@extends('adminlte::page')

@section('content')

<h1>Report Asessment</h1>
<br>

<div class="box">
	<div class="box-header">
		<div class="box-title">
			<i class="fa fa-file" aria-hidden="true"></i> Report Asesmen
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
				<div id="table_report_us_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><table id="table_report_us" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" data-order="[[2, &quot;desc&quot;]]" cellspacing="0" width="100%" role="grid" aria-describedby="table_report_us_info" style="width: 100%;">
					<thead>
						<tr role="row"><th width="5%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 38px;" aria-label="No">No</th><th class="sorting" tabindex="0" aria-controls="table_report_us" rowspan="1" colspan="1" style="width: 108px;" aria-label="Skema Sertifikasi: activate to sort column ascending">Skema Sertifikasi</th><th class="sorting_desc" tabindex="0" aria-controls="table_report_us" rowspan="1" colspan="1" style="width: 113px;" aria-sort="descending" aria-label="Tanggal Asesmen: activate to sort column ascending">Tanggal Asesmen</th><th class="sorting" tabindex="0" aria-controls="table_report_us" rowspan="1" colspan="1" style="width: 215px;" aria-label="Kegiatan: activate to sort column ascending">Kegiatan</th><th class="sorting" tabindex="0" aria-controls="table_report_us" rowspan="1" colspan="1" style="width: 28px;" aria-label="TUK: activate to sort column ascending">TUK</th><th class="sorting" tabindex="0" aria-controls="table_report_us" rowspan="1" colspan="1" style="width: 175px;" aria-label="Nama Asesor: activate to sort column ascending">Nama Asesor</th><th width="12%" class="sorting" tabindex="0" aria-controls="table_report_us" rowspan="1" colspan="1" style="width: 94px;" aria-label="Rekomendasi: activate to sort column ascending">Rekomendasi</th><th width="8%" class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 72px;" aria-label="Aksi">Aksi</th></tr>
					</thead>
					<tbody><tr role="row" class="odd"><td tabindex="0">1</td><td>Programming</td><td class="sorting_1">17 Mei 2019</td><td>20190517 - PSKK 2019 Ebiz Surabaya</td><td>Ebiz</td><td>Anang Kukuh Adisusilo. St., Mt</td><td><span class="label label-danger">Belum Kompeten</span> </td><td class=" text-center"><a href="javascript:;" onclick="showDetail(21153)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="fa fa-navicon" aria-hidden="true"></i></a> | <a href="javascript:;" onclick="window.open('https://sertifikasi.lsptik.or.id/modul/mod_report/sksert.php?kode=21153','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')">SKU</a></td></tr></tbody>
				</table><div class="pull-left"><div class="dataTables_info" id="table_report_us_info" role="status" aria-live="polite">Daftar data 1 - 1 dari 1</div></div><div class="pull-right"><div class="dataTables_paginate paging_simple_numbers" id="table_report_us_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="table_report_us_previous"><a href="#" aria-controls="table_report_us" data-dt-idx="0" tabindex="0"><i class="fa fa-chevron-left"></i></a></li><li class="paginate_button active"><a href="#" aria-controls="table_report_us" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="table_report_us_next"><a href="#" aria-controls="table_report_us" data-dt-idx="2" tabindex="0"><i class="fa fa-chevron-right"></i></a></li></ul></div></div></div>
			</div>
		</div>
	</div>
</div>

@endsection