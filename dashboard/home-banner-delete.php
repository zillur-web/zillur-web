<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$user_delete = "UPDATE home_banner SET status = 'deactive'  WHERE id = $id";

	$delete_query = mysqli_query($db, $user_delete);
	if ($delete_query) {
		$_SESSION['TrushDelete'] = 'Delete Successfully Done';
		header('location:home-banner.php');
	}
	else{
		$_SESSION['UnSuccess'] = ' Delete Added Unsuccessfull';
		header('location:home-banner.php');
	}

?>