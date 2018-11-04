<!DOCTYPE html>
<html>
<head>
	<title>Home Tournament Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Choose a bracket to fill out</h1><br>

	<?php
	require ("dbConnect.php");
	$db = get_db();

	$query = 'SELECT id, tname FROM tourneys';

	$stmt = $db->prepare($query);
	$stmt->execute();
	$tourneys = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($tourneys as $row)
	{
		$id = $row['id'];
		$tourney = $row['tname'];
		echo "<a href=\"https://quiet-temple-53214.herokuapp.com/Project/bracket.php?id=$id\">$tourney</a><br>";
	}


	?>
	<br><br><br>
	<a href = "bracketMaker.php">Make your own bracket!</a>


</body>
</html>