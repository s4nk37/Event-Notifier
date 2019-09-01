<?php

session_start();


if(!isset($_SESSION['u_id'])){
        echo "<script>alert('Please Login First!'); window.top.location='login.php';</script>";
        //header("Location: ../admin.php");
    } 

include("config.php");

    if(isset($_SESSION['u_id'])){
        $u_id=$_SESSION['u_id'];
        $q1="select * from users where u_id='$u_id'";
        $e1=$link->query($q1);
        $data=$e1->fetch_object();
        $fname=" ".$data->fname;
        $lname=" ".$data->lname;
        $email="".$data->email;}

// $result = mysqli_query($link, "SELECT * FROM participants INNER JOIN users ON users.u_id = participants.u_id INNER JOIN subevent ON subevent.sub_id = participants.sub_id ORDER BY participants.p_id DESC LIMIT 1 ");

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
    <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title"></h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="homepage-info-section">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 col-lg-10" style="padding-left:300px;">
                <header class="entry-header">
                    <h2 class="entry-title">Thank you for choosing event notifier.</h2>
                </header>

                <div class="entry-content">
                    <p>
                       Your booking has been confirmed.                  
                     </p>
                </div>

                <footer class="entry-footer">
                    <a href="index.php" class="btn gradient-bg">Home</a>
                    <a href="my-tickets.php" class="btn dark">Your Tickets</a>
                </footer>
            </div>
        </div>
    </div>
</div>
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