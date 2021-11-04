<?php
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
	$title = mysqli_real_escape_string($db,$_POST['title']);
	$disc = mysqli_real_escape_string($db, $_POST['description']);
	$CV = $_POST['cv'];
	$image = $_FILES['image'];
	$imgName = $_FILES['image']['name'];
	$explode = explode('.',$imgName);
	$ext = end($explode);
	$allow_format = ['png','PNG'];
	$file_size = $_FILES['image']['size'];

	//Title
	if (empty($title)) {
		$_SESSION['tilteErr'] = 'Please Enter Title';
		header('location:about-edit.php');
	}
	//Email
	elseif (empty($disc)) {
		$_SESSION['descriptionErr'] = 'Please Enter Description';
		header('location:about-edit.php');
	}
	elseif (empty($CV )) {
		$_SESSION['CVlink'] = 'Please Enter CV Link';
		header('location:about-edit.php');
	}
	//Image
	else if (!in_array($ext, $allow_format)) {
		$_SESSION['image_ext_err'] = 'Please Use jpg, png, JPEG file format';
		header('location:about-edit.php');
	}
	else if($file_size > 5000000) { 
		$_SESSION['image_size_Err'] = 'You typing to big size attachment file, Maximum 5MB';
		header('location:about-edit.php');
	}
	else{
		$new_ext = 'about-image'.'.'.$ext;
		$new_location = '../img/about/'.$new_ext;

		move_uploaded_file($_FILES['image']['tmp_name'], $new_location);

		$update = "UPDATE about SET title = '$title', description = '$disc', link = '$CV', image = '$new_ext' WHERE id = $id";
		$query = mysqli_query($db, $update);

		if ($query) {
			$_SESSION['Success'] = 'Update Successfully Done!';
			header('location:about.php');
		}
		else{
			$_SESSION['UnSuccess'] = 'Update Unsuccessfully';
			header('location:about.php');
		}
	}
	

}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>