<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name= "description" content= "Online Pizza Purchase"/>
	<meta name= "keywords" content= "HTML Page 4: Customer Registration"/>
	<meta name= "author" content= "Trang Le"/>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<link rel="stylesheet" type="text/css" href="styles/menustyle.css"/>
	<script src="product.js"></script>
	<title>Jooey Bow's Pizza</title>
</head>

<body>
<header><h1>Customer Registration</h1></header>

<?php include ("menu.php");
?>

<article>
	<h2>Register</h2>
	We are currently updating our website. In the meantime, why don't you register with us so you can get up to date? It's the cool thing to do these days!
</article>

<section>
	<fieldset id="person">
	<legend>Your Details:</legend>
		<form id="custReg" method="post" action="add_info.php" >
			<p><label for="firstname">First Name</label>
				<input type="text" id="firstname" name="firstname" pattern="[A-Za-z ]+" maxlength="20" required="required"/></p>
			<p><label for="lastname">Last Name</label>
				<input type="text" id="lastname" name="lastname" pattern="[A-Za-z ]+" maxlength="20" required="required"/></p>
			<p><label for="dob">Date of Birth</label>
				<input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10" size="10" required="required"/></p>
				
			<fieldset id="address">
				<legend>Billing Address</legend>
					<p><label for="streetaddress">Street Address</label>
						<input type="text" id="streetaddress" name="streetaddress" maxlength="40" size="40" required="required"/></p>
					<p><label for="suburb">Suburb/Town</label>
						<input type="text" id="suburb" name="suburb" maxlength="20" size="20" required="required"/></p>
						
				    <p><label for="state">State</label>
						<select id="state" name="state">
						<option value="vic" selected="selected">VIC</option>
						<option value="nsw">NSW</option>
						<option value="qld">QLD</option>
						<option value="nt">NT</option>
						<option value="wa">WA</option>
						<option value="sa">SA</option>
						<option value="tas">TAS</option>
						<option value="act">ACT</option>
						</select>
					</p>
					
					<p><label for="postcode">Postcode</label>
					<input type="text" id="postcode" name="postcode" pattern="\d{4}" maxlength="4" required="required"/></p>
					
						<fieldset id="daddress">
							<legend>Delivery Address</legend>
							<p>Delivery Address same as Billing Address?<label><input type="checkbox" id="deladd" name="deladd[]"
						value="yes" />Yes</label></p>
								<p><label for="dstreetaddress">Street Address</label>
									<input type="text" id="dstreetaddress" name="dstreetaddress" maxlength="40" size="40"/></p>
								<p><label for="dsuburb">Suburb/Town</label>
									<input type="text" id="dsuburb" name="dsuburb" maxlength="20" size="20"/></p>
									
								<p><label for="dstate">State</label>
									<select id="dstate" name="dstate">
									<option value="vicc" selected="selected">VIC</option>
									<option value="nsww">NSW</option>
									<option value="qldd">QLD</option>
									<option value="ntt">NT</option>
									<option value="waa">WA</option>
									<option value="saa">SA</option>
									<option value="tass">TAS</option>
									<option value="actt">ACT</option>
									</select>
								</p>
					
								<p><label for="dpostcode">Postcode</label>
								<input type="text" id="dpostcode" name="dpostcode" pattern="\d{4}" maxlength="4"/></p>
						</fieldset>
				
					<p><label for="email">Email Address</label>
						<input type="email" id="email" name="email" size="40" required="required"/></p>	
						
					<p><label for="phone">Phone Number</label>
						<input type="text" id="phone" name="phone" pattern="\d{10}" maxlength="10" required="required"/></p>	
					
					<p><input type="submit" value="Submit"/>
						<input type="reset" value="Reset" /></p> 
			</fieldset>
		
		</form>
	</fieldset>
	
</section>
</body>
</html>