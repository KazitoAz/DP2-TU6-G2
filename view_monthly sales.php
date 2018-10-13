<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Display Monthly Sales Record" />
 <meta name="keywords" content="display" />
 <title>Display Monthly Sales Record</title>
 <link href="style/style.css" rel="stylesheet"/>
  <script src="scripts/showSales.js"></script>
</head>
<body>

<?php
    include("header.inc");
	include("nav.inc");
	
	include("salesData.inc");			
?>	

	<form method="post" action="view_sales.php">
	<fieldset>
	<legend>Search the monthly for showing</legend>
		<p class="row">	<label for="monthly">The number of monthly:</label>
			<input type="text" name="monthly" id="monthly" /></p>
	
		<p>	<input type="submit" value="Search Sales Record" /></p>
	
	</fieldset>
	
	<!--
    include_once("db_Connection.php");
	
	$name = trim($_POST["product_name"]);
	$quantity = trim($_POST["quantity"]);
	$supplier = trim($_POST["supplier"]);
	$contact = trim($_POST["contact"]);
	$address = trim($_POST["address"]);
	
	$query = "insert into $sql_table (product_name, quantity, supplier, contact, address) values ('$name', '$quantity', '$supplier', '$contact', 'address')";
	
	    $result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p class=\"wrong\">Something is wrong with",   $query,"</p>";
		} else {
			echo "<p class=\"ok\">Successfully searching monthly  sales record</p>";
		}
		
		mysqli_close($conn);
	?>
-->
	</form>



</body>
</html>
