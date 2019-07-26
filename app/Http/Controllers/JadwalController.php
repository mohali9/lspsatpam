<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalPendaftaran;

class JadwalController extends Controller
{
    //
    public function index()
    {
    	$jadwal_pendaftaran = JadwalPendaftaran::all();
    	return view('home.jadwal', compact('jadwal_pendaftaran'));
    }
}
