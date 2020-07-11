@include('errors', ['errorKey' => 'answer'.$question->id])
<form method="POST" action={{ route('questions.answers.store', $question) }}>
    @csrf
    <div class="form-row">
        <div class="form-group col-8">
            <label for="answer_{{ $question->id  }}" class="sr-only">Answer</label>
            <input type="text" class="form-control" id="answer_{{ $question->id  }}" name="answer"
                   placeholder="Your answer here!"
                   value="{{ old('answer_'.$question->id, request('answer_'.$question->id)) }}">
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Submit Answer!</button>
        </div>
    </div>
</form>
