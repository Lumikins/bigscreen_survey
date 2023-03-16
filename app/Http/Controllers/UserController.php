<?php

namespace App\Http\Controllers;

use App\Models\PolledUsers;
use App\Models\User;
use App\Models\Question;
use App\Models\Type;
use App\Models\QuestionAnswer;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;

class UserController extends Controller
{
  // admin login form
  public function login()
  {
    return view('global.login');
  }

  // admin authentication
  public function authenticate(Request $request)
  {
    $formFields = $request->validate([
      'email' => ['required', 'email'],
      'password' => 'required'
    ]);
    if (auth()->attempt($formFields)) {
      $request->session()->regenerate();
      return redirect('dashboard')->with('message', 'Vous êtes connecté ');
    }
    return back()->withErrors(['email' => 'Une erreur s\'est produite. Veuillez vérifier vos informations d\'identification'])->onlyInput('email');
  }

  // admin logout
  public function logout(Request $request)
  {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('message', 'Vous êtes déconnecté');
  }

  // get question number, body and type
  public function questionsTable()
  {
    $questions = Question::all();
    $type = Type::with('question')->get();
    return view("admin.questions", compact('questions', 'type'));
  }

  // get all user survey answers
  public function userAnswers(){
    $polled_users = PolledUsers::with('userAnswer')->get();        
    return view("admin.answers",compact('polled_users'));
}

  // show admin dashboard with chartjs graphs
  function showGraphs()
  {
    $answerA = UserAnswer::where('question_id', 6)->pluck('user_answer');
    $countAnswerA = ['Oculus Rift/s' => 0, 'HTC Vive' => 0, 'Windows Mixed Reality' => 0, 'PSVR' => 0];
    foreach ($answerA as $answer) {
      $countAnswerA[$answer]++;
    }

    $answerB = UserAnswer::where('question_id', 7)->pluck('user_answer');
    $countAnswerB = ['SteamVR' => 0, 'Oculus store' => 0, 'Viveport' => 0, 'Playstation VR' => 0, 'Google Play' => 0, 'Windows store' => 0];
    foreach ($answerB as $answer) {
      $countAnswerB[$answer]++;
    }

    $answerC = UserAnswer::where('question_id', 10)->pluck('user_answer');
    $countAnswerC = ['Regarder des émissions TV en direct' => 0, 'Regarder des films' => 0, 'Jouer en solo' => 0, 'Jouer en team' => 0];
    foreach ($answerC as $answer) {
      $countAnswerC[$answer]++;
    }

    $answerD = UserAnswer::whereBetween('question_id', [11, 15])->get()->groupBy('question_id');
    $countAnswerD = array();
    foreach ($answerD as $key => $answer) {
      $countAnswerD[$key] = $answer->sortBy('user_answer')->pluck('user_answer')->countBy()->toArray();
    }
    return view('admin.dashboard', compact('countAnswerA', 'countAnswerB', 'countAnswerC', 'countAnswerD'));
  }
}
