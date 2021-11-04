<?php 
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] =  'POST') {
	$name =$_POST['name'];
	$icon =$_POST['icon'];
	$link =$_POST['link'];

	if (empty($name)) {
		$_SESSION['SocialNameErr'] = 'Please Enter Your Social Name';
		header('location:add-socials.php');
	}
	elseif (empty($icon)) {
		$_SESSION['SocialChooseErr'] = 'Please Choose The Social Icon';
		header('location:add-socials.php');
	}
	elseif (empty($link)) {
		$_SESSION['SocialLinkErr'] = 'Please Enter Your Social Link';
		header('location:add-socials.php');
	}
	else {
		define('insart', "INSERT INTO socials(name, icon, link) VALUES ('$name', '$icon', '$link')");
		$Social_icon_query = mysqli_query($db, insart);

		if ($Social_icon_query) {
			$_SESSION['Success'] = 'Social Icon Added Successfull!';
			header('location:socials.php');
		}
		else{
			$_SESSION['SocialUpdateErr'] = 'Social Icon Added  Unsuccessfull, Please Try Again!';
			header('location:add-socials.php');
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>