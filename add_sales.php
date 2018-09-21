<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='Johsua R Clarke'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddSales.js"></script>
		<title>PHP - Add Sales Recored</title>
	</head>
	<body>
<?php include_once "header.inc"
include_once "nav.inc"?>
		<form>
			<fieldset>
				<p>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='ItemName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Price'>Price</label>
					<input id='Price' name='Price' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='Quantiy'>Quantiy</label>
					<input id='Quantiy' name='Quantiy' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='Date'>Date Sold</label>
					<input id='Date' name='Date' type='date' required='required'/>
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