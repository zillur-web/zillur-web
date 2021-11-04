<?php
require 'inc/header.php';
$id = $_SESSION['id'];
$select = "SELECT * FROM users  WHERE id = $id";
$select_query = mysqli_query($db,$select);
$after_assoc = mysqli_fetch_assoc($select_query);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="users.php">Profile Edit</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<?php
			if (isset($_SESSION['ProfileUpdateSuccess'])) {
				?>
				<div class="alert alert-success">
					<span>
						<?php
						echo $_SESSION['ProfileUpdateSuccess'];
						unset($_SESSION['ProfileUpdateSuccess']);
						?>
					</span>
				</div>
				<?php
			}
			if (isset($_SESSION['UnSuccess'])) {
				?>
				<div class="alert alert-warning">
					<span>
						<?php
						echo $_SESSION['UnSuccess'];
						unset($_SESSION['UnSuccess']);
						?>
					</span>
				</div>
				<?php
			}
			?>
			<div class="card pd-20 pd-sm-40">
				<h6 class="card-body-title">Profile Edit</h6>
				<form action="profile-edit-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="name">Name: <span class="text-danger">*</span></label>
									<input type="hidden" name="id" value="<?=$after_assoc['id'];?>">
									<input type="text" class="form-control NameUpdateErr NameUpdateValidErr" id="name" value="<?=$after_assoc['name'];?>" placeholder="Enter Name" name="name">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['NameUpdateErr'])) {
											echo '<style>.NameUpdateErr{border:1px solid red;}</style>';
											echo $_SESSION['NameUpdateErr'];
											unset($_SESSION['NameUpdateErr']);
										}
										if (isset($_SESSION['NameUpdateValidErr'])) {
											echo '<style>.NameUpdateValidErr{border:1px solid red;}</style>';
											echo $_SESSION['NameUpdateValidErr'];
											unset($_SESSION['NameUpdateValidErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="email">E-mail: <span class="text-danger">*</span></label>
									<input type="email" class="form-control EmailUpdateErr EmailUpdateValidErr" id="email" value="<?=$after_assoc['email'];?>" placeholder="Enter email" name="email">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['EmailUpdateErr'])) {
											echo '<style>.EmailUpdateErr{border:1px solid red;}</style>';
											echo $_SESSION['EmailUpdateErr'];
											unset($_SESSION['EmailUpdateErr']);
										}
										if (isset($_SESSION['EmailUpdateValidErr'])) {
											echo '<style>.EmailUpdateValidErr{border:1px solid red;}</style>';
											echo $_SESSION['EmailUpdateValidErr'];
											unset($_SESSION['EmailUpdateValidErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6"><!-- col-6 -->
								<div class="form-group">
									<label for="profile_image">Profile Image: <span class="text-danger">*</span> </label>
									<input class="image_Err image_size_Err form-control" type="file" id="profile_image" class="form-control" name="profile_image" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['image_Err'])) {
											echo "<style>.image_Err{border:1px solid red;}</style>";
											echo $_SESSION['image_Err'];
											unset($_SESSION['image_Err']);
										}
										?>
										<?php
										if (isset($_SESSION['image_size_Err'])) {
											echo "<style>.image_size_Err{border:1px solid red;}</style>";
											echo $_SESSION['image_size_Err'];
											unset($_SESSION['image_size_Err']);
										}
										?>
									</span>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Profile Image Preview: <span class="text-danger">*</span> </label><br>
									<div class="text-center">
										<img id="image_id" style="border-radius: 50%; height: 150px; width: 150px;" src="upload/<?=$after_assoc['profile_image'];?>">
									</div>
								</div>
							</div> <!-- col-6 -->

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