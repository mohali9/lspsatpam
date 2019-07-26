<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Formulir;

class UserProfilController extends Controller
{
	// Menampilkan data dari database
    public function index()
    {
    	$idprofil = \Auth::user()->id;
        $data_profil = Formulir::where('user_id', $idprofil)->first();
        // dd($data_profil);
    	return view('user.profil.index', compact('data_profil'));
    }

    public function edit($id)
    {
        $data_profil = Formulir::find($id);
        return view('user.profil.edit', compact('data_profil'));
    }

    // public function show($id)
    // {
    // 	$data_profil = Formulir::find($id);
    // 	return view('user.profil.show', compact('data_profil'));
    // }
}
