<?php
	require_once('scripts/config.php');
	
	if(empty($_POST['un']) || empty($_POST['pw'])){
		$message = 'Missing fields.';
	}else{
		$un = $_POST['un'];
		$pw = $_POST['pw'];

		$message = login($un, $pw);
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="admin_login.php" method="post">
		<input name="un" placeholder="username" required>
		<input name="pw" placeholder="password" type="password" required>
		<input name="login" type="submit" value="Log In">
	</form>
</body>
</html>