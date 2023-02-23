<?php

// use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'global.welcome');
Route::view('/survey', 'global.survey');

// admin login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// admin logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// admin authentication
Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::view('/questions', 'global.questions');

// admin dashboard
Route::view('/dashboard', 'admin.dashboard');
