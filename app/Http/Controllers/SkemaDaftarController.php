<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skemapendaftaran;

class SkemaDaftarController extends Controller
{
	//
    public function index()
    {
    	$data_skema = skemapendaftaran::all();
    	return view('home.skemadaftar', compact('data_skema'));
    }

    public function show($id)
    {
    	$data_skema = skemapendaftaran::find($id);
    	return view('home.show', compact('data_skema'));
    }

 //    public function update(Request $request, $id)
	// {
	// 	$data_skema = data_skema::find($id);

	// 	$gambar = $request->file('gambar')->store('gambars');
	// 	$data_skema->judul = $request->judul;
	// 	$data_skema->info = $request->info;
	// 	$data_skema->skema = $request->skema;
	// 	$data_skema->biaya = $request->biaya;
	// 	$data_skema->gambar = $gambar;
	// 	$data_skema->save();
	// 	return redirect('home.show');
	// }
}
