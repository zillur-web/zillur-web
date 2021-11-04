<?php
require 'inc/header.php';
$id = $_GET['id'];
$count = "SELECT * FROM socials WHERE id = $id";
$query = mysqli_query($db,$count);
$after_assoc = mysqli_fetch_assoc($query);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="socials-edit.php">Socials Edit</a>
	</nav>

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<?php
      if (isset($_SESSION['SocialUpdateErr'])) {
        ?>
        <div class="alert alert-danger">
          <span>
            <?php
            echo $_SESSION['SocialUpdateErr'];
            unset($_SESSION['SocialUpdateErr']);
            ?>
          </span>
        </div>
        <?php
      }
      ?>
			<div class="card pd-20 pd-sm-40">
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Socials Edit</h3>
				<form action="socials-edit-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6"><!-- col-6 -->
								<div class="form-group">
									<input type="hidden" name="id" value="<?=$after_assoc['id'];?>">
									<label for="name">Social Icon Name: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control SocialNameErr" id="name" placeholder="Enter Icon Name" name="name" value="<?=$after_assoc['name']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['SocialNameErr'])) {
											echo "<style>.SocialNameErr{border:1px solid red;}</style>";
											echo $_SESSION['SocialNameErr'];
											unset($_SESSION['SocialNameErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="icon">Social Icon: <span class="text-danger">*</span> </label>
									<!-- <input type="text" class="form-control" id="icon" placeholder="fab fa-facebook" name="icon"> -->
									<select class="form-control SocialChooseErr" name="icon" id="icon" >
										<option value="<?=$after_assoc['icon']?>">Select Social</option>
										<option value="fab fa-facebook-f">Facebook</option>
										<option value="fab fa-linkedin-in">LinkedIn</option>
										<option value="fab fa-twitter">Twitter</option>
										<option value="fab fa-instagram">Instagram</option>
										<option value="fab fa-pinterest">Pinterest</option>
										<option value="fab fa-github">GitHub</option>
										<option value="fab fa-youtube">Youtube</option>
									</select>
									<span class="text-danger">
										<?php
										if (isset($_SESSION['SocialChooseErr'])) {
											echo "<style>.SocialChooseErr{border:1px solid red;}</style>";
											echo $_SESSION['SocialChooseErr'];
											unset($_SESSION['SocialChooseErr']);
										}
										?>
									</span>
								</div> 
							</div>
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-12">
								<div class="form-group">
									<label for="link">Social Link: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control SocialLinkErr" id="link" placeholder="www.example.com" name="link" value="<?=$after_assoc['link']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['SocialLinkErr'])) {
											echo "<style>.SocialLinkErr{border:1px solid red;}</style>";
											echo $_SESSION['SocialLinkErr'];
											unset($_SESSION['SocialLinkErr']);
										}
										?>
									</span>
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