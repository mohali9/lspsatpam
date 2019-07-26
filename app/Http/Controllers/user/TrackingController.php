<?php

namespace App\Http\Controllers\user;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sertifikasi;
use App\JadwalTuk;

class TrackingController extends Controller
{
    public function index()
    {
    	// Ambil user id dari Tabel Sertifikasi
    	$user_id = Auth::user()->id;
        $data_tuk = Sertifikasi::where('user_id', Auth::user()->id)->get();
    	return view('user.tracking.index', compact('data_tuk','data_tuk1'));
    }
}
