<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;
use App\Models\Like;


use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Card $card){

    $user = Auth::user();

    $hasLike = Like::where('user_id' , $user['id'])->where('card_id' , $card['id'])->exists();
    if(!$hasLike){
    Like::create([
    "user_id" => $user['id'],
    "card_id" => $card['id']
    ]);
    };
    return redirect('/card/' . $card['id']);
    }
    public function dislike(Card $card){
    $user = Auth::user();
    $hasLike = Like::where('user_id' , $user['id'])->where('card_id' , $card['id'])->exists();
    
    if($hasLike){
        Like::where('user_id' , $user['id'])->where('card_id' , $card['id'])->delete();
    };


    return redirect('/card/' . $card['id']);
    }
}
