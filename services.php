<?php
    require 'inc/header.php';
?>

<!--================ Start Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                    <a href="index.php">Home</a>
                    <a href="services.php">About</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->
<!--================ Start Features Area =================-->
<section class="features_area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title ">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s">service offers </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        Is give may shall likeness made yielding spirit a itself togeth created 
                        after sea <br> is in beast beginning signs open god you're gathering ithe
                    </p>
                </div>
            </div>
        </div>
        <div class="row feature_inner">
            <?php foreach ($services_query as $key => $value): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="feature_item wow fadeInLeft" data-wow-delay="0.6s">
                        <div style="font-size: 65px; color: #FF3D4F;"><?= $value['icon']?></div>
                        <h3 class="pt-3 text-uppercase"><?= $value['title']?></h3>
                        <p style="text-align: left; line-height: 35px;"><?= $value['description']?></p>
                    </div>
                </div>
            <?php endforeach ?>
            
        </div>
    </div>
</section>
<!--================ End Features Area =================-->


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
<?php
    require 'inc/footer.php'
?>