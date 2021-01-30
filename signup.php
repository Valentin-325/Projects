<php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="login">
		<div class="container">
			<h1> Sign Up <h1>
			<form method="POST" action="prelucraredate.php">
				<input type="text" name="username" placeholder="Username"><br>
				<input type="password" name="password" placeholder="Parola"><br>
				<input type="submit" name="Sign Up" value="Sign up"><br>
			</form>
		</div>
	</div>
</body>
</html>