<?php

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


//you will need:
//Controller => GameController
//Eloquent model => Game
//Migration => create_games_table

// Route::get('/', 'GamesController@index');


// Route::get('/', function ($id) {

// 	$games = DB::table('games')->where('user_id', {$user_id}->latest()->get();

//     return view('welcome');
// });

//Route::('/games/{game}', 'GamesController@show');




Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function(){
	return view('games.game');
});


Route::get('/games', 'GameController@index');
Route::get('/game/create', 'GameController@create');
Route::get('/games/{id}', 'GameController@show');

Route::get('/gamelist', function() {
	return view('gamelist', [
		'games' => ['Christmas', 'Hollis\'s Birthday','friendsgiving']
	]);
});



