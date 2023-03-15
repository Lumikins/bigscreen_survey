<?php

namespace App\Http\Controllers;

use App\Models\PolledUsers;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\UserAnswer;

class GuestController extends Controller
{
  // get all survey questions
  public function getQuestions()
  {
    $question = Question::all();
    $answer = QuestionAnswer::all();
    $guest = null;
    return view('global.survey', compact('question', 'answer', 'guest'));
  }

  // display survey answers
  public function displayAnswers($hash)
  {
    $questions = Question::all();
    $userAnswers = UserAnswer::all();
    $guest = PolledUsers::where('hash', '=', urldecode($hash))->with('userAnswer')->first();
    if (!is_null($guest)) {
      return view('global.results', compact('questions', 'userAnswers'));
    } else {
      $err = 'Page not found';
      return redirect()->route('/')->with('error', $err);
    }
  }

  // submit survey
  public function saveAnswers(Request $request)
  {
    $data = $request->all();
    foreach ($data as $key => $value) {
      if ($key === '_token') continue;
      // create the polled user based on email input
      if ($key === 'mail_1') {
        $user = PolledUsers::create([
          'email' => $value,
          'hash' => md5($value . date("Y-m-d H:i:s")),
          'created_at' => date("Y-m-d H:i:s"),
        ]);
      }
      $id = explode("_", $key);
      $userAnswer = new UserAnswer;
      $userAnswer->question_id = $id[1];
      $userAnswer->user_answer = $value;
      $userAnswer->polled_user_id = $user->id;
      $userAnswer->save();
    }
    // create redirection to thank you page with url
    return back()->with('success', route('displayAnswers', ['hash' => urlencode($user->hash)]));
  }
}
