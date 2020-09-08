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
        $timetables = Timetable::latest()->paginate(5);

        //$students->getRawOriginal();

        return view('timetables.index',compact('timetables'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();
        $timetables = Timetable::pluck('week_group_id', 'week_group_id')->all();

        //$kvantums = Kvantum::where('id', 'kvantum_name')->get();

        return view('timetables.create' ,compact('teachers', 'kvantums', 'timetables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate([
        //     'kvantum_name' => ''
        // ]);

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
        return view('timetables.show', compact('timetable'));
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
        $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();

        return view('timetables.edit', compact('timetable', 'kvantums', 'teachers'));
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
        $timetable->update($request->all());

        return redirect()->route('admin.timetables.index')
                        ->with('success','Вы успешно обновили текушее расписание');
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
