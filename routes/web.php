<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Itcube\ArrowPagesController;

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

Route::namespace('Redactor')->group(function () {
	Route::resource('/events', 'EventGlobalController');
});

Route::namespace('Admin')->group(function () {
	Route::resource('/timetables', 'TimetableGlobalController');
});

//Route::get('/students/all', 'StudentController@all');

Auth::routes();

//Route::get('/showtimes', 'ShowTimeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
	Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-teachers')->group(function () {
	Route::resource('/teachers', 'TeacherController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-timetables')->group(function () {
	Route::resource('/timetables', 'TimetableController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-kvantums')->group(function () {
	Route::resource('/kvantums', 'KvantumController');
});

Route::namespace('Student')->prefix('admin')->name('students.')->middleware('can:manage-students')->group(function () {
	Route::resource('/students', 'StudentController');
	Route::get('/students/all', 'StudentController@all');
});

Route::namespace('Redactor')->prefix('admin')->name('events.')->middleware('can:manage-events')->group(function () {
	Route::resource('/events', 'EventController');
	//Route::post('/events/eventPublished', 'EventController@eventPublished');
});

Route::namespace('Teacher')->prefix('teacher')->name('teacher.')->middleware('can:teacher-students-report')->group(function () {
	Route::resource('/reports', 'TeacherReportController');
});

Route::namespace('Student')->group(function () {
	Route::resource('/_join', 'JoinStudentController');
});

//Route::get('/contact', [ContactUsFormController::class, 'createForm']);
//Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
