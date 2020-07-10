@extends('main')
@section('title', 'QA!')
@section('content')
    @include('questions.create')
    <hr/>
    <div class="card mb-5">
        <div class="card-header">
            <h3>Current Questions:</h3>
        </div>
        @foreach($questions as $q)
            <ul class="list-group">
                <li class="list-group-item">
                    <h4 class="col-sm">
                        {{$q->question}}
                        <a class="badge badge-primary float-right" href="{{ route("questions.answers.index", ['question' => $q->id]) }}">View answers: {{count($q->answers)}}</a>
                    </h4>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
