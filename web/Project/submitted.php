<!DOCTYPE html>
<html>
<head>
	<title>Submitted Bracket</title>
</head>
<body>

	<h1>Your bracket has been submitted</h1>

	<?php
	require ("dbConnect.php");

	$db = get_db();
	$title = $_POST['title'];

	$query = 'INSERT INTO tourneys(tname) VALUES (:title)';
	$stmt = $db->prepare($query);
	$stmt->bindValue(':title', $title, PDO::PARAM_STR);
	$stmt->execute();
	$tname = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$query = 'SELECT * FROM tourneys WHERE tname = :title';
	$stmt = $db->prepare($query);
	$stmt->bindValue(':title', $tname['tname'], PDO::PARAM_STR);
	$stmt->execute();
	$tourney = $stmt->fetchAll(PDO::FETCH_ASSOC);

	for ($i=1;$i<17;$i++) {
		$entry = "e" . $i;
		$entry = $_POST[$entry];

		$query = 'INSERT INTO entries (entry, tourney_id) VALUES (:entry, :id)';
		$stmt = $db->prepare($query);
		$stmt->bindValue(':entry', $entry, PDO::PARAM_STR);
		$stmt->bindValue(':id', $tourney['id'], PDO::PARAM_INT);
		$stmt->execute();
	}
	?>

</body>
</html>