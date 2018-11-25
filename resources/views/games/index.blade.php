


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>
 
<ul>
    @foreach($games as $game)
        <li><a href="/game/{{ $game->id }}">{{ $game->name }}</a></li>
    @endforeach
</ul>
 
</body>
</html>
