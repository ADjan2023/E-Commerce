<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form View</title>
</head>
<body>
<form method="POST" action="../actions/addcontact.php">
	<input type="text" name="fname" id="fname" placeholder="Enter your number">
	<input type="tel" name="number" id="number" placeholder="Enter your number">
	<input type="submit" name="add" value="Add contact">
</form>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<br>
<?php
include("../functions/viewcontacts.php");
viewcontacts();
?>
</body>
</html>
