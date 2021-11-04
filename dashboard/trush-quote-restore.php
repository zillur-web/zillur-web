<?php 
require '../db.php';
session_start();

$id = $_GET['id'];
$Update = "UPDATE client_quotes SET status = 'active'  WHERE id = $id";
$query = mysqli_query($db, $Update);
if ($query) {
	$_SESSION['Success'] = 'Restore Successfully Done';
	header('location:trush-quote.php');
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}

?>