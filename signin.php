<?php

require_once "app/init.php";

if (!empty($_POST)) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$signin = $auth->signin([
		'username' => $username,
		'password' => $password
	]);

	if ($signin) {
		header('Location: index.php');
	}
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign in</title>
	</head>
	<body>
		<form action="signin.php" method="post">
			<fieldset>
				<legend>Sign in</legend>
				<label>
					User
					<input type="text" name="username">
				</label>
				<label>
					Password
					<input type="password" name="password">
				</label>
			</fieldset>
			<input type="submit" value="Sign in">
		</form>
	</body>
</html>