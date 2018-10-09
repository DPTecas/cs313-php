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
    	<form action ="<? echo $_SERVER['PHP_SELF']; ?>" method = "get">
    	<input type = "submit" name = "item1" value = "Add to Cart">
    	</form>
    </div>

    <div class = item>
    	<img src = "pics/twoPaddles.jpg" alt = "Two Paddle" class = "itemImages"><br>
    	<p>Couples Package $40.00</p><br>
    	<form action ="<? echo $_SERVER['PHP_SELF']; ?>" method = "get">
    	<input type = "submit" name = "item2" value = "Add to Cart">
    	</form>
    </div>

    <div class = item>
    	<img src = "pics/singleOrange.jpg" alt = "Orange Ball" class = "itemImages"><br>
    	<p>Single Orange Ping Pong Ball $0.50</p><br>
    	<form action ="<? echo $_SERVER['PHP_SELF']; ?>" method = "get">
    	<input type = "submit" name = "item3" value = "Add to Cart">
    	</form>
    </div>

    <div class = item>
    	<img src = "pics/singleWhite.jpg" alt = "White Ball" class = "itemImages"><br>
    	<p>Single White Ping Pong Ball $0.50</p><br>
    	<form action ="<? echo $_SERVER['PHP_SELF']; ?>" method = "get">
    	<input type = "submit" name = "item4" value = "Add to Cart">
    	</form>
    </div>
    <?php
    	$_SESSION['totalPrice'] = ((isset($_SESSION['totalPrice'])) ? (float)$_SESSION['totalPrice'] : 0);
    	$_SESSION['cart1'] = ((isset($_SESSION['cart1'])) ? $_SESSION['cart1'] : 0);
    	if (isset($_GET["item1"])){
    		++$_SESSION['cart1'];
    		$_SESSION['totalPrice'] += 30.00;
    	}

    	$_SESSION['cart2'] = ((isset($_SESSION['cart2'])) ? $_SESSION['cart2'] : 0);
    	if (isset($_GET["item2"])){
    		++$_SESSION['cart2'];
    		$_SESSION['totalPrice'] += 40.00;
    	}	

    	$_SESSION['cart3'] = ((isset($_SESSION['cart3'])) ? $_SESSION['cart3'] : 0);
    	if (isset($_GET["item3"])){
    		++$_SESSION['cart3'];
    		$_SESSION['totalPrice'] += 0.50;
    	}	

    	$_SESSION['cart4'] = ((isset($_SESSION['cart4'])) ? $_SESSION['cart4'] : 0);
    	if (isset($_GET["item4"])){
    		++$_SESSION['cart4'];
    		$_SESSION['totalPrice'] += 0.50;
    	}		
    ?>
    
</body>
</html>