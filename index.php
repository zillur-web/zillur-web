<?php
require 'inc/header.php';
?>

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
	<div class="banner_inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="banner_content">
						<h3 class="text-uppercase wow fadeInUp" data-wow-delay="0.2s" style="color: #854fee !important">Hello</h3>
						<h1 style="letter-spacing: 0.2px; color: #FF3D4F !important;" class="text-uppercase wow fadeInUp" data-wow-delay="0.4s"><span style="color: #3b3e5a !important">I am</span> <?=$home_banner_assoc['owner_name'] ;?></h1>
						<h5 class="text-uppercase wow fadeInUp" data-wow-delay="0.6s"><?=$home_banner_assoc['tagline'] ;?></h5>
						<div style="margin-bottom: 40px;" class="banner-social d-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
							<ul>
								<?php foreach ($socials_query as $key => $value): ?>
									<li><a  target="_blank" href="<?= $value['link']?>"><i class="<?= $value['icon']?>"></i></a></li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="home_right_img wow fadeInUp" data-wow-delay="0.4s">
						<img class="" src="img/banner/<?=$home_banner_assoc['banner_image'] ;?>" alt=" banner img">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start About Us Area =================-->
<section class="about_area section_gap">
	<div class="container">
		<div class="row justify-content-start align-items-center">
			<div class="col-lg-5">
				<div class="about_img">
					<img class="img-fluid wow fadeInUp" data-wow-delay="0.6s" src="img/about/<?=$about_assoc['image'];?>" alt="about-us-image">
				</div>
			</div>

			<div class="offset-lg-1 col-lg-5">
				<div class="main_title text-left">
					<h2 class="wow fadeInUp" data-wow-delay="0.2s"><?=$about_assoc['title'];?></h2>
					<p class="wow fadeInUp" data-wow-delay="0.4s"><?=$about_assoc['description'];?></p>
					<a class="primary_btn wow fadeInUp" data-wow-delay="0.6s" target="_blank" href="<?=$about_assoc['link'];?>"><span>Download CV</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End About Us Area =================-->

<!--================ Srart Brand Area =================-->
<section class="brand_area section_gap_bottom py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class=" col-lg-6 col-md-6">
				<div class="client-info">
					<div class="d-flex mb-50">
						<span class="lage wow fadeInLeft" data-wow-delay="0.2s" style="color: #FF3D4F !important;">0<?=$qualification_assoc['experience'];?></span>
						<span class="smll wow fadeInLeft" data-wow-delay="0.4s">Years Experience Working</span>
					</div>
					<div class="call-now d-flex wow fadeInLeft" data-wow-delay="0.6s">
						<div>
							<span class="fa fa-phone"></span>
						</div>
						<div class="ml-15">
							<p style="color: #FF3D4F !important;">call us now</p>
							<h3><?=$qualification_assoc['phone'];?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
				<h3 style="text-transform: uppercase;font-weight: bold;color: #000;font-size: 24px;
				line-height: 1; " class="py-4">Qualifications:</h3>
				<?php foreach ($qualification_query as $key => $value): ?>
					<!-- Education Item -->
					<div class="education">
						<div class="year"><?=$value['year'];?></div>
						<div class="line"></div>
						<div class="location">
							<span><?=$value['title'];?></span>
							<div class="progressWrapper">
								<div class="progress">
									<div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$value['result'].'%';?>;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Education Item -->

				<?php endforeach ?>

			</div>
		</div>
	</div>
</section>
<!--================ End Brand Area =================-->

<!--================ Start Features Area =================-->
<section class="features_area py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="main_title text-justify-center">
					<h2 class="wow fadeInUp" data-wow-delay="0.2s">service offers </h2>
					<p class="wow fadeInUp" data-wow-delay="0.4s">
						To understand the project needs & requirements it's vital on behalf of me , for that I ask every details to related projects if needed I communicate by video or audio conversations.
					</p>
				</div>
			</div>
		</div>
		<div class="row feature_inner">
			<?php foreach ($services_query as $key => $value): ?>
				<div class="col-lg-4 col-md-6">
					<div class="feature_item wow fadeInLeft p-5" data-wow-delay="0.6s">
						<div style="font-size: 65px; color: #FF3D4F;"><?= $value['icon']?></div>
						<h3 class="pt-3 text-uppercase"><?= $value['title']?></h3>
						<p style="text-align: left; line-height: 28px;"><?= $value['description']?></p>
					</div>
				</div>
			<?php endforeach ?>
			
		</div>
	</div>
