<?php

    
     session_start();
     // if(!isset($_SESSION['uid'])) {
     //   header("Location: login.php"); } 
    //    else
    
    // if(!isset($_SESSION['id'])){
    //     echo "<script>alert('Please login first!'); window.top.location='login.php';</script>";

    
   
    // }
 
include("config.php");
    if(isset($_SESSION['u_id'])){
        $u_id=$_SESSION['u_id'];
        $q1="select * from users where u_id='$u_id'";
        $e1=$link->query($q1);
        $data=$e1->fetch_object();
        $fname=" ".$data->fname;

       
}
$q2 = mysqli_query($link, "SELECT * FROM `eventlist` WHERE e_reg_lastdate > now() ORDER BY e_reg_lastdate ASC;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Notifier</title>

    <!--=== Favicon ===-->
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>
   
</head>
<body>
<header class="site-header">
    <!--== Header Area End ==-->
    <?php include('includes/header.php');?>

    <!--== Header Area End ==-->
    
    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper" style="margin-bottom: 1px;">
           <div class="swiper-slide" data-date="<?php if($res=mysqli_fetch_array($q2)){echo "{$res['e_reg_lastdate']}"; ?>" style="background: url('images/header-bg.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title"><?php $rd="single-event.php?e_id=" . $res['e_id']; echo "{$res['e_name']}";} ?> is here<br>Get your ticket now! <?php echo "<a class='btn gradient-bg' style='float: right; margin-top: 25px;' href='$rd'>Book Now</a></h2>"; ?>
                                </div><!--- .entry-header -->

                                <!-- <div class="entry-footer">
                                    <a class="btn gradient-bg" href="single-event.php">Book Now</a>
                                </div> --><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="<?php if($res=mysqli_fetch_array($q2)){echo "{$res['e_reg_lastdate']}"; ?>"  style="background: url('images/header-bg.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title"><?php echo "{$res['e_name']}";} ?> is here. <br>Get your ticket now! <?php $rd1="single-event.php?e_id=" . $res['e_id']; echo"<a class='btn gradient-bg' style='float: right; margin-top: 25px;' href='$rd1'>Book Now</a></h2>";?>
                                </div><!--- .entry-header -->

                                <
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="<?php if($res=mysqli_fetch_array($q2)){echo "{$res['e_reg_lastdate']}"; ?>" style="background: url('images/header-bg.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title"><?php echo "{$res['e_name']}";} ?> is here. <br>Get your ticket now! <?php $rd2="single-event.php?e_id=" . $res['e_id']; echo"<a class='btn gradient-bg' style='float: right; margin-top: 25px;' href='$rd2'>Book Now</a></h2>";?>
                                </div><!--- .entry-header -->

                                
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .swiper-container -->
</header><!-- .site-header -->

<!-- <div class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="images/logo-2.png" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">What is Event Notifier and why choose our services?</h2>
                </header>

                <div class="entry-content">
                    <p>Our Website Solves the annoying problem of visiting different sites to check about events.
It provides estimation of points to students get by participating.
One platform for registration , payment, notification.
</p>
                </div>

                <footer class="entry-footer">
                    <a href="#" class="btn gradient-bg">Read More</a>
                    <a href="#" class="btn dark">Register Now</a>
                </footer>
            </div>
        </div>
    </div>
</div>
 -->
<div class="homepage-featured-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                    <div class="event-content-wrap positioning-event-1">
                        <figure>
                            <a href="#"><img src="images/unnamed.png" alt="1" style="height: 364px;"></a>
                        </figure>

                       <!--  <header class="entry-header">
                            <h3 class="entry-title">Udaan 19</h3>

                            <div class="posted-date">March 13</div>
                        </header> -->
                    </div>

                    <div class="event-content-wrap positioning-event-2">
                        <figure>
                            <a href="#"><img src="images/ad.png" alt=""></a>
                        </figure>

                       <!--  <header class="entry-header">
                            <h3 class="entry-title">Spectrum 19</h3>

                            <div class="posted-date">March 21</div>
                        </header> -->
                    </div>

                    <div class="event-content-wrap positioning-event-3">
                        <figure>
                            <a href="#"><img src="images/imaze.png" alt=""></a>
                        </figure>

                       <!--  <header class="entry-header">
                            <h3 class="entry-title">IMAZE</h3>

                            <div class="posted-date">May 29</div>
                        </header> -->
                    </div>

                    <div class="event-content-wrap positioning-event-4 half">
                        <figure>
                            <a href="#"><img src="images/q2e.png" alt=""></a>
                        </figure>
                    </div>

                     <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            <a href="#"><img src="images/icon.png" alt=""></a>
                        </figure>
                    </div>
 
                    <!-- <div class="event-content-wrap positioning-event-6 half">
                        <figure>
                            <a href="#"><img src="images/q2e.png" alt=""></a>
                        </figure>
                    </div> -->
 
                    <!-- <div class="event-content-wrap positioning-event-7">
                        <figure>
                            <a href="#"><img src="images/90.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Udaan Cultural Night</h3>

                            <div class="posted-date">August 28</div>
                        </header>
                    </div>
 -->
                    <div class="event-content-wrap positioning-event-8">
                        <figure>
                            <a href=""><img src="images/felicific.png" alt="1"></a>
                        </figure>

                        <!-- <header class="entry-header">
                            <h3 class="entry-title">FELICIFIC</h3>

                            <div class="posted-date">Feb 20</div>
                        </header> -->
                    </div>

                    <div class="event-content-wrap positioning-event-9">
                        <figure>
                            <a href="#"><img src="images/smoke.png" alt=""></a>
                        </figure>

                        <!-- <header class="entry-header">
                            <h3 class="entry-title">Know How 19</h3>

                            <div class="posted-date">Jan 5</div>
                        </header> -->
                    </div>

                   <!--  <div class="event-content-wrap positioning-event-10 half">
                        <figure>
                            <a href="#"><img src="images/ad.png" alt=""></a>
                        </figure>
                    </div> -->

                    <div class="event-content-wrap positioning-event-11 half">
                        <figure>
                            <a href="#"><img src="images/af.png" alt=""></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title">Our next events</h2>
                <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next1.jpg" alt="1"></a>

                        <div class="event-rating">8.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">U2 Concert in Detroitt</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus.</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="1.php">Buy tickets</a>
                    </footer>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next1.jpg" alt="1"></a>

                        <div class="event-rating">7.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">TED Talk California</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Eget lacus at mauris sagittis varius. Etiam ut ven enatis dui. Nullam tellus risus, pellentesque.</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="#">Buy tickets</a>
                    </footer>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next1.jpg" alt="1"></a>

                        <div class="event-rating">9.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Ultra Music Miami</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facili.</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="#">Buy tickets</a>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<!-- <div class="homepage-regional-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Events in Anand</h2>

                    <div class="select-location">
                        <select>
                            <option>Anand</option>
                            <option>Surat</option>
                            <option>Vadodara</option>
                        </select>
                    </div>
                </header>

                <div class="swiper-container homepage-regional-events-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-1.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->


<!-- <div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">Subscribe to our newsletter to get the latest trends & news</h2>
                    <p>Join our database NOW!</p>
                </header>

                <div class="newsletter-form">
                    <form class="flex flex-wrap justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" placeholder="Name">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" placeholder="Your e-mail">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--== Footer Area Start ==-->

<?php include('includes/footer.php');?>

<!--== Footer Area End ==-->

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>


</body>
</html>