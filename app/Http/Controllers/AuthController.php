<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','string','min:8','confirmed'],
        ]);
        
        $user = User::create($userAttributes);     
        Auth::login($user);
        return redirect('/dashboard')->with('success', 'Account created successfully!');
    }

    public function show(){
        return view('auth.forgot_password');
    }

}
