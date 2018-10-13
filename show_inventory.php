<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Show Inventory" />
 <meta name="keywords" content="display" />
 <title>Show Inventory</title>
 <link href="style/style.css" rel="stylesheet"/>
  <script src="scripts/showSales.js"></script>
</head>
<body>
<?php
    include("hearder.inc");
	include("nav.inc");
	
	include_once("db.php");
	
	if (!$conn) {
		echo "<p>Database connection failure</p>";
	} else {
		$sql_table="Inventory";
		$query = "select Product Name, Quantity, Supplier, Contact Number, Address FROM Inventory ORDER BY Product Name";
		$result = mysqli_query($conn, $query);
		
		if(!$result){
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n "
			    ."<th scope=\"col\">Product Name</th>\n"
				."<th scope=\"col\">Quantity</th>\n"
				."<th scope=\"col\">Supplier</th>\n"
				."<th scope=\"col\">Contact Number</th>\n"
				."<th scope=\"col\">Address</th>\n"
				."<th scope=\"col\">Unit Cost</th>\n"
				."<th scope=\"col\">Total Cost</th>\n"
				."<th scope=\"col\">Date of delivery</th>\n"
				."</tr>\n";
				
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["Product Name"],"</td>\n";
				echo "<td>",$row["Quantity"],"</td>\n";
				echo "<td>",$row["Supplier"],"</td>\n";
				echo "<td>",$row["Contact Number"],"</td>\n";
				echo "<td>",$row["Address"],"</td>\n";
				echo "<td>",$row["Unit Cost"],"</td>\n";
				echo "<td>",$row["Total Cost"],"</td>\n";
				echo "<td>",$row["Date of delivery"],"</td>\n";
				echo "</tr>\n";
			}
		echo "</table>\n";
		mysqli_free_result($result);
		}
		mysqli_close($conn);
	}
?>
</body>
</html>