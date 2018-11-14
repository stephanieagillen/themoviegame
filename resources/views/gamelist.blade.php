<!DOCTYPE html>
<html>
<head>
	<title>Games</title>
</head>
<body>
<ul>
	<?php print_r($viewgames); ?>

	<table>
		@for($i=0;$i<count($viewgames); $i++)
		<tr>
			<td>{{  $viewgames[$i]->name  }}</td> 
			<td>{{  $viewgames[$i]->players  }}</td>
		</tr>
		@endfor
	</table>
	
</ul>
</body>
</html>

