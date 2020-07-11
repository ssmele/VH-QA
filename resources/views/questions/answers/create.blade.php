@include('errors', ['errorKey' => 'answer'.$question->id])
<form method="POST" action={{ route('questions.answers.store', $question) }}>
    @csrf
    <div class="form-row">
        <div class="form-group col-8">
            <label for="answerInput" class="sr-only">Answer</label>
            <input type="text" class="form-control" id="answerInput" name="answer"
                   placeholder="Your answer here!"
                   value="{{ old('answer', request('answer')) }}">
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Submit Answer!</button>
        </div>
    </div>
</form>
