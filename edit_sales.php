<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='XUANZHE FENG'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<title>Edit Sales Record</title>
	</head>
   <body>
<?php
    include("header.inc");
	include("nav.inc");
	
	include("salesData.inc");		
?>	
<h2>Edit Sales Record</h2>

		<span id="list1">
		</span>

		<form action="db_EditSales.php" method="post">
			<fieldset>
				<p>
					<label for='Index'>Index</label>
					<input id='Index' name='Index' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='ProductName'>Product</label>
					<input id='ProductName' name='ProductName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Quantity'>Quantity</label>
					<input id='Quantity' name='Quantity' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				
				    <label for='Price'>Price </label>
					<input id='Price' name='Price' type='text' required='required'/>
				</p>
				<p>
				<label for='Date'>Date</label>
					<input id='Date' name='Date' type='date' required='required' pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}"/>
				</p>
				<p>								
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
    			<button id="editbtn" class="btn btn-warning" type="submit" name="submit" value="editSales">Edit</button>				
				<input type="reset" value="Reset Form"/>
				</p>
			</fieldset>
		</form>
   </body>
</html>