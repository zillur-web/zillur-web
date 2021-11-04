<?php
require '../db.php';
require 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$address =$_POST['address'];
	$city =$_POST['city'];
	$phone =$_POST['phone'];
	$time =$_POST['time'];
	$email =$_POST['email'];
	$location =$_POST['location'];
	


	if(empty($address)){
		$_SESSION['addressErr'] = 'Please Enter Your Office Address';
			header('location:add-contact.php');
	}
	else if(empty($city)){
		$_SESSION['cityErr'] = 'Please Enter Your Office Address City';
			header('location:add-contact.php');
	}
	else if(empty($phone)){
		$_SESSION['phoneErr'] = 'Please Enter Your Office Phone Number';
			header('location:add-contact.php');
	}
	else if(empty($time)){
		$_SESSION['timeErr'] = 'Please Enter Your Office Time';
			header('location:add-contact.php');
	}
	else if(empty($email)){
		$_SESSION['emailErr'] = 'Please Enter Your Office E-mail';
			header('location:add-contact.php');
	}
	else if(empty($location)){
		$_SESSION['locationErr'] = 'Please Enter Your Office Google location Link';
			header('location:add-contact.php');
	}

	else{
		$insart = "INSERT INTO contact  SET address = '$address', city = '$city', phone = '$phone', o_time = '$time', o_email = '$email', location = '$location'";
		$query = mysqli_query($db, $insart);

		if ($query) {
			$_SESSION['Success'] = 'Added Successfully';
			header('location:contact.php');
		} 
		else{
			$_SESSION['UnSuccess'] = 'Added Unsuccessfull';
			header('location:contact.php');
		}

	}

}
else{
	header('location:../error/error.php');
	$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
}
?>