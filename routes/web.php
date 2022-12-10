<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\QbankController;
use App\Http\Controllers\SemesterController;

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

Route::get('/login', [AdminController::class,'login']);
Route::get('/dashboard', [AdminController::class,'dashboard']);
Route::get('/homepage', [AdminController::class,'homepage']);


Route::post('/loggedin',[AdminController::class, 'loggedin'])->name('loggedin');

Route::get('/dataentry', [AdminController::class,'dataentry']);
Route::get('/student_report', [AdminController::class,'student_report']);
Route::get('/course_report', [AdminController::class,'course_report']);

Route::get('/show_qbank', [QbankController::class,'show_qbank']);

Route::get('/create_qbank', [QbankController::class,'create_qbank']);

Route::get('/store_qbank', [QbankController::class,'store_qbank']);

Route::put('/update_qbank', [QbankController::class,'update_qbank']);

Route::get('/add_question', [QbankController::class, 'add_question']);

Route::get('/add_semester', [SemesterController::class, 'add_semester']);

route::get('/store_semester', [SemesterController::class, 'store_semester']);

route::get('/show_semester', [SemesterController::class, 'show_semester']);

route::get('/edit_semester/{id}', [SemesterController::class, 'edit_semester']);
route::put('/update_semester/{id}', [SemesterController::class, 'update_semester']);
route::get('/delete_semester/{id}', [SemesterController::class, 'delete_semester']);








