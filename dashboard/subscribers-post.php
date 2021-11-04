<?php
require '../db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	date_default_timezone_set('Asia/Dhaka');
	$email = $_POST['email'];
	$date = date("h:i:s A");
	$time = date("d-M-Y");

	

	//Title
	if (empty($email)) {
		$_SESSION['emailErr'] = 'Please Enter Your E-mail';
		header('location:../index.php');
	}
	else{
		$insart = "INSERT INTO  subscribers ( email, s_time, s_date) VALUES ('$email','$time', '$date')";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'Subscribe Successfull :)';
			header('location:../index.php');
		}
		else{
			$_SESSION['UnSuccess'] = 'Subscribe Unsuccessfull';
			header('location:../index.php');
		}
	}
	
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>