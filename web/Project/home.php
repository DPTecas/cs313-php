<!DOCTYPE html>
<html>
<head>
	<title>Home Tournament Page</title>
</head>
<body>
	<p>Choose a bracket to fill out</p><br>

	<?php
	require ("dbConnect.php");

	foreach ($db->query('SELECT tname FROM tourneys') as $row)
	{
		$tourney = $row['tName'];
		echo "$tourney";
		//echo "<a href=\"https://quiet-temple-53214.herokuapp.com/Project/bracket$tourney.php\">$tourney</a>";
	}


	?>


</body>
</html>