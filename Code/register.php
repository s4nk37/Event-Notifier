<?php

include("config.php");

 if(isset($_REQUEST['user_submit'])){
        // $uname=$_REQUEST['uname'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $college=$_POST['college'];

        $q1="insert into users (email,fname,lname,password,college) values ('$email','$fname','$lname','$password','$college')";
        $e1=$link->query($q1);
       
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
                          <!--   <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li> -->
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
                        <h1 class="entry-title">User Register</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">New York</h2>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">667889 Madison Avenue, no24-56</li>
                        <li class="contact-number">665 5667 8899 661</li>
                        <li class="contact-email"><a href="#">office@yourbusiness.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">Miami</h2>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">122344 Island Str, no23</li>
                        <li class="contact-number">665 5667 8899 661</li>
                        <li class="contact-email"><a href="#">office@yourbusiness.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">Los Angeles</h2>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">667889 Long Avenue, no24-56</li>
                        <li class="contact-number">665 5667 8899 661</li>
                        <li class="contact-email"><a href="#">office@yourbusiness.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
</div>

<div class="contact-page-map">
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-8" style="margin-left: 230px;">
            <div class="contact-form">
                <form class="row" method="post">
                    <!-- <div class="col-12 col-md-12"><input type="text" placeholder="Username"  name="uname" id="username" onBlur="checkAvailability()" required><span id="user-availability-status"></span></div> -->
                    <div class="col-12 col-md-6"><input type="text" placeholder="First Name" name="fname" pattern="[A-Za-z]{1,32}" title="Firstname contains alphabets only"  required></div>
                    <div class="col-12 col-md-6"><input type="text" placeholder="Last Name" name="lname" pattern="[A-Za-z]{1,32}" title="Lastname contains alphabets only" required></div>
                    <div class="col-12 col-md-12"><input type="email" placeholder="Email" name="email" required></div>
                    <div class="col-12 col-md-12">
                        <input type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  style="width: 100%; height:50px; margin-bottom: 2px;border: 1px solid #e5e5e5; box-sizing: border-radius: 1%; background: #f3f8f9;color: #232127;padding: 14px 22px;">
                        <span style="color: #808080;">* Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</span>
                    </div>
                    <div class="col-12 col-md-12"><input type="text" placeholder="College" name="college" style="margin-top: 25px;" required></div>
                    <!-- <div class="col-12 "><textarea placeholder="Address" rows="2"></textarea></div> -->
                    <!-- <a href="register.html">Not yet Registered?</a> -->
                    <p style="margin-left:240px;">Already have an account? <a href="login.php">Login here</a></p>
                    <p style="margin-left:240px;">Are you an event manager? <a href="em.php">Login here</a></p>
                    <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Submit" name="user_submit"></div>
                    <!-- <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Register"></div> -->
                </form>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>



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
<script type='text/javascript' src='js/sweetalert.min.js'></script>

<script type="text/javascript">
    function checkAvailability() {
// $("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
// $("#loaderIcon").hide();
},
error:function (){}
});
}
    

</script>



</body>
</html>
<?php

if(isset($_REQUEST['user_submit'])){
 echo "
        <script>swal('Good job!', 'You have been successfully registered!', 'success', { buttons: false,timer: 3000,});
       ;


</script>";
    
}

?>