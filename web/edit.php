<?php
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>alert('!! Please Login !!');
				window.location='login.php';</script>";
		exit();
	}
?>
<?php
	include('../php/connect.php');
	$username = $_SESSION['username'];
	$sql      = "SELECT * FROM inform where username='$username'";
	$query    = mysqli_query($conn, $sql) or die("error=$sql");
	$data     = mysqli_fetch_assoc($query);
	$_SESSION['password'] = base64_decode($data['password']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dek-Horfood-<?= $_SESSION['username'] ?></title>
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
									<td><?= $_SESSION['username'] ?></td>
								</tr>
								<tr>
									<td>Name:</td>
									<td><?= $_SESSION['name'] ?></td>
								</tr>
								<tr>
									<td>Surname:</td>
									<td><?= $_SESSION['surname'] ?></td>
								</tr>
								<tr>
									<td>E-mail:</td>
									<td><?= $_SESSION['email'] ?></td>
								</tr>
							</table>
							<a href="../php/logout.php"><input type="button" class="fon" name="" value="LOGOUT"></a>
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
			<form action="../php/edit_back.php">
			<div class="inback">
				<div class="data">
					<div class="indata">
					<table>
						<tr>
						<td>NEW NAME</td>
						</tr>
						<tr>
							<td><input id="newch" type="text" placeholder="NEW NAME" value="<?= $_SESSION['name']?>" name="name" required></td>
						</tr>
						<tr>
						<td>NEW SURNAME</td>
						</tr>
						<tr>
							<td><input id="newch" type="text" placeholder="NEW SURNAME" value="<?= $_SESSION['surname']?>" name="surname" required></td>
						</tr>
						<tr>
						<td>NEW E-MAIL</td>
						</tr>
						<tr>
							<td><input id="newch" type="text" placeholder="NEW E-MAIL" value="<?= $_SESSION['email']?>" name="email" required></td>
						</tr>
						<tr>
						<td>NEW PASSWORD</td>
						</tr>
						<tr>
							<td><input id="newch" type="password" placeholder="PASSWORD" value="<?= $_SESSION['password']?>" name="password" required></td>
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