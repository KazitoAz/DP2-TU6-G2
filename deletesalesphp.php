<?php include_once("db.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {

           $in = $_POST["itemname"];
           $d = $_POST["date"];

                 
			 $query="SELECT id FROM salesrecord WHERE productname='$in' AND date='$d'";
			 
			 $result=mysqli_query($dbconn,$query);
			 if(!$result)
			 {
				 die(mysqli_error($dbconn));
			 }
			 else
			 {
				$sql = ("DELETE FROM salesrecord WHERE productname='$in' AND date='$d'");
				$qury = mysqli_query($dbconn, $sql);
				
				if($qury)
				{
					header('Location: deletesales.php');
					exit;
				}
			}
}
?>