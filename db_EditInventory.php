<?php include_once("db_Connection.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {
		
           $n = $_POST["ItemName"];
           $q = $_POST["Quantity"];
           $s = $_POST["Supplier"];
           $c = $_POST["ContactNumber"];
           $a = $_POST["Address"];	

			$query="SELECT * FROM inventory WHERE ProductName='$n'";
			 
			$result=mysqli_query($dbconn, $query);
			 
			if(mysqli_num_rows($result)!=1)
			{
				die(mysqli_error($dbconn));
			}
			else
			{
				$sql = "UPDATE inventory SET ProductName = '$n', Quantity = '$q', ContactNumber = '$c',Address = '$a', Supplier = '$s' WHERE ProductName = '$n'";
				$qury = mysqli_query($dbconn, $sql);
			}
			
			header('Location: edit_inventory.php');
			exit;
	}
?>
