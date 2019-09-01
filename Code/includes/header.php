<style>
/* Style The Dropdown Button */
.dropbtn {
  background: transparent;
  color:white;
  padding: 1px;
  padding-left: 20px;
  padding-right: 10px;
  font-size: 16px;
  border: 1px solid;
  cursor: pointer;
  background-color: rgb(138,33,239,0.3);
}
.dropbtn2 {
  background: transparent;
  color:white;
  padding: 1px;
  font-size: 16px;
  width:170px;
  border: 1px solid;
  cursor: pointer;
  background-color: rgb(138,33,239,0.3);
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;

}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(117,24,247,0.5);
  /*rgba(111,66,193,0.5);*/
  min-width: 149px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: #f1f1f1;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: rgb(173,24,247);}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
   background-color: rgba(173,24,247,0.7);
}
</style>

<div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                
                <div class="col-10 col-lg-5 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-4 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="aboutus.php">About us</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
                <?php
	                if(isset($_SESSION['u_id'])){
	                    echo"
	                       <div class='col-2 col-lg-3 order-3 order-lg-2' style='padding-left:150px;'>
							 <div class='dropdown'>
							  <button class='dropbtn' style='font-size:20px;'><i class='fa fa-user-circle-o' aria-hidden='true'></i>&nbsp;$fname &nbsp;&nbsp;<i class='fa fa-chevron-down' aria-hidden='true'></i></button>
							  <div class='dropdown-content'>
							    <a href='uprofile.php'>My Profile</a>
							    <a href='my-tickets.php'>My Tickets</a>
							    <a href='ucp.php'>Change Password</a>
							    <a href='logout.php'>Logout&nbsp;&nbsp;<i class='fa fa-sign-out' aria-hidden='true'></i></a>
							  </div>
							</div> 
	                       </div>";
	                }
	                else{
	                    echo "<div class='col-lg-1 d-none d-lg-block order-2 order-lg-3' style='padding-left:100px;'>
	                    	  <a href='login.php'>
							  <button class='dropbtn2' style='font-size:20px;' href='login.php'>Login & Signup&nbsp;<i class='fa fa-sign-in' aria-hidden='true'></i></button>
							  </a>
	                        </div>";
	                }

	            ?>
                </div><!-- .col --> 

            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->