<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\skemapendaftaran;
use Storage;

class SkemaPendaftaranController extends Controller
{
	 // Menampilkan data dari tabel database
	public function index()
	{
		$data_skema = skemapendaftaran::all();
		return view('admin.skemapendaftaran.index', compact('data_skema'));
	}

	// Insert data ke table database
	public function tambah(Request $request)
	{
		// dd($request->info);
		$gambar = $request->file('gambar')->store('gambars');
		$skemapendaftaran = skemapendaftaran::create([
			'judul' => $request->judul,
			'info' => $request->info,
			'skema' => $request->skema,
			'biaya' => $request->biaya,
			'gambar' => $gambar
		]);
		return redirect('/admin/skemapendaftaran')->with('success','data berhasil ditambah');
	}

	public function edit($id)
	{
		$skemapendaftaran = skemapendaftaran::find($id);
		return view('admin.skemapendaftaran.edit', compact('skemapendaftaran'));
	}

	public function update(Request $request, $id)
	{
		$skemapendaftaran = skemapendaftaran::find($id);
		// Tidak usah upload gambar 
		if ($request->file('gambar') !== null && $request->file('gambar') !== ''){
			Storage::delete($skemapendaftaran->gambar);
		}
		if ($request->hasFile('gambar')) {
			$filename = $request->file('gambar')->store('gambars');
		} else {
			$filename = $skemapendaftaran->gambar;
		}

		// $gambar = $request->file('gambar')->store('gambars');
		$skemapendaftaran->judul = $request->judul;
		$skemapendaftaran->info = $request->info;
		$skemapendaftaran->skema = $request->skema;
		$skemapendaftaran->biaya = $request->biaya;
		$skemapendaftaran->gambar = $filename;
		$skemapendaftaran->save();
		return redirect('/admin/skemapendaftaran')->with('success','data berhasil di edit');
	}

	public function delete($id)
	{
		$skemapendaftaran = skemapendaftaran::find($id);
		$skemapendaftaran->delete();
		return redirect('/admin/skemapendaftaran')->with('success','data berhasil di hapus');
	}
}
