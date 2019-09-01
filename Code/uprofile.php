    <?php

         session_start();
     if(!isset($_SESSION['u_id'])) {
       header("Location: login.php"); } 
    include("config.php");
 if(isset($_SESSION['u_id'])){

    $u_id=$_SESSION['u_id'];
        $s1="select * from users where u_id='$u_id'";
        $b1=$link->query($s1);
        $data=$b1->fetch_object();
        $fname=" ".$data->fname;
    $q1="select * from users";
    $e1=$link->query($q1);
    $data=$e1->fetch_object();
    // $uname=$data->uname;
    $fname=$data->fname;
    $lname=$data->lname;
    $email=$data->email;
    $college=$data->college;
    
   
        
        
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
                            <h1 class="entry-title">Profile</h1>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- .site-header -->

  
    <div class="container"> 
       <div class="row">
            <div class="col-8" style="margin-left: 230px;">
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
                        <!-- <div class="col-12 col-md-12"><input type="password"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  style="width: 100%; height:50px; margin-bottom: 25px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;
    color: #232127;padding: 14px 22px;"></div> -->
                        &nbsp; &nbsp; &nbsp;<h4>College</h4>
                        <div class="col-12 col-md-12"><input type="text" name="college" value="<?php echo"$college"; ?>" readonly></div>
    <!--                      <div class="col-12 "><textarea placeholder="Address" rows="2"></textarea></div> 
     -->                     <!-- <a href="register.html">Not yet Registered?</a> --> 
                         <!-- <p style="margin-left:240px;">Already have an account? <a href="login.php">Login here</a></p>
                        <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Submit" name="submit"></div> -->
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
    <script type="text/javascript">

        

    </script>



    </body>
    </html>