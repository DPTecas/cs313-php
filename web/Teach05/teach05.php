<!DOCTYPE html>
<html>
<head>
	<title>Teach 05</title>
</head>
<body>

	<form action="search.php" method="get">
	Book: <input type="text" name="book"><br>
	<input type="submit">
	</form>

	<?php

	ini_set("display_errors", 1); error_reporting(E_ALL);
	require ("dbConnect.php");

	foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
	{
		echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "<br>" . $row['content'] . "<br>";

	}

	?>

</body>
</html>