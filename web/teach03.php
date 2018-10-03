<!DOCTYPE html>
<html>
<head>
	<title>teach php 03</title>
</head>
<body>
	<?php
	

	$name = $email = $gender = $comment = "";


 	 $name = $_POST["name"];
 	 $email = $_POST["email"];
  	 $comment = $_POST["comment"];
 	 $major = $_POST["major"];
 	

  	echo "Name: " . $name;
  	echo "Email: " . $email;
  	echo "Major: " . $major;
  	echo "Comment: " . $comment;

	?>
</body>
</html>