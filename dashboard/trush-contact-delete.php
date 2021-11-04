<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "DELETE FROM contact WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);


	if ($delete_query) {
		$_SESSION['Delete'] = 'Permanently Delete Successfully Done';
		header('location:trush-contact.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Permanently Delete Unsuccessfull';
		header('location:trush-contact.php');
	}

?>