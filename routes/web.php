<?php

use Illuminate\Support\Facades\Route;
use App\models\Card;
use App\Http\Controllers\CardController;

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
Route::view('/', 'home');
//login
Route::view('/login', 'login');

//Card Group
Route::controller(CardController::class)->group(function(){

    Route::get('/card/create','create');
    Route::get('/cards', 'index');
    Route::get('/card/{card}', 'show');
    Route::post('/cards', 'store');
    Route::patch('/card{card}', 'update');
    Route::get('/card/{card}/edit', 'edit');
    Route::delete('/card/{card}', 'delete');
});
