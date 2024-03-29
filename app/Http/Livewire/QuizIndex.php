<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Livewire\Component;
use Livewire\WithPagination;

class QuizIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $quizzes = Quiz::paginate(10);
        return view('livewire.quiz-index',['quizzes' => $quizzes]);
    }
}
