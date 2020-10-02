<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use App\Student;
use App\Kvantum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

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
        $students = Student::all();
        $teachers_a = Student::pluck('organization','organization')->all();

        // $total_student_in_teacher = DB::table('students')
        // ->selectRaw('count(*) as total')
        // //->selectRaw("count(case when teacherName = 'Смагин Константин Николаевич' then 1 end) as id")
        // ->first();

        // $totalCheck0 = $students = Student::pluck('teacherName','teacherName')->all();
        // $totalCheck1 = $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();

        // $ok_bla = $totalCheck0 == $totalCheck1;

        // $total_student_in_teacher_0 = DB::table('students') 
        // ->selectRaw('count(*) as total')
        // ->selectRaw("count(case when teacherName = $ok_bla then 1 end) as id")
        // ->first();

        // $total_student_in_teacher_1 = DB::table('students') 
        // ->selectRaw('count(*) as total')
        // ->selectRaw("count(case when teacherName = 'Сергеев Василий Александрович' then 1 end) as id")
        // ->first();

        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();
        // $teachers_kvantum = Teacher::whereHas('kvantums', function($query) {
        //     $query->whereId(request()->input('teacher_kvantum', 0));
        // })
        // ->pluck('teacher_full_name', 'id');

        $teachers = Teacher::latest()->paginate(20);
        return view('teachers.index',compact('students', 'teachers', 'student_checked_ok', 'student_checked_bad'))
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

        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();

        return view('teachers.create',compact('kvantums', 'student_checked_ok', 'student_checked_bad'));
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
            //'teacher_full_id' => 'required', 
            'teacher_full_name' => 'required', 
            'link_images_1' => 'required', 
            'teacher_kvantum_id' => 'required', 
            'teacher_kvantum' => 'required', 
            'teacher_desc' => 'required'
        ];

        $messages = [
            'teacher_full_name.required' => 'Введите Ф.И.О',
            'link_images_1.required' => 'Выбирете ссылку на изображение педагога',
            'kvantum_name.required' => 'Выбирите педагога',
            'teacher_kvantum_id.required' => 'Выбирете квантум',
            'teacher_kvantum.required' => 'Введите ID квантума',
            'teacher_desc.required' => 'Введите примечание(краткое описание)'
        ];

        $this->validate($request, $rules, $messages);

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
        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        $students = Student::all();
        return view('teachers.show',compact('teacher', 'students', 'student_checked_ok', 'student_checked_bad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();
        return view('teachers.edit',compact('teacher', 'kvantums', 'student_checked_ok', 'student_checked_bad'));
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
        $rules = [
            //'teacher_full_id' => 'required', 
            'teacher_full_name' => 'required', 
            'link_images_1' => 'required', 
            //'teacher_kvantum_id' => 'required', 
            'teacher_kvantum' => 'required', 
            'teacher_desc' => 'required'
        ];

        $messages = [
            'teacher_full_name.required' => 'Введите Ф.И.О',
            'link_images_1.required' => 'Выбирете ссылку на изображение педагога',
            'kvantum_name.required' => 'Выбирите педагога',
            //'teacher_kvantum_id.required' => 'Выбирете квантум',
            'teacher_kvantum.required' => 'Введите ID квантума',
            'teacher_desc.required' => 'Введите примечание(краткое описание)'
        ];

        $this->validate($request, $rules, $messages);

        $teacher->update($request->all());

        return redirect()->route('admin.teachers.index')
                        ->with('success','Вы успешно обновили педагога.', $teacher->teacher_full_name);
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