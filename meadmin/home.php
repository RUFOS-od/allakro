<?php
include "../setting/config.php";
session_start();
if (!$_SESSION['meadmin']) {
	header("location:index.php");
} else {
	$adminname = $_SESSION['meadmin'];
	$meadmin_username = $ravi->meadmin_username($adminname);
	$meadmin_username_display = $meadmin_username->fetch_assoc();
	$meadmin_info = $meadmin_username_display['admin_username'];
	$t_staff_type = $meadmin_username_display['t_staff_type'];
	$info = $ravi->teacher_info($adminname, $t_staff_type);
	// $info_display = $info->fetch_assoc();

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
	<title>Home Admin</title>
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
						<h1>Allakro</h1>
					</span>
					<!--<img id="logo" src="" alt="Logo"/>-->
				</a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
			<a href="index.html"><img src="images/cap.png" style="width: 100px; height:100px;"></a>
				<a href="index.php"><span class=" name-caret">
						<?php echo $meadmin_username_display['admin_username']; ?>
					</span></a>
				<p>Administrateur</p>
				<ul>
					<li><a class="tooltips" href="index.html"><span>Profil</span><i class="lnr lnr-user"></i></a></li>
					<li><a class="tooltips" href="index.html"><span>paramètre</span><i class="lnr lnr-cog"></i></a></li>
					<li><a class="tooltips" href="logouts.php"><span>Log out</span><i
								class="lnr lnr-power-switch"></i></a></li>
					
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
					<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Habitants</span> <span
								class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=student-information">Informations
									de l'habitant</a></li>
							<li id="menu-academico-boletim"><a href="home.php?ravi=add-student">Ajouter un Habitant</a>
							</li>
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=student-edit">Modifier
									les infoations d'un habitant</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=student-delete">Supprimer un Habitant</a></li>

						</ul>
					</li>


					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Emplois</span> <span
								class="fa fa-angle-right" style="float: right"></span></a>

						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-information">Afficher les
									emplois</a></li>
							<!-- <li id="menu-academico-avaliacoes"><a href="#">Afficher les emplois</a></li> -->
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-edit">Modifier
									l'emploi</a></li>
							<li id="menu-academico-boletim"><a href="home.php?ravi=teacher-add">Ajouter l'emplois</a>
							</li>
							<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-delete">Supprimer un
									emploi</a></li>

						</ul>
					</li>

					<!-- <li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Parents</span> <span
								class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="tabs.html">Parents Information</a></li>
						</ul>
					</li> -->
					
					<li id="menu-academico"><a href="home.php?ravi=sante"><i class="lnr lnr-chart-bars"></i> <span>Santé</span> <span
								class="fa fa-angle-right" style="float: right"></span></a>
						<!-- <ul>
							<li><a href="home.php?ravi=map"><i class="lnr lnr-map"></i> Pharmacie</a></li>
							<li><a href="https://www.google.com/maps/search/Centre+de+sant%C3%A9+et+h%C3%B4pitaux+abidjan+deux+plateaux/@5.3914953,-3.9776489,15z/data=!3m1!4b1?entry=ttu"><i class="lnr lnr-apartment"></i> Hôpitaux</a></li>
						</ul> -->
					</li>
					<!-- <li id="menu-academico"><a href="#"><i class="lnr lnr-book"></i> <span>List</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="#">Exam List</a></li>
							<li id="menu-academico-boletim"><a href="home.php?ravi=class-routine">Class Routine</a></li>
							<li id="menu-academico-boletim"><a href="404.html">Noticeboard</a></li>
							<li id="menu-academico-boletim"><a href="sign.html">Sign up</a></li>
							<li id="menu-academico-boletim"><a href="profile.html">Profile</a></li>
						</ul>
					</li> -->

					<li id="menu-comunicacao"><a href="home.php?ravi=project"><i class="fa fa-smile-o"></i> <span>Les projets actuels</span><span style="float: right"></span></a>
					</li>
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