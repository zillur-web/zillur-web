<?php 
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] =  'POST') {
	$title =$_POST['title'];
	$icon =$_POST['icon'];
	$discription = mysqli_real_escape_string($db, $_POST['discription']);

	if (empty($title)) {
		$_SESSION['TitleErr'] = 'Please Enter Your Service Title';
		header('location:add-services.php');
	}
	elseif (empty($icon)) {
		$_SESSION['IconErr'] = 'Please Choose The Service Icon';
		header('location:add-services.php');
	}
	elseif (empty($discription)) {
		$_SESSION['discriptionErr'] = 'Please Enter Your Service Discription';
		header('location:add-services.php');
	}
	else {
		define('insart', "INSERT INTO services(title, description, icon) VALUES ('$title', '$discription', '$icon')");
		$query = mysqli_query($db, insart);

		if ($query) {
			$_SESSION['Success'] = 'Added Successfull!';
			header('location:services.php');
		}
		else{
			$_SESSION['UnSuccess'] = 'Added  Unsuccessfull, Please Try Again!';
			header('location:add-services.php');
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>