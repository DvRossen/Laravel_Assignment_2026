<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Card;


class CardController extends Controller
{
    public function index(){
        $cards = Card::with('user')->simplepaginate(4);
        return view('cards.index', ['cards' =>$cards] );

    }
    public function create(){
        return view('cards.create');
    }
    public function show(Card $card){
        return view('cards.show', ['card' => $card]);
    }
    public function store(){
        request()->validate([
        'title' => ['required'],
        'description' => ['required'],
        'type' => ['required', 'integer'],
        'imageUrl' => ['nullable'],
        'date' => ['required']
        ]);


        Card::create([
        'title' => request('title'),
        'description' => request('description'),
        'type' => request('type'),
        'imageUrl' => request('imageUrl'),
        'date' => request('date'),
        'user_id' => Auth::user()->id
        ]);
        return redirect('/cards');
    }
    public function edit(Card $card){

        //if doesn't exists
          if(!$card){
        abort(404);
        };

        //view
        return view('cards.edit', ['card' => $card]);
    }
    public function update(Card $card,){
           
        request()->validate([
        'title' => ['required'],
        'description' => ['required'],
        'type' => ['required', 'integer'],
        'imageUrl' => ['nullable'],
        'date' => ['required']
        ]);

        //auth
        
        $card->update([
        'title' => request('title'),
        'description' => request('description'),
        'type' => request('type'),
        'imageUrl' => request('imageUrl'),
        'date' => request('date')
        ]);

        return redirect('/card/' . $card['id']);
    }
    public function destroy(Card $card){
        $card->delete();
        return redirect('/cards');
    }

}
