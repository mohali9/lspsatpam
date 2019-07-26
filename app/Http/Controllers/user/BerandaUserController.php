<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Formulir;

class BerandaUserController extends Controller
{
    public function index()
    {
    	$id_beranda = \Auth::user()->id;
        $data_beranda = Formulir::where('id', $id_beranda)->first();
    	return view('user.beranda.index', compact('data_beranda'));
    }
}
