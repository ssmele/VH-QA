@include('errors', ['errorKey' => 'question'])
<div class="card">
    <div class="card-header">
        <h3>Submit a Question:</h3>
    </div>
    <div class="card-body">
        <form method="POST" action={{ route('questions.store') }}>
            @csrf
            <div class="form-group">
                <label for="questionInput" class="sr-only">Submit a Question:</label>
                <input type="text" class="form-control" id="questionInput" placeholder="Make this a random question!"
                       name="question" value="{{ old('question', request('question')) }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit Question!</button>
        </form>
    </div>
</div>
