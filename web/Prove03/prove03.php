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
    </div>
    <?php
    	$_SESSION["cart1"] = 0;
    	
    	if (isset($_POST['item1'])){
    		$_SESSION["cart1"] += 1;
    	}
    	
    ?>
    
</body>
</html>