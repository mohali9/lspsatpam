<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JadwalPendaftaran;
use Storage;

class JadwalPendaftaranController extends Controller
{
    //
	public function index()
	{
		$jadwal_pendaftaran = JadwalPendaftaran::all();
		return view('admin.jadwalpendaftaran.index', compact('jadwal_pendaftaran'));
	}

	public function store(Request $request)
	{
		// dd($request->all());
		$gambar = $request->file('gambar')->store('gambars');
		$jadwal_pendaftaran = JadwalPendaftaran::create([
			'sertifikasi' => $request->sertifikasi,
			'tgl' => $request->tgl,
			'kegiatan' => $request->kegiatan,
			'gambar' => $gambar
		]);

		return redirect()->back()->with('success','Jadwal Pendaftaran Berhasil Ditambah');
	}

	public function edit($id)
	{
		$jadwal_pendaftaran = JadwalPendaftaran::find($id);
		return view('admin.jadwalpendaftaran.edit', compact('jadwal_pendaftaran'));	
	}

	public function update(Request $request, $id)
	{
		$jadwal_pendaftaran = JadwalPendaftaran::find($id);
		// Tidak usah upload gambar 
		if ($request->file('gambar') !== null && $request->file('gambar') !== ''){
			Storage::delete($jadwal_pendaftaran->gambar);
		}
		if ($request->hasFile('gambar')) {
			$filename = $request->file('gambar')->store('gambars');
		} else {
			$filename = $jadwal_pendaftaran->gambar;
		}

		// $gambar = $request->file('gambar')->store('gambars');
		$jadwal_pendaftaran->sertifikasi = $request->sertifikasi;
		$jadwal_pendaftaran->tgl = $request->tgl;
		$jadwal_pendaftaran->kegiatan = $request->kegiatan;
		$jadwal_pendaftaran->gambar = $filename;
		$jadwal_pendaftaran->save();

		return redirect('/admin/jadwalpendaftaran')->with('success','Jadwal Berhasil Di Update');
	}

	public function delete($id)
	{
		$jadwal_pendaftaran = JadwalPendaftaran::find($id);
		$jadwal_pendaftaran->delete();
		return redirect()->back()->with('success','Data Berhasil Dihapus');
	}
}
