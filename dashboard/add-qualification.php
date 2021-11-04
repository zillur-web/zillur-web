<?php
require 'inc/header.php';

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="add-qualification.php">Add Qualification </a>
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
			if (isset($_SESSION['Delete'])) {
				?>
				<div class="alert alert-danger">
					<span>
						<?php
						echo $_SESSION['Delete'];
						unset($_SESSION['Delete']);
						?>
					</span>
				</div>
				<?php
			}
			?>

			<div class="card pd-20 pd-sm-40">
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Add Qualification</h3>
				<p class="text-center text-danger lead pb-4">Note: When adding each of your qualifications, input the same with your previous experience and phone number</p>
				<form action="add-qualification-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="title">Title: <span class="text-danger">*</span></label>
									<input type="text" class="form-control tilteErr" id="title" placeholder="Enter Qualification Title" name="title">
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
							<div class="col-lg-4">
								<div class="form-group">
									<label for="year">Qualification Year: <span class="text-danger">*</span></label>
									<input type="text" class="form-control year" id="year" placeholder="Enter Qualification Year" name="year">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['year'])) {
											echo '<style>.year{border:1px solid red;}</style>';
											echo $_SESSION['year'];
											unset($_SESSION['year']);
										}
										?>
									</span>
								</div>
							</div><!-- col- -->
							<div class="col-lg-2">
								<div class="form-group">
									<label for="result">Result: <span class="text-danger">*</span></label>
									<select class="form-control result" id="result" name="result">
										<?php
										for ($i=0; $i<=100; $i++){ 
											?>
											<option value="<?php echo $i;?>"><?php echo  $i.' %';?></option>
											<?php
										}
										?>
									</select>
									<span class="text-danger">
										<?php
										if (isset($_SESSION['result'])) {
											echo '<style>.result{border:1px solid red;}</style>';
											echo $_SESSION['result'];
											unset($_SESSION['result']);
										}
										?>
									</span>
								</div>
							</div><!-- col- -->
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="experience">Experience: <span class="text-danger">*</span></label>
									<select class="form-control experience" id="experience" name="experience">
										<?php
										for ($i=0; $i<10; $i++){ 
											?>
											<option value="<?php echo $i;?>"><?php echo  $i.' Year';?></option>
											<?php
										}
										?>
									</select>
									<?php
									if (isset($_SESSION['experience'])) {
										echo '<style>.experience{border:1px solid red;}</style>';
										echo $_SESSION['experience'];
										unset($_SESSION['experience']);
									}
									?>
								</span>
							</div>
						</div><!-- col- -->
						<div class="col-lg-6">
							<div class="form-group">
								<label for="phone">Phone: <span class="text-danger">*</span></label>
								<input type="text" class="form-control phone" id="phone" placeholder="Enter Your Phone Number" name="phone">
								<span class="text-danger">
									<?php
									if (isset($_SESSION['phone'])) {
										echo '<style>.phone{border:1px solid red;}</style>';
										echo $_SESSION['phone'];
										unset($_SESSION['phone']);
									}
									?>
								</span>
							</div>
						</div><!-- col- -->



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