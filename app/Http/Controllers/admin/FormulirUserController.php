<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Formulir;

class FormulirUserController extends Controller
{
    public function index()
	{
		//menampilkan tabel formulir dari database
		$formulir = Formulir::all();
		return view('admin.formuliruser.index', compact('formulir'));
	}

	public function show($id)
	{
		//menampilkan show tabel formulir dari database
		$data = Formulir::find($id);
		return view('admin.formuliruser.show', compact('data'));
	}
}
