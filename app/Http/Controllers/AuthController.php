<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|min:3|max:40',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8|confirmed',
        ]);


        User::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'password'=>$validated['password'],
            
        ]);

        return redirect()->route('root')->with('success','User registered');
        
    }

    public function login(){
        return view('auth.login');
    }
    public function authenticate(Request $request){
        $validated = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        if (auth()->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('root')->with('success','User Loggedin');
        }

        return redirect()->route('login')->withErrors([
            'email'=>'User with that email doesnt exist', 
        ]);
    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('root')->with('success','User logged out successfully!!!');
    }
}