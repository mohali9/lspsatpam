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
        <h1>Data kontak</h1>
      </div>
      <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
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
                <form action="buat" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" required="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" required="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No_Tlp</label>
                    <input name="tlp" type="text" class="form-control" required="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Tlp">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea name="pesan" class="form-control" required="" id="exampleFormControlTextarea1" rows="3"></textarea>
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
         <th>Nama</th>
         <th>Email</th>
         <th>Tlp</th>
         <th>Pesan</th>
         <th>Gambar</th>
         <th>Aksi</th>
       </tr>
       @foreach($data_kontak as $kontak)
       <tr>
        <td>{{$kontak->nama}}</td>
        <td>{{$kontak->email}}</td>
        <td>{{$kontak->tlp}}</td>
        <td>{!!$kontak->pesan!!}</td>
        <td><img src="{{ asset('storage/'.$kontak->gambar) }}" alt="" height="100"></td>
        <td><a href="/admin/kontak/{{$kontak->id}}/edit" class="btn btn-warning btn btn-sm">Edit</a></td>
        <td><a href="/admin/kontak/{{$kontak->id}}/delete" class="btn btn-danger btn btn-sm" onclick="return confirm('Yakin mau dihapus')">Hapus</a></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
</div>
@endsection