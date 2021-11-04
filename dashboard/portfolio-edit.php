<?php
require 'inc/header.php';
$select = "SELECT * FROM portfolio WHERE status = 'active'";
$query_data = mysqli_query($db,$select);
$after_assoc = mysqli_fetch_assoc($query_data);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="portfolio-edit.php">Edit Portfolios</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<div class="card pd-20 pd-sm-40">
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Edit Portfolios</h3>
				<form action="portfolio-edit-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="hidden" name="id" value="<?=$after_assoc['id']?>">
									<label for="title">Title : <span class="text-danger">*</span></label>
									<input type="text" class="form-control titleErr" id="title" placeholder="Enter Portfolio Title" name="title" value="<?=$after_assoc['title']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['titleErr'])) {
											echo '<style>.titleErr{border:1px solid red;}</style>';
											echo $_SESSION['titleErr'];
											unset($_SESSION['titleErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="subtitle">Category : <span class="text-danger">*</span></label>
									<input type="text" class="form-control SubtitleErr" id="category" placeholder="Enter Portfolio Category" name="category" value="<?=$after_assoc['category']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['SubtitleErr'])) {
											echo '<style>.SubtitleErr{border:1px solid red;}</style>';
											echo $_SESSION['SubtitleErr'];
											unset($_SESSION['SubtitleErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="demo">Demo : <span class="text-info">(Optional)</span></label>
									<input type="text" class="form-control" id="demo" placeholder="Enter Website Design Link" name="demo_link" value="<?=$after_assoc['link']?>">
								</div>
							</div><!-- col-4 -->
							<div class="col-lg-3"><!-- col-6 -->
								<div class="form-group">
									<label for="featured_image">Featured Image : <span class="text-danger">*</span> </label>
									<input class="image_size_Err image_file_err form-control" type="file" id="featured_image" class="form-control" name="featured_image" onchange="document.getElementById('featured_image_id').src = window.URL.createObjectURL(this.files[0])" value="<?=$after_assoc['featured_image']?>">
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
							<div class="col-lg-3">
								<div class="form-group">
									<label>Featured Image Preview : <span class="text-danger">*</span> </label><br>
									<div class="text-center">
										<img id="featured_image_id" style=" height: 150px; width: 150px;" src="../img/portfolio/<?=$after_assoc['featured_image']?>">
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