<?php 
require_once '../db.php';
require_once 'session.php';

$id = $_GET['id'];
$select = "SELECT * FROM messages WHERE id = '$id'";
$query = mysqli_query($db,$select);
$after_assoc = mysqli_fetch_assoc($query);

if ($after_assoc['status'] == 1) {
	$read = "UPDATE messages SET status = 2 WHERE id = '$id'";
	$read_query = mysqli_query($db, $read);
	if ($read_query) {
		header('location:message.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Database Query Problem Please Solve this';
		header('location:message.php');
	}
}
else if ($after_assoc['status'] == 3) {
	$read = "UPDATE messages SET status = 1 WHERE id = '$id'";
	$read_query = mysqli_query($db, $read);
	if ($read_query) {
		$_SESSION['Success'] = 'Restore Successfully Done';
		header('location:trush-message.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Database Query Problem Please Solve this';
		header('location:trush-message.php');
	}
}
else{
	$Unread = "UPDATE messages SET status = 1 WHERE id = '$id'";
	$Unread_query = mysqli_query($db, $Unread);
	if ($Unread_query) {
		header('location:message.php');
	}
	else{
		$_SESSION['UnSuccess'] = 'Database Query Problem Please Solve this';
		header('location:message.php');
	}
}
?>