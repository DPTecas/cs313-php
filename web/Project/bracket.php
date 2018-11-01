<!DOCTYPE html>
<html>
<head>
	<title>Bracket Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<script src="bracket.js" type = "text/javascript"></script>

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

	echo "<button id = \"b0\" onclick = \"b0()\" type=\"button\">$entry[0]</button>";
	echo "<button id = \"b1\" onclick = \"b1()\" type=\"button\">$entry[1]</button>";
	echo "<button id = \"b2\" onclick = \"b2()\" type=\"button\">$entry[2]</button>";
	echo "<button id = \"b3\" onclick = \"b3()\" type=\"button\">$entry[3]</button>";
	echo "<button id = \"b4\" onclick = \"b4()\" type=\"button\">$entry[4]</button>";
	echo "<button id = \"b5\" onclick = \"b5()\" type=\"button\">$entry[5]</button>";
	echo "<button id = \"b6\" onclick = \"b6()\" type=\"button\">$entry[6]</button>";
	echo "<button id = \"b7\" onclick = \"b7()\" type=\"button\">$entry[7]</button>";
	echo "<button id = \"b8\" onclick = \"b8()\" type=\"button\">$entry[8]</button>";
	echo "<button id = \"b9\" onclick = \"b9()\" type=\"button\">$entry[9]</button>";
	echo "<button id = \"b10\" onclick = \"b10()\" type=\"button\">$entry[10]</button>";
	echo "<button id = \"b11\" onclick = \"b11()\" type=\"button\">$entry[11]</button>";
	echo "<button id = \"b12\" onclick = \"b12()\" type=\"button\">$entry[12]</button>";
	echo "<button id = \"b13\" onclick = \"b13()\" type=\"button\">$entry[13]</button>";
	echo "<button id = \"b14\" onclick = \"b14()\" type=\"button\">$entry[14]</button>";
	echo "<button id = \"b15\" onclick = \"b15()\" type=\"button\">$entry[15]</button>";

	?>

	<img id = "drawing" src="bracketDrawing.PNG" alt="Bracket">

	<button id = "c0" onclick = "c0()" type = "button"></button>
	<button id = "c1" onclick = "c1()" type = "button"></button>
	<button id = "c2" onclick = "c2()" type = "button"></button>
	<button id = "c3" onclick = "c3()" type = "button"></button>
	<button id = "c4" onclick = "c4()" type = "button"></button>
	<button id = "c5" onclick = "c5()" type = "button"></button>
	<button id = "c6" onclick = "c6()" type = "button"></button>
	<button id = "c7" onclick = "c7()" type = "button"></button>

	<button id = "d0" onclick = "d0()" type = "button"></button>
	<button id = "d1" onclick = "d1()" type = "button"></button>
	<button id = "d2" onclick = "d2()" type = "button"></button>
	<button id = "d3" onclick = "d3()" type = "button"></button>

	<button id = "e0" onclick = "e0()" type = "button"></button>
	<button id = "e1" onclick = "e1()" type = "button"></button>


</body>
</html>