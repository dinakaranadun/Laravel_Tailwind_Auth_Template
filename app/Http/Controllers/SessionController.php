<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

  public function index()
    {
        return view('auth.index');
    }  

  public function store(Request $request){

    
    $userAttributes = request()->validate([
        'email' => ['required','email'],
        'password' => ['required'],
    ]);

  

    if(! Auth::attempt($userAttributes)){

        throw ValidationException::withMessages(
            ['email' => 'The provided credentials are incorrect.',]
        );
    }

    request()->session()->regenerate();
    return redirect('/dashboard');
  }

  public function destroy(){
        Auth::logout();
        return redirect('/signin');
  }

   
}
