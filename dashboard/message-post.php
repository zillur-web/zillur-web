<?php
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name =$_POST['name'];
	$email =$_POST['email'];
	$subject =$_POST['subject'];
	$message =mysqli_real_escape_string($db, $_POST['message']);
	$time = date("h:i:s A d-M-Y");
	


	if(empty($name)){
		$_SESSION['nameErr'] = 'Please Enter Your Full Name';
			header('location:../contact.php');
	}
	else if(empty($email)){
		$_SESSION['emailErr'] = 'Please Enter Your E-mail';
			header('location:../contact.php');
	}
	else if(empty($subject)){
		$_SESSION['subjectErr'] = 'Please Enter Your Subject';
			header('location:../contact.php');
	}
	else if(empty($message)){
		$_SESSION['messageErr'] = 'Please Enter Your Message';
			header('location:../contact.php');
	}

	else{
		$insart = "INSERT INTO messages  SET name = '$name', subject = '$subject', email = '$email', date_time = '$time', message = '$message'";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'Message Sended';
			header('location:../contact.php');
		} 
		else{
			$_SESSION['UnSuccess'] = ' Sorry....Something Problem';
			header('location:../contact.php');
		}

	}

}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>