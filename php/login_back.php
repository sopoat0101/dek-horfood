<?php
session_start();
include('connect.php');
	$username = $_POST['username'];
	$password = base64_encode($_POST['password']);

	//CONNECT DATABASE
	$sql      = "SELECT * FROM inform where username='$username' and password='$password'";
	$query    = mysqli_query($conn, $sql) or die("error=$sql");
	$num      = mysqli_num_rows($query);

	if ($num==0){
		echo "<script>alert('INVALID USERNAME or PASSWORD');history.back();</script>";
		exit();
	}else {
		$_SESSION['username'] = $username;

		echo "<script>alert(' WELCOME TO Dek-horfood ');window.location='../web/account.php';</script>";
		exit();
	}
?>