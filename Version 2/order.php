<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Assignment 3: Finalising purchase"/>
<meta name="keywords" content="PHP, MySql, Orders"/>
<title>Storing Information</title>
</head>
<body>
<h1>Order Confirmation</h1>

<?php
	require_once ("settings.php");
	
	$conn = mysqli_connect($host,
						   $user,
						   $pwd,
						   $sql_db);
	
	$cust_id = trim($_POST["customerid"]);
	$cr_type = trim($_POST["cardtype"]);
	$cr_no = trim($_POST["cardnum"]);
	$cr_name = trim($_POST["cardname"]);
	$cr_exp = trim($_POST["cardexp"]);
	
	//Validation again...
	if(!$conn) {
		echo "<p>Database connection failure</p>";
	} else {
			$sql_table="orders";
		$query = "insert into orders (cust_id, cr_type, cr_no, cr_name, cr_exp) values ('$cust_id', '$cr_type', '$cr_no', '$cr_name', '$cr_exp')";
		
			$result = mysqli_query($conn, $query);
		
			if (!$result) {
				echo "<p>Something is wrong with ", $query, "</p>";
				} else { 
				echo "<p class=\"ok\">Your Order Has Been Confirmed</p>";
			}
			mysqli_close($conn);
	}		
?>
</body>
</html>