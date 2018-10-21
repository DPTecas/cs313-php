<!DOCTYPE html>
<html>
<head>
	<title>Bracket Page</title>
</head>
<body>

	<p>Soda Tournament! Who will come out on top? You decide.</p>
	<?php
	require ("dbConnect.php");

	foreach ($db->query("SELECT entry FROM entries WHERE tName = 'DisneyMovies'") as $row)
	{
		$entry = $row['entry'];
		echo "$entry" . "<br>";
	}


	?>
</body>
</html>