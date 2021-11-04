<?php
	require 'inc/header.php'
?>
<!--================ Start Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-center">
				<h2>Portfolio</h2>
				<div class="page_link">
					<a href="index.php">Home</a>
					<a href="portfolio.php">Portfolio</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Banner Area =================-->


<!--================Start Portfolio Area =================-->
<section class="portfolio_area" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main_title text-left pt-5">
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
				<div class="main_title">
					<h2 class="wow fadeInUp" data-wow-delay="0.2s">client say about me</h2>
					<p class="wow fadeInUp" data-wow-delay="0.4s">Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
					beginning signs open god you're gathering ithe</p>
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
						Bearing Void gathering light light his eavening unto dont afraid. 
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