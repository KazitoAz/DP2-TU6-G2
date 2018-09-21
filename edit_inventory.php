<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='Johsua R Clarke'/>
		<link href="style/style.css" rel="stylesheet"/>
<<<<<<< HEAD
		<script src="scripts/AddInventory.js"></script>
=======
		<script src="scripts/EditInventory.js"></script>
>>>>>>> EditInventoryRecordFrontEnd
		<title>PHP - Edit Inventory Recored</title>
	</head>
   <body>
<?php
include_once "header.inc";
include_once "nav.inc";
?>
<<<<<<< HEAD
<h2>Edit Inventory</h2>

		<span id="list">
		</span>

=======

<span id ="List"></span>
>>>>>>> EditInventoryRecordFrontEnd
		<form>
			<fieldset>
				<p>
				<label for='ItemName'>Edit Inventory </label>
				<p>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='ItemName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Supplier'>Supplier</label>
					<input id='Supplier' name='Supplier' type='text' required='required' pattern="\d"/>
				</p>
				<p>
<<<<<<< HEAD
				
				    <label for='ContactNumber'>Contact Number </label>
					<input id='ContactNumber' name='ContactNumber' type='text' required='required'/>
				</p>
				<p>
				<label for='Address'>Address</label>
					<input id='Address' name='Address' type='text' required='required' pattern="\d"/>
=======
				<label for='ContactNumber'>Contact Number</label>
					<input id='ContactNumber' name='ContactNumber' type='text' required='required' pattern="\d"/>
>>>>>>> EditInventoryRecordFrontEnd
				</p>
				<p>
				
					<label for='Quantiy'>Quantiy</label>
					<input id='Quantiy' name='Quantiy' type='text' required='required' pattern="\d"/>
				</p>
<<<<<<< HEAD
				
=======
				<p>
				
				    <label for='Address'>Address </label>
					<input id='Address' name='Address' type='text' required='required'/>
				</p>
>>>>>>> EditInventoryRecordFrontEnd
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
<<<<<<< HEAD
				<input type="add" value="Add"/>
=======
				<input type="submit" value="Add"/>
>>>>>>> EditInventoryRecordFrontEnd
				<input type="reset" value="Reset Form"/>
				</p>
			</fieldset>
		</form>
   </body>
</html>