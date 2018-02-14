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
	$email = $_POST['email'];
	$message = $_POST['message'];

	$sql = "INSERT INTO opinion (name, email, message) 
			VALUES ('$name', '$email', '$message')";


	
	if (!mysql_query($sql, $con)) 
	{
		die("Error: " . mysql_error() . mysql_errno());
	}

	echo "Thank you for submitting your opinion :)";

	mysql_close($con);
	
?>