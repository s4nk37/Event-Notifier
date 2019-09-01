<?php

session_start();

if(!isset($_SESSION['u_id'])){
        echo "<script>alert('Please Login First!'); window.top.location='login.php';</script>";
    } 

include("config.php");
   
    if(isset($_SESSION['u_id'])){
        $u_id=$_SESSION['u_id'];
        $q1="select * from users where u_id='$u_id'";
        $e1=$link->query($q1);
        $data=$e1->fetch_object();
        $fname=" ".$data->fname;
        $lname=" ".$data->lname;
        $email=$data->email;
        $college=$data->college;

//$q = mysqli_query($link, "SELECT * FROM `subevent` where sub_id='$sub_id' ");
$result = mysqli_query($link, "SELECT * FROM participants INNER JOIN users ON users.u_id = participants.u_id INNER JOIN subevent ON subevent.sub_id = participants.sub_id where participants.u_id='$u_id' ");
$result2 = mysqli_query($link,"SELECT SUM(subevent.sub_points) FROM participants INNER JOIN users ON users.u_id = participants.u_id INNER JOIN subevent ON subevent.sub_id = participants.sub_id where participants.u_id='$u_id'");

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
                        <h1 class="entry-title">My Tickets</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
  <div class="row" style="margin-bottom: 40px;">
        <div class="col-12">
            <div class="event-tickets">
                <?php
                 while($res = mysqli_fetch_array($result)) {   
                echo "
                <div class='ticket-row flex flex-wrap justify-content-between align-items-center'>
                    <div class='ticket-type flex justify-content-between align-items-center' style='margin-left:190px;'>
                        <h3 class='entry-title'><span data-toggle='tooltip' title='".$res['sub_description']."'>".$res['sub_name']." </span> ".$res['sub_type']." &nbsp;&nbsp;&nbsp;Event Points:".$res['sub_points']." </h3>

                        <div class='ticket-price'>₹".$res['sub_price']."</div>
                    </div>
                </div>";}
                ?>
            </div>
            <div class="event-tickets">
                <?php
                 while($res = mysqli_fetch_array($result2)) {
                 $var5 = $res['SUM(subevent.sub_points)'];   
                echo "
                <div class='ticket-row flex flex-wrap justify-content-between align-items-center'>
                    <div class='ticket-type flex justify-content-between align-items-center' style='margin-left:190px;'>
                        <h3 class='entry-title'>Total Estimated Points</span>  </h3>

                         <div class='start-counter' data-to=".$var5." data-speed='2000'>100</div>
                        *Points Displayed above are estimation.
                            
                    </div>
                </div>";}
                ?>
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