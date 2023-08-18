<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Acceuil</a></li>
			<li class="active">
				<?php if (isset($_GET['ravi'])) {
					echo strtoupper($page = $_GET['ravi']);
				} ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<!-- <h2 class="inner-tittle"><?php echo strtoupper($_GET['ravi']); ?></h2> -->
		<h2>Information des Habitants</h2>

		<form method="post">
			<select name="class_students_data" id="selector1" class="form-control1">
				<option>Selection de statut</option>
				<option>Nouvelle Naissance</option>
				<option>Nouveau résident</option>
				<option>Ancien résident</option>
				<option>Décès</option>

			</select>
			<input type="submit" name="students_info" class="btn red" value="View Class Data">
		</form>
		<?php

		if (isset($_POST['students_info'])) {
			$class_students_data = $_POST['class_students_data'];
			$student_dis_admin = $ravi->student_info_display_admin($class_students_data);
			$s_sn = 1;


			?>


			<div class="graph">
				<div class="tables">

					<table class="table table-bordered ">

						<thead>
							<tr>
								<th>#</th>
								<th>Photo</th>
								<th>Nom et Prnoms</th>
								<th>Address</th>
								<th>Coce CMU</th>
								<th>Mot de passe</th>
								<th>Père</th>
								<th>Mère</th>
								<th>Date Anniv</th>
								<th>Statut</th>
								<th>Contact</th>
								<th>Genre</th>
							</tr>
						</thead>
						<tbody>





							<?php
							if ($student_dis_admin->num_rows > 0) {


								while ($student_info_admin = $student_dis_admin->fetch_assoc()) { ?>

									<tr>
										<td>
											<?php echo $s_sn; ?>
										</td>
										<td></td>
										<td>
											<?php echo $student_info_admin['st_fullname']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_address']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_username']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_password']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_father']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_mother']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_dob']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_grade'] ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_parents_contact']; ?>
										</td>
										<td>
											<?php echo $student_info_admin['st_gender']; ?>
										</td>
									</tr>
									<?php $s_sn++;
								}
							} else {
								?>
								<td colspan="12">Aucun habitant trouvé
								</td>
								<?php
							}
		} ?>
					</tbody>

				</table>
			</div>
		</div>


	</div>
	<!--//graph-visual-->
</div>