<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='XUANZHE FENG'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<title>Predict Monthly Sales Record for similar items</title>
	</head>
   <body>
<?php
include("header.inc");
include("nav.inc");
?>

		<form action="Predict_monthly_sales_record_for_similaritem.php" method="post">
			<fieldset>
				<p>
				<label for='ItemName'>Choose Item kind that you want</label>\
				</p>
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
		

<?php 
include_once("db.php"); 
if(isset($_POST["submit"]))
    {
           $c = $_POST["category"];

           $query="Select convert(varchar(7), GETDATE(), 23) [datetime], avg(quantity) from salesrecord WHERE category='$c'";

            $result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p class=\"wrong\">Something is wrong with",   $query,"</p>";
		} else {
			echo "<p class=\"ok\">Successfully doing prediction</p>";
		}
		
		mysqli_close($conn);
?>

</form>

   </body>
</html>