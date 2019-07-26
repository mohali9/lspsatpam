<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkemaController extends Controller
{
	public function skema()
	{
		return view('home.skema');
	}
}
