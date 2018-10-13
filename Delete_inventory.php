<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='harry'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/DeleteInventory.js"></script>
		<title>PHP - Delete Inventory Recored</title>
	</head>
   <body>
<?php
include_once "header.inc";
include_once "nav.inc";
?>

		<form>
			<fieldset>
				<p>
				<label for='ItemName'>Delete Inventory Recored </label>
				<p>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='ItemName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				
				<p>
				
					<label for='Quantiy'>Quantiy of delete</label>
					<input id='Quantiy' name='Quantiy' type='text' required='required' pattern="\d"/>
				</p>
				
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
				
				<input type="reset" value="Delete"/>
				</p>
			</fieldset>
		</form>
   </body>
</html>