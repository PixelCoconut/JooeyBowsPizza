<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name= "description" content= "Online Pizza Purchase"/>
	<meta name= "keywords" content= "PHP Page 1: Customer Orders Query"/>
	<meta name= "author" content= "Trang Le"/>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<link rel="stylesheet" type="text/css" href="styles/menustyle.css"/>
	<script src="product.js"></script>
	<title>Jooey Bow's Pizza</title>
</head>

<body>
<header><h1>Customer Orders</h1></header>

<?php include ("menu.php");
?>

<article>
		<h2>View Your Customer Orders Here</h2>
		You can now check current and past orders here by entering your Customer Id. Go on, it's simple!
		<form id="checkcustid" method="post" action="order.php">
		<p><label for="checkcustid">Enter Customer ID:</label>
			<input type="text" id="checkcustid" name="checkcustid" pattern="\d{2}" required="required"/></p>
		</form>
</article>
</body>
</html>