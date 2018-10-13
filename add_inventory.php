<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='Johsua R Clarke'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<title>PHP - Add Inventory Recored</title>
	</head>
   <body>
<?php
include_once "header.inc";
include_once "nav.inc";
?>

		<form>
			<fieldset>
				<p>
				<label for='ItemName'>Add Inventory </label>
				<p>
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
					<input id='Address' name='Address' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				
					<label for='Quantiy'>Quantiy</label>
					<input id='Quantiy' name='Quantiy' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='Unit Cost'>Unit Cost</label>
					<input id='Unit Cost' name='Unit Cost' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				<label for='Total Cost'>Total Cost</label>
					<input id='Total Cost' name='Total Cost' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				<label for='Date of delivery'>Date of delivery </label>
					<input id='Date of delivery' name='Date of delivery' type='text' required='required'/>
				</p>
				
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
				<input type="add" value="Add"/>
				<input type="reset" value="Reset Form"/>
				</p>
			</fieldset>
		</form>
   </body>
</html>