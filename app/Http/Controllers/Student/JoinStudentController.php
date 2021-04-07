<?php

namespace App\Http\Controllers\Student;

use App\Teacher;
use App\Kvantum;
use App\Student;
use App\Timetable;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;

class JoinStudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();

        $timetables = Timetable::pluck('week_group_id', 'week_group_id')->all();

        return view('kvant42.kvantums.joinKvantum', compact('students', 'teachers', 'kvantums', 'timetables'));
    }

    public function create()
    {
        $teachers = Teacher::pluck('teacher_full_name','teacher_full_name')->all();
        $kvantums = Kvantum::pluck('kvantum_name','kvantum_name')->all();

        $timetables = Timetable::pluck('week_group_id', 'week_group_id')->all();

        return view('kvant42.kvantums.joinKvantum' ,compact('teachers', 'kvantums', 'timetables'));
    }

    public function store(Request $request)
    {
        $rules = [
            'inputsCertificate' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
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
            //'inputsCertificate.required' => 'Необходимо указать все 10 символов сертификата ПФДО, Пример: 0025011990',
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

        $this->validate($request, $rules, $messages);

        // Проверка на существующую запись в базе данных
        if (Student::where('inputsCertificate', '==', $request->get('inputsCertificate'))->exists()) {
            return redirect()->route('students.index')
                            ->with('success','Такой сертификат уже есть в базе данных!');
        }

        if (Student::where('inputEmail', '==', $request->get('inputEmail'))->exists()) {
            return redirect()->route('students.index')
                            ->with('success','Такая почта уже есть в базе данных!');
        }

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

         // Для кванториума = 1
         $student->organization = 1;
        $student->student_rang = 0;
        $student->student_exp = 0;
        $student->student_coin = 0;
        $student->student_checked = 0;
        $student->student_deleted = 0;

        $student->save();

        //dd($student);

        if($student->create()){
            $request->session()->flash('success', $student->name_1_ot . ' has been create');
            return redirect()->route('students.students.index');
        }else{
            $request->session()->flash('error', 'Student not create, error message');
        }
    }

}
