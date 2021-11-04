<?php
require 'inc/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="add-services.php">Add Services</a>
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
				<div class="form-layout">
					<form action="add-services-post.php" method="POST">
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6"><!-- col-6 -->
								<div class="form-group">
									<label for="title">Title: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control TitleErr" id="title" placeholder="Enter Services Title" name="title">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['TitleErr'])) {
											echo "<style>.TitleErr{border:1px solid red;}</style>";
											echo $_SESSION['TitleErr'];
											unset($_SESSION['TitleErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="icon">Icon: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control IconErr" name="icon" id="icon">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['IconErr'])) {
											echo "<style>.IconErr{border:1px solid red;}</style>";
											echo $_SESSION['IconErr'];
											unset($_SESSION['IconErr']);
										}
										?>
									</span>
								</div> 
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label for="discription">Discription: <span class="text-danger">*</span> </label>
									<!-- <input type="text" class="form-control SocialLinkErr" id="summary" placeholder="Discription" name="summary"> -->
									<textarea class="form-control discriptionErr" id="discription" name="discription" rows="5" placeholder="Discription"></textarea>
								</div>
								<span class="text-danger">
									<?php
									if (isset($_SESSION['discriptionErr'])) {
										echo "<style>.discriptionErr{border:1px solid red;}</style>";
										echo $_SESSION['discriptionErr'];
										unset($_SESSION['discriptionErr']);
									}
									?>
								</span>
							</div> 
						</div>
					</div><!-- row -->

					<div class="form-layout-footer">
						<input style="cursor: pointer;" type="submit" class="btn btn-info mg-r-5" value="Add">
					</div><!-- form-layout-footer -->
				</form>
			</div><!-- form-layout -->
		</div><!-- card -->


	</div><!-- card -->
</div><!-- sl-page-title -->

<!-- ########## END: MAIN PANEL ########## -->
<?php
require 'inc/footer.php';
?>