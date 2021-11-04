<?php 
require_once '../db.php';
session_start();

$id = $_GET['id'];
$delete = "UPDATE portfolio SET status = 'deactive'  WHERE id = $id";
$query = mysqli_query($db, $delete);


if ($query) {
	$_SESSION['Delete'] = 'Delete Successfully Done';
	header('location:portfolio.php');
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}

?>