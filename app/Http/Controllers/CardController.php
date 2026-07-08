<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\User;
use App\Models\Like;


class CardController extends Controller
{
    public function index(){

    $cards = Card::with('user')->where('is_active',true)->orderBy('created_at');
  

    if(request()->has('tags')){
    $cards = $cards->where(function($query){
    
    foreach($_GET['tags'] as $tag){
    $query->orwhere('type', $tag);
    }
    
    });
    };

        if(request()->has('search')){
                $cards = $cards->where(function($query){
            $query->where('title', 'LIKE', '%' .request()->get('search'). '%')
            ->orwhere('location','like','%'.request()->get('search').'%') 
            ->orWhereHas('user', function($q){
             $q->where('username', 'LIKE', '%' . request()->get('search') . '%');
        });
        })->get();
            
        }else{
        $cards = $cards->simplepaginate(4);
        };
       
        return view('cards.index', ['cards' =>$cards] );

    }
    public function create(){
        $user = Auth::user(); 
        $likes = Like::where('user_id', $user['id'])->get();
        if(count($likes) >= 4 || $user['is_admin']){
        return view('cards.create');
        }else{
        return view('cards.error', ['user' => $user, 'likes' => $likes]);
        };
    }
    public function show(Card $card,){ //this verification on controller level instead of route level because route level instantly blocks guests
        $user = Auth::user();
        $hasLike = Like::where('user_id' , $user['id'])->where('card_id' , $card['id'])->exists();
        
        $sucessReturn = view('cards.show', ['card' => $card,'hasLike' => $hasLike]);

        if($card['is_active'] == true){
        return $sucessReturn;
        }elseif($user &&  $user['id'] == $card['user_id']){
        return $sucessReturn ;
        };
        return redirect('/cards');
        }
    public function store(){
        $user = Auth::user(); 
        $likes = Like::where('user_id', $user['id'])->get();
        if(count($likes) >= 4 || $user['is_admin']){
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
