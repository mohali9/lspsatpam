<?php

namespace App\Http\Controllers\user;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JadwalTuk;
use App\Formulir;
use App\Sertifikasi;

class TukController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $data_tuk = JadwalTuk::where('user_id', Auth::user()->id)->get();
        $data_formulir = Formulir::where('user_id', $user_id)->first();

        return view('user.tuk.index', compact('data_tuk'));
    }

    // Create Data Masuk ke database
    public function store(Request $request)
    {   
    	// dd($request->all());
        $jadwaltuk = JadwalTuk::create([
          'user_id' => $request->user_id,
          'hari' => $request->hari,
          'tanggal' => $request->tanggal,
          'start_time' => $request->start_time,
          'end_time' => $request->end_time,
          'daftar_uji' => $request->daftar_uji,
          'tuk' => $request->tuk
      ]);

        // Create Tabel Sertifikasi
        // dd($request->all());
        $sertifikasi = Sertifikasi::create([
            'jadwal_tuks_id' => $jadwaltuk->id, // ambil id $jadwaltuk setelah di create
            'user_id' => $request->user_id, // kiri column tabel kanan request name
            'status' => $request->status,
            'pembayaran_id' => $request->id
        ]);

        return redirect()->back()->with('success', 'Jadwal Berhasil Terkirim');
    }

    // public function show($id)
    // {
    // 	$data_tuk = JadwalTuk::find($id);
    // 	return view('user.tuk.index', compact($data_tuk));
    // }
}
