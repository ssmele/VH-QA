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


{{--<div class="card">--}}
{{--    <div class="card-header border border-dark" id="questionHeader{{$q->id}}">--}}
{{--        <h5 class="mb-0">--}}
{{--            <button class="btn btn-link collapsed" data-toggle="collapse"--}}
{{--                    data-target="#questionCollapse{{$q->id}}" aria-expanded="true"--}}
{{--                    aria-controls="questionCollapse{{$q->id}}">--}}
{{--                {{$q->question}}--}}
{{--                <span class="badge badge-primary badge-pill">{{count($q->answers)}}</span>--}}
{{--            </button>--}}
{{--        </h5>--}}
{{--    </div>--}}
{{--    <div id="questionCollapse{{$q->id}}" class="collapse" aria-labelledby="questionHeader{{$q->id}}"--}}
{{--         data-parent="#questionAccordion">--}}
{{--        <div class="card-body">--}}
{{--            @include('questions.answers.create', ['question'=>$q])--}}
{{--            <div class="card" id="answersListCard">--}}
{{--                <div class="card-header">--}}
{{--                    Submitted Answers: {{ count($q->answers) ? "" : "(No answers for this question yet! Be the first!)" }}--}}
{{--                </div>--}}
{{--                <ul class="list-group list-group-flush">--}}
{{--                    @foreach($q->answers->sortBy('created_at') as $a)--}}
{{--                        <li class="list-group-item">--}}
{{--                            {{$a->answer}} - {{$a->created_at}}--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
