<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sertifikasi;

class SertifikasiController extends Controller
{
    //
    public function index()
    {
    	$sertifikasi = Sertifikasi::all();
    	return view('admin.sertifikasi.index', compact('sertifikasi'));
    }

    public function update(Request $request, $id)
    {
    	$sertifikasi = Sertifikasi::find($id);

    	$sertifikasi->update([
    		'status' => $request->status
    	]);

    	return redirect()->back()->with('success','Data Berhasil Di Update');
    }
}
