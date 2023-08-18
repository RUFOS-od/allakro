<?php
include "../setting/config.php";
session_start();
if (!$_SESSION['st_user']) {

	header("location:index.php");
} else {
	$st_username = $_SESSION['st_user'];
	$st_name = $ravi->student_info_select($st_username);

	$student_name_display = $st_name->fetch_assoc();
}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
		type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>

	<!--//skycons-icons-->
</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">

					<div class="clearfix"></div>
				</div>
				<!-- //header-ends -->

				<?php



				$homepage = "home1";
				if (isset($_GET['ravi'])) {
					$homepage = $_GET['ravi'];
				}
				include $homepage . ".php";



				?>






				<!--footer section start-->
				<footer>
					<p>&copy 2018 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/"
							target="_blank">UVCI.</a> and PCT Groupe 3</p>
				</footer>
				<!--footer section end-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span
						id="logo">
						<h1>AllakroSite</h1>
					</span>
					<!--<img id="logo" src="" alt="Logo"/>-->
				</a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<a href="index.html"><img src="images/cap.png" style="width: 100px; height:100px;"></a>
				<a href="index.html"><span class=" name-caret">
						<?php echo $student_name_display['st_fullname']; ?>
					</span></a>
				<p>Student</p>
				<ul>
					<li><a class="tooltips" href="index.html"><span>Profil</span><i class="lnr lnr-user"></i></a></li>
					<li><a class="tooltips" href="index.html"><span>Paramètre</span><i class="lnr lnr-cog"></i></a></li>
					<li><a class="tooltips" href="logouts.php"><span>Log out</span><i
								class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
					<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span> Espaces Découverte</span>
							<span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=decouverte"> Que faire ?</a></li>

						</ul>
						<!--</li>
					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="forms.html">Forms</a></li>
							<li id="menu-academico-boletim"><a href="validation.html">Validation Forms</a></li>
							<li id="menu-academico-boletim"><a href="table.html">Tables</a></li>
							<li id="menu-academico-boletim"><a href="buttons.html">Buttons</a></li>
						</ul>
					</li>-->
						<!--<li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
					<li id="menu-academico"><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="login.html">Login</a></li>
							<li id="menu-academico-boletim"><a href="register.html">Register</a></li>
							<li id="menu-academico-boletim"><a href="404.html">404</a></li>
							<li id="menu-academico-boletim"><a href="sign.html">Sign up</a></li>
							<li id="menu-academico-boletim"><a href="profile.html">Profile</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
						<ul>
							<li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
							<li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
							<li><a href="editor.html"><span class="lnr lnr-highlight"></span> Editors Page</a></li>

						</ul>
					</li>-->
					<li id="menu-academico"><a href="#"><i class="lnr lnr-layers"></i> <span>Nos Infos en direct</span> <span
								class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<!--<li id="menu-academico-avaliacoes"><a href="grids.html">Grids</a></li>-->
							<li id="menu-academico-boletim"><a href="media.html">Journal</a></li>
						</ul>
					</li>
					<li id="menu-academico-avaliacoes"><a href="home.php?ravi=calender">Mon calendrier</a></li>
					<li><a href="home.php?ravi=sante"><i class="lnr lnr-chart-bars"></i> <span>Santé</span> <span></span></a>
					
					</li>
					<li id="menu-academico-avaliacoes"><a href="home.php?ravi=project">Nos projects</a></li>
				
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function () {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function () {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<link rel="stylesheet" href="css/vroom.css">
	<script type="text/javascript" src="js/vroom.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>