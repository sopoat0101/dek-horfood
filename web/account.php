<?php
	//session_start();
	//if(!isset($_SESSION['username'])){
	//	echo "<script>alert('!! Please Login !!');
	//			window.location='login.php';</script>";
	//	exit();
	//}
?>
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
</body>
</html>