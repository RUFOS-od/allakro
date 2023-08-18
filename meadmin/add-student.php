<?php

if (isset($_POST['std_add_now'])) {
	// $std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact
	$std_fullname = $_POST['std_fullname'];
	$std_username = $_POST['std_username'];
	$std_password = $_POST['std_password'];
	$std_grade = $_POST['std_grade'];
	//  $std_roll = $_POST['std_roll'];
	$std_dob = $_POST['std_dob'];
	$std_address = $_POST['std_address'];
	//  $std_district = $_POST['std_district'];
	$std_gender = $_POST['std_gender'];
	$std_father = $_POST['std_father'];
	$std_mother = $_POST['std_mother'];
	$std_parent_contact = $_POST['std_parent_contact'];

	if ($std_fullname == "" or $std_username == "" or $std_password == "" or $std_grade == "" or $std_gender == "" or $std_dob == "" or $std_address == "" or $std_father == "" or $std_mother == "" or $std_parent_contact == "") {
		echo "<script>alert('please fill form and Add Student');</script>";
	} else {

		$add_student_done = $ravi->add_student($std_fullname, $std_username, $std_password, $std_grade, $std_dob, $std_address, $std_gender, $std_father, $std_mother, $std_parent_contact);
		if ($add_student_done == true) {
			echo "<script>window.location = 'home.php?ravi=student-information';</script>";
		} else {
			echo "<script>alert('contact with developer');</script>";
		}

	}

}


?>

<div class="forms-main">

	<div class="graph-form">
		<div class="validation-form">
			<!---->
			<h2 align="center">
				<?php echo strtoupper($_GET['ravi']); ?>
			</h2>
			<form method="post">
				<div class="col-md-12 form-group1 group-mail">
					<label class="control-label">Nom complet</label>
					<input type="text" placeholder="Full Name" required="" name="std_fullname">
				</div>
				<div class="vali-form">


					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">Code CMU</label>
						<input type="text" placeholder="Username" required="" name="std_username">
					</div>

					<div class="col-md-6 form-group1">
						<label class="control-label">Mot de passe</label>
						<input type="text" placeholder="Password" required="" name="std_password">
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-6 form-group2 group-mail">
						<label class="control-label">Statut</label>
						<select name="std_grade">
							<option>Selection de statut</option>
							<option>Nouvelle Naissance</option>
							<option >Nouveau résident</option>
							<option>Ancien résident</option>
							<option>Décès</option>
						</select>

					</div>
					<div class="col-md-6 form-group1">
						<select id="selector1" class="form-control1" name="std_gender">
							<option>Select Gender</option>
							<option>Homme</option>
							<option>Femme</option>
						</select>
						<label class="control-label">Genre</label>
						<!-- <input type="text" placeholder="ex:Masculin ou Feminin" required="" name="std_gender"> -->
						<!-- <select id="selector1" class="form-control1" name="std_gender">
							<option>Select Gender</option>
							<option>Homme</option>
							<option>Femme</option> -->
						</select>
					</div>
					<div class="clearfix"> </div>
					<!-- <div class="col-md-6 form-group1">
						<label class="control-label">Roll</label>
						<input type="text" placeholder="Roll" required="" name="std_roll">
					</div> -->
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">Date d'anniversaire</label>
						<input type="text" placeholder="ex: 02 Juin 2021" required="" name="std_dob">
					</div>
					<div class="col-md-6 form-group1">
						<label class="control-label">Adresse</label>
						<input type="text" placeholder="Adresse" required="" name="std_address">
					</div>
					<!-- <div class="col-md-6 form-group1 form-last">
						<label class="control-label">District</label>
						<input type="text" placeholder="District" required="" name="std_district">
					</div> -->

					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">Père</label>
						<input type="text" placeholder="Nom du père" required="" name="std_father">
					</div>
					<div class="col-md-6 form-group1">
						<label class="control-label">Mère</label>
						<input type="text" placeholder="Nom de la mère" required="" name="std_mother">
					</div>
					<div class="col-md-12 form-group1 form-last">
						<label class="control-label">Contact d'un Parent </label>
						<input type="text" placeholder="Contact d'un Parent" required="" name="std_parent_contact">
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="col-md-12 form-group button-2">
					<input type="submit" class="btn btn-primary" value="Ajouter un habitant" name="std_add_now">
					<button type="reset" class="btn btn-default">Réinitialiser</button>
				</div>
				<div class="clearfix"> </div>
			</form>

			<!---->
		</div>

	</div>
</div>
<!--//forms-->