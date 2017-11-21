<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dek-Horfood-login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="shortcut icon" type="" href="../img/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<br>
	<br>
	<br>
	<div class="container">
		<div id="incontainer">
			<div>
				<a href="index.php">
					<img class="logo" style="width: 30%;" src="../img/logo.png">
				</a>
			</div>
			<form method="POST" id="loginfrom" action="../php/login_back.php">
				<div style="padding: 2%;">
					<input class="user" type="text" name="username" placeholder="Username" required>
				</div>
				<div style="padding: 1%;">
					<input class="user" type="password" name="password" placeholder="Password" required>
				</div>
			<div>
			<input class="but" style="margin: 1%;" type="submit" value="Login">
			</form>
			<a href="signup.php"><input class="but" style="margin:  1%" type="button" value="Register"></a>
			</div>
		<br>
		<br>
		</div>
</body>
</html>