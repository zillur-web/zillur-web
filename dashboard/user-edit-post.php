<?php 
require_once '../db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
	$name =$_POST['name'];
	$email =$_POST['email'];
	$user_role = $_POST['user_role'];
	$email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

	// Name Validation
	if (empty($name)) {
		$_SESSION['Name_Err'] = 'Enter Your Name';
		header('location:user-edit.php');
	}
	// Email Validation
	elseif (empty($email)) {
		$_SESSION['EmailErr'] = 'Please Enter Your Email';
		header('location:user-edit.php');
	}
	// User Role Validation
	elseif (empty($user_role)) {
		$_SESSION['user_roleErr'] = 'Please Select User Role';
		header('location:user-edit.php');
	}
	elseif (!preg_match($email_regex, $email)) {
		$_SESSION['EmailValidErr'] = 'Please Enter Your valid Email';
		header('location:user-edit.php');
	}
	else{
		$update_status = "UPDATE users SET name = '$name', email ='$email', role = '$user_role' WHERE id = $id";
		if (mysqli_query($db, $update_status)) {
			$_SESSION['UsersSuccess']='User Update Successfully';
			header('location:users.php');
		}
		else{
			header('location:../error/error.php');
			$_SESSION['error'] = 'Database Errors';
		}
	}
}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>