<?php

session_start();

 
if(!isset($_SESSION['u_id'])){
    echo "<script>alert('Please login first!'); window.top.location='login.php';</script>";
}

include("config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

 //getting id of the data from url
$sub_id = $_GET['sub_id'];

    if(isset($_SESSION['u_id'])){
        $u_id=$_SESSION['u_id'];
        $q1="select * from users where u_id='$u_id'";
        $e1=$link->query($q1);
        $data=$e1->fetch_object();
        $fname=" ".$data->fname;
        $lname=" ".$data->lname;
        $email=$data->email;
        $college=$data->college;

       

$q = mysqli_query($link, "SELECT * FROM `subevent` where sub_id='$sub_id' ");
$q3=mysqli_query($link,"SELECT * FROM subevent INNER JOIN eventlist ON eventlist.e_id=subevent.e_id where subevent.sub_id='$sub_id'");

if(isset($_REQUEST['submit'])){

$q4="insert into participants (u_id,sub_id) values ('$u_id','$sub_id')";
$e4=$link->query($q4);

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try{
    
    include("connect.php");

    //Recipients
    
    $mail->addAddress($email, $fname. $lname);     // Add a recipient
   
     
    $mail->isHTML(true);                              // Set email format to HTML
    $mail->Subject = 'Your Ticket';
    if($res = mysqli_fetch_array($q3)) { 
    $mail->Body    = "Dear $fname $lname ,<br> Your Ticket has been successfully booked. <br> Event :- ".$res['e_name']."<br> SubEvent :- ".$res['sub_name']."<br> Date :- ".$res['sub_date']."<br> Time :- ".$res['sub_time']."<br> Subtotal :- ".$res['sub_price']."<br>PLEASE SHOW YOUR EMAIL AT THE VENUE.
    "
    ;}
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   header("Location: thank-you.php");
} catch (Exception $e) {
    echo ' ', $mail->ErrorInfo;}
 




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
                        <h1 class="entry-title">Confirmation</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
       <div class="row">
            <div class="col-10" style="margin-left: 110px;">
                <div class="contact-form">
                    <form class="row" method="post">
                       <!--  &nbsp; &nbsp; &nbsp;<h4>Username</h4>
                        <div class="col-12 col-md-12"><input type="text"  name="uname" id="username" value="<?php echo"$uname"; ?>" readonly>
                        </div> -->
                        &nbsp; &nbsp; &nbsp;<h4>Firstname</h4>
                        <div class="col-12 col-md-12"><input type="text" name="fname" value="<?php echo"$fname"; ?>" readonly></div>
                        &nbsp; &nbsp; &nbsp;<h4>Lastname</h4>
                        <div class="col-12 col-md-12"><input type="text" name="lname" value="<?php echo"$lname"; ?>" readonly></div>
                        &nbsp; &nbsp; &nbsp;<h4>Email</h4>
                        <div class="col-12 col-md-12"><input type="email"  name="email" value="<?php echo"$email"; ?>" readonly></div>
                        <div class="event-tickets" style="width:96%; margin-left: 14px;">
                <?php
                 if($res = mysqli_fetch_array($q)) {   
               
                echo "
                <div class='ticket-row flex flex-wrap justify-content-between align-items-center'>
                    <div class='ticket-type flex justify-content-between align-items-center'>
                        <h3 class='entry-title'><span data-toggle='tooltip' title='".$res['sub_description']."'>".$res['sub_name']." </span> ".$res['sub_type']." </h3>

                        <div class='ticket-price'>₹".$res['sub_price']."</div>
                    </div> 
                    <input type='submit' class='btn gradient-bg' value='Confirm & Pay' name='submit' style='margin-bottom:30px;' >&nbsp;&nbsp;&nbsp;
                    <a class='btn dark' href='index.php'>Cancel</a>
                </div>";}
                ?>
            </div>
            
                     </form>
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