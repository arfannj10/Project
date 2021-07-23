<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AddsiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\DashboardController;
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

Route::get('/class/siswa/{{$kelas->id}}', [AddsiswaController::class,'siswa']);
Route::post('/class/show', [AddsiswaController::class,'add']);


Route::resource('/absen', AbsenController::class);
// //guru
// // Route::get('/teachers', [TeacherController::class,'index']);
// // Route::get('/teachers/create', [TeacherController::class,'create']);
// // Route::post('/teachers', [TeacherController::class,'store']);
// // Route::get('/teachers/edit/{id}', [TeacherController::class,'edit']);
Route::resource('/teachers', TeacherController::class);

// // Route::post('/students', [StudentController::class,'store']);
Route::get('/students/profil/{student}', [StudentController::class,'profile']);
// // Route::post('/students/show', [StudentController::class,'nilai']);
Route::resource('/students', StudentController::class);


Route::resource('/pelajarans', PelajaranController::class);

// Route::get('/class/siswa/{kelas}', [ClassController::class,'siswa']);
Route::resource('/kelas', ClassController::class);

// Route::get('/nilai/nilai', [NilaiController::class,'allnilai']);
Route::resource('/nilai', NilaiController::class);

Route::prefix('admin')
->namespace('admin')
->middleware(['auth','admin'])
->group(function() {
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Auth::routes(['verify'=> true]);
