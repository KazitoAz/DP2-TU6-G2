<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Display Weekly sales record" />
 <meta name="keywords" content="display" />
 <title>Display Weekly Sales Record</title>
 <link href="style/style.css" rel="stylesheet"/>
  <script src="scripts/showSales.js"></script>
</head>
<body>
<?php
    include("hearder.inc");
	include("nav.inc");
	?>
	
	<form method="post" action="show_weekly_sales_record.php">
	<fieldset>
	<legend>Search the week for showing</legend>
		<p class="row">	<label for="week">The number of week:</label>
			<input type="text" name="week" id="week" /></p>
	
		<p>	<input type="submit" value="Search Sales Record" /></p>
	
	</fieldset>
	<?php
    include_once("db.php");
	
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
			echo "<p class=\"ok\">Successfully searching weekly sales record</p>";
		}
		
		mysqli_close($conn);
	?>
	</form>

  <table>
  <thead>
   <tr>
    <th>Product Name</th>
	<th>Quantity</th>
	<th>Supplier</th>
	<th>Contact</th>
	<th>Address</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <th> </th>
    <td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
   </tr>
   <tr>
    <th> </th>
    <td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
   </tr>
  </tbody>
  </table>




</body>
</html>
</body>
</html>