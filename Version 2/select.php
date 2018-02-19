<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name= "description" content= "Online Pizza Purchase"/>
	<meta name= "keywords" content= "HTML Page 5: Product Selection"/>
	<meta name= "author" content= "Trang Le"/>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<link rel="stylesheet" type="text/css" href="styles/menustyle.css"/>
	<script src="product.js"></script>
	<title>Jooey Bow's Pizza</title>
</head>

<body>
<header><h1>Select Your Product</h1></header>

<?php include ("menu.php");
?>

<aside>
	<ul id= "pizza">
		<li><img src= "images/pizzabase1.jpg" alt= "Vegetarian" width="140" height="58"/></li>
		<li>Vegetarian</li>
		<li><img src= "images/pizzabase2.jpg" alt= "Supreme" width="140" height="58"/></li>
		<li>Supreme</li>
		<li><img src= "images/pizzabase3.jpg" alt= "Meat Lovers" width="140" height="58"/></li>
		<li>Meat Lovers</li>
		<li><img src= "images/pizzabase4.jpg" alt= "Surprise Me!" width="140" height="58"/></li>
	</ul>
</aside>

<article>
	<h2>I CHOOSE PIZZA!</h2>
	We are on our way to finally delivering online! Choose from our delicious range of new "classic" premium pizzas!
</article>

<section>
	<form id="info" method="post" action="http://mercury.ict.swin.edu.au/it000000/formtest.php">
		<p><label for="gpizza">Select Your Topping</label>
			<select name="gpizza" id="gpizza">
			<option value="supreme" selected="selected">Cheesy "Supreme"</option>
			<option value="veggie">Elegant "Vegetarian"</option>
			<option value="meat">Manly "Meat Lovers"</option>
			<option value="surprise">Surprise Me!</option>
			</select>
		</p>
		
		<p>Select Extra Ingredients (Chilli is FREE!)<br/>
			<label><input type="checkbox" name="ing[]"
			value="chi" checked="checked"/>
			Chilli</label>
			<label><input type="checkbox" name="ing[]"
			value="pin"/>Pineapple</label>
			<label><input type="checkbox" name="ing[]"
			value="car"/>Carrots</label>
			<label><input type="checkbox" name="ing[]"
			value="cho"/>Chocolate Balls</label>
		</p>
		
		<p><label>Selected Extras Range</label><br />
			<label><input type="radio" name="extras"
			value="none" checked="checked" /> 
			None</label>
			<label><input type="radio" name="extras"
			value="coke" />Large (1.5L) Coke</label>
			<label><input type="radio" name="extras"
			value="garlic" />Garlic Bread</label>
			<label><input type="radio" name="extras"
			value="icecream" />Ice-Cream</label>
			<label><input type="radio" name="extras"
			value="tea" />A Gallon of Tea</label>
		</p>
		
		<p><input type="submit" value="Submit"/>
		<input type="reset" value="Reset" />
		</p>
	</form>
	Note: Ice-cream flavours come in 3 flavours (Choco, Strawberry and Vanilla) please pick your choosing when we deliver to your door!
	<p><a href="purchase.php">BUY NOW!</a></p>
</section>

</body>
</html>



