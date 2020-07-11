@extends('main')
@section('title', 'QA!')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Question: {{$question->question}}</h3>
        </div>
        <div class="card-body border border-black">
            @include('questions.answers.create')
            <hr/>
            <h3 class="card-title">Current Answers:</h3>
            <ul class="list-group">
                @forelse($question->answers as $a)
                    <li class="list-group-item">
                        <p class="lead">{{$a->answer}}</p>
                        <p class="float-right text-muted">{{$a->created_at}}</p>
                    </li>
                @empty
                    <h5 class="">No answers currently. Be the first!</h5>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
