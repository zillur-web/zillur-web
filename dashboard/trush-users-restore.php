<?php 
require '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "UPDATE users SET status = 'active'  WHERE id = $id";

	// $user_delete = "DELETE FROM users WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['TrushRestore'] = 'User Restore Successfully Done';
		header('location:trush-users.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'User Restore Unsuccessfull';
		header('location:trush-users.php');
	}

?>