<?php 
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] =  'POST') {
	$name =$_POST['name'];
	$icon =$_POST['icon'];
	$link =$_POST['link'];
	$id = $_POST['id'];

	if (empty($name)) {
		$_SESSION['SocialNameErr'] = 'Please Enter Your Social Name';
		header('location:socials-edit.php');
	}
	elseif (empty($icon)) {
		$_SESSION['SocialChooseErr'] = 'Please Choose The Social Icon';
		header('location:socials-edit.php');
	}
	elseif (empty($link)) {
		$_SESSION['SocialLinkErr'] = 'Please Enter Your Social Link';
		header('location:socials-edit.php');
	}
	else {
		$select = "UPDATE socials SET name = '$name', icon ='$icon', link = '$link' WHERE id = $id";
		$query = mysqli_query($db, $select);

		if ($query) {
			$_SESSION['Success'] = 'Social Icon Update Successfull!';
			header('location:socials.php');
		}
		else{
			$_SESSION['SocialUpdateErr'] = 'Social Icon Update  Unsuccessfull, Please Try Again!';
			header('location:socials.php');
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>