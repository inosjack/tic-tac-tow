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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tic-tac-tow', function () {
    return view('tictactow');
});



Route::get('ultmt-tic-tac-tow', function () {
    return view('ultmttictactow');
});



Route::post('playGame',[
    'as' => 'play.game', 'uses' =>'GameController@winnerPlayer'
]);