<?php

namespace App\Http\Controllers\Itcube;

use App\Event;
use App\Teacher;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
	public function default()
	{
        $events = Event::latest()->paginate(3);
        $teachers = Teacher::all();

        return view('itcube42.index', compact('events', 'teachers'))->with([
        'i', (request()->input('page', 1) - 1) * 3
    ]);

    }
    
    // public function loader()
    // {
    //     return view('kvant42.loader');
    // }
}