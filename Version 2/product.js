/**
* Author: Trang Le
* Purpose: This file is for validating customer.html, select.html and purchase.html
*Specifics
	- When the "Delivery is same as billed address" gets copied, it should copy the rest"
	- Product purchase page should display customer details with product selection, use local storage to do this.\
	* Validate whether the postcode matches the state in customer.html
	- Validate that the card expiry date for the month must be between 1 and 12
* Created: 5 May 2014
* Last updated: 5 May 2014
*  
*/

function init() {
   var custReg = document.getElementById("custReg");
   custReg.onsubmit = validate;
}
window.onload = init;

function validate() {
	var errMsg = "";
	var result = true;	
	
	var state = document.getElementById("state").value;
	var postcode = document.getElementById("postcode").value;
	
	//state and postcode validation
		if ((state == 'vic') && (postcode.charAt(0) != '3')) {
			if ((state == 'vic') && (postcode.charAt(0) != '8')) {
			alert("State and Postcode does not match");
			result = false;
			}
		}
		
		if ((state == 'nsw') && (postcode.charAt(0) != '1')) {
			if ((state == 'nsw') && (postcode.charAt(0) != '2')) {
			alert("State and Postcode does not match");
			result = false;
			}
		}
		
		if ((state == 'qld') && (postcode.charAt(0) != '4')) {
			if ((state == 'qld') && (postcode.charAt(0) != '9')) {
			alert("State and Postcode does not match");
			result = false;
			}
		}
		
		if ((state == 'nt') && (postcode.charAt(0) != '0')) {
			alert("State and Postcode does not match");
			result = false;
		}
		
		if ((state == 'wa') && (postcode.charAt(0) != '6')) {
			alert("State and Postcode does not match");
			result = false;
		}
		
		if ((state == 'sa') && (postcode.charAt(0) != '5')) {
			alert("State and Postcode does not match");
			result = false;
		}
		
		if ((state == 'tas') && (postcode.charAt(0) != '7')) {
			alert("State and Postcode does not match");
			result = false;
		}
		
		if ((state == 'act') && (postcode.charAt(0) != '0')) {
			alert("State and Postcode does not match");
			result = false;
		}
return result;
}