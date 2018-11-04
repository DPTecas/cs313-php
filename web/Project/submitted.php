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

	$query = 'INSERT INTO tourneys (tName) VALUES :title';
	$stmt = $db->prepare($query);
	$stmt->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
	$stmt->execute();

	$query = 'SELECT * FROM tourneys';
	$stmt = $db->prepare($query);
	$stmt->execute();
	$tourney = $stmt->fetchAll(PDO::FETCH_ASSOC);

	for ($i=1;$i<17;$i++) {
		$entry = "entry" . $i;

		$query = 'INSERT INTO entries (entry, tourney_id) VALUES :entry, :id';
		$stmt = $db->prepare($query);
		$stmt->bindValue(':entry', $_POST[$entry], PDO::PARAM_STR);
		$stmt->bindValue(':id', $tourney['id'], PDO::PARAM_INT);
		$stmt->execute();
	}
	?>

</body>
</html>