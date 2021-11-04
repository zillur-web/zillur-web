<?php 
require_once '../db.php';
session_start();

$id = $_GET['id'];
$delete = "UPDATE general_settings SET status = 'deactive'  WHERE id = $id";

$query = mysqli_query($db, $delete);


if ($query) {
	$_SESSION['Delete'] = 'Settings Delete Successfully Done';
	header('location:general-settings.php');
}
else{
	$_SESSION['UnSuccess'] = 'Added Unsuccessfull';
	header('location:general-settings.php');
}
?>