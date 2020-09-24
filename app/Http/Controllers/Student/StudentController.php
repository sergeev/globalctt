<?php

namespace App\Http\Controllers\Student;

use App\User;
use App\Role;
use App\Student;
use App\Kvantum;
use App\Teacher;
use App\Timetable;
use Gate;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Extensions\MongoSessionStore;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    public function __construct()
    {
        // Проверка на авторизацию к странице admin/users
        $this->middleware('auth');

        // не сохраняем кеш во время разработки
        exec('php /full/path/to/artisan view:clear');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        
        return view('students.index')->with('students', $students);
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

        return view('students.create' ,compact('teachers', 'kvantums', 'timetables'));
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
            'inputsCertificate' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'name_1_ot' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'surname_1_fam' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'inputEmail' => 'required|string|email|max:255|unique:students|nullable',
            'childDateInput' => '',
            'gender' => '',
            'inputsSchool' => 'regex:/^[\w\- \p{Cyrillic}]*$/ui',
            'inputsClass' => 'regex:/^[\w\- \p{Cyrillic}]*$/ui',
            'inputsKvantum' => '',
            'teacherName' => '',
            'groupTime' => '',
            'inputsNameLegalRepresentative' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'NameLegalRepresentativeTelephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'inputsComments' => 'regex:/^[\w\- \p{Cyrillic}]*$/u|min:5|max:500',
        ];

        $messages = [
            'inputsCertificate.required' => 'Необходимо указать все 10 символов сертификата ПФДО, Пример: 0025011990',
            'name_1_ot.regex' => 'Необходимо указать Имя Отчество (ребенка)',
            'surname_1_fam.regex' => 'Необходимо указать Фамилию (ребенка) ',
            'inputEmail.required' => 'Необходимо указать правельный email адрес ',
            'childDateInput.required' => 'Необходимо указать Дату рождения',
            'inputsSchool.regex' => 'Необходимо указать Учебное заведение',
            'inputsClass.regex' => 'Необходимо указать Класс',
            'inputsKvantum.required' => 'Необходимо указать Выбор направления обучения',
            'teacherName.required' => 'Необходимо указать Преподаватель',
            'groupTime.required' => 'Необходимо указать Группа',
            'inputsNameLegalRepresentative.regex' => 'Необходимо указать ФИО родителя (законного представителя)',
            'NameLegalRepresentativeTelephone.required' => 'Необходимо указать Телефон родителя (законного представителя)',
            'inputsComments.regex' => 'Необходимо указать Комментарий',
            //'inputsComments.min' => 'Необходимо ввести не менее 5 символов в комментариях',

            'min' => 'Необходимо указать все 10 символов сертификата ПФДО, Пример: 0025011990',
            //'max' => 'Необходимо указать не более 10 символов сертификата ПФДО, Пример: 0025011990',
        ];

        //  Проверка на существующую запись в базе данных
        // if (Student::where('inputsCertificate', '=', Input::get('inputsCertificate'))->exists()) {
        //     return redirect()->route('students.index')
        //                     ->with('success','Такой сертификат уже есть в базе данных!');        
        // }

        // if (Student::where('inputEmail', '=', Input::get('inputEmail'))->exists()) {
        //     return redirect()->route('students.index')
        //                     ->with('success','Такая почта уже есть в базе данных!');        
        // }

        $this->validate($request, $rules, $messages);


         $student = new Student([
             'inputsCertificate' => $request->get('inputsCertificate'),
             'name_1_ot' => $request->get('name_1_ot'),
             'surname_1_fam' => $request->get('surname_1_fam'),
             'inputEmail' => $request->get('inputEmail'),
             'childDateInput' => $request->get('childDateInput'),
             'gender' => $request->get('gender'),
             'inputsSchool' => $request->get('inputsSchool'),
             'inputsClass' => $request->get('inputsClass'),
             'inputsKvantum' => $request->get('inputsKvantum'),
             'teacherName' => $request->get('teacherName'),
             'groupTime' => $request->get('groupTime'),
             'inputsNameLegalRepresentative' => $request->get('inputsNameLegalRepresentative'),
             'NameLegalRepresentativeTelephone' => $request->get('NameLegalRepresentativeTelephone'),
             'inputsComments' => $request->get('inputsComments')
         ]);

        $student->student_rang = 0;
        $student->student_exp = 0;
        $student->student_coin = 0;
        $student->student_checked = 0;
        $student->student_deleted = 0;

        $student->save();

        //dd($student);
        $request->session()->flash('message', $student->name_1_ot . ' has been create');
        return redirect()->route('students.students.index');

        // if($student->create()){
        //     $request->session()->flash('success', $student->name_1_ot . ' has been create');
        //     return redirect()->route('students.students.index');
        // }else{
        //     $request->session()->flash('error', 'Student not create, error message');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, Kvantum $kvantum)
    {
        $id = Student::all();
        $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();

        $week_group_id = Timetable::pluck('week_group_id', 'week_group_id')->all();
        $week_day = Timetable::pluck('week_day', 'week_day')->all();

        //$timetables_table = $week_group_id['week_group_id'].' '.$week_day['week_day'];

        $genders = array(
            'gender' =>  DB::table('students')->get()
          );

        // AuthServiceProvider ->
        if(Gate::denies('manage-students')){
            return redirect(route('admin.users.index'));
        }
        //return view('students.edit',compact('student', 'genders'));
        return view('students.edit',compact('student', 'kvantums', 'teachers', 'week_group_id', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $rules = [
            'inputsCertificate' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'name_1_ot' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'surname_1_fam' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            //'inputEmail' => 'required|string|email|max:255|unique:students|nullable',
            'childDateInput' => 'date',
            'gender' => '',
            'inputsSchool' => 'regex:/^[\w\- \p{Cyrillic}]*$/ui',
            'inputsClass' => 'regex:/^[\w\- \p{Cyrillic}]*$/ui',
            'inputsKvantum' => '',
            'teacherName' => '',
            'groupTime' => '',
            'inputsNameLegalRepresentative' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'NameLegalRepresentativeTelephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'inputsComments' => 'regex:/^[\w\- \p{Cyrillic}]*$/u|min:5|max:500'
        ];

        $messages = [
            'inputsCertificate.required' => 'Необходимо указать все 10 символов сертификата ПФДО, Пример: 0025011990',
            'name_1_ot.regex' => 'Необходимо указать Имя Отчество (ребенка)',
            'surname_1_fam.regex' => 'Необходимо указать Фамилию (ребенка) ',
            'inputEmail.required' => 'Необходимо указать правельный email адрес ',
            'childDateInput.required' => 'Необходимо указать Дату рождения',
            'inputsSchool.regex' => 'Необходимо указать Учебное заведение',
            'inputsClass.regex' => 'Необходимо указать Класс',
            'inputsKvantum.required' => 'Необходимо указать Выбор направления обучения',
            'teacherName.required' => 'Необходимо указать Преподаватель',
            'groupTime.required' => 'Необходимо указать Группа',
            'inputsNameLegalRepresentative.regex' => 'Необходимо указать ФИО родителя (законного представителя)',
            'NameLegalRepresentativeTelephone.required' => 'Необходимо указать Телефон родителя (законного представителя)',
            'inputsComments.regex' => 'Необходимо указать Комментарий',
            'inputsComments.min' => 'Необходимо ввести не менее 5 символов в комментариях',

            //'min' => 'Необходимо указать все 10 символов сертификата ПФДО, Пример: 0025011990',
            //'max' => 'Необходимо указать не более 10 символов сертификата ПФДО, Пример: 0025011990',
        ];

        $student->organization = $request->organization;
        $student->inputsCertificate = $request->inputsCertificate;
        $student->name_1_ot = $request->name_1_ot;
        $student->surname_1_fam = $request->surname_1_fam;
        $student->inputEmail = $request->inputEmail;
        $student->childDateInput = $request->childDateInput;
        $student->gender = $request->gender;
        $student->inputsSchool = $request->inputsSchool;
        $student->inputsClass = $request->inputsClass;
        $student->inputsKvantum = $request->inputsKvantum;
        $student->teacherName = $request->teacherName;
        $student->groupTime = $request->groupTime;
        $student->inputsNameLegalRepresentative = $request->inputsNameLegalRepresentative;
        $student->NameLegalRepresentativeTelephone = $request->NameLegalRepresentativeTelephone;
        $student->inputsComments = $request->inputsComments;
        $student->student_rang = $request->student_rang;
        $student->student_exp = $request->student_exp;
        $student->student_coin = $request->student_coin;
        $student->student_checked = $request->student_checked;
        $student->student_deleted = $request->student_deleted;

        $this->validate($request, $rules, $messages);

        //dd($student);

        if($student->save()){
            $request->session()->flash('success', $student->name_1_ot . ' has been update');
        }else{
            $request->session()->flash('error', 'Student not update, error message');
        }

        return redirect()->route('students.students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Student $student)
    {
        if($student->delete()){
            $request->session()->flash('success', $student->name_1_ot . ' has been deleted');
        }else{
            $request->session()->flash('error', 'User not deleted, error message');
        }
        return redirect()->route('students.students.index');
    }
}