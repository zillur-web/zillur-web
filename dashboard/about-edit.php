<?php
require 'inc/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM about  WHERE id = $id";
$select_query = mysqli_query($db,$select);
$after_assoc = mysqli_fetch_assoc($select_query);
?>
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="about-edit.php">Edit About</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<?php
			if (isset($_SESSION['Success'])) {
				?>
				<div class="alert alert-success">
					<span>
						<?php
						echo $_SESSION['Success'];
						unset($_SESSION['Success']);
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
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Edit About</h3>
				<form action="about-edit-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="hidden" value="<?=$after_assoc['id']?>" name="id">
									<label for="title">Title: <span class="text-danger">*</span></label>
									<input type="text" class="form-control tilteErr" id="title" placeholder="Enter Title" name="title" value="<?=$after_assoc['title']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['tilteErr'])) {
											echo '<style>.tilteErr{border:1px solid red;}</style>';
											echo $_SESSION['tilteErr'];
											unset($_SESSION['tilteErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col- -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="cvlink">CV Link: <span class="text-danger">*</span></label>
									<input type="text" class="form-control CVlink" id="cvlink" placeholder="Enter CV Link" name="cv" value="<?=$after_assoc['link']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['CVlink'])) {
											echo '<style>.CVlink{border:1px solid red;}</style>';
											echo $_SESSION['CVlink'];
											unset($_SESSION['CVlink']);
										}
										?>
									</span>
								</div>
							</div><!-- col- -->
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="description">Description: <span class="text-danger">*</span></label>
									<textarea class="form-control descriptionErr" id="description" name="description" rows="5" placeholder="Enter Description" value="<?=$after_assoc['description']?>"></textarea>
									<span class="text-danger">
										<?php
										if (isset($_SESSION['descriptionErr'])) {
											echo '<style>.descriptionErr{border:1px solid red;}</style>';
											echo $_SESSION['descriptionErr'];
											unset($_SESSION['descriptionErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-4 -->
							<div class="col-lg-3"><!-- col-6 -->
								<div class="form-group">
									<label for="image">About Image : <span class="text-danger">*</span> </label>
									<input class="image_size_Err image_ext_err form-control" type="file" id="image" class="form-control" name="image" onchange="document.getElementById('AboutImage').src = window.URL.createObjectURL(this.files[0])" src="../font-end/img/about/<?=$after_assoc['image'];?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['image_ext_err'])) {
											echo '<style>.image_ext_err{border:1px solid red;}</style>';
											echo $_SESSION['image_ext_err'];
											unset($_SESSION['image_ext_err']);
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
									<label>Image Preview: <span class="text-danger">*</span> </label><br>
									<div class="text-center" >
										<img id="AboutImage" src="../font-end/img/about/<?=$after_assoc['image'];?>" style=" height: 150px; width: 150px;">
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