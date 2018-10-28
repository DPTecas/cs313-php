<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>


	<?php

	require ("dbConnect.php");

	$db = get_db();

	$entry = $_GET['entry'];

	$query2 = 'SELECT score FROM entries WHERE entry = :entry';
	$stmt = $db->prepare($query2);
	$stmt->bindValue(':entry', $entry, PDO::PARAM_STR);
	$stmt->execute();
	$scores = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$scores[0]['score'] += 1 

	$query = 'UPDATE entries SET score = :score WHERE entry = :entry';
	$stmt = $db->prepare($query);
	$stmt->bindValue(':entry', $entry, PDO::PARAM_STR);
	$stmt->bindValue(':score', $scores[0]['score'], PDO::PARAM_INT);
	$stmt->execute();
	$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

	

	echo "The winner is $entry";
	echo "Other people who think this is number one: " . $scores[0]['score'];
	?>

</body>
</html>