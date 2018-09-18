<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='Johsua R Clarke'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddSales.js"></script>
		<title>PHP - Add Sales Recored</title>
	</head>
	<body>
		<header>
			<h1>People Health Pharmacy</h1>
		</header>
		<nav>
		<ul>
		<li><h3>Sales</h3></li>
		<li><a href ="AddSales.html" title="Add sales record" id="nav">Add</a></li>
		<li><a href ="DeleteSales.html" title="Delete sales record" id="nav">Delete</a></li>
		<li><a href ="EditSales.html" title="Edit sales record" id="nav">Edit</a></li>
		<li><a href ="ViewSales.html" title="View sale records" id="nav">View</a></li>
		<li><h3>Inventory</h3></li>
		<li><a href ="AddInventory.html" title="Add inventory record" id="nav">Add</a></li>
		<li><a href ="DeleteInventory.html" title="Delete inventory record" id="nav">Delete</a></li>
		<li><a href ="EditInventory.html" title="Edit inventory record" id="nav">Edit</a></li>
		<li><a href ="ViewInventory.html" title="View inventory records" id="nav">View</a></li>		
		</ul>
		</nav>
		<form action="addsalesphp.php" method="post">
			<fieldset>
				<p>
					<label for='ItemName'>Item</label>
					<input id='ItemName' name='itemname' type='text' required='required' pattern="^[a-zA-Z]+$"/>
				</p>
				<p>
					<label for='Price'>Price</label>
					<input id='Price' name='price' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='Quantiy'>Quantiy</label>
					<input id='Quantiy' name='quantity' type='text' required='required' pattern="\d"/>
				</p>
				<p>
					<label for='Date'>Date Sold</label>
					<input id='Date' name='date' type='date' required='required'/>
				</p>
				<p>
				<span class="errortxt" id="statetxt"></span>
				</p>
				<p>
    			<button id="addbtn" class="btn btn-warning" type="submit" name="submit" value="addsales">Add</button>				
				<input type="reset" value="Reset Form"/>
				</p>
			</fieldset>
		</form>
	</body>
</html>