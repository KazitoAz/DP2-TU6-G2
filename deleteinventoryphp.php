<?php include_once("db.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {

           $n = $_POST["name"];
           // $q = $_POST["quantity"];

			 $query="SELECT productname FROM inventory WHERE productname='$n'";
			 $result=mysqli_query($dbconn,$query);
			 if(!$result)
			 {
				 die(mysqli_error($dbconn));
			 }
			 else
			 {
				$check=mysqli_num_rows($result);
				if($check <1)
					{
						$error='Product Not Found!';
						echo $error;
					}
				else
					{
						$sql = ("DELETE FROM inventory WHERE productname = '$n'");
						$qury = mysqli_query($dbconn, $sql);
						
						if($qury)
						{
							header('Location: deleteinventory.php');
							exit;
						}
					}
			}
}
?>