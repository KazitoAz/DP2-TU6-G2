<?php
	include_once("db_Connection.php");
	
		$query = "SELECT ProductName, Quantity, Supplier, ContactNumber, Address FROM inventory ORDER BY ProductName";
		$result = mysqli_query($dbconn, $query);
		
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
				echo "<td>",$row["ProductName"],"</td>\n";
				echo "<td>",$row["Quantity"],"</td>\n";
				echo "<td>",$row["Supplier"],"</td>\n";
				echo "<td>",$row["ContactNumber"],"</td>\n";
				echo "<td>",$row["Address"],"</td>\n";
				echo "</tr>\n";
			}
		echo "</table>\n";
		mysqli_free_result($result);
		}
		mysqli_close($dbconn);
?>