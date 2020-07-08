@include('errors', ['errorKey' => 'question'])
<form method="POST" action={{ route('questions.store') }}>
    @csrf
    <div class="form-group">
        <label for="question_input">Question:</label>
        <input type="text" class="form-control" id="question_input" name="question" value="{{ old('question', request('question')) }}">
        <button type="submit">Submit Question</button>
    </div>
</form>
