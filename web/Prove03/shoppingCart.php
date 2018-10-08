<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	<?php
	session_start();
	?> 

	<?php
	echo $_SESSION['cart1'];
	echo $_SESSION['cart2'];
	echo $_SESSION['cart3'];
	echo $_SESSION['cart4'];
	?>
</body>
</html>