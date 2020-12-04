<?php

namespace App\Http\Controllers;

use App\Timetable;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = Timetable::all();
        return view('timetables.showtimes', compact('timetables'));
    }
}
