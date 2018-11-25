<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{


	/**
    *The attributes that are mass assignable.
    *
    *@var array
    */

    protected $fillable = ['name', 'players', 'movies', 'guesses', 'scores', 'critic_scores'];
    
	
    //arrays in table
	protected $primaryKey = 'game_id';

	/**
	*The attributes that should be case to native types.
	*
	*@var array
	*/

    protected $casts = [
    	'players' => 'array',
    	'movies' => 'array',
    	'guesses' => 'array',
    	'scores' => 'array',
    	'critic_scores' => 'array,'

    ];




    /**
    *
    *@return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
