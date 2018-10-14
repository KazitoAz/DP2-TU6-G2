<?php include_once("db_Connection.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {
		
           $in = $_POST["ProductName"];
           $p = $_POST["Price"];
           $q = $_POST["Quantity"];
           $d = $_POST["Date"];
           $i = $_POST["Index"];

			$query="SELECT * FROM salesrecord WHERE No='$i'";
			 
			$result=mysqli_query($dbconn, $query);
			 
			if(mysqli_num_rows($result)!=1)
			{
				die(mysqli_error($dbconn));
			}
			else
			{
				$sql = "UPDATE salesrecord SET ProductName = '$in', Quantity = '$q', Price = '$p', Date = '$d' WHERE No = '$i'";
				$qury = mysqli_query($dbconn, $sql);
			}
			
			header('Location: edit_sales.php');
			exit;
	}
?>
