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
				$hobbies = array("Model Building", "Guitar", "Gaming", "Ping Pong, Basketball");
				foreach ($hobbies as $val){
						echo "<li>" . $val . "<br>";
						}?>
		</ul>
	</div>

	<div id = "models">Some Models I've Built
		<img id = "tank" src="MEPics/tank.png" alt="ME">
		<img src="MEPics/r2d2.png" alt="ME">
		<img src="MEPics/pearl.png" alt="ME">
	</div>

	<div id="myModal" class="modal">
  		<span class="close">&times;</span>
  		<img class="modal-content" id="img01">
    <div id="caption"></div>
    </div>
    <script src="homejs.js"></script>
</body>
</html>