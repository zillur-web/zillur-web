<?php 
require_once 'db.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$password_regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'; 

	// Name Validation
	if (empty($name)) {
		$_SESSION['Name_Err'] = 'Enter Your Name';
		header('location:register.php');
	}
	// Email Validation
	elseif (empty($email)) {
		$_SESSION['EmailErr'] = 'Please Enter Your Email';
		header('location:register.php');
	}
	elseif (!preg_match($email_regex, $email)) {
		$_SESSION['EmailValidErr'] = 'Please Enter Your valid Email';
		header('location:register.php');
	}
	// Password Validation
	elseif (empty($password) && !preg_match($password_regex, $email)) {
		$_SESSION['PasswordErr'] = 'Please Enter Your Password. <br> Must be a minimum of 8 characters <br> Must contain at least 1 number.<br>Must contain at least one uppercase character. <br>Must contain at least one lowercase character';
		header('location:register.php');
	}
	// Password Confirmation
	elseif (empty($confirm_password)) {
		$_SESSION['ConfirmPasswordErr'] = 'Please Enter Your Confirm password';
		header('location:register.php');
	}
	elseif ($password != $confirm_password) {
		$_SESSION['ConfirmPasswordMatch'] = 'Your Password are dos not match';
		header('location:register.php');
	}
	else{
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$email_check = "SELECT COUNT(*) as total FROM users WHERE email = '$email'";
		$email_check_query = mysqli_query($db,$email_check);
		$after_assoc = mysqli_fetch_assoc($email_check_query);
		if ($after_assoc['total'] > 0) {
			$_SESSION['EmailFatchCheck'] ='You are already registered <br>Use another email address';
			header('location:signup-page.php');
		}
		else{
			$insart = "INSERT INTO  users ( name, email, password) VALUES ('$name','$email', '$password_hash')";
			$query = mysqli_query($db, $insart);
			if ($query) {
				$_SESSION['UsersSuccess'] = 'Resgistration Successfull';
				header('location:dashboard/users.php');
			}
			else{
				header('location:error/error.php'); 
				$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now! <br> Database Errors';
			}
		}
	}
}
else{
	header('location:error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>