<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pembayaran;

class DataPembayaranController extends Controller
{
    //
	public function index()
	{
		// dd('langsungkenek');
		$kondisiBayar = Pembayaran::with('sertifikasi')->get();
		// dd($kondisiBayar->toArray());
		return view('admin.pembayaran.index', compact('kondisiBayar'));
	}

	public function show($id)
	{
		//menampilkan show tabel pembayaran dari database
		$data = Pembayaran::find($id);
		return view('admin.pembayaran.show', compact('data'));
	}
}
