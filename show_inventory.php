<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Display Inventory details" />
 <meta name="keywords" content="display" />
 <title>Show Inventory</title>
</head>
<body>
<h1>Inventory</h1>
<?php
    require_once ("settings.php");
	
	$conn = @mysqli_connect($host,
	  $user, 
	  $pwd, 
	  $sql_db
	);
	
	if (!$conn) {
		echo "<p>Database connection failure</p>";
	} else {
		$sql_table="Inventory";
		$query = "select product_name, quantity, supplier, contact_number, address FROM Inventory ORDER BY product_name";
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
				."</tr>\n";
				
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["product_name"],"</td>\n";
				echo "<td>",$row["quantity"],"</td>\n";
				echo "<td>",$row["supplier"],"</td>\n";
				echo "<td>",$row["contact_number"],"</td>\n";
				echo "<td>",$row["address"],"</td>\n";
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