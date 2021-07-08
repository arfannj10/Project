<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

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

Route::resource('/absen', AbsenController::class);

//guru
// Route::get('/teachers', [TeacherController::class,'index']);
// Route::get('/teachers/create', [TeacherController::class,'create']);
// Route::post('/teachers', [TeacherController::class,'store']);
// Route::get('/teachers/edit/{id}', [TeacherController::class,'edit']);
Route::resource('/teachers', TeacherController::class);

// Route::post('/students', [StudentController::class,'store']);
Route::get('/students/show/{student}', [StudentController::class,'kelas']);
// Route::post('/students/show', [StudentController::class,'nilai']);
Route::resource('/students', StudentController::class);


Route::resource('/pelajarans', PelajaranController::class);

Route::resource('/kelas', ClassController::class);

Route::resource('/nilai', NilaiController::class);

Route::get('/', function () {
    return view('auth/login');
});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
