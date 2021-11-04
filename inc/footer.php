
<!--================Footer Area =================-->
<footer class="footer_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="footer_top flex-column">
					<div class="footer_logo">
						<a href="index.php">
							<img src="img/<?=$settings_assoc['logo'] ;?>" alt="logo-here">
						</a>
						<h4>Follow Me</h4>
					</div>
					<div class="banner-social text-center py-2" style="">
						<ul>
							<?php foreach ($socials_query as $key => $value): ?>
								<li><a  target="_blank" href="<?= $value['link']?>"><i class="<?= $value['icon']?>"></i></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row footer_bottom justify-content-center">
			<p class="col-lg-8 col-sm-12 footer-text">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <?=$settings_assoc['website_title'] ;?> 
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script defer src="//use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>