<?php

include("config.php");

 if(isset($_REQUEST['em_submit'])){

        // File upload path
        $targetDir = "upload/emproof";
        $fileName = basename($_FILES["em_imagepath"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $em_name=$_REQUEST['em_name'];
        $c_name=$_REQUEST['c_name'];
        $c_city=$_REQUEST['c_city'];
        $em_cno=$_REQUEST['em_cno'];
        $em_email=$_REQUEST['em_email'];
        $em_password=$_REQUEST['em_password'];

                // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["em_imagepath"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database          
                    $q1="insert into eventmanager_temp (em_name,c_name,c_city,em_cno,em_email,em_password,em_imagepath) values ('$em_name','$c_name','$c_city','$em_cno','$em_email','$em_password','".$fileName."')";
                    $e1=$link->query($q1);
                    if($q1){
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    }else{
                        $statusMsg = "File upload failed, please try again.";
                    } 
                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }
        
         echo "<script>alert('We will let you know when it approves!');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Notifier || EM Register</title>

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
                           <!--  <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li> -->
                            <li><a href="contact.php">Contact</a></li>
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
                        <h1 class="entry-title" style="font-size: 50px;">Event Manager Register</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- .site-header -->

<div class="container">
    <div class="row">
        <div class="col-8" style="margin-left: 230px;">
            <div class="contact-form">
                <form class="row" method="post"  enctype="multipart/form-data">
                    <div class="col-12 col-md-12"><input type="text" placeholder="Name"  name="em_name" id="username" onBlur="checkAvailability()" required><span id="user-availability-status"></span></div>
                    <div class="col-12 col-md-6"><input type="text" placeholder="College Name" name="c_name" pattern="[A-Za-z]{1,32}" title="Collegename contains alphabets only"  required></div>
                    <div class="col-12 col-md-6"><input type="text" placeholder="Contact No" name="em_cno"  title="Contact Number contains numbers only" required></div>
                    <div class="col-12 col-md-12"><input type="email" placeholder="Email" name="em_email" required></div>
                    <div class="col-12 col-md-12"><input type="password" placeholder="Password" name="em_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  style="width: 100%; height:50px; margin-bottom: 25px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;color: #232127;padding: 14px 22px;"></div>
                    <div class="col-12 col-md-12"><input type="text" placeholder="College City" name="c_city" required></div>
                    <div class="col-12 col-md-7">
                        <input type="text"  value="Upload Your Valid ID Proof" required readonly/>
                    </div>
                    <div class="col-12 col-md-5">
                         <input type="file" name="em_imagepath" style="width:100%; height:55px; border: 1px solid #e5e5e5; background: #f3f8f9;color:#232127;" required>
                    </div>
                    <p style="margin-left:240px;">Already have an account? <a href="em.php">Login here</a></p>
                    <!-- <p style="margin-left:240px;">Are you an event manager? <a href="em.php">Login here</a></p> -->
                    <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Submit" name="em_submit"></div>
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
<script type="text/javascript">
    function checkAvailability() {
// $("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#user-availability-status").php(data);
// $("#loaderIcon").hide();
},
error:function (){}
});
}
    

</script>



</body>
</html>