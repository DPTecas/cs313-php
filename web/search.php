<!DOCTYPE html>
<html>
<head>
	<title>searching</title>
</head>
<body>
	<?php

	ini_set("display_errors", 1); error_reporting(E_ALL);
	require ("dbConnect.php");

	$var = "'" . $_GET['book'] . "'";

	foreach ($db->query("SELECT book, chapter, verse FROM scriptures WHERE book = $var") as $row)
	{

		$scrip = $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "<br>";
		echo "<a href=\"https://quiet-temple-53214.herokuapp.com/scripInfo.php?book=$row['book']&chapter=$row['chapter']&verse=$row['verse']\">$scrip</a>";

	}

	?>

</body>
</html>