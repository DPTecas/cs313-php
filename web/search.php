<!DOCTYPE html>
<html>
<head>
	<title>searching</title>
</head>
<body>
	<?php

	ini_set("display_errors", 1); error_reporting(E_ALL);
	require ("dbConnect.php");

	$var = $_GET['book'];

	foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE book = '$var'') as $row)
	{
		echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "<br>" . $row['content'] . "<br>";

	}

	?>

</body>
</html>