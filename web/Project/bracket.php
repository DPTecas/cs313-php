<!DOCTYPE html>
<html>
<head>
	<title>Bracket Page</title>
</head>
<body>

	<p>Soda Tournament! Who will come out on top? You decide.</p>
	<?php
	require ("dbConnect.php");

	$db = get_db();

	$id = $_GET['id'];

	$query = 'SELECT entry FROM entries WHERE tourney_id = $id';

	$stmt = $db->prepare($query);
	$stmt->execute();
	$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($entries as $row)
	{
		$entry = $row['entry'];
		echo "$entry" . "<br>";
	}


	?>
</body>
</html>