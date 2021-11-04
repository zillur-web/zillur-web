<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];


	$select = "SELECT COUNT(*) as total, id, name, email, password, role FROM users WHERE email ='$email'";
	$query = mysqli_query($db, $select);
	$assoc = mysqli_fetch_assoc($query);

	$hash = $assoc['password'];

	if (!$assoc['total'] > 0) {
		$_SESSION['LoginEmail'] = 'Please Enter Your Valid Username or Email';
		header('location:login.php');
	}
	elseif (!password_verify($password, $hash)){
		$_SESSION['LoginPassword'] = 'Please Enter Your Valid Password';
		header('location:login.php');
	}
	else{
		if ($assoc['role'] == 3) {
			$_SESSION['email'] = $assoc['email'];
			$_SESSION['id'] = $assoc['id'];
			$_SESSION['name'] = $assoc['name'];
			header('location:dashboard/dashboard.php');
		}
		elseif ($assoc['role'] == 2) {
			$_SESSION['email'] = $assoc['email'];
			$_SESSION['id'] = $assoc['id'];
			$_SESSION['name'] = $assoc['name'];
			header('location:dashboard/dashboard.php');
		}
		else {
			header('location:index.php');
		}
	}
	}
	else{
		header('location:error/error.php');
		$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
	}
?>