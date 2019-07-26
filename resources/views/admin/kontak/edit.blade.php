@extends('adminlte::page')

@section('title', 'Lembaga Sertifikasi Profesi')

@section('content')
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif
  <div class="">
    <div class="modal-body">
      <form action="/admin/kontak/{{$kontak->id}}/update" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$kontak->nama}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" value="{{$kontak->email}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">No_Tlp</label>
          <input name="tlp" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Tlp" value="{{$kontak->tlp}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Deskripsi</label>
          <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$kontak->pesan}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Masukan File</label>
          <input name="gambar" type="file" class="form-control-file" id="gambar">
          {{$kontak->gambar}}
        </div>
          {{-- @foreach($data_kontak as $kontak)
          <td><img src="{{ asset('storage/'.$kontak->gambar) }}" alt="" height="100"></td>
          @endforeach --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
<script>
  CKEDITOR.replace('pesan');
</script>
@endsection