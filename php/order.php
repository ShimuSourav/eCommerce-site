<?php
	
	$con = mysql_connect("localhost", "root", "");

	if (!$con) 
	{
		die("Could not connect: " . mysql_errno());
		exit();
	}
	
	// echo "Connected";

	mysql_select_db("gtxdemo_shop", $con);


	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$product = $_POST['product'];
	$code = $_POST['code'];
	$size = $_POST['size'];
	$quantity = $_POST['quantity'];
	$odate = $_POST['odate'];

	$sql = "INSERT INTO placeorder (name, address, city, contact, product, code, size, quantity, odate) 
		VALUES ('$name', '$address', '$city', '$contact', '$product', '$code', '$size', '$quantity', '$odate')";


	
	if (!mysql_query($sql, $con)) 
	{
		die("Error: " . mysql_error() . mysql_errno());
	}

	echo "Your order is poceeding...Thank You";

	mysql_close($con);
	
?>