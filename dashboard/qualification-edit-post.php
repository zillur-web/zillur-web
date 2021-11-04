<?php 
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] =  'POST') {
	$id = $_POST['id'];
	$title =$_POST['title'];
	$year =$_POST['year'];
	$result =$_POST['result'];
	$experience =$_POST['experience'];
	$phone =$_POST['phone'];

	if (empty($title)) {
		$_SESSION['title'] = 'Please Enter Qualification Title';
		header('location:qualification-edit.php');
	}
	elseif (empty($year)) {
		$_SESSION['year'] = 'Please Enter Qualification Year';
		header('location:qualification-edit.php');
	}
	elseif (empty($result)) {
		$_SESSION['result'] = 'Please Enter Your Qualification';
		header('location:qualification-edit.php');
	}
	elseif (empty($experience)) {
		$_SESSION['experience'] = 'Please Enter Your Experience';
		header('location:qualification-edit.php');
	}
	elseif (empty($phone)) {
		$_SESSION['phone'] = 'Please Enter Your Phone Number';
		header('location:qualification-edit.php');
	}
	else {
		$Update = "UPDATE qualification SET title = '$title', year = '$year', result = '$result', experience = '$experience', phone = '$phone' WHERE id = '$id'";
		$query = mysqli_query($db, $Update);

		if ($query) {
			$_SESSION['Success'] = 'Edit Successfull!';
			header('location:qualification.php');
		}
		else{
			$_SESSION['UnSuccess'] = 'Edit  Unsuccessfull, Please Try Again!';
			header('location:qualification.php');
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>