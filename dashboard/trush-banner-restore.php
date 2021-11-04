<?php 
require '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "UPDATE home_banner SET status = 'active'  WHERE id = $id";
	$delete_query = mysqli_query($db, $user_delete);
	if ($delete_query) {
		$_SESSION['TrushRestore'] = 'Restore Successfully Done';
		header('location:trush-banner.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Unsuccessfully Done';
		header('location:trush-banner.php');
	}

?>