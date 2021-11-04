<?php
require 'inc/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="add-general-settings.php">Add Banner</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<div class="card pd-20 pd-sm-40">
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Add Banner</h3>
				<form action="add-banner-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="owner">Owner Name: <span class="text-danger">*</span></label>
									<input type="text" class="form-control Name_Err" id="owner" placeholder="Enter Owner Name" name="owner_name">
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
							<div class="col-lg-6">
								<div class="form-group">
									<label for="tagline">Tagline: <span class="text-danger">*</span></label>
									<input type="text" class="form-control Tagline_Err" id="tagline" placeholder="Enter Banner Tagline" name="tagline">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['Tagline_Err'])) {
											echo '<style>.Tagline_Err{border:1px solid red;}</style>';
											echo $_SESSION['Tagline_Err'];
											unset($_SESSION['Tagline_Err']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6"><!-- col-6 -->
								<div class="form-group">
									<label for="banner_img">Banner Image : <span class="text-danger">*</span> </label>
									<input class="image_size_Err image_file_err form-control" type="file" id="banner_img" class="form-control" name="banner_img" onchange="document.getElementById('banner_img_id').src = window.URL.createObjectURL(this.files[0])">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['image_file_err'])) {
											echo '<style>.image_file_err{border:1px solid red;}</style>';
											echo $_SESSION['image_file_err'];
											unset($_SESSION['image_file_err']);
										}
										if (isset($_SESSION['image_size_Err'])) {
											echo '<style>.image_size_Err{border:1px solid red;}</style>';
											echo $_SESSION['image_size_Err'];
											unset($_SESSION['image_size_Err']);
										}
										?>
									</span>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Image Preview: <span class="text-danger">*</span> </label><br>
									<div class="text-center">
										<img id="banner_img_id" style=" height: 150px; width: 150px;">
									</div>
								</div>
							</div> <!-- col-6 -->

						</div><!-- row -->
						<div class="form-layout-footer">
							<button class="btn btn-info mg-r-5">Add</button>
						</div><!-- form-layout-footer -->
					</form>
				</div><!-- form-layout -->
			</div><!-- card -->
		</div><!-- sl-page-title -->

		<!-- ########## END: MAIN PANEL ########## -->
		<?php
		require 'inc/footer.php';
	?>