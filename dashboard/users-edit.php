<?php
require 'inc/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM users  WHERE id = $id";
$select_query = mysqli_query($db,$select);
$after_assoc = mysqli_fetch_assoc($select_query);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="users.php">Edit User</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<?php
			if (isset($_SESSION['UsersSuccess'])) {
				?>
				<div class="alert alert-success">
					<span>
						<?php
						echo $_SESSION['UsersSuccess'];
						unset($_SESSION['UsersSuccess']);
						?>
					</span>
				</div>
				<?php
			}
			if (isset($_SESSION['UsersDelete'])) {
				?>
				<div class="alert alert-danger">
					<span>
						<?php
						echo $_SESSION['UsersDelete'];
						unset($_SESSION['UsersDelete']);
						?>
					</span>
				</div>
				<?php
			}
			?>
			<div class="card pd-20 pd-sm-40">
				<h6 class="card-body-title">User Update</h6>
				<form action="user-edit-post.php" method="POST">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-4">
								<div class="form-group">
									<label for="name">Name: <span class="text-danger">*</span></label>
									<input type="hidden" name="id" value="<?=$after_assoc['id'];?>">
									<input type="text" class="form-control Name_Err" id="name" value="<?=$after_assoc['name'];?>" placeholder="Enter Name" name="name">
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
							</div><!-- col-4 -->
							<div class="col-lg-4">
								<div class="form-group">
									<label for="email">E-mail: <span class="text-danger">*</span></label>
									<input type="email" class="form-control EmailErr EmailValidErr" id="email" value="<?=$after_assoc['email'];?>" placeholder="Enter email" name="email">
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
										?>
									</span>
								</div>
							</div><!-- col-4 -->
							<div class="col-lg-4">
								<div class="form-group">
									<label for="email">User Role: <span class="text-danger">*</span></label>
									<div>
										<select class="form-select form-control user_roleErr" name="user_role" value="<?=$after_assoc['user_role'];?>" >
											<option selected >Select User Role..</option>
											<option value="1">User</option>
											<option value="2">Employee</option>
											<option value="3">Admin</option>
										</select>
										<span class="text-danger">
										<?php
										if (isset($_SESSION['user_roleErr'])) {
											echo '<style>.user_roleErr{border:1px solid red;}</style>';
											echo $_SESSION['user_roleErr'];
											unset($_SESSION['user_roleErr']);
										}
										?>
									</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 m-auto">
									<p class=""> <span class="font-weight-bold text-danger">* Note :: </span>Let me tell you, the user will never be able to access the admin panel, only the employee and the admin will be able to access it.</p>
								</div>
							</div>
						</div>
					</div><!-- row -->
					<div class="form-layout-footer">
						<button class="btn btn-info mg-r-5">Update</button>
					</div><!-- form-layout-footer -->
				</form>
			</div><!-- form-layout -->
		</div><!-- card -->
	</div><!-- sl-page-title -->

	<!-- ########## END: MAIN PANEL ########## -->
	<?php
	require 'inc/footer.php';
?>