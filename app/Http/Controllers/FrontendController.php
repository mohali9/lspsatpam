<?php

namespace App\Http\Controllers;

use DB;
use App\Beranda;
use Illuminate\Http\Request;
use App\Penduduk;

class FrontendController extends Controller
{
    public function index()
    {
    	$beranda = Beranda::all();
    	return view('home.index', compact('beranda'));
    }

    public function ngambilNIK(Request $request, $nik) 
    {

        $hasil = Penduduk::where('NIK', "$nik")->first();

        if($hasil) {
            die(json_encode([
                    'error' => false, 
                    'message' => 'Berhasil', 
                    'data' => $hasil
                ]));
        } else {
            die(json_encode([
                    'error' => true, 
                    'message' => 'Gagal',
                ]));    
        }
    }
}
