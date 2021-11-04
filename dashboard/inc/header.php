<?php
require 'session.php';
require '../db.php';

$file_url = $_SERVER['PHP_SELF'];
$url_explode = explode('/',$file_url);
$current_page_location = end($url_explode);

$user_session_id = $_SESSION['id'];
$user_select = "SELECT * FROM users WHERE id = '$user_session_id'";
$select_user_query = mysqli_query($db, $user_select);
$after_assoc_query = mysqli_fetch_assoc($select_user_query);

$totaluser_count_select = "SELECT * FROM users";
$totaluser_count_query = mysqli_query($db, $totaluser_count_select);
$totaluser_count = mysqli_num_rows($totaluser_count_query);

$employeeuser_count_select = "SELECT * FROM users WHERE role = '2'";
$employeeuser_count_query = mysqli_query($db, $employeeuser_count_select);
$employee_user_count = mysqli_num_rows($employeeuser_count_query);

$simple_user_count_select = "SELECT * FROM users WHERE role = '1'";
$simple_user_count_query = mysqli_query($db, $simple_user_count_select);
$simple_user_count = mysqli_num_rows($simple_user_count_query);

$user_trush_select = "SELECT * FROM users WHERE status = 'deactive'";
$user_trush_query = mysqli_query($db, $user_trush_select);
$user_trush_count = mysqli_num_rows($user_trush_query);

$banner_trush_select = "SELECT * FROM home_banner WHERE status = 'deactive'";
$banner_trush_query = mysqli_query($db, $banner_trush_select);
$banner_trush_count = mysqli_num_rows($banner_trush_query);

$socials_trush_select = "SELECT * FROM socials WHERE status = 'deactive'";
$socials_trush_query = mysqli_query($db, $socials_trush_select);
$socials_trush_count = mysqli_num_rows($socials_trush_query);

$settings_trush_select = "SELECT * FROM general_settings WHERE status = 'deactive'";
$settings_trush_query = mysqli_query($db, $settings_trush_select);
$settings_trush_count = mysqli_num_rows($settings_trush_query);

$about_trush_select = "SELECT * FROM about WHERE status = 'deactive'";
$about_trush_query = mysqli_query($db, $about_trush_select);
$about_trush_count = mysqli_num_rows($about_trush_query);

$qualification_trush_select = "SELECT * FROM qualification WHERE status = 'deactive'";
$qualification_trush_query = mysqli_query($db, $qualification_trush_select);
$qualification_trush_count = mysqli_num_rows($qualification_trush_query);

$services_trush_select = "SELECT * FROM services WHERE status = 'deactive'";
$services_trush_query = mysqli_query($db, $services_trush_select);
$services_trush_count = mysqli_num_rows($services_trush_query);

$portfolio_trush_select = "SELECT * FROM portfolio WHERE status = 'deactive'";
$portfolio_trush_query = mysqli_query($db, $portfolio_trush_select);
$portfolio_trush_count = mysqli_num_rows($portfolio_trush_query);

$quote_trush_select = "SELECT * FROM client_quotes WHERE status = 'deactive'";
$quote_trush_query = mysqli_query($db, $quote_trush_select);
$quote_trush_count = mysqli_num_rows($quote_trush_query);

$contact_trush_select = "SELECT * FROM contact WHERE status = 'deactive'";
$contact_trush_query = mysqli_query($db, $contact_trush_select);
$contact_trush_count = mysqli_num_rows($contact_trush_query);

$massage_count = "SELECT * FROM messages WHERE status = '1'";
$massage_query = mysqli_query($db,$massage_count);
$massage_after_assoc = mysqli_num_rows($massage_query);

$massage_trush_count = "SELECT * FROM messages WHERE status = '3'";
$massage_trush_query = mysqli_query($db,$massage_trush_count);
$massage_trush_after_assoc = mysqli_num_rows($massage_trush_query);


$sub_count_select = "SELECT * FROM subscribers";
$sub_count_query = mysqli_query($db, $sub_count_select);
$total_sub_count = mysqli_num_rows($sub_count_query);

$total_massage_count = "SELECT * FROM messages";
$total_massage_query = mysqli_query($db,$total_massage_count);
$total_massage = mysqli_num_rows($total_massage_query);

