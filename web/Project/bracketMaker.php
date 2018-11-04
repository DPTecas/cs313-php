<!DOCTYPE html>
<html>
<head>
	<title>Bracket Maker</title>
</head>
<body>
	<form action = "submitted.php" method="post" style = "text-align:center;">
	Bracket Title: <input type="text" name="title">
	Entry 1: <input type="text" name = "e1">
	Entry 2: <input type="text" name = "e2">
	Entry 3: <input type="text" name = "e3">
	Entry 4: <input type="text" name = "e4">
	Entry 5: <input type="text" name = "e5">
	Entry 6: <input type="text" name = "e6">
	Entry 7: <input type="text" name = "e7">
	Entry 8: <input type="text" name = "e8">
	Entry 9: <input type="text" name = "e9">
	Entry 10: <input type="text" name = "e10">
	Entry 11: <input type="text" name = "e11">
	Entry 12: <input type="text" name = "e12">
	Entry 13: <input type="text" name = "e13">
	Entry 14: <input type="text" name = "e14">
	Entry 15: <input type="text" name = "e15">
	Entry 16: <input type="text" name = "e16">
	<input type = "submit">
	</form>


	<?php
	require ("dbConnect.php");

	$db = get_db();
	?>

</body>
</html>