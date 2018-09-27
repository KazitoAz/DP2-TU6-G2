<?php include_once("db_Connection.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {
		
           $n = $_POST["ItemName"];	

			$query="SELECT * FROM inventory WHERE ProductName='$n'";
			 
			$result=mysqli_query($dbconn, $query);
			 
			if(mysqli_num_rows($result)!=1)
			{s
				die(mysqli_error($dbconn));
			}
			else
			{
				$sql = "DELETE FROM inventory WHERE ProductName = '$n'";
				$qury = mysqli_query($dbconn, $sql);
			}
			
			header('Location: delete_inventory.php');
			exit;
	}
?>
