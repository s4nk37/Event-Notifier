<?php

 session_start();
if(!isset($_SESSION['a_name'])){
        echo "<script>alert('Please Login First!'); window.top.location='../admin.php';</script>";
        // header("Location: ../admin.php");
    } 
 include("../config.php");

 if(isset($_SESSION['a_name'])) {

 $q1="select * from admin";
 $e1=$link->query($q1);
 $data=$e1->fetch_object();
 $a_name=$data->a_name;
 $a_email=$data->a_email;
 
 $sql = "select COUNT(u_id) from users";
$result = mysqli_query($link, $sql) or die ("Query error!");

$sql1 = "select COUNT(em_tmpid) from eventmanager_temp";
$result1 = mysqli_query($link, $sql1) or die ("Query error!");

$sql2 = "select COUNT(em_id) from eventmanager";
$result2 = mysqli_query($link, $sql2) or die ("Query error!");

$sql3 = "select COUNT(e_id) from eventlist";
$result3 = mysqli_query($link, $sql3) or die ("Query error!");

$sql4 = "select COUNT(sub_id) from subevent";
$result4 = mysqli_query($link, $sql4) or die ("Query error!");

$sql5 = "select COUNT(p_id) from participants";
$result5 = mysqli_query($link, $sql5) or die ("Query error!");
}
 
   	
?>
<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Event Notifier | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.php" class="m-brand__logo-wrapper" style="font-size: 14px;">
										<!-- <img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png" /> -->
										Event Notifier
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
									<span class="m-menu__link-text" style="font-size: 30px;">Admin Panel</span>
								</li>
								</ul>


							</div>

							
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
										 m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="assets/app/media/img/users/user4.png" class="m--img-rounded m--marginless" alt="" />
												</span>
												<span class="m-topbar__username m--hide">Nick</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="assets/app/media/img/users/user4.png" class="m--img-rounded m--marginless" alt="" />

																<!--
						<span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
						-->
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500"><?php echo"$a_name";?></span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link"><?php echo"$a_email";?></a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<!-- <li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Section</span>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.php" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																				<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
																			</span>
																		</span>
																	</a>
																</li> -->
																<li class="m-nav__item">
																	<a href="logout.php" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="index.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-text">Dashboard</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="emapproval.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-text">Event Manager Approval</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="emdata.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-text">Event Manager Data</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="userdata.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-text">User Data</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
										
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>
			<!--begin::Section-->
<!--begin:: Widgets/Stats-->
						<div class="m-portlet " style="width: 100%; margin-top: 3px;">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-md-12 col-lg-6 col-xl-4">

										<!--begin::Total Profit-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													<a href='userdata.php'>Total Users</a>
												</h4><br>
												<span class="m-widget24__desc">
													Number of Registered Users
												</span>
												<span class="m-widget24__stats m--font-brand">
													<?php while ($row = mysqli_fetch_array($result)) {
												    $var = $row['COUNT(u_id)'];
												    echo "$var";
												} ?>
												</span>
												<!-- <div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													Change
												</span>
												<span class="m-widget24__number">
													78%
												</span> -->
											</div>
										</div>

										<!--end::Total Profit-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">

										<!--begin::New Feedbacks-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													<a href='emapproval.php'>Unapproved Event Managers</a>
												</h4><br>
												<span class="m-widget24__desc">
													Pending Event Mangers
												</span>
												<span class="m-widget24__stats m--font-info">
													<?php while ($row = mysqli_fetch_array($result1)) {
												    $var1 = $row['COUNT(em_tmpid)'];
												    echo "$var1";
												} ?>
												</span>
												<!-- <div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													Change
												</span>
												<span class="m-widget24__number">
													84%
												</span> -->
											</div>
										</div>

										<!--end::New Feedbacks-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">

										<!--begin::New Orders-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													<a href='emdata.php'>Total Event Managers</a>
												</h4><br>
												<span class="m-widget24__desc">
													Number of Approved Event Managers
												</span>
												<span class="m-widget24__stats m--font-danger">
													<?php while ($row = mysqli_fetch_array($result2)) {
												    $var2 = $row['COUNT(em_id)'];
												    echo "$var2";
												} ?>
												</span>
												<!-- <div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													Change
												</span>
												<span class="m-widget24__number">
													69%
												</span> -->
											</div>
										</div>

										<!--end::New Orders-->

									</div>
									
								</div>
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-md-12 col-lg-6 col-xl-4">

										<!--begin::Total Profit-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Total Events
												</h4><br>
												<span class="m-widget24__desc">
													Number of Registered Events
												</span>
												<span class="m-widget24__stats m--font-brand">
													<?php while ($row = mysqli_fetch_array($result3)) {
												    $var3 = $row['COUNT(e_id)'];
												    echo "$var3";
												} ?>
												</span>
											</div>
										</div>

										<!--end::Total Profit-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">

										<!--begin::New Feedbacks-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Total Sub Events
												</h4><br>
												<span class="m-widget24__desc">
													No of Registered Subevents
												</span>
												<span class="m-widget24__stats m--font-info">
													<?php while ($row = mysqli_fetch_array($result4)) {
												    $var4 = $row['COUNT(sub_id)'];
												    echo "$var4";
												} ?>
												</span>
											</div>
										</div>

										<!--end::New Feedbacks-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">

										<!--begin::New Orders-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Total Participants
												</h4><br>
												<span class="m-widget24__desc">
													Number of Users who took part
												</span>
												<span class="m-widget24__stats m--font-danger">
													<?php while ($row = mysqli_fetch_array($result5)) {
												    $var5 = $row['COUNT(p_id)'];
												    echo "$var5";
												} ?>
												</span>
											</div>
										</div>

										<!--end::New Orders-->

									</div>
									
								</div>
								
							</div>
						</div>
						<!-- <div class="m-portlet " style="width: 100%; margin-top: 3px;">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								
								
							</div>
						</div>
 -->

						<!--end:: Widgets/Stats-->

		<!--end::Section-->

		<!-- end:: Page -->
		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!--begin::Global Theme Bundle -->
		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="assets/app/js/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
