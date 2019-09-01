<?php
session_start();
include("config.php");

if(!isset($_SESSION['u_id'])) {
      header("Location: index.php"); } 
     


 
if(isset($_SESSION['u_id'])) {
        $u_id=$_SESSION['u_id'];
        $s1="select * from users where u_id='$u_id'";
        $b1=$link->query($s1);
        $data=$b1->fetch_object();
        $fname=" ".$data->fname;
    
    if(isset($_POST['submit'])){
        $password = $_POST["password"];
        
        $sql = "UPDATE users SET password='$password' WHERE u_id='$u_id'";
        $e1=$link->query($sql);
        


        // $a=$_SESSION['u_id'];
        // //$uname=$_REQUEST['uname'];
        // $password=$_REQUEST['password'];
        // $s1="select * from users where u_id='$a'";
        // $q1="update users set password='$password' where u_id='$a'";
        // $e1=$link->query($q1);
        // $f1=$link->query($s1);
        // $data=$f1->fetch_object();
        // $fname=" ".$data->fname;


        // if($e1->num_rows > 0){
            
        //     $data=$e1->fetch_object();
        //     //$fname=$data->fname;
        //     $_SESSION['u_id']=$data->u_id;
        //     header("Location:index.php");
        // }
        // else{
        //     echo "<script>alert('Error Occured!');</script>";
        // }
        
        
    }
}
?>
 <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>



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
                        <h1 class="entry-title">Change Password</h1>
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
                    <div class="col-12 col-md-12"><input type="Password" id="password" name="password" placeholder="Enter New Password" style="width: 100%; height:50px; margin-bottom: 25px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;
color: #232127;padding: 14px 22px; font-style: italic;" required></div>
                     <div class="col-12 col-md-12"><i><input type="password" id="confirm_password" placeholder="Confirm New Password" name="confirm_password" style="width: 100%; height:50px; margin-bottom: 25px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;
color: #232127;padding: 14px 22px; font-style: italic;" required></i></div>     
                    <span id='message'></span>

                    <!-- <div class="col-12 col-md-4"><input type="text" placeholder="Subject"></div> -->
                    <!-- <div class="col-12"><textarea placeholder="Message" rows="8"></textarea></div> -->
                
                    <!-- <a href="#" style="margin-left: 224px;">Forgot Password?</a>
                    <p style="margin-left:185px;">Don't have an account? <a href="register.php">Sign Up</a></p> -->
                   
                    <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Submit" name="submit" onclick="return Validate()"></div>




                   
                    <!-- <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Register"></div> -->
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