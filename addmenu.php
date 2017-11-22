<!DOCTYPE html>
<html>
<head>
	<title>Dek-Horfood-Account</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="" href="img/icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/master.css">
</head>
<body>
	<div class="nev">
		<div class="innev">
			<div id="logo"><img id="inlogo" src="img/logo.png"></div>
			<a href="infomation.php" target="_blank"><div id="info">Infomation</div></a>
			<a href=""><div id="addmenu">Account</div></a>
			<a href=""><div id="addmenu">Logout</div></a>
		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="container">
		<br>
		<div class="addmenu" style="text-align: center; width: 100%;">
			<div class="row" style="padding: 3%;">
				<hr>
				<div class="col-sm-12" style="text-align: center;">
					<input type="file" accept="image/*" name="photo">
					<input class="addname" type="text" name="namemenu" placeholder="ชื่อเมนูของคุณ">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<textarea style="overflow: hidden;" rows="10" cols="80" autofocus placeholder="ชื่อวัตถุดิบ"></textarea>
				</div>
				<div class="col-sm-12">
					<textarea style="overflow: hidden;" rows="10" cols="80" autofocus placeholder="วิธีทำ"></textarea>
				</div>
			</div>
			<input id="go" type="submit" value="Submit">
		</div>
		<br>
		<br>
	</div>
	<br>
	<br>
	<br>
</body>
</html>