<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return view('questions.answers.index', ['question'=>$question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function create(Question $question)
    {
        return view('questions.answers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Question $question)
    {
        $validator = Validator::make($request->all(), ['answer' => 'required|string|min:5|max:255']);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator, 'answer'.$question->id)->withInput();
        }
        $question->answers()->create($validator->valid());
        return redirect()->back();
    }

}
