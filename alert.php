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
include_once "header.inc";
include_once "nav.inc";

include_once("db.php"); 
           $q = $_POST["quantity"];

           $query="Select productname, quantity from inventory WHERE quantity < 10 ";
?>



   </body>
</html>