<?php

namespace App\Http\Controllers\Itcube;

use App\Http\Controllers\Controller;

class indexController extends Controller
{
	public function default()
	{
        return view('itcube42.index');
    }
    
    // public function loader()
    // {
    //     return view('kvant42.loader');
    // }
}