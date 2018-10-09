<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	<?php
	session_start();

	$_SESSION['totalPrice'] = ((isset($_SESSION['totalPrice'])) ? (float)$_SESSION['totalPrice'] : 0);

	if (isset($_SESSION['cart1']))
		echo "Carbon Fiber Paddles: " . $_SESSION['cart1'] . " = \$" . (float)$_SESSION['cart1'] * 30.00 . "<br>";

	if (isset($_SESSION['cart2']))
		echo "Couples Package: " . $_SESSION['cart2'] . " = \$" . (float)$_SESSION['cart2'] * 40.00 . "<br>";

	if (isset($_SESSION['cart3']))
		echo "One Orange Ball: " . $_SESSION['cart3'] . " = \$" . (float)$_SESSION['cart3'] * 0.50 . "<br>";

	if (isset($_SESSION['cart4']))
		echo "One White Ball: " . $_SESSION['cart4'] . " = \$" . (float)$_SESSION['cart4'] * 0.50 . "<br>";
	
	echo "Total Price: \$" . (float)$_SESSION['totalPrice'] . "<br>";
	
	?>
	<a href="https://quiet-temple-53214.herokuapp.com/Prove03/checkout.php" id = "cartLink">Checkout</a>
</body>
</html>