<?php
session_start();
include("config.php");  

if(isset($_SESSION['u_id'])) {
        $u_id=$_SESSION['u_id'];
      $s1="select * from users where u_id='$u_id'";
        $b1=$link->query($s1);
        $data=$b1->fetch_object();
        $fname=" ".$data->fname;
    
    }
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
</head>
<body class="contact-page">
<header class="site-header">

    <?php include('includes/header.php');?>
   
    <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">About Us</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">New York</h2>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">667889 Madison Avenue, no24-56</li>
                        <li class="contact-number">665 5667 8899 661</li>
                        <li class="contact-email"><a href="#">office@yourbusiness.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">Miami</h2>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">122344 Island Str, no23</li>
                        <li class="contact-number">665 5667 8899 661</li>
                        <li class="contact-email"><a href="#">office@yourbusiness.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">Los Angeles</h2>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">667889 Long Avenue, no24-56</li>
                        <li class="contact-number">665 5667 8899 661</li>
                        <li class="contact-email"><a href="#">office@yourbusiness.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
</div>

<div class="contact-page-map">
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div> -->
 <!-- <a href="#"><img src="images/logo.png" alt=""></a> -->
<div class="entry-content" style="margin-left:200px; margin-right:200px;margin-top:100px;margin-bottom:200px;">
                    <p> <h4 class="entry-title">Our Website Solves the annoying problem of visiting different sites to check about events.
It provides estimation of points to students get by participating.
One platform for registration , payment, notification.
<br>

<br>
Contact Us: <span style="padding-left:620px;">+91 123456789</span><br>
Email:<span style="padding-left:620px;">admin@enotifier.com</span>
</h4>
</p>
 </div>

<!-- <div class="container">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-6">
            <div class="contact-form">
                <form class="row" method="post">
                    <div class="col-12 col-md-12"><input type="text" name="uname" placeholder="Username"  required></div>
                     <div class="col-12 col-md-12"><i><input type="password" placeholder="Password" name="password" style="width: 100%; height:50px; margin-bottom: 25px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;
color: #232127;padding: 14px 22px; font-style: italic;"></i></div>
                    <div class="col-12 col-md-4"><input type="text" placeholder="Subject"></div> -->
                    <!-- <div class="col-12"><textarea placeholder="Message" rows="8"></textarea></div>
                
                    <a href="#" style="margin-left: 224px;">Forgot Password?</a>
                    <p style="margin-left:185px;">Don't have an account? <a href="register.php">Sign Up</a></p>
                   
                    <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="login" name="login"></div>
                    <!-- <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Register"></div>
                </form>
            </div>
        </div>
    </div>
</div> --> 

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
</div>
 -->
<?php include('includes/footer.php');?>



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