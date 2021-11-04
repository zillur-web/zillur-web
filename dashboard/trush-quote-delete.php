<?php 
require_once '../db.php';
session_start();

$id = $_GET['id'];
$user_delete = "DELETE FROM client_quotes WHERE id = $id";

$delete_query = mysqli_query($db, $user_delete);


if ($delete_query) {
	$_SESSION['TrushDelete'] = 'Permanently Delete Successfully Done';
	header('location:trush-settings.php');
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}

?>