<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Maps :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
	<script src="js/jquery-1.10.2.min.js"></script>
	<!-- map -->
	<link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery.vmap.js"></script>
	<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery('#vmap').vectorMap({
				map: 'world_en',
				backgroundColor: '#f4f4f4',
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#052963',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: ['#052963', '#07A3B1'],
				normalizeFunction: 'polynomial'
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery('#vmap1').vectorMap({
				map: 'world_en',
				backgroundColor: '#f4f4f4',
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#666666',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: ['#fcb314', '#ea4c89'],
				normalizeFunction: 'polynomial'
			});
		});
	</script>
	<!-- map -->

</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">
					<!--menu-right-->
					<div class="top_menu">
						<div class="main-search">
							<form>
								<input type="text" value="Search" onFocus="this.value = '';"
									onBlur="if (this.value == '') {this.value = 'Search';}" class="text" />
								<input type="submit" value="" />
							</form>
							<div class="close"><img src="images/cross.png" /></div>
						</div>
						<div class="srch"><button></button></div>
						<script type="text/javascript">
							$('.main-search').hide();
							$('button').click(function () {
								$('.main-search').show();
								$('.main-search text').focus();
							}
							);
							$('.close').click(function () {
								$('.main-search').hide();
							});
						</script>
						<!--/profile_details-->
						<div class="profile_details_left">
							<ul class="nofitications-dropdown">
								<li class="dropdown note dra-down">
									<div id="dd" class="wrapper-dropdown-3" tabindex="1">
										<span>Italy</span>
										<ul class="dropdown">
											<li><a class="deutsch">France</a></li>
											<li><a class="english"> Italy</a></li>
											<li><a class="espana">Brazil</a></li>
											<li><a class="russian">Usa</a></li>

										</ul>
									</div>
									<script type="text/javascript">

										function DropDown(el) {
											this.dd = el;
											this.placeholder = this.dd.children('span');
											this.opts = this.dd.find('ul.dropdown > li');
											this.val = '';
											this.index = -1;
											this.initEvents();
										}
										DropDown.prototype = {
											initEvents: function () {
												var obj = this;

												obj.dd.on('click', function (event) {
													$(this).toggleClass('active');
													return false;
												});

												obj.opts.on('click', function () {
													var opt = $(this);
													obj.val = opt.text();
													obj.index = opt.index();
													obj.placeholder.text(obj.val);
												});
											},
											getValue: function () {
												return this.val;
											},
											getIndex: function () {
												return this.index;
											}
										}

										$(function () {

											var dd = new DropDown($('#dd'));

											$(document).click(function () {
												// all dropdowns
												$('.wrapper-dropdown-3').removeClass('active');
											});

										});

									</script>


								</li>

								<li class="dropdown note">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
											class="fa fa-envelope-o"></i> <span class="badge">3</span></a>


									<ul class="dropdown-menu two first">
										<li>
											<div class="notification_header">
												<h3>You have 3 new messages </h3>
											</div>
										</li>
										<li><a href="#">
												<div class="user_img"><img src="images/1.jpg" alt=""></div>
												<div class="notification_desc">
													<p>Lorem ipsum dolor sit amet</p>
													<p><span>1 hour ago</span></p>
												</div>
												<div class="clearfix"></div>
											</a></li>
										<li class="odd"><a href="#">
												<div class="user_img"><img src="images/in.jpg" alt=""></div>
												<div class="notification_desc">
													<p>Lorem ipsum dolor sit amet </p>
													<p><span>1 hour ago</span></p>
												</div>
												<div class="clearfix"></div>
											</a></li>
										<li><a href="#">
												<div class="user_img"><img src="images/in1.jpg" alt=""></div>
												<div class="notification_desc">
													<p>Lorem ipsum dolor sit amet </p>
													<p><span>1 hour ago</span></p>
												</div>
												<div class="clearfix"></div>
											</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all messages</a>
											</div>
										</li>
									</ul>
								</li>

								<li class="dropdown note">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
											class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="user_img"><img src="images/in.jpg" alt=""></div>
												<div class="notification_desc">
													<p>Lorem ipsum dolor sit amet</p>
													<p><span>1 hour ago</span></p>
												</div>
												<div class="clearfix"></div>
											</a></li>
										<li class="odd"><a href="#">
												<div class="user_img"><img src="images/in5.jpg" alt=""></div>
												<div class="notification_desc">
													<p>Lorem ipsum dolor sit amet </p>
													<p><span>1 hour ago</span></p>
												</div>
												<div class="clearfix"></div>
											</a></li>
										<li><a href="#">
												<div class="user_img"><img src="images/in8.jpg" alt=""></div>
												<div class="notification_desc">
													<p>Lorem ipsum dolor sit amet </p>
													<p><span>1 hour ago</span></p>
												</div>
												<div class="clearfix"></div>
											</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div>
										</li>
									</ul>
								</li>
								<li class="dropdown note">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
											class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span
														class="percentage">40%</span>
													<div class="clearfix"></div>
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
										<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span
														class="percentage">90%</span>
													<div class="clearfix"></div>
												</div>

												<div class="progress progress-striped active">
													<div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
										<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span
														class="percentage">33%</span>
													<div class="clearfix"></div>
												</div>
												<div class="progress progress-striped active">
													<div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
										<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span
														class="percentage">80%</span>
													<div class="clearfix"></div>
												</div>
												<div class="progress progress-striped active">
													<div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div>
										</li>
									</ul>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
						<div class="clearfix"></div>
						<!--//profile_details-->
					</div>
					<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
				<!-- //header-ends -->
				<!--/outer-wp-->
				<div class="outter-wp">
					<!--sub-heard-part-->
					<div class="sub-heard-part">
						<ol class="breadcrumb m-b-0">
							<li><a href="index.html">Home</a></li>
							<li class="active">Maps</li>
						</ol>
					</div>
					<!--//sub-heard-part-->
					<!--/graph-visual-->
					<div class="graph-visual">
						<h2 class="inner-tittle">Map Visualization </h2>
						<div class="graph">
							<div class="map_container">
								<div id="vmap" style="width: 100%; height: 585px;"></div>
							</div>

						</div>
						<div class="map-inner">
							<div class="col-md-6 graph-2">
								<h3 class="inner-tittle two">Data Visualization </h3>
								<div class="grid-1">
									<div class="map_container">
										<div id="vmap1" style="width: 100%; height:350px;"></div>
									</div>

								</div>
							</div>
							<div class="col-md-6 graph-2 second">
								<h3 class="inner-tittle two">Interactive Map </h3>
								<div class="grid-1">
									<div id="container10" style="height:350px; width:600px"></div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						`<div class="clearfix"></div>
						<div class="map-bottm">
							<h3 class="inner-tittle two"> Default Map</h3>
							<div class="graph">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6056558.454375799!2d13.59848807125107!3d42.16517993416346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1453718837836"
									allowfullscreen></iframe>
							</div>
						</div>
						<div class="clearfix"></div>

					</div>
					<!--/graph-visual-->

				</div>
				<!--//outer-wp-->
				<!--footer section start-->
				<footer>
					<p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/"
							target="_blank">W3layouts.</a></p>
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
						<h1>Augment</h1>
					</span>
					<!--<img id="logo" src="" alt="Logo"/>-->
				</a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
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
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html">
							<span id="logo">
								<h1>Allakro</h1>
							</span>
							<!--<img id="logo" src="" alt="Logo"/>-->
						</a>
					</header>
					<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
					<!--/down-->
					<div class="down">
						<a href="index.html"><img src="images/admin.jpg"></a>
						<a href="index.php"><span class=" name-caret">
								<?php echo $info_display['t_fullname']; ?>
							</span></a>
						<p>Administrateur</p>
						<ul>
							<li><a class="tooltips" href="index.html"><span>Profil</span><i
										class="lnr lnr-user"></i></a></li>
							<li><a class="tooltips" href="index.html"><span>paramètre</span><i
										class="lnr lnr-cog"></i></a></li>
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
									<li id="menu-academico-avaliacoes"><a
											href="home.php?ravi=student-information">Informations
											de l'habitant</a></li>
									<li id="menu-academico-boletim"><a href="home.php?ravi=add-student">Ajouter un
											Habitant</a>
									</li>
									<li id="menu-academico-avaliacoes"><a href="home.php?ravi=student-edit">Modifier
											les infoations d'un habitant</a></li>
									<li id="menu-academico-avaliacoes"><a href="home.php?ravi=student-delete">Supprimer
											un Habitant</a></li>

								</ul>
							</li>


							<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Emplois</span>
									<span class="fa fa-angle-right" style="float: right"></span></a>

								<ul id="menu-academico-sub">
									<li id="menu-academico-avaliacoes"><a
											href="home.php?ravi=teacher-information">Afficher les
											emplois</a></li>
									<!-- <li id="menu-academico-avaliacoes"><a href="#">Afficher les emplois</a></li> -->
									<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-edit">Modifier
											l'emploi</a></li>
									<li id="menu-academico-boletim"><a href="home.php?ravi=teacher-add">Ajouter
											l'emplois</a>
									</li>
									<li id="menu-academico-avaliacoes"><a href="home.php?ravi=teacher-delete">Supprimer
											un
											emploi</a></li>

								</ul>
							</li>

							<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Parents</span>
									<span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub">
									<li id="menu-academico-avaliacoes"><a href="tabs.html">Parents Information</a></li>
								</ul>
							</li>
							<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Settings</span>
									<span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub">
									<li id="menu-academico-avaliacoes"><a
											href="home.php?ravi=general-information">General
											Information</a></li>
									<li id="menu-academico-avaliacoes"><a
											href="home.php?ravi=edit-general-information">Edit
											General Information</a></li>
									<!-- <li id="menu-academico-avaliacoes"><a href="tabs.html">Role</a></li> -->
								</ul>
							</li>
							<li id="menu-academico"><a href="chart.html"><i class="lnr lnr-chart-bars"></i>
									<span>Santé</span> <span class="fa fa-angle-right" style="float: right"></span></a>
								<ul>
									<li><a href="map.html"><i class="lnr lnr-map"></i> Pharmacie</a></li>
									<li><a href="graph.html"><i class="lnr lnr-apartment"></i> Hôpitaux</a></li>
								</ul>
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

							<li id="menu-comunicacao"><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span
										class="fa fa-angle-double-right" style="float: right"></span></a>
								<ul id="menu-comunicacao-sub">
									<li id="menu-mensagens" style="width:120px"><a href="project.html">Projects <i
												class="fa fa-angle-right"
												style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
										<!-- <ul id="menu-mensagens-sub">
											<li id="menu-mensagens-enviadas" style="width:130px"><a href="ribbon.html">Ribbons</a></li>
										
										</ul> -->
									</li>

								</ul>
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
			<script src="js/jquery.nicescroll.js"></script>
			<script src="js/scripts.js"></script>
			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>
</body>

</html>