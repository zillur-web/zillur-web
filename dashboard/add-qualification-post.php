<?php 
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] =  'POST') {
	$title =$_POST['title'];
	$year =$_POST['year'];
	$result =$_POST['result'];
	$experience =$_POST['experience'];
	$phone =$_POST['phone'];

	if (empty($title)) {
		$_SESSION['title'] = 'Please Enter Qualification Title';
		header('location:add-qualification.php');
	}
	elseif (empty($year)) {
		$_SESSION['year'] = 'Please Enter Qualification Year';
		header('location:add-qualification.php');
	}
	elseif (empty($result)) {
		$_SESSION['result'] = 'Please Enter Your Qualification';
		header('location:add-qualification.php');
	}
	elseif (empty($experience)) {
		$_SESSION['experience'] = 'Please Enter Your Experience';
		header('location:add-qualification.php');
	}
	elseif (empty($phone)) {
		$_SESSION['phone'] = 'Please Enter Your Phone Number';
		header('location:add-qualification.php');
	}
	else {
		$insart = "INSERT INTO qualification(title, year, result, experience, phone) VALUES ('$title', '$year', '$result', '$experience', '$phone')";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'Added Successfull!';
			header('location:qualification.php');
		}
		else{
			$_SESSION['UnSuccess'] = 'Added  Unsuccessfull, Please Try Again!';
			header('location:add-qualification.php');
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>