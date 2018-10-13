<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='harry'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<title>PHP - FeedBack</title>
	</head>
   <body>
<?php
include_once "header.inc";
include_once "nav.inc";
?>

		<form>
			<fieldset>
				<p>
				<label for='FeedBack'>FeedBack</label>
				<p>
					<label for='Q1'>Would you recommend this system for you friend?Why</label>
					<input id='Q1' name='Q1' type='text' required='required' pattern="^[a-zA-Z]+$"/>
					
				</p>
				<p>
					<label for='Q2'>Is  any path in system  makes you feel uncomfortable?If yes,which part?</label>
					<input id='Q2' name='Q2' type='text' required='required' pattern="\d"/>
				</p>
			
				<p>
				<label for='Q3'> Do you have any  advises about  our system?</label>
					<input id='Q3' name='Q3' type='text' required='required' pattern="\d"/>
				</p>
					<input type="reset" value="Submit"/>
				<p>
				
					<label for='Quantiy'>Thank for u feedback , XD</label>
				
			
				</p>
			</fieldset>
		</form>
   </body>
</html>