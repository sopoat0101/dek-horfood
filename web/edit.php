<!DOCTYPE html>
<html>
<head>
	<title>Dek-Horfood-<?php $_SESSION['username'] ?></title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" type="text/css" href="../css/account.css">
    <link rel="shortcut icon" type="" href="../img/icon.png">
</head>
<body>
	<div class="container">
		<form action="">
			<div class="userinfo">
				<div class="ininfo">
					<div class="row">
						<div class="col-sm-6">
							<img id="photo" src="../img/logo.png">
						</div>
						<div class="col-sm-6">
							<table>
								<tr>
									<td>Username:</td>
									<td><?php echo "Hi"; ?></td>
								</tr>
								<tr>
									<td>Name:</td>
									<td><?php echo "string"; ?></td>
								</tr>
								<tr>
									<td>Surname:</td>
									<td><?php echo "string"; ?></td>
								</tr>
								<tr>
									<td>E-mail:</td>
									<td><?php echo "string"; ?></td>
								</tr>
							</table>
							<a href="logout.php"><input type="button" class="fon" name="" value="LOGOUT"></a>
							<a href="edit.php"><input class="fon" type="button" name="" value="EDIT"></a>
							<a href="addmenu.php"><input class="fon" type="button" name="" value="ADD-MENU"></a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="container">
		<div class="back">
			<form action="">
			<div class="inback">
				<div class="data">
					<div class="indata">
					<table>
						<tr>
							<td><input id="newch" type="text" placeholder="name" value=""></td>
						</tr>
						<tr>
							<td><input id="newch" type="text" placeholder="surname" value=""></td>
						</tr>
						<tr>
							<td><input id="newch" type="text" placeholder="e-mail" value=""></td>
						</tr>
						<tr>
							<td><input id="newch" type="text" placeholder="password" value=""></td>
						</tr>
					</table>
					</div>
				</div>
				<input class="change" type="submit" value="CHANGE">
			</div>
			</form>
		</div>
	</div>
</body>
</html>