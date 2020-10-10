<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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

        $users = User::all();
        return view('admin.users.index', compact('student_checked_ok', 'student_checked_bad'))->with('users', $users);
    }

    public function create(Request $request)
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, array $data)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $student_checked_ok = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
        ->first();

        $student_checked_bad = DB::table('students')
        ->selectRaw('count(*) as total')
        ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
        ->first();

        // AuthServiceProvider ->
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }

        $roles = Role::all();

        return view('admin.users.edit', compact('student_checked_ok', 'student_checked_bad'))->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $user->roles()->sync($request->roles);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->teacher_id = $request->teacher_id;
        
        if($user->save()){
            $request->session()->flash('success', $user->name . ' has been update');
        }else{
            $request->session()->flash('error', 'User not update, error message');
        }

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, user $user)
    {
        // AuthServiceProvider ->
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }

        $user->roles()->detach();

        if($user->delete()){
            $request->session()->flash('success', $user->name . ' has been delete');
        }else{
            $request->session()->flash('error', 'User not delete, error message');
        }

        return redirect()->route('admin.users.index');
    }
}
