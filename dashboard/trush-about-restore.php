<?php 
require '../db.php';
session_start();

	$id = $_GET['id'];
	$select = "UPDATE about SET status = 'active'  WHERE id = $id";
	$query = mysqli_query($db, $select);
	if ($query) {
		$_SESSION['TrushRestore'] = 'Restore Successfully Done';
		header('location:trush-about.php');
	}

?>