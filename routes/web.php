<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view('mycards', [
        'cards' =>[
            [
            'id' => '1',
            'title' => 'Test 1',
            'description' => 'bla bla bla double bla 
            bla bla bla double bla 
            bla bla bla double bla'
            ],[
            'id' => '2',
            'title' => 'Test 2',
            'description' => 'Lorem Ipsum or whatever'
            ]
        ]
    ]);
});

Route::get('/card/{id}', function ($id) {
    $cards = [
            [
            'id' => '1',
            'title' => 'Test 1',
            'description' => 'bla bla bla double bla 
            bla bla bla double bla 
            bla bla bla double bla'
            ],[
            'id' => '2',
            'title' => 'Test 2',
            'description' => 'Lorem Ipsum or whatever'
            ]
        ];

    $card = Arr::first($cards, fn($card) => $card['id'] == $id);

    return view('card', ['card' => $card]);
});