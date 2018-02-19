<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name= "description" content= "Online Pizza Purchase"/>
	<meta name= "keywords" content= "HTML Page 6: Product Purchase"/>
	<meta name= "author" content= "Trang Le"/>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<link rel="stylesheet" type="text/css" href="styles/menustyle.css"/>
	<script src="product.js"></script>
	<title>Jooey Bow's Pizza</title>
</head>

<body>
<header><h1>Product Purchase</h1></header>

<?php include ("menu.php");
?>

<article>
	<h2>It's About Time!</h2>
	It's that shining and important moment. You're that one step away from touching that sweet sweet pizza. Let's get to it!
</article>

<section>
	<fieldset id="billcard">
	<legend>Your Billing Details:</legend>
	<form id="creditcard" method="post" action="order.php">
		<p><label for="customerid">Customer ID</label>
			<input type="text" id="customerid" name="customerid" pattern="\d{2}" required="required"/></p>
		
		<p><label for="cardtype">Credit Card Type:</label>
			<select name="cardtype" id="cardtype">
			<option value="visa" selected="selected">Visa</option>
			<option value="mastercard">Mastercard</option>
			<option value="amexpress">American Express</option>
			</select>
		</p>
		
		<p><label for="cardname">Name on Credit Card</label>
			<input type="text" id="cardname" name="cardname" pattern="[A-Za-z ]+" maxlength="30" required="required"/></p>
			
		<p><label for="cardnum">Credit Card Number</label>
			<input type="text" id="cardnum" name="cardnum" pattern="\d{16}" maxlength="16" required="required"/></p>
			
		<p><label for="cardexp">Credit Card Expiry Date</label>
			<input type="text" id="cardexp" name="cardexp" placeholder="mm-yy" pattern="\d{1,2}-\d{1,2}" maxlength="5" required="required"/></p>
			
		<p><input type="submit" id="thebutton" value="Submit"/>
			<input type="reset" value="Reset" />
		</p>
	</form>
	</fieldset>
</section>
</body>
</html>