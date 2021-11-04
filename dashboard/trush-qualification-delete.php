<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$delete = "DELETE FROM qualification WHERE id = $id";

	$delete_query = mysqli_query($db, $delete);


	if ($delete_query) {
		$_SESSION['Delete'] = 'Permanently Delete Successfully Done';
		header('location:trush-qualification.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Permanently Delete UnSuccessfull';
		header('location:trush-qualification.php');
	}

?>