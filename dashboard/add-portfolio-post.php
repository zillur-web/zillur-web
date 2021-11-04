<?php
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title =$_POST['title'];
	$category =$_POST['category'];
	$demo_link = $_POST['demo_link'];
	$featured_img = $_FILES['featured_image'];
	$featured_img_name = $_FILES['featured_image']['name'];
	$explode = explode('.', $featured_img_name);
	$ext = end($explode);
	$allow_format = ['png','PNG'];
	$file_size = $_FILES['featured_image']['size'];

	// Input Check
	if (empty($title)) {
		$_SESSION['titleErr'] = 'Enter Title';
		header('location:add-portfolio.php');
	}
	else if (empty($category)) {
		$_SESSION['SubtitleErr'] = 'Enter Category';
		header('location:add-portfolio.php');
	}
	// Image File Format Check
	else if (!in_array($ext, $allow_format)) {
		$_SESSION['image_Err'] = 'Please Use .PNG, .png file format';
		header('location:add-portfolio.php');
	}
		// Image File Size Check
	else if($file_size > 2000000) { 
		$_SESSION['image_size_Err'] = 'You typing to big size attachment file, Maximum 2MB';
		header('location:add-portfolio.php');
	}
	else{
		$new_ext = 'featured-image-'.rand(1, 500).'.'.$ext;
		$new_location = '../img/portfolio/'.$new_ext;

		move_uploaded_file($_FILES['featured_image']['tmp_name'], $new_location);

		$insart = "INSERT INTO portfolio SET title = '$title', category = '$category', featured_image = '$new_ext',link = '$demo_link'";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'Added Successfully Done!';
			header('location:portfolio.php');
		} 
		else{
			$_SESSION['UnSuccess'] = 'Added Unsuccessfull';
			header('location:portfolio.php');
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>