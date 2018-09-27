<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='author' content='harry'/>
		<link href="style/style.css" rel="stylesheet"/>
		<script src="scripts/AddInventory.js"></script>
		<title>PHP - FeedBack</title>
	</head>
   <body>
<?php
include_once "header.inc";
include_once "nav.inc";
?>

		<form action="db_Feedback.php" method="post">
			<fieldset>
				<p>
				<label for='FeedBack'>FeedBack Form</label>
				<p>
					<label for='Name'>Name</label>
					<input id='Name' name='Name' type='text' required='required' pattern="^[a-zA-Z]+$"/>
					
				</p>
				<p>
					<label for='Feedback'>Suggestions/Feedbacks</label>
					<input id='Feedback' name='Feedback' type='text' required='required' style="width: 800px;"/>
				</p>
    			<button id="addFeedback" class="btn btn-warning" type="submit" name="submit" value="addFeedback">Add</button>				
				<input type="reset" value="Reset Form"/>
				<p>
			
					<label for='thanks'>Thanks for your feedback!</label>
				</p>
			</fieldset>
		</form>
   </body>
</html>