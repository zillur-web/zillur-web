<?php 
require '../db.php';
session_start();

	$id = $_GET['id'];
	$update = "UPDATE portfolio SET status = 'active'  WHERE id = $id";
	$query = mysqli_query($db, $update);
	if ($query) {
		$_SESSION['Success'] = 'Restore Successfully Done';
		header('location:trush-portfolio.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Restore Unsuccessfully Done';
		header('location:trush-portfolio.php');
	}

?>