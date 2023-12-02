<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('pages.dang-ky');
    }

    public function store(){
        // validation request
        $req = request()->validate([
            'name' => 'required|min:6|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|between:9,11',
            'password' => 'required|min:6|max:120'
        ]);
        $req['role'] = 'user';

        $user = User::create($req);
        auth()->login($user);
        // session()->flash('success','Your acccount has been created');
        return redirect('/')->with('success','Your acccount has been created');

    }
}
