@extends('adminlte::page')

@section('title', 'Lembaga Sertifikasi Profesi')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
  <div class="">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
    @endif
    <div class="modal-body">
      <div class="col-6">
        <h1>Data Beranda</h1>
      </div>

      <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah Data Tentang Kami
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form action="tambah" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar">Masukan File</label>
                    <input name="gambar" type="file" class="form-control-file" id="gambar">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
      <br>

      <table class="table table-hover">
       <tr>
         <th>Judul</th>
         <th>Deskripsi</th>
         <th>Gambar</th>
         <th>Aksi</th>
       </tr>
       @foreach($data_beranda as $beranda)
       <tr>
        <td>{{$beranda->judul}}</td>
        <td>{!!$beranda->deskripsi!!}</td>
        <td><img src="{{ asset('storage/'.$beranda->gambar) }}" alt="" height="100"></td>
        <td><a href="/admin/beranda/{{$beranda->id}}/edit" class="btn btn-warning btn btn-sm">Edit</button></td>
          <td><a href="/admin/beranda/{{$beranda->id}}/delete" class="btn btn-danger btn btn-sm" onclick="return confirm('Yakin mau dihapus')">Hapus</button></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  
  @endsection