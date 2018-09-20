<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Display Weekly sales record" />
 <meta name="keywords" content="display" />
 <title>Display Weekly Sales Record</title>
</head>
<body>
<h1>Weekly Sales Record</h1>
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
		$sql_table="SalesRecord";
		$query = "select product_name, quantity, price, date FROM SalesRecord ORDER BY date";
		$result = mysqli_query($conn, $query);
		
		if(!$result){
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n "
			    ."<th scope=\"col\">Product Name</th>\n"
				."<th scope=\"col\">Quantity</th>\n"
				."<th scope=\"col\">Price</th>\n"
				."<th scope=\"col\">Date</th>\n"
				."</tr>\n";
				
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["product_name"],"</td>\n";
				echo "<td>",$row["quantity"],"</td>\n";
				echo "<td>",$row["price"],"</td>\n";
				echo "<td>",$row["date"],"</td>\n";
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