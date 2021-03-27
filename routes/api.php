<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/students', 'Student\StudentController', [
  'except' => ['edit', 'show', 'create', 'store']
]);

//Route::get('/site-search', [\App\Http\Controllers\SitewideSearchController::class. 'search']);
Route::get('/site-search',['uses' =>'SitewideSearchController@search'])->name('search');
