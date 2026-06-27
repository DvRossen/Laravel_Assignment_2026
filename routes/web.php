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

Route::get('/mycards',function () {
    $cards = Card::with('user')->get();

return view('mycards', ['cards' =>$cards] );
});

Route::get('/card/{id}', function ($id){

    $card = Card::find($id);

    if(!$card){
        abort(404);
        };
    return view('card_page', ['card' => $card]);
});