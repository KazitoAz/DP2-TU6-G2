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
include_once "header.inc";
include_once "nav.inc";
?>
<h2>Edit Sales Record</h2>

		<span id="list1">
		</span>

		<form>
			<fieldset>
				<p>
				<label for='ProductName'>Edit SalesRecord </label>
				<p>
					<label for='ProductName'>Product</label>
					<input id='ProductName' name='ProductName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Quantiy'>Quantiy</label>
					<input id='Quantiy' name='Quantiy' type='text' required='required' pattern="\d"/>
				</p>
				<p>
				
				    <label for='Price'>Price </label>
					<input id='Price' name='Price' type='text' required='required'/>
				</p>
				<p>
				<label for='Date'>Date</label>
					<input id='Date' name='Date' type='text' required='required' pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}"/>
				</p>
				<p>
				
				
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