<?php

namespace App\Http\Controllers\Student;

use App\User;
use App\Role;
use App\Student;
use Gate;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Student $student)
    {
        $genders = array(
            'gender' =>  DB::table('students')->get()
          );

        // AuthServiceProvider ->
        if(Gate::denies('manage-students')){
            return redirect(route('admin.users.index'));
        }
        return view('students.edit',compact('student', 'genders'));
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
        //$student->roles()->sync($request->roles);

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
