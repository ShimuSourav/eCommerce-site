<?php
	
	$con = mysql_connect("localhost", "root", "");
	mysql_select_db("gtxdemo_shop");
	if (!$con) 
	{
		die("Could not connect: " . mysql_errno());
		exit();
	}
	
	// echo "Connected";
		//print_r($_POST);
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM signup WHERE email = '{$email}' ";

		$temp = mysql_query($sql, $con);
		
		if (!$temp) 
		{
			die("Sorry, user doesn't exist " . mysql_errno());
		}

		$user = mysql_fetch_assoc($temp);
		$pass = $user["password"];

		if ($password = $pass) 
		{
			echo "You are logged in successfully..";
		}

		mysql_close($con);
	
?>