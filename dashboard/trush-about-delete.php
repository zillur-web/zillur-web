<?php 
require_once '../db.php';
session_start();

	$id = $_GET['id'];
	$select = "DELETE FROM about WHERE id = $id";
	$query = mysqli_query($db, $select);


	if ($query) {
		$_SESSION['TrushDelete'] = 'Permanently Delete Successfully Done';
		header('location:trush-about.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Delete Unsuccessfully Done';
		header('location:trush-about.php');
	}

?>