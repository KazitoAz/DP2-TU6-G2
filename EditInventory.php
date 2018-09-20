<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='Johsua R Clarke'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/EditInventory.js"></script>
		<title>PHP - Edit Inventory Recored</title>
	</head>
   <body>
<?php
include_once "header.inc";
include_once "nav.inc";
?>

<span id ="List"></span>
		<form>
			<fieldset>
				<p>
				<label for='ItemName'>Edit Inventory </label>
				<p>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='ItemName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Unit Cost'>Unit Cost</label>
					<input id='Unit Cost' name='Unit Cost' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				<label for='Unit Cost'>Total Cost</label>
					<input id='Unit Cost' name='Unit Cost' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				
					<label for='Quantiy'>Quantiy</label>
					<input id='Quantiy' name='Quantiy' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				
				    <label for='Date'>Delivered date </label>
					<input id='Date' name='Date' type='date' required='required'/>
				</p>
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
				<input type="submit" value="Add"/>
				<input type="reset" value="Reset Form"/>
				</p>
			</fieldset>
		</form>
   </body>
</html>