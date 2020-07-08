@extends('main')
@section('title', 'QA!')
@section('content')
    @yield('question_creation', view('questions.create'))
    <hr>
    @yield('questions', view('questions.index', ['questions' => $questions]))
@endsection

