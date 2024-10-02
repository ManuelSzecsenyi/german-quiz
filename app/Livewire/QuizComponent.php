<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class QuizComponent extends Component
{

    public $questions;
    public $currentIndex;

    public function mount()
    {
        $this->questions = Question::inRandomOrder()->take(10)->with('answers')->get();
        $this->currentIndex = 0;
    }

    public function nextQuestion()
    {
        if ($this->currentIndex < $this->questions->count() - 1) {
            $this->currentIndex++;
        }
    }

    public function getCurrentQuestionProperty()
    {
        return $this->questions[$this->currentIndex];
    }

    public function render()
    {
        return view('livewire.quiz-component');
    }
}
