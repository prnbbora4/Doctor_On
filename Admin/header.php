<?php
ob_start();
session_start();
include("inc/config.php");
include("inc/functions.php");
include("inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Check if the user is logged in or not
//if(!isset($_SESSION['uname'])) {
//	header('location: index.php');
//	exit;
//}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel -- Doctor On</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/on-off-switch.css"/>
	<link rel="stylesheet" href="css/summernote.css">
	<link rel="stylesheet" href="style.css">

</head>

<body class="hold-transition fixed  sidebar-mini skin-yellow">

	<div class="wrapper">

		<header class="main-header">

			<a href="mainpage.php" class="logo">
				<span class="logo-lg">Doctor On</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>
    <!-- Top Bar ... User Inforamtion .. Login/Log out Area -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--								<img src="../assets/uploads/--><?php //echo $_SESSION['user']['photo'];echo "?ts=".filemtime("../assets/uploads/". $_SESSION['user']['photo']); ?><!--" class="user-image" alt="User Image">-->
<!--								<span class="hidden-xs">--><?php //echo $_SESSION['user']['full_name']; ?><!--</span>-->
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div>
										<a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div>
										<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
  		<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>
<!-- Side Bar to Manage Shop Activities -->
  		<aside class="main-sidebar skin-yellow">
    		<section class="sidebar skin-yellow">
      
      			<ul class="sidebar-menu skin-yellow">

<!--			        <li class="treeview --><?php //if($cur_page == 'mainpage.php') {echo 'active';} ?><!--">-->
<!--			          <a href="mainpage.php">-->
<!--			            <i class="fa fa-hand-o-right"></i> <span>Dashboard</span>-->
<!--			          </a>-->
<!--			        </li>-->


                    <li class="treeview <?php if( ($cur_page == 'add_doctor.php') ) {echo 'active';} ?>">
                        <a href="add_doctor.php">
                            <i class="fa fa-hand-o-right"></i> <span>Add Doctor</span>
                        </a>
                    </li>

			        <li class="treeview <?php if( ($cur_page == 'show_doctor.php') ) {echo 'active';} ?>">
			          <a href="show_doctor.php">
			            <i class="fa fa-hand-o-right"></i> <span>Show Doctors</span>
			          </a>
			        </li>

                    <li class="treeview <?php if( ($cur_page == 'add_clinic.php') ) {echo 'active';} ?>">
			          <a href="add_clinic.php">
			            <i class="fa fa-hand-o-right"></i> <span>Add Clinic</span>
			          </a>
			        </li>

                    <li class="treeview <?php if( ($cur_page == 'show_clinic.php') ) {echo 'active';} ?>">
                        <a href="show_clinic.php">
                            <i class="fa fa-hand-o-right"></i> <span>Show Clinic</span>
                        </a>
                    </li>

                    <li class="treeview <?php if( ($cur_page == 'add_manager.php') ) {echo 'active';} ?>">
                        <a href="add_manager.php">
                            <i class="fa fa-hand-o-right"></i> <span>Add Manager</span>
                        </a>
                    </li>

                    <li class="treeview <?php if( ($cur_page == 'show_manager.php') ) {echo 'active';} ?>">
                        <a href="show_manager.php">
                            <i class="fa fa-hand-o-right"></i> <span>Show Manager</span>
                        </a>
                    </li>

			        <li class="treeview <?php if( ($cur_page == 'page.php') ) {echo 'active';} ?>">
			          <a href="page.php">
			            <i class="fa fa-hand-o-right"></i> <span>Assign Doctor to Clinic</span>
			          </a>
			        </li>

			        <li class="treeview <?php if( ($cur_page == 'social-media.php') ) {echo 'active';} ?>">
			          <a href="social-media.php">
			            <i class="fa fa-hand-o-right"></i> <span>Delete Doctor to Clinic</span>
			          </a>
			        </li>

                    <li class="treeview <?php if( ($cur_page == 'page.php') ) {echo 'active';} ?>">
                        <a href="page.php">
                            <i class="fa fa-hand-o-right"></i> <span>Assign Manager to Clinic</span>
                        </a>
                    </li>

                    <li class="treeview <?php if( ($cur_page == 'social-media.php') ) {echo 'active';} ?>">
                        <a href="social-media.php">
                            <i class="fa fa-hand-o-right"></i> <span>Delete Manager to Clinic</span>
                        </a>
                    </li>


      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">