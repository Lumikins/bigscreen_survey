<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionAnswer;

class GuestController extends Controller
{
    // get all survey questions
    public function getQuestions(){
        $question = Question::all();
        $answer = QuestionAnswer::all();
        $guest = null;
        return view('global.survey', compact('question', 'answer', 'guest'));
    }
}
