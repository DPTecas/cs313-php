<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href = "homepagecss.css">
	<title>Home Page CS313</title>
</head>
<body>
	<p id = "name">Will Mildenhall</p>
	<p id = "class">Web Engineering II</p><br>

	<div id = "hobbies">Hobbies Include - 
		<ul>
			<?php 
				$hobbies = array("Model Building", "Guitar", "Gaming", "Ping Pong");
				foreach ($hobbies as $val){
						echo "<li>" . $val . "<br>";
						}?>
		</ul>
	</div>
</body>
</html>