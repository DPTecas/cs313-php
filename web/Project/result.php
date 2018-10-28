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

	$query = 'UPDATE entries SET score = 0 WHERE entry = :entry';

	$stmt = $db->prepare($query);
	$stmt->bindValue(':entry', $id, PDO::PARAM_STR);
	$stmt->execute();
	$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo "The winner is $entry";
	?>

</body>
</html>