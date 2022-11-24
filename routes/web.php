<?php

use App\Http\Controllers\StudenController;
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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/student', [StudenController::class, 'index'])->name('student');
Route::get('/student/new-student', [StudenController::class, 'newStudent'])->name('student.new');
Route::post('/student/new-student', [StudenController::class, 'store']);
Route::get('/student/{id}/update', [StudenController::class, 'get'])->name('student.update');
Route::post('/student/{id}/update', [StudenController::class, 'update'])->name('student.update');
Route::post('/student/{id}/delete', [StudenController::class, 'destroy'])->name('student.delete');
