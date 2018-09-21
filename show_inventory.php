<!DOCTYPE html>
<html lang="en">
<head>
<title>Show Inventory</title>

<meta charset="utf-8" />
<meta name="description" content="show inventory page"  />
<meta name="keywords" content="PHP" />


</head>
<body>
	<?php
    include("hearder.inc");
	include("nav.inc");
	?>
	
	<form method="post" action="show_inventory.php">
	<fieldset>
	<legend>Search Inventory by product name</legend>
		<p class="row">	<label for="product_name">Product Name: </label>
			<input type="text" name="product_name" id="product_name" /></p>
	
		<p>	<input type="submit" value="Search Inventory" /></p>
	
	</fieldset>
	<?php
   include_once("db.php");
	
	$name = trim($_POST["product_name"]);
	$quantity = trim($_POST["quantity"]);
	$price = trim($_POST["price"]);
	$date = trim($_POST["date"]);
	
	$query = "insert into $sql_table (name, quantity, price, date) values ('$name', '$quantity', '$price', '$date')";
	
	    $result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p class=\"wrong\">Something is wrong with",   $query,"</p>";
		} else {
			echo "<p class=\"ok\">Successfully for Inventory</p>";
		}
		
		mysqli_close($conn);
	?>
	</form>



  <fieldset>
  	<legend>Aleart Listing</legend>
  	
  </fieldset>


</body>
</html>