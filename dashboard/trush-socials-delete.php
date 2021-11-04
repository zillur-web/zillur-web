<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "DELETE FROM socials WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['TrushDelete'] = 'Permanently Delete Successfully Done';
		header('location:trush-socials.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Permanently Delete Successfull';
		header('location:trush-socials.php');
	}

?>