$read_massage_count = "SELECT * FROM messages WHERE status = '2'";
$read_massage_query = mysqli_query($db,$read_massage_count);
$read_massage = mysqli_num_rows($read_massage_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Starlight">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/starlight">
  <meta property="og:title" content="Starlight">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Zillur-Web Admin Pannel</title>

  <!-- vendor css -->
  <link href="../assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="../assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" href="../fontawesome-free-6.0.0-beta2-web/css/all.css">

  <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">


  <script src="../assets/lib/jquery/jquery.js"></script>
  <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Starlight CSS -->
  <link rel="stylesheet" href="../assets/css/starlight.css">


</head>

<body>

  <!-- ########## START: LEFT PANEL ########## -->
  <div class="sl-logo"><a href="dashboard.php"><i class="icon ion-android-star-outline"></i> ZILLUR-WEB</a></div>
  <div class="sl-sideleft">
    <div class="input-group input-group-search">
      <input type="search" name="search" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn"><i class="fa fa-search"></i></button>
      </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
     <a href="../index.php" target="_blank" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon fas fa-globe tx-22"></i>
        <span class="menu-item-label">Live Preview</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <a href="dashboard.php" class="sl-menu-link <?= $current_page_location == 'dashboard.php' ? 'active' : ''?>">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <?php if ($after_assoc_query['role'] == 3): ?>
      <a href="users.php" class="sl-menu-link <?= $current_page_location == 'users.php' ? 'active' : ''?>">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-contact-outline tx-22"></i>
          <span class="menu-item-label">Users</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <?php endif ?><!-- sl-menu-link -->
      <?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
      <a href="general-settings.php" class="sl-menu-link <?= $current_page_location == 'general-settings.php' ? 'active' : ''?>">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-gear-outline tx-22"></i>
          <span class="menu-item-label">General Settings</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
    <?php endif ?>
    <?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
    <a href="home-banner.php" class="sl-menu-link <?= $current_page_location == 'home-banner.php' ? 'active' : ''?>">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-22"></i>
        <span class="menu-item-label">Banner</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
  <?php endif ?>
  <?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
  <a href="socials.php" class="sl-menu-link <?= $current_page_location == 'socials.php' ? 'active' : ''?>">
    <div class="sl-menu-item">
      <i style="padding-left: -2px;" class="far fa-star tx-22"></i>
      <span class="menu-item-label">Social Icon</span>
    </div><!-- menu-item -->
  </a><!-- sl-menu-link -->
<?php endif ?>
<?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
<a href="about.php" class="sl-menu-link <?= $current_page_location == 'about.php' ? 'active' : ''?>">
  <div class="sl-menu-item">
    <i style="font-size: 20px;" class=" mr-1 menu-item-icon icon far fa-address-card"></i>
    <span class="menu-item-label">About</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<?php endif ?>
<?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
<a href="qualification.php" class="sl-menu-link <?= $current_page_location == 'qualification.php' ? 'active' : ''?>">
  <div class="sl-menu-item">
    <i style="font-size: 20px;" class=" mr-1 menu-item-icon icon fas fa-user-graduate"></i>
    <span class="menu-item-label">Qualification</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<?php endif ?>
<?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
<a href="services.php" class="sl-menu-link <?= $current_page_location == 'services.php' ? 'active' : ''?>">
  <div class="sl-menu-item">
    <i style="font-size: 20px;" class=" mr-1 menu-item-icon icon fab fa-servicestack"></i>
    <span class="menu-item-label">Services</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<?php endif ?>
<?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
<a href="portfolio.php" class="sl-menu-link <?= $current_page_location == 'portfolio.php' ? 'active' : ''?>">
  <div class="sl-menu-item">
    <i style="font-size: 20px;" class=" mr-1 menu-item-icon icon fas fa-briefcase"></i>
    <span class="menu-item-label">Portfolio</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<?php endif ?>
<?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
<a href="quote.php" class="sl-menu-link <?= $current_page_location == 'quote.php' ? 'active' : ''?>">
  <div class="sl-menu-item">
    <i style="font-size: 20px;" class=" mr-1 menu-item-icon icon far fa-comment-dots"></i>
    <span class="menu-item-label">Client Quote</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<?php endif ?>
<?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
<a href="subscribers.php" class="sl-menu-link <?= $current_page_location == 'subscribers.php' ? 'active' : ''?>">
  <div class="sl-menu-item">
    <i style="font-size: 20px;" class=" mr-1 menu-item-icon icon far fa-play-circle"></i>
    <span class="menu-item-label">Subscribers</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<?php endif ?>
<?php if (($after_assoc_query['role'] == 3) or ($after_assoc_query['role'] == 2)): ?>
<a href="contact.php" class="sl-menu-link <?= $current_page_location == 'contact.php' ? 'active' : ''?>">
  <div class="sl-menu-item">
    <i style="font-size: 20px;" class=" mr-1 menu-item-icon icon far fa-address-card"></i>
    <span class="menu-item-label">Contact</span>
  </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<?php endif ?>
<?php if ($after_assoc_query['role'] == 3): ?>
  <a href="" class="sl-menu-link <?php if($current_page_location=='trush-users.php' || $current_page_location=='trush-settings.php' || $current_page_location=='trush-banner.php'){echo 'active';} ?>">
    <div class="sl-menu-item">
      <i class="menu-item-icon far fa-trash-alt tx-20"></i>
      <span class="menu-item-label">Trash</span>
      <i class="menu-item-arrow fa fa-angle-down"></i>
    </div><!-- menu-item -->
  </a><!-- sl-menu-link -->
  <ul class="sl-menu-sub nav flex-column">
    <li class="nav-item"><a href="trush-users.php" class="nav-link">Users (<?=$user_trush_count?>)</a></li> 
    <li class="nav-item"><a href="trush-settings.php" class="nav-link">Settings (<?=$settings_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-banner.php" class="nav-link">Banner (<?=$banner_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-socials.php" class="nav-link">Socials (<?=$socials_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-about.php" class="nav-link">About (<?=$about_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-qualification.php" class="nav-link">Qualification (<?=$qualification_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-services.php" class="nav-link">Services (<?=$services_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-portfolio.php" class="nav-link">Portfolios (<?=$portfolio_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-quote.php" class="nav-link">Quote (<?=$quote_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-contact.php" class="nav-link">Contact (<?=$contact_trush_count?>)</a></li>
    <li class="nav-item"><a href="trush-message.php" class="nav-link">Massages (<?=$massage_trush_after_assoc?>)</a></li>
  </ul><!-- sl-menu-link -->
<?php endif ?>
</div><!-- sl-sideleft-menu -->

<br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
  <div class="sl-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
  </div><!-- sl-header-left -->
  <div class="sl-header-right">
    <nav class="nav">
      <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name"><?= $_SESSION['name']?></span>
          <img style="width: 35px; height: 35px;" src="upload/<?= $after_assoc_query['profile_image']?>" class="wd-32 rounded-circle" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-200">
          <ul class="list-unstyled user-profile-nav">
            <li><a href="profile-edit.php"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
            <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
            <li><a href="change-password.php"><i class="icon fa fa-lock"></i> Change Password</a></li>
            <li><a href="../logout.php"><i class="icon ion-power"></i> Logout</a></li>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>
    <?php if ($after_assoc_query['role'] == 3): ?>
      <div class="navicon-right">
        <a id="btnRightMenu" href="" class="pos-relative">
          <i class="icon ion-ios-bell-outline"></i>
          <!-- start: if statement -->
          <?php if ($massage_after_assoc): ?>
            <span class="square-8 bg-danger"></span>
          <?php endif ?>
          <!-- end: if statement -->
        </a>
      </div><!-- navicon-right -->
    <?php endif ?>
  </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="sl-sideright">
  <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages ( <?=$massage_after_assoc;?> )</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
    </li>
  </ul><!-- sidebar-tabs -->

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
      <div class="media-list">
        <!-- loop starts here -->
        <?php if ($massage_after_assoc > 0) {
          foreach ($massage_query as $key => $message) { ?>
            <a href="message-status.php?id=<?=$message['id']?>" class="media-list-link">
              <div class="media">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13"><?=$message['name']?></p>
                  <span class="d-block tx-11 tx-gray-500"><?=$message['date_time']?></span>
                  <p class="tx-13 mg-t-10 mg-b-0"><?=$message['message']?></p>
                </div>
              </div><!-- media -->
            </a>
            <?php
          }
        }
        else{
          echo "<p class='text-info text-center'>Messages Not Available</p>";
        }
        ?>
        <!-- loop ends here -->
      </div><!-- media-list -->
      <div class="pd-15">
        <a href="message.php" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
      </div>
    </div><!-- #messages -->

    <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
      <div class="media-list">
         <span class="text-center text-danger">This Futures are not available</span>
        
        <!-- <a href="" class="media-list-link read">
          <div class="media pd-x-20 pd-y-15">
            <img src="../assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
            <div class="media-body">
              <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
              <span class="tx-12">October 03, 2017 8:45am</span>
            </div>
          </div>
       </a> --> 
      </div><!-- media-list -->
    </div><!-- #notifications -->

  </div><!-- tab-content -->
</div><!-- sl-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->
