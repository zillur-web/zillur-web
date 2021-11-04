<?php
require 'inc/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="add-general-settings.php">Add General Settings</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<div class="card pd-20 pd-sm-40">
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Add General Settings</h3>
				<form action="add-general-set-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="title">Website Title: <span class="text-danger">*</span></label>
									<input type="text" class="form-control " id="title" placeholder="Enter Your Website Title" name="title">
								</div>
							</div><!-- col-4 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="subtitle">Website Subtitle: <span class="text-danger">*</span></label>
									<input type="text" class="form-control " id="subtitle" placeholder="Enter Your Website Subtitle" name="subtitle">
								</div>
							</div><!-- col-4 -->
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6"><!-- col-6 -->
								<div class="form-group">
									<label for="logo">Logo : <span class="text-danger">*</span> </label>
									<input class="image_size_Err form-control" type="file" id="logo" class="form-control" name="logo" onchange="document.getElementById('logo_id').src = window.URL.createObjectURL(this.files[0])">
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Logo Preview: <span class="text-danger">*</span> </label><br>
									<div class="text-center">
										<img id="logo_id" style="border-radius: 50%; height: 150px; width: 150px;" src="upload/<?=$after_assoc['logo'];?>">
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