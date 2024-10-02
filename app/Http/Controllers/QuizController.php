<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function start()
    {
        // Logic for starting a quiz (for now, just return a view)
        return view('quiz');
    }
}
