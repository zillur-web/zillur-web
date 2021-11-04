<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "UPDATE socials SET status = 'deactive'  WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['Delete'] = 'Delete Successfully Done';
		header('location:socials.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Delete Unsuccessfully Done';
		header('location:socials.php');
	}

?>