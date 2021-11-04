<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Twitter -->
	<meta name="twitter:site" content="@themepixels">
	<meta name="twitter:creator" content="@themepixels">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Starlight">
	<meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

	<!-- Facebook -->
	<meta property="og:url" content="http://themepixels.me/starlight">
	<meta property="og:title" content="Starlight">
	<meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

	<meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
	<meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="600">

	<!-- Meta -->
	<meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="author" content="ThemePixels">

	<title>Zillur-Web Admin Pannel</title>

	<!-- vendor css -->
	<link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">


	<!-- Starlight CSS -->
	<link rel="stylesheet" href="assets/css/starlight.css">
</head>

<body>

	<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

		<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
			<div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Zillur-Web <span class="tx-info tx-normal">Admin</span></div>
			<div class="tx-center mg-b-40">Only Admin & Employee Will Sign Up Here</div>
			<form action="signup-page-post.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control Name_Err" id="name" placeholder="Enter Name" name="name">
					<span class="text-danger">
						<?php
						if (isset($_SESSION['Name_Err'])) {
							echo '<style>.Name_Err{border:1px solid red;}</style>';
							echo $_SESSION['Name_Err'];
							unset($_SESSION['Name_Err']);
						}
						?>
					</span>
				</div>
				<div class="form-group">
					<input type="email" class="form-control EmailErr EmailValidErr EmailFatchCheck" id="email" placeholder="Enter email" name="email">
					<span class="text-danger">
						<?php
						if (isset($_SESSION['EmailErr'])) {
							echo '<style>.EmailErr{border:1px solid red;}</style>';
							echo $_SESSION['EmailErr'];
							unset($_SESSION['EmailErr']);
						}
						if (isset($_SESSION['EmailValidErr'])) {
							echo '<style>.EmailValidErr{border:1px solid red;}</style>';
							echo $_SESSION['EmailValidErr'];
							unset($_SESSION['EmailValidErr']);
						}
						if (isset($_SESSION['EmailFatchCheck'])) {
							echo '<style>.EmailFatchCheck{border:1px solid red;}</style>';
							echo $_SESSION['EmailFatchCheck'];
							unset($_SESSION['EmailFatchCheck']);
						}
						?>
					</span>
				</div>
				<div class="form-group">
					<input type="password" class="form-control PasswordErr" id="password" placeholder="Enter password" name="password">
					<span class="text-danger">
						<?php
						if (isset($_SESSION['PasswordErr'])) {
							echo '<style>.PasswordErr{border:1px solid red;}</style>';
							echo $_SESSION['PasswordErr'];
							unset($_SESSION['PasswordErr']);
						}
						?>
					</span>
				</div>
				<div class="form-group">
					<input type="password" class="form-control ConfirmPasswordErr ConfirmPasswordMatch" id="confirm_password" placeholder="Enter confiram password" name="confirm_password">
					<span class="text-danger">
						<?php
						if (isset($_SESSION['ConfirmPasswordErr'])) {
							echo '<style>.ConfirmPasswordErr{border:1px solid red;}</style>';
							echo $_SESSION['ConfirmPasswordErr'];
							unset($_SESSION['ConfirmPasswordErr']);
						}
						if (isset($_SESSION['ConfirmPasswordMatch'])) {
							echo '<style>.ConfirmPasswordMatch{border:1px solid red;}</style>';
							echo $_SESSION['ConfirmPasswordMatch'];
							unset($_SESSION['ConfirmPasswordMatch']);
						}
						?>
					</span>
				</div><!-- form-group -->
				<button type="submit" class="btn btn-info btn-block">Sign Up</button>
			</form>
			<div class="mg-t-40 tx-center">Not yet a member? <a href="login.php" class="tx-info">Login</a></div>
		</div><!-- login-wrapper -->
	</div><!-- d-flex -->

	<script src="assets/lib/jquery/jquery.js"></script>
	<script src="assets/lib/popper.js/popper.js"></script>
	<script src="assets/lib/bootstrap/bootstrap.js"></script>

</body>
</html>

