<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use App\Kvantum;
use App\Timetable;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TimetableGlobalController extends Controller
{
	public function index()
	{
		//
	}

	public function show(Timetable $timetable)
	{
		return view('timetables.showtoall', compact('timetable'));
	}
}
