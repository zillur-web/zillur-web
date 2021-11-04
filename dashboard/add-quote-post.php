<?php
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$quote = mysqli_real_escape_string($db, $_POST['quote']);
	$image = $_FILES['image'];
	$imgName = $_FILES['image']['name'];
	$explode = explode('.',$imgName);
	$ext = end($explode);
	$allow_format = ['png','PNG','JPEG','jpg'];
	$file_size = $_FILES['image']['size'];

	//Title
	if (empty($name)) {
		$_SESSION['NameErr'] = 'Please Enter Client Name';
		header('location:add-quote.php');
	}
	//Email
	else if (empty($quote)) {
		$_SESSION['quoteErr'] = 'Please Enter Client Says';
		header('location:add-quote.php');
	}
	//Image
	else if (!in_array($ext, $allow_format)) {
		$_SESSION['image_ext_err'] = 'Please Use jpg, png, JPEG file format';
		header('location:add-quote.php');
	}
	else if($file_size > 5000000) { 
		$_SESSION['image_size_Err'] = 'You typing to big size attachment file, Maximum 5MB';
		header('location:add-quote.php');
	}
	else{
		$new_ext = 'quote-'.rand(01,500).'.'.$ext;
		$new_location = '../img/testimonials/'.$new_ext;

		move_uploaded_file($_FILES['image']['tmp_name'], $new_location);

		$insart = "INSERT INTO client_quotes SET name = '$name', quote = '$quote', image = '$new_ext' ";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'Add Successfully Done!';
			header('location:quote.php');
		}
		else{
			$_SESSION['UnSuccess'] = 'Added Unsuccessfully';
			header('location:quote.php');
		}
	}
	

}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>