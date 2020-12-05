<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
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
    return view('auth.login');
});

Auth::routes();



Route::get('/create', [QuestionController::class, 'create'])->name('create');
Route::post('/create', [QuestionController::class, 'store'])->name('store');

Route::get('/quizz', [QuizController::class, 'quizz'])->name('quizz');
Route::post('/results', [QuizController::class, 'results'])->name('results');
