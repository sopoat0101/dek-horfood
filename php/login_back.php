<?php
include('connect.php');

session_start();
	$username = 'qwnsadkasdm;as;da;sd;lasdlksadmasdk';
	$password = 'asdasdaadfsioksdfgjfl;ksjdkdjlasa';
	$_SESSION['username'] = 'zxczxczxczxcxzczxczxzxc';
	$_SESSION['password'] = 'qweqweqweqeqweqeafsdsdg';
	$_SESSION['username'] = $username;
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, base64_encode($_POST['password']));
	$_SESSION['username'] = $username;

	//CONNECT DATABASE
	$sql      = "SELECT * FROM inform where username='$username' and password='$password'";
	$query    = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$num      = mysqli_num_rows($query);

	if ($num==0){
		echo "<script>alert('INVALID USERNAME or PASSWORD');history.back();</script>";
		exit();
	}else {
		echo "<script>alert(' WELCOME TO Dek-horfood ');window.location='../web/account.php';</script>";
		exit();
	}
?>