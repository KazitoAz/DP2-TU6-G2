<?php include_once("db_Connection.php"); ?>

<?php
    if(isset($_POST["submit"]))
    {

           $in = $_POST["ItemName"];
           $p = $_POST["Price"];
           $q = $_POST["Quantity"];
           $d = $_POST["Date"];

		   
			$sql = ("INSERT INTO salesrecord (ProductName, Quantity, Price, Date) VALUES ('$in','$q','$p','$d')");
			$qury = mysqli_query($dbconn, $sql);
			$sql = "UPDATE inventory SET Quantity = (Quantity-'$q') WHERE ProductName = '$in'";
			$qury = mysqli_query($dbconn, $sql);

			header('Location: add_sales.php');
			exit;
}
?>