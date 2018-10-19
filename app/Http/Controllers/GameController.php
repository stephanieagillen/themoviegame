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

    	return view('games.index');

    }

    /**
    *Show the form for creating a new game.
    *
    *@return Response
    */
    public function create(){

    }

    public function show(Game $game){
    	return $game;

    	return view()
    }
}
