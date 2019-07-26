<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulir;
use App\User;
use App\skemapendaftaran;
use Illuminate\Support\Facades\Storage;

class FormulirController extends Controller
{
    public function formulir(Request $request, $id)
    {
        $skema = skemapendaftaran::findOrFail($id);

        return view('home.formulir', compact('skema'));
    }

    public function store(Request $request)
    {
        $cv = $request->file('cv')->store('cvs');
        $ktp = $request->file('ktp')->store('ktps');
        $ijazah = $request->file('ijazah')->store('ijazahs');
        $ijazah_satpam = $request->file('ijazah_satpam')->store('ijazah_satpams');
        $foto = $request->file('foto')->store('fotos');
        $kk = $request->file('kk')->store('kks');
        
        // insert role tabel multi user
        $user = User::create([
            'role' => 'user',
            'name' => $request->nama_depan,
            'email'=> $request->email,
            'password' => bcrypt($request->password)
        ]);

        $formulir = Formulir::create([
            // insert tabel formulir
            'nik' => $request->nik,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => $request->password,
            'cv' => $cv,
            'ktp' => $ktp,
            'ijazah' => $ijazah,
            'ijazah_satpam' => $ijazah_satpam,
            'foto' => $foto,
            'kk' => $kk,
            'biaya' => $request->biaya,
            'user_id' => $user->id
        ]);

        return redirect()->back()->with('success','Pendaftaran Anda Berhasil, Silahkan Login Dan Melakukan Pembayaran');
    }
}
