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
    include("header.inc");
	include("nav.inc");
	
	include("inventoryData.inc");	
?>

		<form action="db_DeleteInventory.php" method="post">
			<fieldset>
				<p>
				<label for='ItemName'>Delete Inventory Record </label>
				<p>
					<label for='ItemName'>Product Name</label>
					<input id='ItemName' name='ItemName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
    			<button id="deletebtn" class="btn btn-warning" type="submit" name="submit" value="deleteInventory">Delete</button>				
				</p>
			</fieldset>
		</form>
   </body>
</html>