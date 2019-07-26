@extends('adminlte::page')
@section('content')

<div class="panel panel-default">
    <div class="modal-body">
        <h1 class="display-4 text-center head-sans-light">Data {{$data->nama_depan}}</h1>
        <br>
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
        <div class="table-responsive biodata">
            <table class="table">
                <tr>
                    <td scope="row">Nama Lengkap</td>
                    <td scope="row">:</td>
                    <td>{{ $data->nama_depan.' '.$data->nama_belakang}}</td>
                </tr>
                <tr>
                    <td scope="row">Jenis Kelamin</td>
                    <td scope="row">:</td>
                    <td>
                        @if ($data->gender == 'p')
                        Perempuan
                        @else
                        Laki-Laki
                        @endif
                    </td>
                </tr>
                <tr>
                    <td scope="row">Alamat</td>
                    <td scope="row">:</td>
                    <td style="max-width: 250px;">{{ $data->alamat}}</td>
                </tr>
                <tr>
                    <td scope="row">Tempat, Tanggal Lahir</td>
                    <td scope="row">:</td>
                    <td>{{ $data->tempat_lahir.', '.date("d-m-Y", strtotime($data->tgl_lahir))}}</td>
                </tr>
                <tr>
                    <td scope="row">Pendidikan Terakhir</td>
                    <td scope="row">:</td>
                    <td>{{ $data->pendidikan_terakhir}}</td>
                </tr>
                <tr>
                    <td scope="row">Tinggi Badan</td>
                    <td scope="row">:</td>
                    <td>{{ $data->tinggi}} cm</td>
                </tr>
                <tr>
                    <td scope="row">Berat Badan</td>
                    <td scope="row">:</td>
                    <td>{{ $data->berat}} kg</td>
                </tr>
                <tr>
                    <td scope="row">CV</td>
                    <td scope="row">:</td>
                    <td><a href="{{$data->cv}}" download="" title="">Download CV {{$data->cv}}</a></td>
                </tr>
                <tr>
                    <td scope="row">KTP</td>
                    <td scope="row">:</td>
                    <td><a href="{{$data->ktp}}" download="" title="">Download KTP {{$data->ktp}}</a></td>
                </tr>
                <tr>
                    <td scope="row">IJAZAH</td>
                    <td scope="row">:</td>
                    <td><a href="{{$data->ijazah}}" download="" title="">Donwload IJAZAH {{$data->ijazah}}</a></td>
                </tr>
                <tr>
                    <td scope="row">IJAZAH SATPAM</td>
                    <td scope="row">:</td>
                    <td><a href="{{$data->ijazah_satpam}}" download="" title="">Donwload IJAZAH_SATPAM {{$data->ijazah_satpam}}</a></td>
                </tr>
                <tr>
                    <td scope="row">KK</td>
                    <td scope="row">:</td>
                    <td><a href="{{$data->kk}}" download="" title="">Donwload KK {{$data->kk}}</a></td>
                </tr>
            </table>
        </div>
        <div class="col">
            <img class="f3x4 mx-auto d-block" src="data:image/png;base64, {{ base64_encode($data->foto) }}" alt="">
        </div>
    </div>
</div>
{{-- <div class="row mt-5">
    <div class="col-12">
        <h5>Send Email</h5>
    </div>
    <div class="col-12">
        <h6>To :</h6>
        <input type="text" name="to" id="" class="form-control" value="{{$data->email}}" readonly>
        <h6 class="mt-3">Title :</h6>
        <input type="text" name="title" class="form-control" id="">
        <h6 class="mt-3">Content :</h6>
        {!! Form::textarea('isi', null, array('placeholder' => 'Body','class' => 'form-control note')) !!}
        <button type="submit" class="btn btn-dark btn-sm float-right mt-3">Send</button>
    </div>
</div> --}}

@endsection