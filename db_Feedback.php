<?php include_once("db_Connection.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {

           $n = $_POST["Name"];
           $f = $_POST["Feedback"];	   
                 

				$sql = ("INSERT INTO feedback (Name, Feedback) VALUES ('$n','$f')");
				$qury = mysqli_query($dbconn, $sql);
	}
	
	header('Location: feedback.php');
	exit;
?>