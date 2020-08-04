<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	User::truncate();
    	DB::table('role_user')->truncate();

    	$adminRole = Role::where('name', 'admin')->first();
    	$directorRole = Role::where('name', 'director')->first();
    	$managerRole = Role::where('name', 'manager')->first();
    	$redactorRole = Role::where('name', 'redactor')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $studentRole = Role::where('name', 'student')->first();
    	$userRole = Role::where('name', 'user')->first();

    	$admin = User::create([
    		'name' => 'Admin User',
    		'email' => 'admin@admin',
    		'password' => Hash::make('password')
    	]);

    	$director = User::create([
    		'name' => 'Director User',
    		'email' => 'director@director',
    		'password' => Hash::make('password')
    	]);

    	$manager = User::create([
    		'name' => 'Manager User',
    		'email' => 'manager@manager',
    		'password' => Hash::make('password')
    	]);

    	$redactor = User::create([
    		'name' => 'Redactor User',
    		'email' => 'redactor@redactor',
    		'password' => Hash::make('password')
    	]);

        $teacher = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@teacher',
            'password' => Hash::make('password')
        ]);

        $student = User::create([
            'name' => 'Student User',
            'email' => 'student@student',
            'password' => Hash::make('password')
        ]);

    	$user = User::create([
    		'name' => 'User User',
    		'email' => 'user@user',
    		'password' => Hash::make('password')
    	]);

    	$admin->roles()->attach($adminRole);
    	$director->roles()->attach($directorRole);
    	$manager->roles()->attach($managerRole);
        $teacher->roles()->attach($teacherRole);
        $student->roles()->attach($studentRole);
    	$redactor->roles()->attach($redactorRole);
    	$user->roles()->attach($userRole);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
