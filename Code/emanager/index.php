<?php
session_start();
if(!isset($_SESSION['em_id'])){
        echo "<script>alert('Please Login First!'); window.top.location='../em.php';</script>";
        // header("Location: ../admin.php");
    } 

 
 include("../config.php");


 if(isset($_SESSION['em_id'])) {

 $em_id=$_SESSION['em_id'];
 $q1="select * from eventmanager where em_id='$em_id'";
 $e1=$link->query($q1);
 $data=$e1->fetch_object();
 $em_name=$data->em_name;
 $em_email=$data->em_email;
 
 // $result = mysqli_query($link, "SELECT * FROM eventmanager_temp ORDER BY em_tmpid DESC");


if(isset($_POST["submit"])){



	$e_name=$_REQUEST['e_name'];
	$e_description=$_REQUEST['e_description'];
	$e_startdate=$_REQUEST['e_startdate'];
	$e_enddate=$_REQUEST['e_enddate'];
	$e_reg_startdate=$_REQUEST['e_reg_startdate'];
	$e_reg_lastdate=$_REQUEST['e_reg_lastdate'];
	$e_link=$_REQUEST['e_link'];
	$e_locationlink=$_REQUEST['e_locationlink'];

	
	// File upload path
	$targetDir = "uploads/";
	$fileName = basename($_FILES["e_imagepath"]["name"]);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["e_imagepath"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert="insert into eventlist (em_id,e_name,e_description,e_startdate,e_enddate,e_reg_startdate,e_reg_lastdate,e_link,e_locationlink,e_imagepath) values ('$em_id','$e_name','$e_description','$e_startdate','$e_enddate','$e_reg_startdate','$e_reg_lastdate','$e_link','$e_locationlink','".$fileName."')";
    		$e1=$link->query($insert);
            if($insert){
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
}else{
    // $statusMsg = 'Please select a file to upload.';
}

// Display status message
// echo $statusMsg;
	

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
									<a href="index.html" class="m-brand__logo-wrapper" style="font-size: 14px;">
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
									<span class="m-menu__link-text" style="font-size: 30px;">Event Manager Panel</span>
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
																<span class="m-card-user__name m--font-weight-500"><?php echo"$em_name";?></span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link"><?php echo"$em_email";?></a>
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
																	<a href="header/profile.html" class="m-nav__link">
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
							<!-- <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="index.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-text">Dashboard</span> <i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li> -->
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="index.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-plus"></i>
									<span class="m-menu__link-text">Add Event</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="addsub.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-plus"></i>
									<span class="m-menu__link-text">Add Subevent</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="edata.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-text">Event Data</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="subdata.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-text">Sub Event Data</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="participantinfo.php" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-text">Participant Info</span><i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
										
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>
			<!--begin::Section-->
		<form class="m-form" style="margin-right: 20px;margin-top: 20px; padding-left: 300px; width: 70%;" method="post" enctype="multipart/form-data">
		<div class="m-portlet__body">
			<div class="m-form__section m-form__section--first">
				<div class="form-group m-form__group">
					<label for="example_input_full_name">Event Name:</label>
					<input type="text" class="form-control m-input" placeholder="Enter Event name" name="e_name">
					<!-- <span class="m-form__help">Please enter your full college name</span> -->
				</div>
				<div class="form-group m-form__group">
					<label for="exampleTextarea">Event Description</label>
					<textarea class="form-control m-input" id="exampleTextarea" rows="3" name="e_description"></textarea>
				</div>
				<div class="form-group m-form__group">
					<label>Registration Start Date:</label>
					<input type="date" class="form-control m-input" placeholder="Enter Event Registration Start Date" name="e_reg_startdate"  min="<?php
         echo date('Y-m-d');
     ?>">
					<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
				</div>
				<div class="form-group m-form__group">
					<label>Registration Last Date:</label>
					<input type="date" class="form-control m-input" placeholder="Enter Event Registration Last Date" name="e_reg_lastdate"  min="<?php
         echo date('Y-m-d');
     ?>">
					<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
				</div>
				<div class="form-group m-form__group">
					<label>Start Date:</label>
					<input type="date" class="form-control m-input" placeholder="Enter Event Start Date" name="e_startdate" min="<?php
         echo date('Y-m-d');
     ?>">
					<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
				</div>
				<div class="form-group m-form__group">
					<label>End Date:</label>
					<input type="date" class="form-control m-input" placeholder="Enter Event End Date" name="e_enddate"  min="<?php
         echo date('Y-m-d');
     ?>">
					<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
				</div>
				<div class="form-group m-form__group">
					<label for="example_input_full_name">Event Website:</label>
					<input type="url" class="form-control m-input" placeholder="Enter Event Website" name="e_link">
					<!-- <span class="m-form__help">Please enter your full college name</span> -->
				</div>
				<div class="form-group m-form__group">
					<label for="example_input_full_name">Event Venue Location Link:</label>
					<input type="url" class="form-control m-input" placeholder="Enter Event Location Link" name="e_locationlink">
					<!-- <span class="m-form__help">Please enter your full college name</span> -->
				</div>
				<div class="form-group m-form__group">
					<label for="exampleInputEmail1">Logo / Poster of Event:</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="e_imagepath" />
						<label class="custom-file-label" for="customFile">Choose Image</label>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		 <div class="m-portlet__foot m-portlet__foot--fit">
			<!-- <div class="m-form__actions m-form__actions"> -->
				<button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="reset" class="btn btn-secondary">Cancel</button>
			</div>
		<!-- </div> --> 
		</form>

		
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
