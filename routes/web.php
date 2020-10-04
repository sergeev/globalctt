<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'indexController@default');

//Route::get('/events', 'Redactor\EventGlobalController@index');

Route::namespace('Redactor')->group(function(){
	Route::resource('/events', 'EventGlobalController');
});

Route::namespace('Admin')->group(function(){
	Route::resource('/timetables', 'TimetableGlobalController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-teachers')->group(function(){
	Route::resource('/teachers', 'TeacherController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-timetables')->group(function(){
	Route::resource('/timetables', 'TimetableController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-kvantums')->group(function(){
	Route::resource('/kvantums', 'KvantumController');
});

Route::namespace('Student')->prefix('admin')->name('students.')->middleware('can:manage-students')->group(function(){
	Route::resource('/students', 'StudentController');
});

Route::namespace('Redactor')->prefix('admin')->name('events.')->middleware('can:manage-events')->group(function(){
	Route::resource('/events', 'EventController');
	//Route::post('/events/eventPublished', 'EventController@eventPublished');
});

Route::namespace('Teacher')->prefix('teacher')->name('teacher.')->middleware('can:teacher-students-report')->group(function(){
	Route::resource('/teachers', 'TeacherReportController');
});