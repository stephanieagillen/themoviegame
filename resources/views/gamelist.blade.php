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
			<td>
				@for($j=0;$j<count($viewgames[$i]->players);j++)
					{{  $viewgames[$i]->players[$j]  }}
				@endfor
			</td>
		</tr>
		@endfor
	</table>
	
</ul>
</body>
</html>

