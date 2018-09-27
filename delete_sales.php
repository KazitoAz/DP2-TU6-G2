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
	
	include("salesData.inc");	
?>

		<form action="db_DeleteSales.php" method="post">
			<fieldset>
				<p>
				<label for='ItemName'>Delete Sales Record </label>
				<p>
					<label for='Index'>Index</label>
					<input id='Index' name='Index' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
    			<button id="deletebtn" class="btn btn-warning" type="submit" name="submit" value="deleteSales">Delete</button>				
				</p>
			</fieldset>
		</form>
   </body>
</html>