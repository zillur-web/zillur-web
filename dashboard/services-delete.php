<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$delete = "UPDATE services SET status = 'deactive'  WHERE id = $id";

	$delete_query = mysqli_query($db, $delete);


	if ($delete_query) {
		$_SESSION['Delete'] = 'Delete Successfully Done';
		header('location:services.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Delete Unsuccessfully Done';
		header('location:services.php');
	}
?>