<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php
	if (isset($_POST['submit'])) {
		header('location:index.php');
		# code...
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
</head>
<body>
	<h1>Users</h1>
	<button type="submit" name="submit">go back</button>
</body>
</html>