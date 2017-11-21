<!DOCTYPE html>
<html>
<head>
	<title>Dek-Horfood-Register</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="" href="img/icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="nev">
		<div class="innev">
			<a href="index.php"><div id="logo"><img id="inlogo" src="img/logo.png"></div></a>
			<a href="login.php"><div id="addmenu">Addmenu</div></a>
			<a href=""><div id="info">Infomation</div></a>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<br>
		<div style="text-align: center;"><h4>Register</h4></div>
		<hr>
		<form>
		<div id="login">
			<div>
				<input id="username" type="text" name="username" placeholder="Username" required>
			</div>
			<div>
				<input id="username" type="text" name="email" placeholder="E-mail" required>
			</div>
			<div>
				<input id="username" type="password" name="password" placeholder="Password" required>
			</div>
			<div>
				<input id="username" type="password" name="confirm" placeholder="ConfirmPassword" required>
			</div>
			<div>
				<input id="username" type="text" name="name" placeholder="Name" required>
			</div>
			<div>
				<input id="username" type="text" name="surname" placeholder="Surname" required>
			</div>
			<div>
				<input type="radio" name="gender" value="male" checked>Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
			</div>
		<hr>
		<br>
		<input id="search" type="submit" style="padding: 5px 20px;">
		</form>
		</div>
	</div>
</body>
</html>