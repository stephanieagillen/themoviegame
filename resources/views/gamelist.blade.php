<!DOCTYPE html>
<html>
<head>
	<title>Games</title>
</head>
<body>
<ul>
	@for($i=0;$i<count($games);$i++)
		<li>{{ $games[i]->name }}</li>
	@endfor
	
</ul>
</body>
</html>

