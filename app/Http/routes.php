<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('game',function(){
    return view('game.game');
});
*/
Route::get('game', 'GameController@index');
Route::post('game/grid', 'GameController@grid');
Route::get('game/grid', 'GameController@grid');

Route::get('/', function () {
    return view('welcome');
});


