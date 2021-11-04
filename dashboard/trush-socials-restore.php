<?php 
require '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "UPDATE socials SET status = 'active'  WHERE id = $id";

	// $user_delete = "DELETE FROM users WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['TrushRestore'] = 'Restore Successfully Done';
		header('location:trush-socials.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Restore Unsuccessfull';
		header('location:trush-socials.php');
	}

?>