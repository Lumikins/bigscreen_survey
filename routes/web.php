<?php

// use App\Http\Controllers\HelloController;

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Models\Question;

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

// main page view
Route::view('/', 'global.welcome')->middleware('guest');

// survey page view
// Route::view('/survey', 'global.survey')->middleware('guest');

// admin login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// admin logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// admin authentication
Route::post('/authenticate', [UserController::class, 'authenticate']);

// survey questions page
Route::get('/survey', [GuestController::class, 'getQuestions'])->middleware('guest');

// admin dashboard
Route::view('/dashboard', 'admin.dashboard')->middleware('auth');

// admin questions page
Route::get('/questions', [UserController::class, 'questionsTable'])->middleware('auth');