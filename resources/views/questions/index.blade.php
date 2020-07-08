@foreach($questions as $q)
    <li>{{$q->question}} - {{$q->created_at}}</li>
    <ul><li>@yield('answer_creation', view('questions.answers.create', ['question'=>$q]))</li></ul>
    @foreach($q->answers->sortBy('created_at') as $a)
        <ul><li>{{$a->answer}} - {{$a->created_at}}</li></ul>
    @endforeach
@endforeach
