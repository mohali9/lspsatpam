<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Beranda;

class BerandaController extends Controller
{
    // Menampilkan data dari database
    public function beranda()
    {
    	$data_beranda = Beranda::all();
    	return view('admin.beranda.index', ['data_beranda' => $data_beranda]);
    }

    public function tambah(Request $request)
    {
        $gambar = $request->file('gambar')->store('gambars');
        $beranda = Beranda::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ]);
        return redirect('/admin/beranda')->with('sukses','data berhasil ditambah');
    }

    public function edit($id)
    {
    	$beranda = Beranda::find($id);
    	return view('/admin/beranda.edit',['beranda' => $beranda]);
    }

    public function update(Request $request, $id)
    {
    	$beranda = Beranda::find($id);
        
        $gambar = $request->file('gambar')->store('gambars');
        $beranda->judul = $request->judul;
        $beranda->deskripsi = $request->deskripsi;
        $beranda->gambar = $gambar;
        $beranda->save();
        return redirect('/admin/beranda')->with('sukses','data berhasil di update');
    }

    public function delete($id)
    {
    	$beranda = Beranda::find($id);
    	$beranda->delete();
    	return redirect('/admin/beranda')->with('sukses','data berhasil di hapus');
    }
}
