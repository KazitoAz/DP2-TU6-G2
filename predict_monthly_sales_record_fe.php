<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='XUANZHE FENG'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<title>Predict Monthly Sales Record</title>
	</head>
   <body>
<?php
include_once "header.inc";
include_once "nav.inc";
?>

		<form action="Predict_monthly_sales_record_fe.php" method="post">
			<fieldset>
				<p>
				<label for='ItemName'>Choose Item that you want</label>
				<p>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='ItemName' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				
				
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
    			<button id="predict" class="btn btn-warning" type="submit" name="predict" value="predict">Predict Monthly Sales Record</button>				
				<input type="reset" value="Reset"/>
				</p>
			</fieldset>
		</form>

<?php 
include_once("db.php"); 
if(isset($_POST["submit"]))
    {
           $n = $_POST["productname"];

           $query="Select convert(varchar(7), date, 23) [datetime], avg(quantity) as "Monthly Sales in furture" from salesrecord WHERE productname='$n'";
?>



   </body>
</html>