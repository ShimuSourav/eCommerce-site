<?php 

	$con = mysql_connect("localhost", "root", "");
	mysql_select_db("gtxdemo_shop");
	if (!$con) 
	{
		die("Could not connect: " . mysql_errno());
		exit();
	}


	// print_r($_POST);

	// $keyword = $_POST["search_key"];

	$product_code = $_POST['product_code'];
	// $criteria = $_POST['criteria'];

	$query = "SELECT * FROM product WHERE $product_code like '%mob%'";
	$result = mysql_query($con, $query) or die("Sorry, we don't have such kind of product"); 

	echo "<table>";
	echo "<tr><th>Product_name</th> <th>Product_code</th> <th>Price</th><tr>";

	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "<tr><td>";
		echo "$row['Product_name']";
		echo "</td><td>";
		echo "$row['Product_code']";
		echo "</td><td>";
		echo "$row['Price']";
		echo "</td></tr>";
	}
	echo "</table>";
?>