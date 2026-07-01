<?php

use Illuminate\Support\Facades\Route;
use App\models\Card;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/', function () {
    return view('home');
});

//login
Route::get('/login', function () {
    return view('login');
});

//create
Route::get('/card/create', function (){
    return view('cards.create');
});

//list
Route::get('/cards',function () {
    $cards = Card::with('user')->simplepaginate(4);

return view('cards.index', ['cards' =>$cards] );
});

//show
Route::get('/card/{id}', function ($id){

    $card = Card::find($id);

    if(!$card){
        abort(404);
        };
    return view('cards.show', ['card' => $card]);

    
});

//store
Route::post('/cards', function(){
    
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
        'user_id' => 1
    ]);
    return redirect('/cards');
    });

    //update
    Route::patch('/card{id}', function($id){
    
        request()->validate([
        'title' => ['required'],
        'description' => ['required'],
        'type' => ['required', 'integer'],
        'imageUrl' => ['nullable'],
        'date' => ['required']
        ]);

        //auth

        $card = Card::findOrFail($id);
        
        $card->update([
        'title' => request('title'),
        'description' => request('description'),
        'type' => request('type'),
        'imageUrl' => request('imageUrl'),
        'date' => request('date')
        ]);

        return redirect('/card/' . $card['id']);
    });

    //delete
    Route::delete('/card/{id}', function($id){
    //auth
    $card = Card::findOrFail($id);
    $card->delete();
           
    return redirect('/cards');
    });

    //edit page
    Route::get('/card/{id}/edit', function($id){

    $card = Card::find($id);

    if(!$card){
        abort(404);
        };
    return view('cards.edit', ['card' => $card]);

    
});