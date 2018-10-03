<!DOCTYPE html>
<html>
<head>
	<title>teach php 03</title>
</head>
<body>
	<?php
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	$name = $email = $gender = $comment = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	  $name = test_input($_POST["name"]);
 	  $email = test_input($_POST["email"]);
  	  $comment = test_input($_POST["comment"]);
 	  $major = test_input($_POST["major"]);

 	function test_input($data) {
  	  $data = trim($data);
  	  $data = stripslashes($data);
  	  $data = htmlspecialchars($data);
  	  return $data;

  	echo "Name: " . $name;
  	echo "Email: " . $email;
  	echo "Major: " . $major;
  	echo "Comment: " . $comment;
}
	?>
</body>
</html>