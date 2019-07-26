@extends('adminlte::page')

@section('title', 'Lembaga Sertifikasi Profesi')

@section('content')
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif

<div class="">
  <div class="">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
    @endif

    <div class="modal-body">
      <form action="/admin/beranda/{{ $beranda->id }}/update" method="POST" enctype="multipart/form-data">

        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputEmail1">Judul</label>
          <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{$beranda->judul}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Deskripsi</label>
          <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">
            {{$beranda->deskripsi}}
          </textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Masukan File</label>
          <input name="gambar" type="file" class="form-control-file" id="gambar">
          {{$beranda->gambar}}
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Update</button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection

@section('js')
<script>
  CKEDITOR.replace('deskripsi');
</script>
@endsection