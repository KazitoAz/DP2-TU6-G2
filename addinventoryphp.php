<?php include_once("db.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {

           $n = $_POST["name"];
           $q = $_POST["quantity"];
           $s = $_POST["supplier"];
           $c = $_POST["contact"];
           $a = $_POST["address"];		   
                 
			 $query="SELECT productname FROM inventory WHERE productname='$n'";
			 $result=mysqli_query($dbconn,$query);
			 if(!$result)
			 {
				 die(mysqli_error($dbconn));
			 }
			 else
			 {
			 $check=mysqli_num_rows($result);
				if($check >=1)
					{
						$error='We already have this product registered,try a new one!';
						echo $error;
					}
				else
					{
						$sql = ("INSERT INTO inventory (productname, quantity, supplier, contactnumber, address) VALUES ('$n','$q','$s','$c','$a')");
						$qury = mysqli_query($dbconn, $sql);
						
						if($qury)
						{
							header('Location: addinventory.php');
							exit;
						}
					}
			}
}
?>