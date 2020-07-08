@include('errors', ['errorKey' => 'answer'.$question->id])
<form method="POST" action={{ route('questions.answers.store', $question) }}>
    @csrf
    <div class="form-group">
        <label for="answer_{{ $question->id  }}">Answer:</label>
        <input type="text" class="form-control" id="answer_{{ $question->id  }}" name="answer"
               value="{{ old('answer_'.$question->id, request('answer_'.$question->id)) }}">
        <button type="submit">Reply</button>
    </div>
</form>
