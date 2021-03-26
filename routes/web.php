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

Route::domain('kvantorium-nvkz.ru')->group(function () {
	Route::get('/', 'indexController@default');
    // Route::get('user/{id}', function ($account, $id) {
    //     //
	// });
	Route::namespace('Redactor')->group(function(){
		Route::resource('/kvantorium-events', 'EventGlobalController');
	});

	Route::namespace('Admin')->group(function(){
		Route::resource('/timetables', 'TimetableGlobalController');
	});

	//Route::get('/students/all', 'StudentController@all');

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
		//Route::get('/students/all', 'StudentController@all');
	});

	Route::namespace('Redactor')->prefix('admin')->name('events.')->middleware('can:manage-events')->group(function(){
		Route::resource('/events', 'EventController');
		//Route::post('/events/eventPublished', 'EventController@eventPublished');
	});

	Route::namespace('Teacher')->prefix('teacher')->name('teacher.')->middleware('can:teacher-students-report')->group(function(){
		Route::resource('/reports', 'TeacherReportController');
	});

	Route::namespace('Student')->group(function(){
		Route::resource('/_join', 'JoinStudentController');
	});
});

// Route::domain('join.kvantorium-nvkz.ru')->group(function () {
// 	Route::namespace('Student')->group(function(){
// 		Route::resource('/', 'JoinStudentController');
// 	});
// });

//Route::get('/python', [ArrowPagesController::class, 'python_page']);

Route::domain('itcube42.ru')->group(function () {
	Route::get('/', 'Itcube\indexController@default');

	Auth::routes();

	Route::namespace('Redactor')->group(function(){
		Route::resource('/itcube-events', 'Itcube42EventGlobalController');
	});


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
		//Route::get('/students/all', 'StudentController@all');
	});

	Route::namespace('Redactor')->prefix('admin')->name('events.')->middleware('can:manage-events')->group(function(){
		Route::resource('/events', 'EventController');
		//Route::post('/events/eventPublished', 'EventController@eventPublished');
	});

	Route::namespace('Teacher')->prefix('teacher')->name('teacher.')->middleware('can:teacher-students-report')->group(function(){
		Route::resource('/reports', 'TeacherReportController');
	});

	Route::namespace('Student')->group(function(){
		Route::resource('/_join', 'JoinStudentController');
	});

	// Cube Arrows
	Route::name('Itcube.')->group(function() {

		// Route::get('/python', 'Itcube\ArrowPagesController@python_page');

		// Route::get('/mobile', 'Itcube\ArrowPagesController@mobile_page');

		// Route::get('/java', 'Itcube\ArrowPagesController@java_page');

		// Route::get('/bigdate', 'Itcube\ArrowPagesController@bigdate_page');

		// Route::get('/vr-ar', 'Itcube\ArrowPagesController@vr_ar_page');

		// Route::get('/clanguage', 'Itcube\ArrowPagesController@clanguage_page');

		// Route::get('/system-administration', 'Itcube\ArrowPagesController@system_administratio');
	});
});

// Domain CONFIG routing
// Route::domain('{account}.myapp.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route::domain('itcube42.ru')->group(function () {
//     Route::get('/', function() {
// 		return view('default');
// 	})->name('/');
// 		//'Itcube\indexController@default');
// });
