@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">

		<h1>Sertifikasi</h1>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Jadwal Tuk </th>
					<th scope="col">User</th>
					<th scope="col">Keterangan</th>
				</tr>
			</thead>
			<!--Menampilkan Data-->
			@foreach($sertifikasi as $sert)
			<tbody>
				<tr>
					<td>{{$sert->jadwal_tuk->hari}}, {{ date('d - m - Y ', strtotime($sert->jadwal_tuk->tanggal)) }}</td>
					<td>{{$sert->user->name}}</td>
					{{-- <td>{{$sert->jadwal_tuk->tanggal}}</td> --}}
					{{-- <td>{{\Carbon\Carbon::now()->toDateString()}}</td> --}}
					<td>
						@if ($sert->jadwal_tuk->tanggal < \Carbon\Carbon::now()->toDateString())
						<p style="color:red;">Tidak Mengikuti Sertifikasi</p>
						@elseif ($sert->status == NULL )
						<p style="color:green;">Belum melakukan sertifikasi &nbsp;
							<button data-toggle="modal" data-target="#edit" data-title="Edit" onclick="showEdit(this);" data-item="{{$sert}}" class="btn btn-primary"> <i class="fa fa-edit"></i> Action</button>
						</p>
						@elseif ($sert->status == 'kompeten')
							<p style="color:blue;">KOMPETEN</p>
						@elseif ($sert->status == 'belumkompeten')
							<p style="color:brown;">BELUM KOMPETEN</p>
							@else
						@endif 
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		<!-- Button trigger modal -->
		{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Launch demo modal
		</button> --}}
		
			<!-- Modal -->
			<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form id="formEdit" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
						<div class="modal-body">
							
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="kompeten" checked>
								<label class="form-check-label" for="exampleRadios1">
									Kompeten
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="belumkompeten">
								<label class="form-check-label" for="exampleRadios2">
									Belum Kompeten
								</label>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
						</form>
					</div>
				</div>
			</div>

	</div>
</div>

@endsection

@section('js')

	<script type="text/javascript">
    	function showEdit(button){
	        var item = $(button).data('item');
	        // console.log(item);
	        $('form#formEdit').attr('action','{{ url("admin/sertifikasi") }}/'+item.id+'/update');
	        
	    }
    </script>


@endsection