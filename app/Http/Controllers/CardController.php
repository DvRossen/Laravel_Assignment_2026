<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\User;


class CardController extends Controller
{
    public function index(){
        $cards = Card::with('user')->where('is_active', true)->simplepaginate(4);
        return view('cards.index', ['cards' =>$cards] );

    }
    public function create(){
        $user = Auth::user();
        if($user['times_logged_in'] >= 4){
        return view('cards.create');
        }else{
        return view('cards.error', ['user' => $user]);
        };
    }
    public function show(Card $card){ //this verification on controller level instead of route level because route level instantly blocks guests
        $user = Auth::user();
    
        if($card['is_active'] == true){
        return view('cards.show', ['card' => $card]);
        }elseif($user &&  $user['id'] == $card['user_id']){
        return view('cards.show', ['card' => $card]);
        };
        return redirect('/cards');
        }
    public function store(){
        if(Auth::user()['times_logged_in'] >= 4){
        request()->validate([
        'title' => ['required'],
        'description' => ['required'],
        'type' => ['required', 'integer'],
        'imageUrl' => ['nullable'],
        'location' => ['required'],
        'date' => ['required']
        ]);


        Card::create([
        'title' => request('title'),
        'description' => request('description'),
        'type' => request('type'),
        'imageUrl' => request('imageUrl'),
        'date' => request('date'),
        'location' => request('location'),
        'user_id' => Auth::user()->id
        ]);
        return redirect('/cards');
        }else{
        return view('cards.error');
        };
    }
    public function edit(Card $card){

        //if doesn't exists
          if(!$card){
        abort(404);
        };

        //view
        return view('cards.edit', ['card' => $card]);
    }
    public function update(Card $card){
           
        request()->validate([
        'title' => ['required'],
        'description' => ['required'],
        'type' => ['required', 'integer'],
        'imageUrl' => ['nullable'],
        'location' => ['required'],
        'date' => ['required']
        ]);

        
        $card->update([
        'title' => request('title'),
        'description' => request('description'),
        'type' => request('type'),
        'imageUrl' => request('imageUrl'),
        'location' => request('location'),
        'date' => request('date')
        ]);

        return redirect('/card/' . $card['id']);
    }
    public function destroy(Card $card){
        $card->delete();
        return redirect('/cards');
    }

    public function activate(Card $card){
        if($card['is_active'] == 0){
            Card::where('id', $card['id'])->update([
                'is_active' => 1
            ]);
        }elseif($card['is_active'] == 1){
            Card::where('id', $card['id'])->update([
                'is_active' => 0
            ]);
        } 
        return redirect('/profile');
    }

}
