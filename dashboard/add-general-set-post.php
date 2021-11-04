<?php
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title =$_POST['title'];
	$subtitle =$_POST['subtitle'];
	$logo = $_FILES['logo'];
	$logo_name = $_FILES['logo']['name'];
	$explode = explode('.', $logo_name);
	$ext = end($explode);
	$allow_format = ['png','PNG'];
	$file_size = $_FILES['logo']['size'];


	// Image File Format Check
	if (!in_array($ext, $allow_format)) {
		$_SESSION['image_Err'] = 'Please Use .PNG, .png file format';
		header('location:add-general-settings.php');
	}
		// Image File Size Check
	else if($file_size > 2000000) { 
		$_SESSION['image_size_Err'] = 'You typing to big size attachment file, Maximum 2MB';
		header('location:add-general-settings.php');
	}
	else{
		$new_ext = 'logo'.'.'.$ext;
		$new_location = '../img/'.$new_ext;

		move_uploaded_file($_FILES['logo']['tmp_name'], $new_location);

		$insart = "INSERT INTO general_settings SET website_title = '$title', website_subtitle = '$subtitle', logo = '$new_ext'";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'General Settings Added Successfully';
			header('location:general-settings.php');
		} 
		else{
			$_SESSION['UnSuccess'] = 'General Settings Added Successfully';
			header('location:general-settings.php');
		}

	}



}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>