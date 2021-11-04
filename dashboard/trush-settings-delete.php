<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "DELETE FROM general_settings WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['TrushDelete'] = 'Permanently Delete Successfully Done';
		header('location:trush-settings.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Permanently Delete Unsuccessfull';
		header('location:trush-settings.php');
	}

?>