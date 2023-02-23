<?php

namespace App\Http\Controllers;

use App\Models\User;
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
			return redirect('/dashboard')->with('message', 'Vous êtes connecté ');
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
}
