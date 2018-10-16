<!DOCTYPE html>
<html>
<head>
	<title>Teach 05</title>
</head>
<body>
	<?php
	require "dbConnect.php";

	foreach ($db->query('SELECT username, password FROM note_user') as $row)
	{
		echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "\n" . $row['content'] . "\n";

	}



	?>

</body>
</html>