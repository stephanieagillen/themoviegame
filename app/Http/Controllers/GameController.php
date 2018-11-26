<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

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

    /**
    *Show the selected game
    *
    *@return Response
    */
    public function show(Game $id){
        return view('games.show', ['game'=>$id]);
    }

    /**
    *Create a new game
    *
    *@return Response
    */
    public function create(){
        return view('games.create');
    }

    /**
    *Show friendsgiving game
    *
    *@return Response
    */
    public function friendsGame(){
        return Game::friendsgiving()
        ->where('id', '=', '1')
        ->get();
    }

}
