<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //public function index(Request $request)
    public function index(Request $request)
    {
        // $request->session()->flash('success', 'testing success flash message');
        // $request->session()->flash('warning', 'testing warning flash message');
        // $request->session()->flash('error', 'testing danger flash message');
        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        return view('home', compact('student_checked_ok', 'student_checked_bad'));
    }
}
