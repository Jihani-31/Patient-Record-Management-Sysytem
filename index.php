<?php
	require_once('inc/connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Log-In</title>
</head>
<body>
	<div class="login">
		<form action="index.php" method="post">
			<fieldset>
				<legend><h1>Log In</h1></legend>
				<!-- <p class="error">Invalid username or Password</p> -->
				<p>
					<label for="">Username:</label>
					<input type="email" name="email" placeholder="Email">
				</p>
				<p>
					<label for="">Password:</label>
					<input type="password" name="password" placeholder="Password">
				</p>
				<p>
					<button type="submit" name="submit">LogIn</button>
				</p>
			</fieldset>
		</form>
	</div>

</body>
</html>


<?php mysqli_close($db); ?>