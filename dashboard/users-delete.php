<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "UPDATE users SET status = 'deactive'  WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['TrushDelete'] = 'User Delete Successfully Done';
		header('location:users.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'User Delete Unsuccessfull';
		header('location:users.php');
	}

?>