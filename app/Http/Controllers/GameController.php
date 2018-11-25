<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
    *Display a listing of the games.
    *
    *@return Response
    */
    public function index(){

    	$games = Game::all();
    	return view('games.index',['games'=>$games]);

    }

    // /**
    // *Display a the game selected.
    // *
    // *@return Response
    // */

    // public function show(Game $game_id){
    // 	return view('games.show',['game'=>$game_id]);
    // }


    /**
    *Show the form for creating a new game.
    *
    *@return Response
    */
    public function create(){

    	return 'it workds';

    }

    
}
