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
                    <a href="about.php">About</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->
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