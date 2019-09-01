<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Notifier</title>

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
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="images/logo.png" alt="logo"></a>
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
                            <li><a href="events.html">Events</a></li>
                           <!--  <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                         --></ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <!-- <div class="buy-tickets">
                        <a class="btn gradient-bg" href="#">Buy Tickets</a>
                    </div><!-- .buy-tickets  -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header single-event-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Knowhow 2K19</h1>
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
                        <h2 class="entry-title">Knowhow 19</h2>

                        <div class="event-location"><a href="#">BVM Engineering College Vallabh Vidhyanagar </a></div>

                        <div class="event-date">Jan 5, 2019 @ 8:00 Pm - Jan 8, 2019 @ 4:00 Pm</div>
                    </div>

                    <!-- <div class="buy-tickets flex justify-content-center align-items-center">
                        <a class="btn gradient-bg" href="#">Buy Tikets</a>
                    </div> -->
                </header>

                <figure class="events-thumbnail">
                    <img src="images/knowhowmain.jpg" alt="">
                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="tabs">
                <ul class="tabs-nav flex">
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Details</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>
                    <!-- <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizers</li> -->
                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">
                        <div class="flex flex-wrap justify-content-between">
                            <div class="single-event-details">
                                <div class="single-event-details-row">
                                    <label>Start:</label>
                                    <p>Jan 5 @ 09:00 am</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>End:</label>
                                    <p>Jan 8 @ 04:00 pm</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Tickets Availability:</label>
                                    <p><span>Sold Out</span></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Categories:</label>
                                    <p>Event</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Tags:</label>
                                    <p><a href="#">Event</a><a href="#"></a><a href="#"></a></p>
                                </div>
                            </div>

                            <div class="single-event-map">
                                <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14738.836088128995!2d72.9238183!3d22.5525703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab364c66fd4834c!2sBirla+Vishvakarma+Mahavidyalaya!5e0!3m2!1sen!2sin!4v1552304177438" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="tab_venue" class="tab-content">
                        <p>Birla Vishwakarma Mahavidhyalaya, Vallabh Vidyanagar, Anand, Gujarat 388120</p>
                    </div>

                   <!--  <div id="tab_organizers" class="tab-content">
                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

     <!-- <h2 class="entry-title" style="padding-top: 28px;">Events</h2>

    <div class="row">
        <div class="col-12">
            <div class="event-tickets">
                <div class="ticket-row flex flex-wrap justify-content-between align-items-center">
                    <div class="ticket-type flex justify-content-between align-items-center">
                        <h3 class="entry-title"><span>Designer</span> Civil engg.</h3>

                        <div class="ticket-price">₹89</div>
                    </div>

                    <div class="flex align-items-center">
                        <div class="number-of-ticket flex justify-content-between align-items-center">
                            <span class="decrease-ticket">-</span>
                            <input type="number" class="ticket-count" value="1" />
                            <span class="increase-ticket">+</span>
                        </div>

                        <div class="clear-ticket-count">Clear</div>
                    </div>

                    <input type="submit" class="btn gradient-bg" value="Buy Ticket">
                </div>

                <div class="ticket-row flex flex-wrap justify-content-between align-items-center">
                    <div class="ticket-type flex justify-content-between align-items-center">
                        <h3 class="entry-title"><span>Webiclan</span>Computer engg.</h3>

                        <div class="ticket-price">₹199</div>
                    </div>

                    <div class="flex align-items-center">
                        <div class="number-of-ticket flex justify-content-between align-items-center">
                            <span class="decrease-ticket">-</span>
                            <input type="number" class="ticket-count" value="1" />
                            <span class="increase-ticket">+</span>
                        </div>

                        <div class="clear-ticket-count">Clear</div>
                    </div>

                    <input type="submit" class="btn gradient-bg" value="Buy Ticket">
                </div>
                     <div class="ticket-row flex flex-wrap justify-content-between align-items-center">
                    <div class="ticket-type flex justify-content-between align-items-center">
                        <h3 class="entry-title"><span>auto-ignito</span> Mechanical engg.</h3>

                        <div class="ticket-price">₹129</div>
                    </div>

                    <div class="flex align-items-center">
                        <div class="number-of-ticket flex justify-content-between align-items-center">
                            <span class="decrease-ticket">-</span>
                            <input type="number" class="ticket-count" value="1" />
                            <span class="increase-ticket">+</span>
                        </div>

                        <div class="clear-ticket-count">Clear</div>
                    </div>

                    <input type="submit" class="btn gradient-bg" value="Buy Ticket">
                </div>
                 <div class="ticket-row flex flex-wrap justify-content-between align-items-center">
                    <div class="ticket-type flex justify-content-between align-items-center">
                        <h3 class="entry-title"><span>electro snooper</span> Electrical engg.</h3>

                        <div class="ticket-price">₹169</div>
                    </div>

                    <div class="flex align-items-center">
                        <div class="number-of-ticket flex justify-content-between align-items-center">
                            <span class="decrease-ticket">-</span>
                            <input type="number" class="ticket-count" value="1" />
                            <span class="increase-ticket">+</span>
                        </div>

                        <div class="clear-ticket-count">Clear</div>
                    </div>

                    <input type="submit" class="btn gradient-bg" value="Buy Ticket">
                </div>
                
            </div>
        </div>
    </div>
 -->
 <!--    <div class="row">
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
                            <h3 class="entry-title"><a href="#">Spectrum</a></h3>

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
    </div> -->
</div>

<!-- <div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">Subscribe to our newsletter to get the latest trends & news</h2>
                    <p>Join our database NOW!</p>
                </header>

                <div class="newsletter-form">
                    <form class="flex flex-wrap justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" placeholder="Name">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" placeholder="Your e-mail">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="events.html">Events</a></li>
                       <!--  <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                   -->  </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

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