<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * 
     */

    public function questions()
    {
        $questions = Question::index();
        return view('survey', compact('survey'));
    }
}
