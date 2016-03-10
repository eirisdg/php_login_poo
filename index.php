<?php

require_once "app/init.php";

$auth->build();

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<?php if ($auth->check()) : ?>
			<p>You are signed in. <a href="signout.php">Sign out</a></p>
		<?php else: ?>
			<p>You are not signed in. <a href="signup.php">Sign up</a> or <a href="signin.php">Sign in</a></p>
		<?php endif; ?>
	</body>
</html>