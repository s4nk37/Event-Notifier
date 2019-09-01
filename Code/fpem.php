<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include("config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
 //$username="";
if(isset($_REQUEST['submit'])){
        $h=$_POST['email'];
        $q1="select * from eventmanager  where em_email='$h'";
       // if ($h=''){
        $e1=$link->query($q1);
        $data=$e1->fetch_object();
        // $count=mysqli_num_rows($e1);
        // $email=" ".$data->email;
        //$username=" ".$data->username;
        

        // $sql = "SELECT * FROM `users` WHERE email = '$h'";
        // $res = mysqli_query($link, $e1);
        $count = mysqli_num_rows($e1);

        if($count == 1){
        $password=" ".$data->em_password;
        $fname=" ".$data->em_name;
        
   

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try{
                
                include("connect.php");

                //Recipients
                
                $mail->addAddress($h, $fname);     // Add a recipient
               

                $mail->isHTML(true);                              // Set email format to HTML
                $mail->Subject = 'Recovered Password';
                $mail->Body    = "Your Password is <b>$password<b>";
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
               // echo 'Message has been sent';
                header("location: em.php");
                } catch (Exception $e) {
                    echo ' ', $mail->ErrorInfo;
                }
    }else{
        echo "<script>alert('Email is not registered!'); window.top.location='login.php';</script>";
    }
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
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php">About us</a></li>
                            <li><a href="events.php">Events</a></li>
                            <!-- <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li> -->
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <a class="btn gradient-bg" href="login.php">Login/Signup</a>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Forgot Password</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->



<div class="container">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-6">
            <div class="contact-form">
                <form class="row" method="post">
                    <div class="col-12 col-md-12"><input type="text" name="email" placeholder="Enter your Email"  required></div>
                     <!-- <div class="col-12 col-md-12"><i><input type="password" placeholder="Password" name="password" style="width: 100%; height:50px; margin-bottom: 25px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;
color: #232127;padding: 14px 22px; font-style: italic;"></i></div> -->
                    <!-- <div class="col-12 col-md-4"><input type="text" placeholder="Subject"></div> -->
                    <!-- <div class="col-12"><textarea placeholder="Message" rows="8"></textarea></div> -->
                
                    <!-- <a href="#" style="margin-left: 224px;">Forgot Password?</a> -->
                    <p style="margin-left:140px;"> An Email will be sent to you containing Password. </p>
                    <p style="margin-left:185px;">Don't have an account? <a href="emr.php">Sign Up</a></p>
                   
                    <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Send Email" name="submit"></div>
                    <!-- <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Register"></div> -->
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>

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