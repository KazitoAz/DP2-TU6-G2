<?php include_once("db_Connection.php"); ?>

<?php
$fp = fopen('monthlysalesrecord.csv','a');
$csv_header = ['ItemName','Price','Quantity','Date'];
 $in = $_POST["ItemName"];
           $p = $_POST["Price"];
           $q = $_POST["Quantity"];
           $d = $_POST["Date"];
$csv_body= [
 ['amoxicillin','15','18','02/11/18'],

];
		   
			$sql = ("INSERT INTO salesrecord (ProductName, Quantity, Price, Date) VALUES ('$in','$q','$p','$d')");
			$qury = mysqli_query($dbconn, $sql);
		$csv_body =$qury

$header = implode(',', $csv_header) . PHP_EOL;

$content = '';
foreach ($csv_body as $k => $v) {
 $content .= implode(',', $v) . PHP_EOL;
}

$csv = $header.$content;

fwrite($fp, $csv);
fclose($fp);

          
	

			header('Location: add_sales.php');
			exit;

?>