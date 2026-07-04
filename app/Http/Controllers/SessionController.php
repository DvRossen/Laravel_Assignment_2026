<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //create session
    public function create(){
        return view('auth.login');
    }

    //store session
     public function store(){
    dd(request()->all());
    }

    //destroy session
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
