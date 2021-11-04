<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "UPDATE contact SET status = 'deactive'  WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['Delete'] = 'Delete Successfully Done';
		header('location:contact.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Delete Unsuccessfull';
		header('location:contact.php');
	}

?>