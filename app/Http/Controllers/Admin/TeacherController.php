<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use App\Student;
use App\Kvantum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TeacherController extends Controller
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
        $teachers = Teacher::latest()->paginate(5);
        return view('teachers.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();

        return view('teachers.create',compact('kvantums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'teacher_full_name' => 'required',
            'teacher_kvantum' => 'required',
            'teacher_desc' => 'required',
        ]);

        //  Проверка на существующую запись в базе данных
        // if (Teacher::where('teacher_full_name', '=', Input::get('teacher_full_name'))->exists()) {
        //     return redirect()->route('teachers.index')
        //                     ->with('success','Преподаватель уже есть в базе данных!');        
        // }

        Teacher::create($request->all());
        
        return redirect()->route('admin.teachers.index')
                        ->with('success','Педагог успешно был создан.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        request()->validate([
            'teacher_full_name' => 'required',
            'teacher_kvantum' => 'required',
            'teacher_desc' => 'required',
        ]);

        $teacher->update($request->all());

        return redirect()->route('admin.teachers.index')
                        ->with('success','Вы успешно обновили педагога.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.teachers.index')
                        ->with('success','Педагог был удален!');
    }
}
