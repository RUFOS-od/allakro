<div class="outter-wp">
	<!--/tabs-->
	<div class="tab-main">
		<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle">Bienvenue sur la section santé,
				<?php echo $meadmin_username_display['admin_username']; ?>
				</h2>
				<div class="graph">
					<nav>
						<ul>
							<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i>
									<span>Pharcie de proximité</span></a></li>
							<!-- <li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i>
									<span>Resultats</span></a></li> -->
							<li><a href="#section-3" class="icon-lab"><i class=""></i>
									<span>Les centres de santés proches</span></a></li>
							<li><a href="#section-4" class="icon-lab"><i class="fa fa-flask"></i>
									<span>Epidemies</span></a></li>
							<!-- <li><a href="#section-5" class="icon-truck"><i class="fa fa-truck"></i>
									<span>Order</span></a></li> -->
						</ul>
					</nav>
					<div class="content tab">
						<section id="section-1">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15888.668225031786!2d-3.9776489105147617!3d5.391495153596865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spharmacie%20de%20garde%20abidjan%20deux%20plateaux!5e0!3m2!1sfr!2sci!4v1692364090861!5m2!1sfr!2sci"
								width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</section>

						<section id="section-3">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d22018.07222200615!2d-4.005003402554123!3d5.367746035382681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scentre%20de%20sant%C3%A9%20et%20h%C3%B4pitaux%20abidjan%20deux%20plateaux!5e1!3m2!1sfr!2sci!4v1692364013223!5m2!1sfr!2sci"
								width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</section>
						<section id="section-4">

							<div class="graph">
								<div class="tables">

									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Type de maladie</th>
												<th>Nome de la maladie</th>
												<!-- <th>User Name</th> -->
											</tr>
										</thead>
										<tbody>
											<?php

											$subject_info_admins = $ravi->subject_info();
											$sub_sn = 1;
											while ($display_subject_admin = $subject_info_admins->fetch_assoc()) {
												?>
												<tr>
													<th scope="row">
														<?php echo $sub_sn; ?>
													</th>
													<td>
														<?php echo ucfirst($display_subject_admin['subject_name']); ?>
													</td>
													<td>
														<?php echo $display_subject_admin['t_fullname']; ?>
													</td>
													<!-- <td><?php echo $display_subject_admin['time']; ?></td>  -->
												</tr>
												<?php
												$sub_sn++;
											}


											?>

										</tbody>
									</table>
								</div>

							</div>


						</section>
						<section id="section-5">
							<div class="mediabox">

							</div>
							<div class="mediabox">

							</div>
							<div class="mediabox">

							</div>
						</section>
					</div>
					<!-- /content -->
				</div>
				<!-- /tabs -->

			</div>
			<script src="js/cbpFWTabs.js"></script>
			<script>
				new CBPFWTabs(document.getElementById('tabs'));
			</script>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//tabs-inner-->


	<!--custom-widgets-->
	<div class="custom-widgets">
		<div class="row-one">
			<div class="col-md-3 widget">
				<div class="stats-left ">
					<h5>Total</h5>
					<h4> Habitant</h4>
				</div>
				<div class="stats-right">
					<label>900</label>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 widget states-mdl">
				<div class="stats-left">
					<h5>Total</h5>
					<h4>Emplois</h4>
				</div>
				<div class="stats-right">
					<label> 85</label>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 widget states-thrd">
				<div class="stats-left">
					<h5>Total</h5>
					<h4>Pharmacies</h4>
				</div>
				<div class="stats-right">
					<label>51</label>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 widget states-last">
				<div class="stats-left">
					<h5>Total</h5>
					<h4>Hôpitaux</h4>
				</div>
				<div class="stats-right">
					<label>30</label>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//custom-widgets-->

	<!--/charts-->
	<div class="charts">
		<div class="chrt-inner">
			<!--//weather-charts-->
			<div class="graph-visualization">
				<div class="col-md-6 map-1">
					<h3 class="sub-tittle">Profile </h3>


				</div>
				<div class="col-md-6 map-2">
					<div class="profile-nav alt">
						<section class="panel">
							<div class="user-heading alt clock-row terques-bg">
								<h3 class="sub-tittle clock">Easy Clock </h3>
							</div>
							<ul id="clock">
								<li id="sec"></li>
								<li id="hour"></li>
								<li id="min"></li>
							</ul>



						</section>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>


		</div>
		<!--/charts-inner-->
	</div>
	<!--//outer-wp-->
</div>