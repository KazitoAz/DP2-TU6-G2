<?php include_once("db_Connection.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {
		
           $i = $_POST["Index"];	

			$query="SELECT * FROM salesrecord WHERE No='$i'";
			 
			$result=mysqli_query($dbconn, $query);
			 
			if(mysqli_num_rows($result)!=1)
			{
				die(mysqli_error($dbconn));
			}
			else
			{
				$sql = "DELETE FROM salesrecord WHERE No = '$i'";
				$qury = mysqli_query($dbconn, $sql);
			}
			
			header('Location: delete_sales.php');
			exit;
	}
?>
