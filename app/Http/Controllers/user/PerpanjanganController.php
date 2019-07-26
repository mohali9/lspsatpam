<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerpanjanganController extends Controller
{
    public function index()
    {
    	return view('user.perpanjangan.index');
    }
}
