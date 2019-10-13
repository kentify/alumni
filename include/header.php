<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>NORSU: Alumni Tracer System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="css/roboto.css" />
	<link rel="stylesheet" type="text/css" href="css/material-icon.css">
	<link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="css/material-icon.css">

	<!-- CSS Files -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/material-kit.css?v=1.2.1" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.toast.min.css">
    

</head>
<body class="index-page">
<div class="se-pre-con"></div>
	<nav class="navbar navbar-info navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="20">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="index.php"><img style="width: 50px;" src="img/norsu.png" alt="NORSU">&nbsp;&nbsp;<b style="padding-bottom: 3px;">Alumni</b>&nbsp;Tracer System	
        </a>
        	</div>

        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav navbar-center">
    				<li>
						<a href="#">
							<i class="material-icons">home</i> Home
						</a>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="material-icons">comment</i> News
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-with-icons">
							<li>
								<a href="news.php">
									<i class="material-icons">feedback</i> Latest News
								</a>
							</li>
							<li>
								<a href="">
									<i class="material-icons">notification_important</i> Announcements
								</a>
							</li>
							<li>
								<a href="">
									<i class="material-icons">work</i> Job Hiring
								</a>
							</li>
							<li>
								<a href="">
									<i class="material-icons">event</i> Events
								</a>
							</li>
							

						</ul>
					</li>

					<li>
						<a href="#">
							<i class="material-icons">info_outline</i> About
						</a>
					</li>
					<li>
						<a href="#">
							<i class="material-icons">call</i> Contact
						</a>
					</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<style type="text/css">
					.btn .material-icons {
						left: 13px !important;
					}
					.btn .badge {
						top: -8.5px;
						background-color: #dd4b39;
						font-size: 10px;
					}

					</style>
						<?php
						include 'db.php';
					    if(!isset($_SESSION['id'])){
					    echo '<li>';
					    echo '<a href="signin.php">';
						echo '<i class="material-icons">fingerprint</i> <span>Login</span></a>';
						echo '</li>';
						echo '<li>';
						echo '<a  href="signup.php">';
						echo '<i class="material-icons">portrait</i> <span>Register</span></a>';
						echo '</li>';	
						}else{
						echo '<li>
	                                <a href="#pablo" class="btn btn-simple btn-just-icon" data-toggle="dropdown">
	                                    <i class="material-icons" style="color:white; font-size:25px;">notifications</i>
	                                    <span class="badge">9+</span>
	                                </a>
	                                <ul class="dropdown-menu" style="width:300px;">
	                                    <li class="dropdown-header">
	                                        Notifications
	                                    </li>
	                                    <li class="divider"></li>
	                                    <li>
	                                        <a href="#pablo">&nbsp;Profile</a>
	                                    </li>
	                                    <li>
	                                     <a href="#pablo">&nbsp;Settings</a>
	                                    </li>
	                                    <li class="divider"></li>
	                                    <li  class="dropdown-header">
	                                       <a style="padding 5px;" align="center" href="">See all</a>
	                                    </li>
	                                </ul>
	                            </li>';
						echo '<li class="dropdown">
	                                <a style="border-radius: 50%; " href="#pablo" class="profile-photo dropdown-toggle" data-toggle="dropdown">
	                                    <div class="profile-photo-small">
	                                        <img src="img/'.$_SESSION["picture"].'" alt="Circle Image" class="img-circle img-responsive">

	                                    </div>
	                                </a>
	                                <ul class="dropdown-menu">
	                                    <li class="dropdown-header">
	                                        Account
	                                    </li>
	                                    <li>
	                                        <a href="#pablo"><i class="material-icons">account_circle</i>&nbsp;Profile</a>
	                                    </li>
	                                    <li>
	                                        <a href="#pablo"><i class="material-icons">settings</i>&nbsp;Settings</a>
	                                    </li>
	                                    <li class="divider"></li>
	                                    <li><a href="logout.php"><i class="material-icons">
											power_settings_new
										</i>&nbsp;Sign out</a></li>
	                                </ul>
	                            </li>';					
	                        }
						?>

        		</ul>
        	</div>
    	</div>
    </nav>
    