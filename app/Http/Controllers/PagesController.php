<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
	public function new()
	{
		echo "My name is TEE!!";
		return view::('new');
	}

}
