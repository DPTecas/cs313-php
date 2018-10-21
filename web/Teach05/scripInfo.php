<!DOCTYPE html>
<html>
<head>
	<title>scripture info</title>
</head>
<body>
<?php

	ini_set("display_errors", 1); error_reporting(E_ALL);
	require ("dbConnect.php");

	$book = "'" . $_GET['book'] . "'";
	$chapter = "'" . $_GET['chapter'] . "'";
	$verse = "'" . $_GET['verse'] . "'";

	foreach ($db->query("SELECT book, chapter, verse, content FROM scriptures WHERE book = $book AND chapter = $chapter AND verse = $verse") as $row)
	{

		echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "<br>" . $row['content'] . "<br>";

	}

	?>
</body>
</html>