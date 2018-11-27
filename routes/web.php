<?php
use App\Game;
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

Route::get('/test1', function(){
	return view('test');
});


//Route::get('/games', 'GameController@index');
//Route::get('/game/create', 'GameController@create');
//Route::get('/games/{id}', 'GameController@show');

// Route::get('/gamelist', function() {
// 	return view('gamelist', [
// 		'games' => ['Christmas', 'Hollis\'s Birthday','friendsgiving'];
// 	]);
// });

// Route::get('/gamelist', function(){
// 	$data['games']=['Christmas', 'Hollis\'s Birthday','friendsgiving'];
// 	return view('games', $data);
// });

// Route::get('/gamelist', function(){
// 	$games=['Christmas', 'Hollis\'s Birthday','friendsgiving'];
// 	return view('games')->with('games', $games);
// });

// Route::get('gamelist', function(){
// 	$games=['Christmas', 'Hollis\'s Birthday','friendsgiving'];
// 	return view('games', compact('games'));
// });

// Route::get('/gamelist', function () {
// 	$games=DB::table('games')->get();

// 	return view('gamelist', ['games'=>$games]);

// });

// Route::get('/gamelist', function(){
// 	$games = DB::table('games')->get();

// 	dd($games);
// });

// Route::get('/gamelist', function(){
// 	$games = DB::table('games')->get();

// 	return $games;
// });

// Route::get('/game', function(){
// 	$games = DB::table('games')->latest()->get();

// 	return view('gamelist', ['viewgames' => $games]);
// });

// Route::get('game', function(){
// 	$games = DB::table('games')->latest()->get();

// 	return view('games.index', ['games' => $games]);
// });

// Route::get('game/{id}', function($id){

// 	$game = DB::table('games')->find($id);

// 	return view('games.show', ['game' => $game]);

// });

// Route::get('games', function() {

// 	$games = App\Game::all();

// 	return view('games.index',)

// });

Route::get('/calculator', function(){
	return view('calculator');
});


Route::get('game', 'GameController@index');

Route::get('game/create', 'GameController@create');

Route::get('game/{id}', 'GameController@show');

Route::get('friends', 'GameController@friendsGame');

Route::resource('/play','GameController');









