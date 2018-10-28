<!DOCTYPE html>
<html>
<head>
	<title>Home Tournament Page</title>
</head>
<body>
	<p>Choose a bracket to fill out</p><br>

	<?php
	require ("dbConnect.php");

	foreach ($db->query('SELECT id, tname FROM tourneys') as $row)
	{
		$id = $row['id'];
		$tourney = $row['tname'];
		echo "<a href=\"https://quiet-temple-53214.herokuapp.com/Project/bracket.php\">$tourney</a><br>";
	}


	?>


</body>
</html>