<?php

session_start();
if(!isset($_SESSION['u_id'])){
        echo "<script>alert('Please Login First!'); window.top.location='login.php';</script>";
        //header("Location: ../admin.php");
    } 
 include("config.php");

 //getting id of the data from url
$e_id = $_GET['e_id'];
 
    if(isset($_SESSION['u_id'])){
        $u_id=$_SESSION['u_id'];
        $q1="select * from users where u_id='$u_id'";
        $e1=$link->query($q1);
        $data=$e1->fetch_object();
        $fname=" ".$data->fname;

       
}
$q2 = mysqli_query($link, "SELECT * FROM `eventlist` INNER JOIN eventmanager ON eventmanager.em_id = eventlist.em_id where eventlist.e_id='$e_id'");
$q3 = mysqli_query($link,"select * from subevent where sub_id not in (SELECT sub_id from participants where u_id='$u_id') and subevent.e_id='$e_id'");
$q4 = mysqli_query($link,"SELECT * FROM participants INNER JOIN subevent ON subevent.sub_id = participants.sub_id where participants.u_id='$u_id' AND subevent.e_id='$e_id' ");
 
// $row=mysql_fetch_array($q5);
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
<body class="single-event-page">
<header class="site-header">
    <!--== Header Area End ==-->
    <?php include('includes/header.php');?>

    <!--== Header Area End ==-->

    <div class="page-header single-event-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Event Details</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<div class="container">
    <div class="row">
        <div class="col-12 single-event">
            <div class="event-content-wrap">
                <header class="entry-header flex flex-wrap justify-content-between align-items-end">
                    <div class="single-event-heading">
                        <h2 class="entry-title"><?php if($res=mysqli_fetch_array($q2)){echo "{$res['e_name']}"; ?></h2>

                        <div class="event-location"><a href="#"><?php echo"{$res['c_name']}"; ?> </a></div>

                        <div class="event-date"><?php echo"{$res['e_startdate']}"; ?> To <?php echo"{$res['e_enddate']}"; ?> </div>
                    </div>

                    <!-- <div class="buy-tickets flex justify-content-center align-items-center">
                        <a class="btn gradient-bg" href="#">Buy Tikets</a>
                    </div> -->
                </header>

                <!-- <figure class="events-thumbnail">
                    <img src="images/udaannew.jpg" alt="">
                </figure> -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="tabs">
                <ul class="tabs-nav flex">
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Details</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Description</li>
                    <!-- <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizers</li> -->
                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">
                        <div class="flex flex-wrap justify-content-between">
                            <div class="single-event-details">
                                <div class="single-event-details-row">
                                    <label>Registration Start Date:</label>
                                    <p><?php echo"{$res['e_reg_startdate']}"; ?></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Registration End Date:</label>
                                    <p><?php echo"{$res['e_reg_lastdate']}"; ?></p>
                                </div>
                                <div class="single-event-details-row">
                                    <label>Start:</label>
                                    <p><?php echo"{$res['e_startdate']}"; ?></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>End:</label>
                                    <p><?php echo"{$res['e_enddate']}"; ?></p>
                                </div>

                                <!-- <div class="single-event-details-row">
                                    <label>Tickets Availability:</label>
                                    <p><span>Sold Out</span></p>
                                </div> -->

                               <!--  <div class="single-event-details-row">
                                    <label>Categories:</label>
                                    <p></p>
                                </div> -->

                               <!--  <div class="single-event-details-row">
                                    <label>Tags:</label>
                                    <p><a href="#">Event</a>, <a href="#">music</a>, <a href="#">techfest</a></p>
                                </div> -->
                            </div>

                            <div class="single-event-map">
                                <iframe id="gmap_canvas" src="<?php echo"{$res['e_locationlink']}"; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="tab_venue" class="tab-content">
                        <p><?php echo"{$res['e_description']}"; ?></p>
                        <a href='<?php echo"{$res['e_link']}"; ?>'><?php echo"{$res['e_link']}";} ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <h2 class="entry-title" style="padding-top: 28px;">Sub Events</h2>

    <div class="row" style="margin-bottom: 40px;">
        <div class="col-12">
            <div class="event-tickets">
                <?php
                // if ($row['sub_totalentry'] > $row[count(sub_id)] ){
                //     echo "SAnket";}else{ echo 'no';}
                    
                 while($res = mysqli_fetch_array($q3)) { 
                $x=$res['sub_id'];
                $y=$res['sub_totalentry'];
                $q5 = mysqli_query($link,"SELECT count(*) AS sub_entry FROM participants INNER JOIN subevent ON participants.sub_id = subevent.sub_id where subevent.e_id = '$e_id' AND participants.sub_id='$x'");  
                if ( $row = mysqli_fetch_object($q5)) {
                   if ($row->sub_entry >= $y ) { 
                    $rd="confirmation.php?sub_id=" . $res['sub_id'];
                echo "
                <div class='ticket-row flex flex-wrap justify-content-between align-items-center'>
                    <div class='ticket-type flex justify-content-between align-items-center'>
                        <h3 class='entry-title'><span data-toggle='tooltip' title='".$res['sub_description']."'>".$res['sub_name']." </span> ".$res['sub_type']." &nbsp;&nbsp;&nbsp;Event Points:".$res['sub_points']." </h3>

                        <div class='ticket-price'>₹".$res['sub_price']."</div>
                    </div>
                     <a href='/' class='btn dark' value='Buy Ticket' onclick='return false;' style='width:168px;'>Closed</a>
                </div>";
                   }else{
                  
                $rd="confirmation.php?sub_id=" . $res['sub_id'];
                echo "
                <div class='ticket-row flex flex-wrap justify-content-between align-items-center'>
                    <div class='ticket-type flex justify-content-between align-items-center'>
                        <h3 class='entry-title'><span data-toggle='tooltip' title='".$res['sub_description']."'>".$res['sub_name']." </span> ".$res['sub_type']." &nbsp;&nbsp;&nbsp;Event Points:".$res['sub_points']." </h3>

                        <div class='ticket-price'>₹".$res['sub_price']."</div>
                    </div>
                    <a href='$rd' class='btn gradient-bg' value='Buy Ticket'>Buy Ticket</a>
                </div>";}}}
                ?>
                <?php
                 while($res1 = mysqli_fetch_array($q4)) {   
                // $rd="confirmation.php?sub_id=" . $res['sub_id'];
                echo "
                <div class='ticket-row flex flex-wrap justify-content-between align-items-center'>
                    <div class='ticket-type flex justify-content-between align-items-center'>
                        <h3 class='entry-title'><span data-toggle='tooltip' title='".$res1['sub_description']."'>".$res1['sub_name']." </span> ".$res1['sub_type']." &nbsp;&nbsp;&nbsp;Event Points:".$res1['sub_points']." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''>Details</a> </h3>

                        <div class='ticket-price'>₹".$res1['sub_price']."</div>
                    </div>
                    <a href='/' class='btn dark' value='Buy Ticket' onclick='return false;' style=''>Occupied</a>
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