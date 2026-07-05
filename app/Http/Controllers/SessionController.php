<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class SessionController extends Controller
{
    //create session
    public function create(){
        return view('auth.login');
    }

    //store session
     public function store(){
       //validate 
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        //Study note:
        //Auth::attempt did NOT work, I have traced every step and value and followed the laracast tutorial exactly and it did not work.
        //Apparently multiple people have had trouble with Auth::attempt

        $user = User::where('email','=',$attributes['email'])->first();
        if($user && $attributes['password'] == $user['password']){ //When password hashing use  $user && Hash::check($attributes['password'], $user['password'])
            //login
            Auth::login($user);
            if(Auth::check()){
            //redirect
            return redirect('/cards');
            }
        }else{
            //error
            throw ValidationException::withMessages([
            'email' => 'These records do not match our system'
        ]);
        };

        
    }

    //destroy session
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
