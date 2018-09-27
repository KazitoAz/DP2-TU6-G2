<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='Johsua R Clarke'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<script src="scripts/EditInventory.js"></script>
		<title>PHP - Edit Inventory Recored</title>
	</head>
   <body>
<?php
    include("header.inc");
	include("nav.inc");
	
	include("inventoryData.inc");	
?>

<h2>Edit Inventory</h2>

		<span id="list">
		</span>


<span id ="List"></span>
		<form action="db_EditInventory.php" method="post">
			<fieldset>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='ItemName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Supplier'>Supplier</label>
					<input id='Supplier' name='Supplier' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				
				    <label for='ContactNumber'>Contact Number </label>
					<input id='ContactNumber' name='ContactNumber' type='text' required='required'/>
				</p>
				<p>
				<label for='Address'>Address</label>
					<input id='Address' name='Address' type='text' required='required'/>
				</p>
				<p>
				
					<label for='Quantiy'>Quantity</label>
					<input id='Quantiy' name='Quantity' type='text' required='required' pattern="\d"/>
				</p>
				
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
    			<button id="editbtn" class="btn btn-warning" type="submit" name="submit" value="editInventory">Add</button>				
				<input type="reset" value="Reset Form"/>
				</p>
			</fieldset>
		</form>
   </body>
</html>