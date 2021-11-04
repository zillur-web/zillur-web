<?php
require 'inc/header.php'
?>
<!--================ Start Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Contact Us</h2>
                <div class="page_link">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6><?=$contact_assoc['city']?></h6>
                        <p><?=$contact_assoc['address']?></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#"><?=$contact_assoc['phone']?></a></h6>
                        <p><?=$contact_assoc['o_time']?></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#"><?=$contact_assoc['o_email']?></a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="dashboard/message-post.php" method="post" >
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control nameErr" id="name" name="name" placeholder="Enter your name">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION['nameErr'])) {
                                    echo '<style>.nameErr{border:1px solid red !important;}</style>';
                                    echo $_SESSION['nameErr'];
                                    unset($_SESSION['nameErr']);
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control emailErr" id="email" name="email" placeholder="Enter email address">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION['emailErr'])) {
                                    echo '<style>.emailErr{border:1px solid red !important;}</style>';
                                    echo $_SESSION['emailErr'];
                                    unset($_SESSION['emailErr']);
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control subjectErr" id="subject" name="subject" placeholder="Enter Subject">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION['subjectErr'])) {
                                    echo '<style>.subjectErr{border:1px solid red !important;}</style>';
                                    echo $_SESSION['subjectErr'];
                                    unset($_SESSION['subjectErr']);
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control messageErr" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION['messageErr'])) {
                                    echo '<style>.messageErr{border:1px solid red !important;}</style>';
                                    echo $_SESSION['messageErr'];
                                    unset($_SESSION['messageErr']);
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="primary_btn">
                            <span>Send Message</span>
                        </button>
                    </div>
                    <div class="col text-center">
                        <span class=" text-success  lead">
                            <?php
                            if (isset($_SESSION['Success'])) {
                                echo $_SESSION['Success'];
                                unset($_SESSION['Success']);
                            }
                            ?>
                        </span>
                        <span class="text-center text-danger lead">
                            <?php
                            if (isset($_SESSION['UnSuccess'])) {
                                echo $_SESSION['UnSuccess'];
                                unset($_SESSION['UnSuccess']);
                            }
                            ?>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mapBox">
                    <?=$contact_assoc['location']?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

<?php
require 'inc/footer.php'
?>