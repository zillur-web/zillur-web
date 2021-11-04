<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "DELETE FROM users WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['TrushDelete'] = 'User Permanently Delete Successfully Done';
		header('location:trush-users.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'User Permanently Delete Unsuccessfull';
		header('location:trush-users.php');
	}

?>