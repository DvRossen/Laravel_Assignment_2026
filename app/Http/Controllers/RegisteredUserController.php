<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\Card;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create(){
    return view('auth.register');
    }
       public function store(){
    //validate
    $attributes = request()->validate([
    'username' => ['required'],
    'email' => ['required', 'email'],
    'password' => ['required', Password::min(6), 'confirmed'],
    ]);
    
    //create
    $user = User::create($attributes);
    
    // login
    Auth::login($user);
    // redirect
    return redirect('/cards');
    }

   public function show(){
        $user = Auth::user();
        $cards = Card::where('user_id', $user['id'])->get();
        return view('profile.show', ['user' => $user, 'cards' => $cards]);
    }
}