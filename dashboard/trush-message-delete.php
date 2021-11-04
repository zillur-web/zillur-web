<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$delete = "DELETE FROM messages WHERE id = $id";

	$query = mysqli_query($db, $delete);


	if ($query) {
		$_SESSION['Delete'] = 'Permanently Delete Successfully Done';
		header('location:trush-message.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Permanently Delete UnSuccessfull';
		header('location:trush-message.php');
	}

?>