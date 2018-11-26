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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|max:255'
        ]);
    
        $game = Game::create([
            'name'      => request('name'),
            'user_id'   => Auth::user()->id
        ]);

        return response()->json([
            'game'      => $game,
            'message'   => 'Success'
        ], 200);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }



    /**
    *Dynamically create and play a new game
    *
    *@return Response
    */
    public function play(){

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


    public function __construct()
    {
        $this->middleware('auth');
    }

}
