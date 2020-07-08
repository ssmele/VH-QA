<?php

use Illuminate\Support\Facades\Route;
use App\Question;

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
    $questions = Question::all()->sortByDesc('created_at');
    return view('qa', ['questions' => $questions]);
});

Route::resource('questions', 'QuestionController')->except(['edit', 'update', 'destroy']);
Route::resource('questions.answers', 'QuestionAnswerController')->except(['edit', 'update', 'destroy']);
