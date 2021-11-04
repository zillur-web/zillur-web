<?php
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name =$_POST['owner_name'];
	$tagline =$_POST['tagline'];
	$bannerImage = $_FILES['banner_img'];
	$bannerImageName = $_FILES['banner_img']['name'];
	$explode = explode('.', $bannerImageName);
	$ext = end($explode);
	$allow_format = ['png','PNG'];
	$file_size = $_FILES['banner_img']['size'];
	$id = $_POST['id'];


	// Input Check
	if (empty($name)) {
		$_SESSION['Name_Err'] = 'Enter Owner Name';
		header('location:home-banner-edit.php');
	}
	else if (empty($tagline)) {
		$_SESSION['Tagline_Err'] = 'Enter Tagline';
		header('location:home-banner-edit.php');
	}
	// Image File Format Check
	else if (!in_array($ext, $allow_format)) {
		$_SESSION['image_file_err'] = 'Please Use .PNG, .png file format';
		header('location:home-banner-edit.php');
	}
		// Image File Size Check
	else if($file_size > 2000000) { 
		$_SESSION['image_size_Err'] = 'You typing to big size attachment file, Maximum 2MB';
		header('location:home-banner-edit.php');
	}
	else{
		$new_ext = 'home-banner-ri'.'.'.$ext;
		$new_location = '../img/banner/'.$new_ext;

		move_uploaded_file($_FILES['banner_img']['tmp_name'], $new_location);

		$insart = "UPDATE home_banner SET owner_name = '$name', tagline = '$tagline', banner_image = '$new_ext' WHERE id = '$id'";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'Banner Update Successfully';
			header('location:home-banner.php');
		} 
		else{
			$_SESSION['UnSuccess'] = 'Banner Update Unsuccessfull';
			header('location:home-banner.php');
		}

	}

}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>