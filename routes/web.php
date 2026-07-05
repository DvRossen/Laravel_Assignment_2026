<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
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
//Card Group
Route::controller(CardController::class)->group(function(){
    
    Route::get('/cards', 'index');
    Route::get('/card/{card}', 'show');
    Route::get('/cards/create','create')->middleware('auth');
    Route::post('/cards', 'store')->middleware('auth');
    Route::patch('/card{card}', 'update')->middleware('auth');
    Route::get('/card/{card}/edit', 'edit')->middleware('auth')->can('edit-card', 'card');
    Route::delete('/card/{card}', 'delete')->middleware('auth')->can('edit-card', 'card');
});

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy']);