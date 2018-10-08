<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="prove03.css">
</head>
<body>
	<?php
	session_start();
	?>
	
    <a href="https://quiet-temple-53214.herokuapp.com/Prove03/shoppingCart.php" id = "cartLink">Shopping Cart</a>

    <div class = item>
    	<img src = "pics/carbonFiberPaddle.jpg" alt = "Carbon Fiber Paddle" class = "itemImages"><br>
    	<p>Carbon Fiber Paddle $30.00</p><br>
    	<input type = "submit" name = "item1" value = "Add to Cart">
    	<?php
    	$_SESSION["item1"] = 0;
    	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    		if (isset($_POST['item1'])){
    			$_SESSION["item1"] += 1;
    		}
    	}
    	?>
    </div>
    
</body>
</html>