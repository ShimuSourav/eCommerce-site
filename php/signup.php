<?php
	
	$con = mysql_connect("localhost", "root", "");

	if (!$con) 
	{
		die("Could not connect: " . mysql_errno());
		exit();
	}
	
	// echo "Connected";

	mysql_select_db("gtxdemo_shop", $con);


	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO signup (firstname, lastname, city, gender, email, password) 
		VALUES ('$firstname', '$lastname', '$city', '$gender', '$email', '$password')";


	
	if (!mysql_query($sql, $con)) 
	{
		die("Error: " . mysql_error() . mysql_errno());
	}

	echo "Record added successfully...";

	mysql_close($con);
	
?>