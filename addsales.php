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
		<?php 
		include_once "header.inc";
		include_once "nav.inc"
		?>
		<form action="addsalesphp.php" method="post">
			<fieldset>
				<p>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='itemname' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Price'>Price</label>
					<input id='Price' name='price' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='Quantiy'>Quantiy</label>
					<input id='Quantiy' name='quantity' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='Date'>Date Sold</label>
					<input id='Date' name='date' type='date' required='required'/>
				</p>
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
    			<button id="addbtn" class="btn btn-warning" type="submit" name="submit" value="addsales">Add</button>				
				<input type="reset" value="Reset Form"/>
				</p>
			</fieldset>
		</form>
	</body>
</html>