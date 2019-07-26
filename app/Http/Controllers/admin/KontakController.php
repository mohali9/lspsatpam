<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Kontak;

class KontakController extends Controller
{
	public function kontak()
	{
		$data_kontak = \App\Kontak::all();
		return view('admin.kontak.index', ['data_kontak' => $data_kontak]);
	}

	public function buat(Request $request)
	{
		$gambar = $request->file('gambar')->store('gambars');
		$kontak = \App\Kontak::create([
			'nama' => $request->nama,
			'email' => $request->email,
			'tlp' => $request->tlp,
			'pesan' => $request->pesan,
			'gambar' => $gambar
		]);

		return redirect('/admin/kontak')->with('sukses','data kontak berhasil ditambah');
	}

	public function edit($id)
	{
		$kontak = \App\Kontak::find($id);
		return view('admin.kontak.edit',['kontak' => $kontak]);
	}

	public function update(Request $request,$id)
	{
		$kontak = \App\Kontak::find($id);

		$gambar = $request->file('gambar')->store('gambars');
		$kontak->nama = $request->nama;
		$kontak->email = $request->email;
		$kontak->tlp = $request->tlp;
		$kontak->pesan = $request->pesan;
		$kontak->gambar = $gambar;
		$kontak->save();

		return redirect('/admin/kontak')->with('sukses','data kontak berhasil di update');
	}

	public function delete($id)
	{
		$kontak = \App\Kontak::find($id);
		$kontak->delete();
		return redirect('/admin/kontak')->with('sukses','data berhasil di hapus');
	}
}
