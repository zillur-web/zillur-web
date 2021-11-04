<?php
	require '../db.php';
	require 'session.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $_SESSION['id'];
		$name =$_POST['name'];
		$email =$_POST['email'];
		$img = $_FILES['profile_image'];
		$image = $_FILES['profile_image']['name'];
		$explode = explode('.', $image);
		$ext = end($explode);
		$allow_format = ['jpg','png','JPEG'];
		$file_size = $_FILES['profile_image']['size'];
		$name_regex = '/^([a-zA-Z ]{3,})*$/'; 
		$email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

		// Name Input Check
		if (empty($name)) {
			$_SESSION['NameUpdateErr'] = 'Name field could not be empty';
			header('location:profile-edit.php');
		}
		// Name Validation Check
		else if (!preg_match($name_regex, $name)) {
			$_SESSION['NameUpdateValidErr'] = 'Please Enter alphabets and whitespase are allowed';
			header('location:profile-edit.php');
		}
		// Email Input Check
		else if (empty($email)) {
			$_SESSION['EmailUpdateErr'] = 'Name field could not be empty';
			header('location:profile-edit.php');
		}
		// Email Validation Check
		else if (!preg_match($email_regex, $email)) {
			$_SESSION['EmailUpdateValidErr']='Please Enter Your Valid Email Address';
			header('location:profile-edit.php');
		}
		
		// Image File Format Check
		else if (!in_array($ext, $allow_format)) {
			$_SESSION['image_Err'] = 'Please Use jpg, png, JPEG file format';
			header('location:profile-edit.php');
		}
		// Image File Size Check
		else if($file_size > 5000000) { 
			$_SESSION['image_size_Err'] = 'You typing to big size attachment file, Maximum 5MB';
			header('location:profile-edit.php');
		}
		else{
			$new_ext = $id.'.'.$ext;
			$new_location = 'upload/'.$new_ext;

			$img_check = "SELECT * FROM users WHERE id = $id";
			$img_query = mysqli_query($db, $img_check);
			$img_assoc = mysqli_fetch_assoc($img_query);
			$old_img_location = 'upload/'.$img_assoc['profile_image'];

			if ($img_assoc['profile_image' != 'default.png']) {
				if (file_exists($old_img_location)) {
					unlink($old_img_location);
				}
			}
			move_uploaded_file($_FILES['profile_image']['tmp_name'], $new_location);

			$update = "UPDATE users SET name = '$name', email = '$email', profile_image = '$new_ext' WHERE id = $id";
			$query = mysqli_query($db, $update);

			if ($query) {
				$_SESSION['name'] = $name;
				$_SESSION['ProfileUpdateSuccess'] = 'Profile Update Successfully';
				header('location:profile-edit.php');
			} 
			else{
				$_SESSION['UnSuccess'] = 'Profile Update Unsuccessfull';
				header('location:profile-edit.php');
			}

		}

		

	}
	else{
		header('location:../error/error.php');
		$_SESSION['error'] = 'You will not be granted access to this page. I am sorry right now!';
	}
?>