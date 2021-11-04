<?php
require 'inc/header.php';
$select = "SELECT * FROM client_quotes WHERE status = 'active'";
$query_data= mysqli_query($db,$select);
$after_assoc = mysqli_fetch_assoc($query_data);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="quote-edit.php">Edit Quote</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<div class="card pd-20 pd-sm-40">
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Edit Quote</h3>
				<form action="add-quote-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="hidden" name="id" value="<?=$after_assoc['id']?>">
									<label for="name">Name : <span class="text-danger">*</span></label>
									<input type="text" class="form-control NameErr" id="name" placeholder="Enter Client Name" name="name" value="<?=$after_assoc['name']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['NameErr'])) {
											echo '<style>.NameErr{border:1px solid red;}</style>';
											echo $_SESSION['NameErr'];
											unset($_SESSION['NameErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
							<div class="col-lg-3"><!-- col-6 -->
								<div class="form-group">
									<label for="client_img">Client Image : <span class="text-danger">*</span> </label>
									<input class="image_size_Err image_file_err form-control" type="file" id="client_img" class="form-control" name="image" onchange="document.getElementById('Client_image_id').src = window.URL.createObjectURL(this.files[0])">
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
									<label>Client Image Preview : <span class="text-danger">*</span> </label><br>
									<div class="text-center">
										<img id="Client_image_id" src="../img/testimonials/<?=$after_assoc['image']?>" style=" height: 150px; width: 150px;">
									</div>
								</div>
							</div> <!-- col-6 -->
							
						</div><!-- row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="quote">Client Says : <span class="text-danger">*</span></label>
									<textarea class="form-control quoteErr" id="quote" name="quote" rows="5" placeholder="Enter Client Say" value="<?=$after_assoc['quote']?>"></textarea>
									<span class="text-danger">
										<?php
										if (isset($_SESSION['quoteErr'])) {
											echo '<style>.quoteErr{border:1px solid red;}</style>';
											echo $_SESSION['quoteErr'];
											unset($_SESSION['quoteErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
						</div>
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