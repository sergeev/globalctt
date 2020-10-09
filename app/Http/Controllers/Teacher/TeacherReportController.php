<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\TeacherReport;
use App\Teacher;
use App\Kvantum;
use App\Timetable;
use Carbon\Carbon;
use DataTables;
use Gate;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeacherReportController extends Controller
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
    public function index(Request $request)
    {
        $report_lists = TeacherReport::all();
        $kvantums = Kvantum::all();
        $teachers = Teacher::all();
        $timetables = Timetable::all();

        $student_checked_ok = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
            ->first();

        $student_checked_bad = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
            ->first();

        return view('teachers.reportShow', compact('report_lists', 'kvantums', 'teachers', 'timetables', 'student_checked_ok', 'student_checked_bad'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

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

        $kvantums = Kvantum::pluck('kvantum_name', 'kvantum_name')->all();
        $teachers = Teacher::pluck('teacher_full_name', 'teacher_full_name')->all();
        $timetables = Timetable::pluck('week_group_id', 'week_group_id')->all();

        return view('teachers.report', compact('student_checked_ok', 'student_checked_bad', 'kvantums', 'teachers', 'timetables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$teacher = Teacher::Teacher()->teacher_full_name;
        $date = Carbon::parse($request->startFrom)->format('d-m-Y H:i:s');

        $rules = [
            'teacher_full_name' => 'required',
            'inputsKvantum' => 'required',
            'student_count' => 'required',
            'week_group_id' => 'required',
            'week_day_report' => 'required',
            'report_date_input' => 'required|date',
        ];
        
         $messages = [
             'teacher_full_name.required' => 'Выберите педагога',
             'inputsKvantum.required' => 'Выберите квантум',
             'student_count.required' => 'Введите фактическоие количество детей',
             'week_group_id.required' => 'Выберите группу педагога',
             'week_day_report.required' => 'Введите день недели',
             'report_date_input.required' => 'Введите дату'

         ];

        $this->validate($request, $rules, $messages);

        $report = new TeacherReport([
            'teacher_full_name' => $request->get('teacher_full_name'),
            'inputsKvantum' => $request->get('inputsKvantum'),
            'student_count' => $request->get('student_count'),
            'week_group_id' => $request->get('week_group_id'),
            'week_day_report' => $request->get('week_day_report'),
            //'content' => $request->get('content')
            'report_date_input' => $request->get('report_date_input')
        ]);

        //$report->date('report_date_input')->default(date("Y-m-d H:i:s"));

        //$report->this->teacher_full_name;
        //$report->timestamp('add_at');
        $report->save();

        //return response()->json(['success'=>'Report saved successfully.']);
        return redirect()->route('teacher.reports.index')->with('success', 'Отчет добавлен успешно.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherReport $TeacherReport)
    {
        $kvantums = Kvantum::pluck('kvantum_name', 'kvantum_name')->all();
        $teachers = Teacher::pluck('teacher_full_name', 'teacher_full_name')->all();
        $timetables = Timetable::pluck('week_group_id', 'week_group_id')->all();

        return view('teachers.reportShow', compact('TeacherReport', 'kvantums', 'teachers', 'timetables'));
    }
}