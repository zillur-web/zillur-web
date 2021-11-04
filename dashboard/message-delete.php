<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$delete = "UPDATE messages SET status = 3  WHERE id = $id";

	$query = mysqli_query($db, $delete);


	if ($query) {
		$_SESSION['Delete'] = 'Delete Successfully Done';
		header('location:message.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Delete Unsuccessfull';
		header('location:message.php');
	}

?>