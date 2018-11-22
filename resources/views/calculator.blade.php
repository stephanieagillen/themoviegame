<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
   
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body class="home curtain-background">
<div class="calculator">
    <div class="container">
        <div class="heading">
                <h1 class="text-center">Welcome to the Movie Calculator</h1>
                
        </div>
        <div class="text-center">
                <button class="btn text-center" onclick="promptCount()" style="margin-bottom: 100px">START GAME</button>      
        </div>
      <div class="table content" id="game">
        <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Enter in each player's guess, then enter the critics score. The difference between the two will be calculated in order to determine each player's score. If a player guesses the exact critic score, that player will be awarded -5 points. The player with the least amount of points wins!</h2>
                </div>
            <div id="rounds">
              <!-- <div class="table content" id="round1">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Round #1</h2>
                    </div>
                    <div class="col-md-12">
                        <form method="_POST" id="criticRating1">
                            Critic Rating: <input type="number" name="" id="" value="">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form method="_POST">
                            Player #1 Score: <input type="number" name="" id="" value="">
                        </form>
                    </div>
                </div>
              </div>
            </div>  -->
        </div>
      </div>
    </div>


</div>







<script>

var players;
var rounds;
var movies;
var player;
var round;
var movie;
//var p = players;
//var r = rounds;
var names = [];
var movies = [];
var finalScore = [];
var guess = [[],[]];
var score = [[],[]];
//var Guesses = new Array();
//var Scores = new Array();


//Hide the table a.k.a. headings
$(document).ready(function() {
    $("#game").hide();
    setInterval(calculateScores, 1000); 
});

//Create a custom table for the game 

   

    function promptCount() {
        
        //Prompt the user to enter the number of players and validate entry.
        do {
            players = prompt("How many people are playing?");
            if (isNaN(players)){
                alert("Must input a number");
            }
        } while(isNaN(players));

        //Prompt the user to enter the number of rounds and validate entry.
        do {
            rounds = prompt("How many rounds will you be playing?");
            if (isNaN(rounds)){
                alert("Must input a number");
            }
        } while(isNaN(rounds));

        


        //Ask for each players' name
        
        for (var i=0; i<players; i++) {
            //Create an element in the names array for each player's name
            //Ask player for his or her name
            //Assign it to the respective array element
            names[i] = prompt('Name of Player #' + (i+1));
        }


        //Ask for the movie name of each round
        
        for (var i=0; i<rounds; i++) {
            //Create an element in the names array for each player's name
            //Ask player for his or her name
            //Assign it to the respective array element
            movies[i] = prompt('Movie for Round #' + (i+1));
        }

         //create variables
                for (var i=0;i<rounds;i++) {
                    guess[i]=new Array();
                    score[i]=new Array();
                        for (var j=0;j<players;j++) {
                            guess[i][j]=0;
                            score[i][j]=0;
                        }
                    }


                    for (var j=0; j<players;j++){
                        finalScore[j]=0;
                    }

        //Create an empty table 
        for (var i=0; i<rounds; i++){
            $('#rounds').append('<div class="table content" id="round' + (i+1) + '"> <div class="row"><div class="col-md-12"><h2>Round #' + (i+1) +  ': ' + movies[i] + '</h2></div><div class="col-md-12"><form method="_POST" id="critic' + (i+1) + '">Critic Rating: <input type="number" name="criticRating' + (i+1) + '" id="criticRating' + (i+1)  + '" value=""/ ></form></div>' + '<div class="col-md-6"><form method="_POST" id="guesses' + (i+1) + '">' + '</form></div>' + '<div class="col-md-6"><form method="_POST" id="scores' + (i+1) + '"></form></div></div>' );


                        //Add a column for each player's guess into the table
                                for(var j=0; j<players; j++) {
                                    $('#guesses' + (i+1)).append('<label>' + names[j] + '\'s Guess: </label></span><input type="number" name="guessRound' + (i+1) + 'Player' + (j+1)  + '" id="guessRound' + (i+1) + 'Player' + (j+1)  + '" value="" /><br>');
                                }


                        //Add a column for each player's score into the table
                        for(var j=0; j<players; j++) {
                            $('#scores' + (i+1)).append('<label>' + names[j] + '\'s Score: </label><input type="inactive" class="scoreNumber" name="scoreRound' + (i+1) + 'Player' + (j+1)  + '" id="scoreRound' + (i+1) + 'Player' + (j+1)  + '" value="" /><br>');
                        }
        }





        
        
        for(var j=0; j<players; j++){
                $('#game').append('<h4 class="nameArea">' + names[j] + '\'s Overall Score <span  id="player' + (j+1) + 'Overall"></span></h4>')
            }
        

         //Script to show the table created based upon user's entry
        $('#game').show();

    

    };





    //Create empty arrays in order to assign each player's guess and score for each round

    //var p = players;
    //var r = rounds;

    /*
    var guess = new Array();
    var score = new Array();


    function createVariables() {

                for (var i=0;i<r;i++) {
                        guess[i]=new Array();
                        score[i]=new Array();
                            for (var j=0;j<p;j++) {
                                guess[i][j]=0;
                                score[i][j]=0;
                            }
                 }

    };*/




    //Create a table for each round



    //Create an overall score section




   



//Runs any time a value changes
function calculateScores(){ 
    
    for(var i=0; i<rounds; i++) {
        for(var j=0; j<players; j++) {

            if ($('#guessRound' + (i+1) + 'Player' + (j+1)).val().length > 0 ) {
                score[i][j]=Math.abs(($('#criticRating' + (i+1)).val())-($('#guessRound' + (i+1) + 'Player' + (j+1)).val()));
                if (score[i][j] == 0){
                    score[i][j] = -5;
                }
                $('#scoreRound' + (i+1) + 'Player' + (j+1)).val(score[i][j]);
                    //$('#player' + (j+1) + 'Overall').text() = ;
            }
        } 
    }

    
        for(var j=0; j<players; j++){
            finalScore[j] =0;
        }

        for(var j=0; j<players; j++){
            for (var i=0; i<rounds; i++){
                finalScore[j] += score[i][j];
            }
            $('#player' + (j+1) + 'Overall').text(finalScore[j]);
        }
 
};





    /*finalScore[player]=Math.abs(($('#criticRating').val())-($('#guess' + final).val()));
    if (finalScore[player] == 0){
        finalScore[player] = -5;
    }
    $('#score' + final).val(score[final]); */





</script>
   

<style>


</style>
</body>
</html>