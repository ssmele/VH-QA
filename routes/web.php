<?php

use Illuminate\Support\Facades\Route;
use App\Question;
use App\Placeholder;

Route::get('/', function () {
    $questions = Question::all()->sortByDesc('created_at');
    $placeholder = Placeholder::all()->random(1)->first()->placeholder;
    return view('questions.index', ['questions' => $questions, 'placeholder_question' => $placeholder]);
});

Route::resource('questions', 'QuestionController')
    ->except(['edit', 'update', 'destroy', 'create', 'show', 'index']);
Route::resource('questions.answers', 'QuestionAnswerController')
    ->except(['edit', 'update', 'destroy', 'create', 'show']);

