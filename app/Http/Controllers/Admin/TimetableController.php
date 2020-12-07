<?php

namespace App\Http\Controllers\Admin;

use App\Timetable;
use App\Teacher;
use App\Kvantum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TimetableController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //  Защита ядра по истечению сессии выкидываем в /login
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
        $timetables = Timetable::latest()->paginate(5);

        //$students->getRawOriginal();

        return view('timetables.index',compact('timetables', 'student_checked_ok', 'student_checked_bad'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        $timetables = Timetable::latest()->paginate(5);

        $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();
        $timetables = Timetable::pluck('week_group_id', 'week_group_id')->all();

        //$kvantums = Kvantum::where('id', 'kvantum_name')->get();

        return view('timetables.create' ,compact('teachers', 'kvantums', 'timetables', 'student_checked_ok', 'student_checked_bad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'topic' => 'required',
            'teacher_full_name' => 'required',
            'kvantum_name' => 'required',
            //'week_day' => 'required',
            //'week_time' => 'required',
            'week_group_id' => 'required'
        ];

        $messages = [
            'topic.required' => 'Введите название урока',
            'teacher_full_name.required' => 'Выбирете название квантума',
            'kvantum_name.required' => 'Выбирите педагога',
            //'week_day.required' => 'Выбирете день недели преподавания',
            //'week_time.required' => 'Введите время занятия',
            'week_group_id.required' => 'Введите время занятия'
        ];

        $this->validate($request, $rules, $messages);

        Timetable::create($request->all());

        return redirect()->route('admin.timetables.index')
                        ->with('success','Новое расписание создано успешно.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $timetable)
    {
        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        return view('timetables.show', compact('timetable', 'student_checked_ok', 'student_checked_bad'));
    }

    public function show_to_all(Timetable $timetable)
    {
        //$this->middleware('auth')->false;
        return view('timetables.showtoall', compact('timetable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        // TODO validation
        $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();

        return view('timetables.edit', compact('timetable', 'kvantums', 'teachers', 'student_checked_ok', 'student_checked_bad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
        $timetable->organization = $request->organization;
        $timetable->update($request->all());

        return redirect()->route('admin.timetables.index')
                        ->with('success','Вы успешно обновили текушее расписание педагога ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
        $timetable->delete();

        return redirect()->route('admin.timetables.index')
                        ->with('success','Расписание было успено удалено!');
    }

    public function teachers()
    {
        return $this->hasMany('App\Teacher', 'id');
    }
}