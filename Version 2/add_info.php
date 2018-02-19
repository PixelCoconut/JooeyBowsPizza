<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Assignment 3: Adding Details"/>
<meta name="keywords" content="PHP, MySql, Customer"/>
<title>Storing Information</title>
</head>
<body>
<h1>Customer Details</h1>
<?php
	require_once ("settings.php");
	
	$conn = mysqli_connect($host,$user,$pwd,$sql_db);

	$f_name = trim($_POST["firstname"]);
	$l_name = trim($_POST["lastname"]);
	$street_addr = trim($_POST["streetaddress"]);
	$sub_town = trim($_POST["suburb"]);
	$state = trim($_POST["state"]);
	$postcode = trim($_POST["postcode"]);
	$email = trim($_POST["email"]);
	$ph_no = trim($_POST["phone"]);
	
	
	//Validation
	if(!$conn) {
		echo "<p>Database connection failure</p>";
	} else {
			$sql_table="customers";
		$query = "insert into customers (f_name, l_name, street_addr, sub_town, state, postcode, email, ph_no) values ('$f_name', '$l_name', '$street_addr', '$sub_town', '$state', '$postcode', '$email', '$ph_no')";
		
			$result = mysqli_query($conn, $query);
		
			if (!$result) {
				echo "<p>Something is wrong with ", $query, "</p>";
				} else { 
				echo "<p class=\"ok\">Successfully added new customer details</p>";
			}
			mysqli_close($conn);
	}		
?>
</body>
</html>