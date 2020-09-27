<?php

namespace App\Http\Controllers\Admin;

use App\Kvantum;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KvantumController extends Controller
{
    function __construct()
    {
        //  Защита ядра по истечению сессии выкидываем в /login
     $this->middleware('auth');
 }

 public function student()
 {
    return $this->belongsTo('App\Student');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totals = DB::table('students')->selectRaw('count(*) as total')->first();
        //$hitechs = DB::table('students')->where('inputsKvantum', '')->first();

        $kvantum_status = Kvantum::All();

        $meridian_stat = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when organization = '0' then 1 end) as id")
        ->first();

        $kvantorium_stat = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when organization = '1' then 1 end) as id")
        ->first();

        $itcube_stat = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when organization = '2' then 1 end) as id")
        ->first();

        $hitechs = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'Хай-Тек' then 1 end) as id")
        ->first();

        $promrobo = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'Робоквантум' then 1 end) as id")
        ->first();

        $it_k = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'IT-квантум' then 1 end) as id")
        ->first();

        $energy_k = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'Энерджиквантум' then 1 end) as id")
        ->first();

        $nano_k = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'Наноквантум' then 1 end) as id")
        ->first();

        $vr_ar_k = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'VR/AR-квантум' then 1 end) as id")
        ->first();

        $chess_k = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'Шахматная гостиная' then 1 end) as id")
        ->first();

        $maths_k = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when inputsKvantum = 'Математика' then 1 end) as id")
        ->first();


        $MVP = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_rang = '2' then 1 end) as id")
        ->first();

        $resident_evil = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_rang = '1' then 1 end) as id")
        ->first();

        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        $gender_m = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when gender = '1' then 1 end) as id")
        ->first();

        $gender_f = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when gender = '0' then 1 end) as id")
        ->first();

        $kvantums = Kvantum::latest()->paginate(10);

        return view('kvantums.index', compact('kvantum_status', 'meridian_stat', 'kvantorium_stat', 'itcube_stat', 'totals', 'kvantums', 'hitechs', 'promrobo', 'it_k', 'energy_k', 'nano_k', 'vr_ar_k', 'chess_k', 'maths_k', 'MVP', 'resident_evil', 'student_checked_ok', 'student_checked_bad', 'gender_m', 'gender_f'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kvantums.create');
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
            'kvantum_name' => 'required',
            'kvantum_age' => 'required',
            'kvantum_number_of_people_in_the_group' => 'required',
            'kvantum_desc' => 'required',
        ];

        $messages = [
            'kvantum_name.required' => 'Необходимо ввести название квантума',
            'kvantum_age.required' => '',
            'kvantum_number_of_people_in_the_group.required' => '',
            'kvantum_desc.required' => '',
        ];

        $this->validate($request, $rules, $messages);

        Kvantum::create($request->all());


        return redirect()->route('admin.kvantums.index')
        ->with('success',  'Квантум был удачно создан.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kvantum $kvantum)
    {
        $students = Student::all();
        return view('kvantums.show',compact('kvantum', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kvantum $kvantum)
    {
        return view('kvantums.edit',compact('kvantum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kvantum $kvantum)
    {
        $rules = [
            'kvantum_status' => 'required',
            'kvantum_name' => 'required',
            'kvantum_age' => 'required',
            'kvantum_number_of_people_in_the_group' => 'required',
            'kvantum_desc' => 'required',
        ];

        $messages = [
            'kvantum_name.required' => 'Необходимо ввести название квантума',
            'kvantum_age.required' => '',
            'kvantum_number_of_people_in_the_group.required' => '',
            'kvantum_desc.required' => '',
        ];

        $this->validate($request, $rules, $messages);


     $kvantum->update($request->all());


     return redirect()->route('admin.kvantums.index')
     ->with('success', 'Квантум успешно обновлен');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kvantum $kvantum)
    {
        //$kvantum->delete();

        return redirect()->route('admin.kvantums.index')
        ->with('success','Квантум был удален!');
    }
}