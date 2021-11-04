<?php
require 'inc/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM contact  WHERE id = $id";
$select_query = mysqli_query($db,$select);
$after_assoc = mysqli_fetch_assoc($select_query);

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
	<nav class="breadcrumb sl-breadcrumb">
		<a class="breadcrumb-item " href="dashboard.php">ZILLUR-WEB</a>
		<a class="breadcrumb-item active" href="add-contact.php">Add Contact</a>
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
				<h3 style="font-size: 25px;" class="card-body-title text-center text-info pb-5">Add Contact</h3>
				<form action="contact-edit-post.php" method="POST" enctype="multipart/form-data">
					<div class="form-layout">
						<div class="row mg-b-25">
							<div class="col-lg-6"><!-- col-6 -->
								<div class="form-group">
									<input type="hidden" name="id" value="<?=$after_assoc['id']?>">
									<label for="address">Office Address: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control addressErr" id="address" placeholder="Enter Your Office Address" name="address" value="<?=$after_assoc['address']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['addressErr'])) {
											echo "<style>.addressErr{border:1px solid red;}</style>";
											echo $_SESSION['addressErr'];
											unset($_SESSION['addressErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="city">City & Country: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control cityErr" id="city" placeholder="Enter Office Address City & Country" name="city" value="<?=$after_assoc['city']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['cityErr'])) {
											echo "<style>.cityErr{border:1px solid red;}</style>";
											echo $_SESSION['cityErr'];
											unset($_SESSION['cityErr']);
										}
										?>
									</span>
								</div> 
							</div>
						</div><!-- row -->
						<div class="row mg-b-25">
							<div class="col-lg-6"><!-- col-6 -->
								<div class="form-group">
									<label for="phone">Phone: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control phoneErr" id="phone" placeholder="Enter Office Phone Number" name="phone" value="<?=$after_assoc['phone']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['phoneErr'])) {
											echo "<style>.phoneErr{border:1px solid red;}</style>";
											echo $_SESSION['phoneErr'];
											unset($_SESSION['phoneErr']);
										}
										?>
									</span>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="time">Office Time: <span class="text-danger">*</span> </label>
									<input type="text" class="form-control timeErr" id="time" placeholder="Enter Office Time" name="time" value="<?=$after_assoc['o_time']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['cityErr'])) {
											echo "<style>.cityErr{border:1px solid red;}</style>";
											echo $_SESSION['cityErr'];
											unset($_SESSION['cityErr']);
										}
										?>
									</span>
								</div> 
							</div>
						</div><!-- row -->
						<div class="row mg-b-25"><!-- row -->
							<div class="col-lg-6">
								<div class="form-group">
									<label for="email">Office E-mail: <span class="text-danger">*</span> </label>
									<input type="email" class="form-control emailErr" id="email" placeholder="Enter Office E-mail Address" name="email" value="<?=$after_assoc['o_email']?>">
									<span class="text-danger">
										<?php
										if (isset($_SESSION['emailErr'])) {
											echo "<style>.emailErr{border:1px solid red;}</style>";
											echo $_SESSION['emailErr'];
											unset($_SESSION['emailErr']);
										}
										?>
									</span>
								</div> 
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="location">Google Location: <span class="text-danger">*</span> </label>
									<textarea class="form-control locationErr" id="location" name="location" rows="5" placeholder="Enter Embed A Map" value="<?=$after_assoc['location']?>"></textarea>
									<span class="text-danger">
										<?php
										if (isset($_SESSION['locationErr'])) {
											echo "<style>.locationErr{border:1px solid red;}</style>";
											echo $_SESSION['locationErr'];
											unset($_SESSION['locationErr']);
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