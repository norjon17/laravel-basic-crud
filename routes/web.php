<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudenController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Student Routes
Route::get('/student', [StudenController::class, 'index'])->name('student');
Route::get('/student/new-student', [StudenController::class, 'newStudent'])->name('student.new');
Route::post('/student/new-student', [StudenController::class, 'store']);
Route::get('/student/{id}/update', [StudenController::class, 'get'])->name('student.update');
Route::post('/student/{id}/update', [StudenController::class, 'update']);
Route::post('/student/{id}/delete', [StudenController::class, 'destroy'])->name('student.delete');

// Register Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Login Routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
