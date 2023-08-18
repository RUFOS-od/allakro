<div class="outter-wp">
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<h2 class="inner-tittle">Bienvenue,
									<?php echo ucfirst($student_name_display['st_fullname']); ?>
								</h2>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i>
													<span>Information</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i>
													<span>Changer votre mot de Pass</span></a></li>
											<li><a href="#section-3" class="icon-food"><i class="fa fa-cutlery"></i>
													<span>Offre d'emploi</span></a></li>
											<li><a href="#section-4" class="icon-lab"><i class="fa fa-flask"></i>
													<span>Maladie & Epidémie</span></a></li>
											<!-- <li><a href="#section-5" class="icon-truck"><i class="fa fa-truck"></i>
													<span>Statut Résident</span></a></li> -->
										</ul>
									</nav>
									<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong> Informations Personel</strong>
												<p> <strong>Bienvenue</strong>,
													<?php echo ucfirst($student_name_display['st_fullname']); ?>
												</p>
												<p><strong>Statut: </strong>
													<?php echo ucfirst($student_name_display['st_grade']); ?>
												</p>
												<!-- <p><strong>Roll No: </strong>
													<?php echo ucfirst($student_name_display['roll_no']); ?>
												</p> -->
												<p><strong>Genre: </strong>
													<?php echo ucfirst($student_name_display['st_gender']); ?>
												</p>
												<p> <strong>Date de Naisssance:</strong>
													<?php echo ucfirst($student_name_display['st_dob']); ?>
												</p>

											</div>
											<div class="mediabox">
												<strong>Detail Contact</strong>

												<p> <strong>Adresse:</strong>
													<?php echo ucfirst($student_name_display['st_address']); ?>
												</p>
												<!-- <p> <strong>District:</strong>
													<?php echo ucfirst($student_name_display['st_district']); ?>
												</p> -->
												<p> <strong>CMU:</strong>
													<?php echo ucfirst($student_name_display['st_username']); ?>
												</p>
											</div>
											<div class="mediabox">
												<strong>Details des Parents</strong>
												<p><strong>Nom du Père: </strong>
													<?php echo ucfirst($student_name_display['st_father']); ?>
												</p>
												<p><strong>Nom de la Mère: </strong>
													<?php echo ucfirst($student_name_display['st_mother']); ?>
												</p>
												<p><strong> Contact des Parents: </strong>
													<?php echo ucfirst($student_name_display['st_parents_contact']); ?>
												</p>
											</div>
										</section>
										<section id="section-2">


											<div class="col-md-12">
												<?php
												if (isset($_POST['change_password'])) {

													$prev_password = $student_name_display['st_password'];
													$old_password = $_POST['old_password'];

													if ($prev_password != $old_password) {
														echo "<script>alert('Old Password Does not Matched');</script>";
													} else {
														$st_username = $student_name_display['st_username'];
														$st_password_update = $_POST['new_password'];
														$update_success = $ravi->student_password_change($st_password_update, $st_username);
														print_r($update_success);

														if ($update_success == true) {
															echo "<script>window.location = 'home.php?success';</script>";
														} else {
															echo "<script>alert('cant update password');</script>";
														}
													}

												}

												?>
												<form method="post">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class="fa fa-key"></i> </span>
														<input type="password" class="form-control1 icon"
															name="old_password" placeholder="Old Password">

													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class="fa fa-key"></i> </span>
														<input type="password" class="form-control1 icon"
															placeholder="New Password" name="new_password">

													</div>

													<input type="submit" name="change_password" class="a_demo_four"
														value="Change Password">
												</form>
											</div>
										</section>
										<section id="section-3">

											<div class="tables">

												<table class="table table-hover">
													<thead>
														<tr>
															<th>#</th>
															<!-- <th>Photo</th>  -->
															<th>Nom du proposant</th>
															<th>Adresse</th>
															<th>Email</th>
															<th>Le poste</th>
															<!-- <th>Pass</th> -->
															<th>Description</th>
															<!-- <th>Mother</th> -->
															<th>Date limite</th>
															<th>Domaine</th>
															<th>Contact</th>
															<!-- <th>Gender</th> -->
														</tr>
													</thead>
													<tbody>

														<?php $teacher_dis_admin = $ravi->teacher_info_display_admin();
														$t_sn = 1;
														while ($teacher_info_admin = $teacher_dis_admin->fetch_assoc()) {


															?>


															<tr>
																<th scope="row">
																	<?php echo $t_sn; ?>
																</th>
																<!-- <th></th> -->
																<td>
																	<?php echo $teacher_info_admin['t_fullname']; ?>
																</td>
																<td>
																	<?php echo $teacher_info_admin['t_address']; ?>
																</td>
																<td>
																	<?php echo $teacher_info_admin['t_email']; ?>
																</td>
																<td>
																	<?php echo $teacher_info_admin['t_username']; ?>
																</td>
																<!-- <td><?php echo $teacher_info_admin['t_pass']; ?></td> -->
																<td>
																	<?php echo $teacher_info_admin['t_father']; ?>
																</td>
																<!-- <td><?php echo $teacher_info_admin['t_mother']; ?></td> -->
																<td>
																	<?php echo $teacher_info_admin['t_dob']; ?>
																</td>
																<td>
																	<?php echo $teacher_info_admin['t_qualification']; ?>
																</td>
																<td>
																	<?php echo $teacher_info_admin['t_contact']; ?>
																</td>
																<!-- <td><?php echo $teacher_info_admin['t_gender']; ?></td> -->

															</tr>
															<?php $t_sn++;
														} ?>
													</tbody>
												</table>
											</div>

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
										<!-- <section id="section-5">
											<div class="mediabox">

											</div>
											<div class="mediabox">

											</div>
											<div class="mediabox">

											</div>
										</section> -->
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