<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$delete = "DELETE FROM services WHERE id = $id";

	$delete_query = mysqli_query($db, $delete);


	if ($delete_query) {
		$_SESSION['Delete'] = 'Permanently Delete Successfully Done';
		header('location:trush-services.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Permanently Delete UnSuccessfull';
		header('location:trush-services.php');
	}

?>