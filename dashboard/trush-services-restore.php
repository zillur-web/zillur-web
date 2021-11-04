<?php 
require '../db.php';
session_start();

	$id = $_GET['id'];
	$update = "UPDATE services SET status = 'active'  WHERE id = $id";
	$query = mysqli_query($db, $update);
	if ($query) {
		$_SESSION['Restore'] = 'Restore Successfully Done';
		header('location:trush-services.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Restore Unsuccessfully Done';
		header('location:trush-services.php');
	}

?>