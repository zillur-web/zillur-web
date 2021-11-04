<?php 
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] =  'POST') {
	$id = $_POST['id'];
	$title =$_POST['title'];
	$icon =$_POST['icon'];
	$discription = mysqli_real_escape_string($db, $_POST['discription']);

	if (empty($title)) {
		$_SESSION['TitleErr'] = 'Please Enter Your Service Title';
		header('location:services-edit.php');
	}
	elseif (empty($icon)) {
		$_SESSION['IconErr'] = 'Please Choose The Service Icon';
		header('location:services-edit.php');
	}
	elseif (empty($discription)) {
		$_SESSION['discriptionErr'] = 'Please Enter Your Service Discription';
		header('location:services-edit.php');
	}
	else {
		$update = "UPDATE services SET title = '$title', description = '$discription', icon = '$icon' WHERE id = '$id'";
		$query = mysqli_query($db, $update);

		if ($query) {
			$_SESSION['Success'] = 'Update Successfull!';
			header('location:services.php');
		}
		else{
			$_SESSION['UnSuccess'] = 'Update  Unsuccessfull, Please Try Again!';
			header('location:services.php');
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>