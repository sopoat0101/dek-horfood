<?php
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>alert('!! Please Login !!');
				window.location='login.php';</script>";
		exit();
	}

	include('connect.php');
	$name     = mysqli_real_escape_string($conn, $_GET['name']);
	$surname  = mysqli_real_escape_string($conn, $_GET['surname']);
	$email    = mysqli_real_escape_string($conn, $_GET['email']);
	$password = base64_encode(mysqli_real_escape_string($conn, $_GET['password']));

	if(empty($name)||empty($surname)||empty($email)||empty($password))
	{
		echo "<script>alert('Please refill the form (Some of them are empty)');history.back();</script>";
		exit();
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo "<script>alert('Invalid Email');history.back();</script>";
		exit();
	}

	$sql = "UPDATE inform set
			name = '$name',
			surname = '$surname',
			email = '$email',
			password = '$password'
			where username = '{$_SESSION['username']}'";
	mysqli_query($conn, $sql) or die("error=$sql");
	echo "<script>alert('Siri - [PROFILE EDIT COMPLETE]');window.location='../web/account.php';</script>";
?>