</section>
<!--================ End Features Area =================-->

<!--================Start Portfolio Area =================-->
<section class="portfolio_area" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main_title text-left">
					<h2 class="wow fadeInUp" data-wow-delay="0.2s">quality work <br>
					Recently done project </h2>
				</div>
			</div>
		</div>
		<div class="filters portfolio-filter wow fadeInUp" data-wow-delay="0.4s">
			<ul>
				<li class="active" data-filter="*">all</li>
				<li data-filter=".popular">popular</li>
				<li data-filter=".latest"> latest</li>
				<li data-filter=".following">following</li>
				<li data-filter=".upcoming">upcoming</li>
			</ul>
		</div>

		<div class="filters-content">
			<div class="row portfolio-grid justify-content-center wow fadeInRight" data-wow-delay="0.6s">
				<?php foreach ($portfolio_query as $key => $value): ?>
					<div class="col-lg-4 col-md-6 all latest popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/portfolio/<?=$value['featured_image']?>" alt="featured image">
								<div class="overlay"></div>
								<a href="img/portfolio/<?=$value['featured_image']?>" class="img-gal">

									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a class="" style="color: #FF3D4F;" href="<?=$value['link']?>"><?=$value['title']?></a></h4>
								<p style="color: #3b3e5a;"><?=$value['category']?></p>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>
<!--================End Portfolio Area =================-->

<!--================ Start Testimonial Area =================-->
<div class="testimonial_area section_gap_bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="main_title text-justify-center">
					<h2 class="wow fadeInUp" data-wow-delay="0.2s">client say about me</h2>
					<p class="wow fadeInUp" data-wow-delay="0.4s">We are very fortunate to have formed excellent partnerships with many of our clients. And we’ve formed more than just working relationships with them; we have formed true friendships. Here’s what they’re saying about us</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="testi_slider owl-carousel wow fadeInUp" data-wow-delay="0.6s">
				<?php foreach ($quote_query as $key => $value): ?>
					<div class="testi_item">
						<div class="row">
							<div class="col-lg-4">
								<img src="img/testimonials/<?=$value['image']?>" alt="">
							</div>
							<div class="col-lg-8">
								<div class="testi_text">
									<h4><?=$value['name']?></h4>
									<p><?=$value['quote']?></p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<!--================ End Testimonial Area =================-->

<!--================ Start Newsletter Area =================-->
<section class="newsletter_area">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-12">
				<div class="subscription_box text-center">
					<h2 class="text-uppercase text-white wow fadeInUp" data-wow-delay="0.2s">get update from anywhere</h2>
					<p class="text-white wow fadeInUp" data-wow-delay="0.4s">
						All you have to do is submit your valid email. I will contact you. 
					</p>
					<div class="subcribe-form wow fadeInUp" data-wow-delay="0.6s">
						<form action="dashboard/subscribers-post.php" method="POST" class="subscription relative">
							<div class="form-group text-center">
								<input target="_blank" class="emailErr from-control" name="email" placeholder="Email address" type="email">

								<button class="btn primary-btn hover d-inline">Get Started</button>
							</div>
							<div class="text-center">
								<span class="text-light lead">
									<?php 
									if (isset($_SESSION['Success'])) {
										echo $_SESSION['Success'];
										unset($_SESSION['Success']);
									}
									if (isset($_SESSION['UnSuccess'])) {
										echo $_SESSION['UnSuccess'];
										unset($_SESSION['UnSuccess']);
									}
									if (isset($_SESSION['emailErr'])) {
										echo "<style>.emailErr{border:1px solid red;}</style>";
										echo $_SESSION['emailErr'];
										unset($_SESSION['emailErr']);
									}
									?>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Newsletter Area =================-->
<?php
require 'inc/footer.php'
?>