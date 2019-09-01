<?php
include("config.php");
if(isset($_SESSION['a_name'])) {
      header("Location:admin/index.php"); } 

 
    if(isset($_POST['login'])){
        
        $admin=$_REQUEST['admin'];
        $password=$_REQUEST['password'];
        $q1="select * from admin where a_name='$admin' && a_password='$password'";
        $e1=$link->query($q1);
        if($e1->num_rows > 0){
            session_start();
            $data=$e1->fetch_object();
            $_SESSION['a_name']=$data->a_name;
            header("Location:admin/index.php");
        }
        else{
            echo "<script>alert('Error Occured!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Notifier || Admin</title>

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
                            <li><a href="inedx.php">Home</a></li>
                            <li><a href="aboutus.php">About us</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Admin Login</h1>
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
                    <div class="col-12 col-md-12"><input type="text" name="admin" placeholder="Username"  required></div>
                     <div class="col-12 col-md-12"><i><input type="password" placeholder="Password" name="password" style="width: 100%; height:50px; margin-bottom: 25px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;color: #232127;padding: 14px 22px; font-style: italic;"></i></div>
                    <a href="login.php" style="margin-left: 200px;">Are you a user? Login Here</a>
                    <!-- <p style="margin-left:185px;">Don't have an account? <a href="register.php">Sign Up</a></p> -->
                   
                    <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="login" name="login"></div>
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