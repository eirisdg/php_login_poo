<?php

require_once "app/init.php";

if (!empty($_POST)) {
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	$created = $auth->create([
		'email' => $email,
		'username' => $username,
		'password' => $password
		]);

	if ($created) {
		header('Location: index.php');
	}
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign up</title>
	</head>
	<body>
		<form action="signup.php" method="post">
			<fieldset>
				<legend>Sign in</legend>
				<label>
					Email
					<input type="text" name="email">
				</label>
				<label>
					User
					<input type="text" name="username">
				</label>
				<label>
					Password
					<input type="password" name="password">
				</label>
			</fieldset>
			<input type="submit" value="Sign up">
		</form>
	</body>
</html>