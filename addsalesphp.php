<?php include_once("db.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {

           $in = $_POST["itemname"];
           $p = $_POST["price"];
           $q = $_POST["quantity"];
           $d = $_POST["date"];

                 
			 $query="SELECT id FROM salesrecord WHERE productname='$in'";
			 
			 $result=mysqli_query($dbconn,$query);
			 if(!$result)
			 {
				 die(mysqli_error($dbconn));
			 }
			 else
			 {
				$sql = ("INSERT INTO salesrecord (productname, quantity, price, date) VALUES ('$in','$p','$q','$d')");
				$qury = mysqli_query($dbconn, $sql);
				
				if($qury)
				{
					header('Location: addsales.php');
					exit;
				}
			}
}
?>