<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='XUANZHE FENG'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<title>Alert inventory</title>
	</head>
   <body>
<?php
include("header.inc");
include("nav.inc");

include_once("db_Connection.php"); 
          
	
           $query="Select productname, quantity from inventory WHERE quantity < 10 ";
?>



   </body>
</html>