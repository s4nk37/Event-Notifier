<?php
    
 session_start();
// if(!isset($_SESSION['u_id'])){
//         echo "<script>alert('Please Login First!'); window.top.location='login.php';</script>";
  
//     } 
 
include("config.php");
    if(isset($_SESSION['u_id'])){
        $u_id=$_SESSION['u_id'];
        $q1="select * from users where u_id='$u_id'";
        $e1=$link->query($q1);
        $data=$e1->fetch_object();
        $fname=" ".$data->fname;

       
}


$q2 = mysqli_query($link, "SELECT * FROM `eventlist` INNER JOIN eventmanager ON eventmanager.em_id = eventlist.em_id WHERE eventlist.e_reg_lastdate > now()  order by eventlist.e_name ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Notifier | Events</title>

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
<body class="events-list-page">
<header class="site-header">
   <!--== Header Area End ==-->
    <?php include('includes/header.php');?>

    <!--== Header Area End ==-->

    <div class="page-header events-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Events</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<!-- <form class="events-search">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <input type="date" placeholder="Date">
            </div>

            <div class="col-12 col-md-3">
                <input type="text" placeholder="Event">
            </div>

            <div class="col-12 col-md-3">
                <input type="text" placeholder="Location">
            </div>

            <div class="col-12 col-md-3">
                <input class="btn gradient-bg" type="submit" value="Search Events">
            </div>
        </div>
    </div>
</form> -->

<div class="container" style="padding-top: 15px;">
    <div class="row events-list">
        <?php 
            while($res = mysqli_fetch_array($q2)) {
                $e_reg_lastdate=$res['e_reg_lastdate'];
                $c_date=strtotime(date('Y-m-d'));
                if($c_date >= $e_reg_lastdate){
                    $imageURL = 'emanager/uploads/'.$res["e_imagepath"];
                    $rd="single-event.php?e_id=" . $res['e_id'];
                    echo "   
                    <div class='col-12 col-lg-6 single-event'>
                        <figure class='events-thumbnail'>
                            <a href='$rd'><img src='".$imageURL."' alt=''</a>
                        </figure>

                        <div class='event-content-wrap'>
                            <header class='entry-header'>
                                <div>
                                    <h2 class='entry-title'><a href='$rd'>".$res['e_name']."</a></h2>

                                    <div class='event-location'><a href='$rd'>".$res['c_name']."</a></div>

                                    <div class='event-date'>From ".$res['e_startdate']." -  To ".$res['e_enddate']."</div>
                                </div>             
                        </div>
                    </div> ";
                }
            }
        ?>
        </div>
    </div>

   <!--  <div class="row">
        <div class="col-md-12">
            <div class="load-more-btn">
                <a class="btn gradient-bg" href="#">Load More</a>
            </div>
        </div>
    </div> -->
</div>

<!-- <div class="upcoming-events-outer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="upcoming-events">
                    <div class="upcoming-events-header">
                        <h4>Upcoming Events</h4>
                    </div>

                    <div class="upcoming-events-list">
                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="images/upcoming-1.jpg" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    25<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Blockchain Conference</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Buy Tikets</a>
                            </footer>
                        </div>

                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="images/upcoming-2.jpg" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    27<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Financial Conference</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Buy Tikets</a>
                            </footer>
                        </div>

                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="images/upcoming-3.jpg" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    27<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Winter Festival</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Buy Tikets</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->


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