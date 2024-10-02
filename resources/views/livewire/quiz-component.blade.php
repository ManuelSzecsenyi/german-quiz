<div>
    <!-- Display the current question -->
    <h2>{{ $this->currentQuestion->question_text }}</h2>

    <!-- Display the answers for the current question -->
    @foreach($this->currentQuestion->answers as $answer)
        <div>
            <label>
                <input type="radio" name="question_{{ $this->currentQuestion->id }}" value="{{ $answer->id }}">
                {{ $answer->answer_text }}
            </label>
        </div>
    @endforeach

    <!-- Button to go to the next question -->
    <button wire:click="nextQuestion" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
        Next Question
    </button>
</div>
