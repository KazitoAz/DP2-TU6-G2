<!DOCTYPE html>
<html lang="en">
<head>
<title>Show Weekly Sales Report</title>

<meta charset="utf-8" />
<meta name="description" content="show weekly sales record html page"  />
<meta name="keywords" content="connect the database and html page" />
<link href="style/style.css" rel="stylesheet"/>
  <script src="scripts/showSales.js"></script>


</head>
<body>
<?php include_once "header.inc"; ?>
	<h1>Show Weekly Sales Report</h1>
		<?php
	
	include_once "nav.inc"
		?>
	<form method="post" action="show_weekly_salesreport.php">
	<fieldset>
	<legend>Select week for showing</legend>
		<p class="row">	<label for="week">number of week: </label>
			<input type="text" name="week" id="week" /></p>
		
		<p>	<input type="submit" value="Confirm week" /></p>
	
	<h2>Or you can choose date</h2>
	
	<legend>Select week for showing</legend>
		<p class="row">	<label for="begin_date">The begin date: </label>
			<input type="text" name="begin_date" id="begin_date" /></p>
		<p class="row">	<label for="end_date">The end date: </label>
			<input type="text" name="end_date" id="end_date" /></p>
		
		<p>	<input type="submit" value="Confirm date" /></p>
	
	</fieldset>
	</form>
</body>
</html>