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
		$sql_table="inventory";
		$query = "select name, quantity, price FROM inventory ORDER BY name";
		$result = mysqli_query($conn, $query);
		
		if(!$result){
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n "
			    ."<th scope=\"col\">Name</th>\n"
				."<th scope=\"col\">Quantity</th>\n"
				."<th scope=\"col\">Price</th>\n"
				."</tr>\n";
				
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["name"],"</td>\n";
				echo "<td>",$row["quantity"],"</td>\n";
				echo "<td>",$row["price"],"</td>\n";
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