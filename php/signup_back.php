<?php
session_start();
include('connect.php');
	//Get Data from HTML file
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$confirm  = mysqli_real_escape_string($conn, $_POST['confirm']);
	$email    = mysqli_real_escape_string($conn, $_POST['email']);
	$name     = mysqli_real_escape_string($conn, $_POST['name']);
	$surname  = mysqli_real_escape_string($conn, $_POST['surname']);
	$gender   = mysqli_real_escape_string($conn, $_POST['gender']);

	//Check For Empty Slot
	if(empty($username)||empty($password)||empty($confirm)||empty($email)||empty($name)||empty($surname)){
		echo "<script>alert('Please fill in all the inform!');history.back();</script>";
		exit();
	}
	//Check For Password
	if($password != $confirm){
		echo "<script>alert('Your password is not match');history.back();</script>";
		exit();
	}
	//Check For Invalid Email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<script>alert('Invalid email');history.back();</script>";
		exit();
	}
	//Check inside the Database
	$sqluserc    = "SELECT * FROM inform where username='$username'";
	$sqlemailc   = "SELECT * FROM inform where email='$email'";
	$queryuserc  = mysqli_query($conn, $sqluserc) or die("$username");
	$queryemailc = mysqli_query($conn, $sqlemailc) or die("$email");
	$numuserc    = mysqli_num_rows($queryuserc);
	$numemailc   = mysqli_num_rows($queryemailc);
	//If have = 1 no = 0
	if($numuserc != 0){
		echo "<script>alert('username already in use');history.back();</script>";
		exit();
	}
	if($numemailc != 0){
		echo "<script>alert('email already in use');history.back();</script>";
		exit();
	}
	//Encode the Password
	$password = base64_encode($password); //For people likes DONUT
		$sql      = "INSERT INTO inform (username, password, email, name, surname, gender)
		VALUE ('$username', '$password', '$email', '$name', '$surname', '$gender')";
		$result   = mysqli_query($conn, $sql);
		echo "<script>alert('Registeration complete! Welcome to Dek-Horfood Family');window.location='../web/login.php';</script>";
?>
