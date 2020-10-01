<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\TeacherReport;
use DataTables;
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
        if ($request->ajax()) {
            $data = TeacherReport::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('teachers.report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
            $report = new TeacherReport([
                'teacher_full_name' => $request->get('teacher_full_name'),
                'inputsKvantum' => $request->get('inputsKvantum'),
                'student_count' => $request->get('student_count'),
                'content' => $request->get('content')
                //'report_date_input' => $request->get('report_date_input')
            ]);

            //$report->date('report_date_input')->default(date("Y-m-d H:i:s"));
            $report->timestamp('add_at');
            $report->save();
   
        return response()->json(['success'=>'Report saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacherReport = TeacherReport::find($id);
        return response()->json($teacherReport);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TeacherReport::find($id)->delete();
     
        return response()->json(['success'=>'Teacher Report deleted successfully.']);
    }
}