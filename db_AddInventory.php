<?php include_once("db_Connection.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {

           $n = $_POST["ItemName"];
           $q = $_POST["Quantity"];
           $s = $_POST["Supplier"];
           $c = $_POST["ContactNumber"];
           $a = $_POST["Address"];		   
                 
			$query="SELECT ProductName FROM inventory WHERE ProductName='$n'";
			 
			$result=mysqli_query($dbconn,$query);
			 
			if(mysqli_num_rows($result)>0)
			{
				die(mysqli_error($dbconn));
			}
			else
			{
				$sql = ("INSERT INTO inventory (ProductName, Quantity, Supplier, ContactNumber, Address) VALUES ('$n','$q','$s','$c','$a')");
				$qury = mysqli_query($dbconn, $sql);
			}
	}
	
	header('Location: add_inventory.php');
	exit;
?>