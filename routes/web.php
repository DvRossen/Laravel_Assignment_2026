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


Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/card/create', function (){
    return view('cards.create');
});

Route::get('/cards',function () {
    $cards = Card::with('user')->simplepaginate(4);

return view('cards.index', ['cards' =>$cards] );
});

Route::get('/card/{id}', function ($id){

    $card = Card::find($id);

    if(!$card){
        abort(404);
        };
    return view('cards.show', ['card' => $card]);

    
});

Route::post('/cards', function(){
    
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