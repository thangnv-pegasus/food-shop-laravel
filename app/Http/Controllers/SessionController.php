<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good bye!');
    }

    public function store()
    {
        // validation request
        $req = request()->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required'
        ]);

        if (auth()->attempt($req)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);

        // return back()
        //     ->withInput()
        //     ->withErrors([
        //         'email' => 'Your provided credentials could not be verified'
        //     ]); 

    }

    public function create()
    {
        return view('pages.dang-nhap');
    }
}