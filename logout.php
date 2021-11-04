<?php  
	require 'dashboard/session.php';

	session_destroy();
	header('location:login.php');
?>