<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Teacher;
use App\User;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function __construct()
    {
        // Проверка на авторизацию к странице admin/users
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_checked_ok = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
            ->first();

        $student_checked_bad = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
            ->first();

        $users = User::all();
        $teachers = Teacher::all();
        $settings = Settings::all();

        return view('admin.settings.index', compact('student_checked_ok', 'student_checked_bad', 'teachers', 'settings'))->with('users', $users);
    }
}
