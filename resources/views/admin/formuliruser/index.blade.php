@extends('adminlte::page')

@section('title', 'Lembaga Sertifikasi Profesi')

@section('content')
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif
<div class="panel panel-default">
 <div class="panel-heading">
  <h2>Data Tabel Assesmen</h2>
</div>
<div class="panel-body">

  <div class="row">
    <div class="col-12">
      <h3 class="display-4 text-center head-sans-light"></h3>
    </div>
    <div class="col-12">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    </div>
    <div class="col-12">
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    </div>
  </div>

  <table id="table" class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nik</th>
        <th scope="col">Nama</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($formulir as $data)
        <td>{{$loop->index+1}}</td>
        <td>{{$data->NIK }}</td>
        <td>{{ $data->nama_depan .' '. $data->nama_belakang}}</td>
        <td>{{ $data->created_at }}</td>
        <td>
          <div class="dropdown">
            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Action
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('show',$data->id) }}" target="_blank">
              Show Detail
            </a>
            {!! Form::open(['method' => 'DELETE','route' => ['show', $data->id],'style'=>'display:inline']) !!}
            <button type="submit" class="dropdown-item btn-link">
              Delete
            </button>
            {!! Form::close() !!}
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>
@endsection