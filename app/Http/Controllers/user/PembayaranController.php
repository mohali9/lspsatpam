<?php

namespace App\Http\Controllers\user;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pembayaran;
use App\Formulir;

class PembayaranController extends Controller
{
    //Menampilkan data dari table formulir
	public function pembayaran()
	{
		// menampilkan name id user 
		// dd(\Auth::user()->name);

		// $idprofil = \Auth::user()->id;
        // $data_profil = Formulir::where('user_id', $idprofil)->first();

		$idprofil = \Auth::user()->id;
		$data_pembayaran = Formulir::where('user_id', $idprofil)->first();

		// Sudah Bayar
		$kondisiBayar = Pembayaran::where('user_id', Auth::user()->id)->first();

		return view('user.pembayaran.index', compact('data_pembayaran', 'kondisiBayar'));
	}

	public function stripe(Request $request)
	{
		\Stripe\Stripe::setApiKey('sk_test_MX2bAZjmZAfARNrVv1HY1CLz00OOzX5BVR');
		$charge = \Stripe\Charge::create(['amount' => $request->biaya_stripe, 'currency' => 'idr', 'source' => 'tok_visa']);
		
		$pembayaran = \App\Pembayaran::create([
			'user_id' => $request->user_id,
			'nama_penyetor' => $request->nama_penyetor,
			'nomor_kartu' => $request->nomor_kartu,
			'cvc' => $request->cvc,
			'bulan' => $request->bulan,
			'tahun' => $request->tahun,
			'biaya' => $request->biaya
		]);

		return redirect('/user/pembayaran')->with('success','Terimakasih telah melakukan pembayaran!');
	}


	// Insert data ke tabel pembayaran
	// public function buat(Request $request)
	// {
	// 	$bukti = $request->file('bukti')->store('buktis');
	// 	$pembayaran = \App\Pembayaran::create([
	// 		'nama_penyetor' => $request->nama_penyetor,
	// 		'bank' => $request->bank,
	// 		'jumlah' => $request->jumlah,
	// 		'bukti' => $bukti
	// 	]);

	// 	return redirect('/user/pembayaran')->with('success','Terimakasih telah melakukan pembayaran');
	// }

	
}
