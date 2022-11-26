<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


//Student Routes
Route::get('/student', [StudenController::class, 'index'])->name('student');
Route::get('/student/new-student', [StudenController::class, 'newStudent'])->name('student.new');
Route::post('/student/new-student', [StudenController::class, 'store']);
Route::get('/student/{id}/update', [StudenController::class, 'get'])->name('student.update')->middleware('auth');
Route::post('/student/{id}/update', [StudenController::class, 'update'])->name('student.update')->middleware('auth');
Route::post('/student/{id}/delete', [StudenController::class, 'destroy'])->name('student.delete')->middleware('auth');


//Register Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

//Login Routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
