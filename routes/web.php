<?php

// use App\Http\Controllers\HelloController;

use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

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

// admin login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// admin logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// admin authentication
Route::post('/authenticate', [UserController::class, 'authenticate']);

// survey questions page
Route::get('/survey', [GuestController::class, 'getQuestions'])->middleware('guest');

// survey submition
Route::post('/submitform', [GuestController::class, 'saveAnswers'])->middleware('guest');

// display survey answers
Route::get('/survey/{hash}', [GuestController::class, 'displayAnswers'])->name('displayAnswers')->middleware('guest');

// admin dashboard with graphs
Route::get('/dashboard', [UserController::class, 'showGraphs'])->middleware('auth');

// admin questions page
Route::get('/questions', [UserController::class, 'questionsTable'])->middleware('auth');

// all user survey responses
Route::get('/answers', [UserController::class, 'userAnswers'])->middleware('auth');
