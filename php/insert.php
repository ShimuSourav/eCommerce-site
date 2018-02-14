<?php
	
	$con = mysql_connect("localhost", "root", "");

	if (!$con) 
	{
		die("Could not connect: " . mysql_errno());
		exit();
	}
	
	// echo "Connected";

	mysql_select_db("food_pro", $con);


	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO subscription (firstname, lastname, city, email, password) 
		VALUES ('$firstname', '$lastname', '$city', '$email', '$password')";

	// $sql = "INSERT INTO subscription(first_name, last_name, address, email, password) 
 // 			VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[city]', '$_POST[email]', '$_POST[password]')";


	
	if (!mysql_query($sql, $con)) 
	{
		die("Error: " . mysql_error() . mysql_errno());
	}

	echo "Record added successfully";

	mysql_close($con)
?>