<!DOCTYPE html>
<html>
<head>
	<title>Bracket Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<p>Soda Tournament! Who will come out on top? You decide.</p>
	<?php
	require ("dbConnect.php");

	$db = get_db();

	$id = $_GET['id'];

	$query = 'SELECT entry FROM entries WHERE tourney_id = :id';

	$stmt = $db->prepare($query);
	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
	$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$entry = array();
	foreach ($entries as $row)
	{
		array_push($entry,$row['entry']);
	}

	echo "<button id = \"b0\" type=\"button\">$entry[0]</button>";
	echo "<button id = \"b1\" type=\"button\">$entry[1]</button>";
	echo "<button id = \"b2\" type=\"button\">$entry[2]</button>";
	echo "<button id = \"b3\" type=\"button\">$entry[3]</button>";
	echo "<button id = \"b4\" type=\"button\">$entry[4]</button>";
	echo "<button id = \"b5\" type=\"button\">$entry[5]</button>";
	echo "<button id = \"b6\" type=\"button\">$entry[6]</button>";
	echo "<button id = \"b7\" type=\"button\">$entry[7]</button>";
	echo "<button id = \"b8\" type=\"button\">$entry[8]</button>";
	echo "<button id = \"b9\" type=\"button\">$entry[9]</button>";
	echo "<button id = \"b10\" type=\"button\">$entry[10]</button>";
	echo "<button id = \"b11\" type=\"button\">$entry[11]</button>";
	echo "<button id = \"b12\" type=\"button\">$entry[12]</button>";
	echo "<button id = \"b13\" type=\"button\">$entry[13]</button>";
	echo "<button id = \"b14\" type=\"button\">$entry[14]</button>";
	echo "<button id = \"b15\" type=\"button\">$entry[15]</button>";

	?>
</body>
</html>