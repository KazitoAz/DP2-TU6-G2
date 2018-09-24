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
		$query = "select Product Name, Quantity, Price, Date Sold";
		$result = mysqli_query($conn, $query);
		
		if(!$result){
			echo "<p>Something is wrong with ", $query, "</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n "
			    ."<th scope=\"col\">Product Name</th>\n"
				."<th scope=\"col\">Quantity</th>\n"
				."<th scope=\"col\">Price</th>\n"
				."<th scope=\"col\">Date Sold</th>\n"
				
				."</tr>\n";
				
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["Product Name"],"</td>\n";
				echo "<td>",$row["Quantity"],"</td>\n";
				echo "<td>",$row["Price"],"</td>\n";
				echo "<td>",$row["Date Sold"],"</td>\n";
			
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