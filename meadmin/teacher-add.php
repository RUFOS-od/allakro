<?php


if (isset($_POST['add_teacher_info'])) {
	//$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	$add_t_fullname = $_POST['add_t_fullname'];
	$add_t_address = $_POST['add_t_address'];
	$add_t_email = $_POST['add_t_email'];
	$add_t_username = $_POST['add_t_username'];
	// $add_t_pass = $_POST['add_t_pass'];
	$add_t_father = $_POST['add_t_father'];
	// $add_t_mother = $_POST['add_t_mother'];
	$add_t_dob = $_POST['add_t_dob'];
	$add_t_qualification = $_POST['add_t_qualification'];
	$add_t_contact = $_POST['add_t_contact'];
	// $add_t_staff = $_POST['add_t_staff'];
	// $add_t_gender = $_POST['add_t_gender'];
	if ($add_t_fullname == "" or $add_t_address == "" or $add_t_email == "" or $add_t_username == "" or $add_t_father == "" or $add_t_dob == "" or $add_t_qualification == "" or $add_t_contact == "" ) {
		echo "<script>alert('Some Field are missing....');</script>";
	} else {


		$add_done = $ravi->add_teacher($add_t_fullname, $add_t_address, $add_t_email, $add_t_username, $add_t_father, $add_t_dob, $add_t_qualification, $add_t_contact);
		if ($add_done == true) {
			echo "<script>window.location='home.php?teacher=teacher-information';</script>";
		} else {
			echo "<script>alert('unsuccess add teacher information');</script>";
		}
	}
}

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Acceuil</a></li>
			<li class="active">
				<!-- <?php if (isset($_GET['teacher'])) {
					echo strtoupper($page = $_GET['teacher']);
				} ?> -->
				Ajouter un emploi
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<!-- <h2 class="inner-tittle">
			<?php echo strtoupper($_GET['teacher']); ?>
		</h2> -->
		<h2>Section d'ajout Emplois</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Nom du proposant</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"
								name="add_t_fullname" placeholder="Nom complet"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Adresse</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"
								name="add_t_address" placeholder="Adresse de l'employeur"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_email"
								placeholder="Email"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Le poste</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_username"
								placeholder="Le poste recherché"> </div>

					</div>
					<!-- <div class="form-group"> <label for="address" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-9"> <input type="password" class="form-control" name="add_t_pass"
								placeholder="Password"> </div>

					</div> -->
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_father"
								placeholder="Description du poste"> </div>

					</div>
					<!-- <div class="form-group"> <label for="address" class="col-sm-2 control-label">Mother</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_mother"
								placeholder="Mother Name"> </div>

					</div> -->
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Date limite</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_dob"
								placeholder="Date limite"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Domaine</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_qualification"
								placeholder="Domaine"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_contact"
								Placeholder="Contact Number"> </div>

					</div>
					<!-- <div class="form-group"> <label for="address" class="col-sm-2 control-label">Staff Type</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_staff"
								placeholder="Staff Type"> </div>

					</div> -->
					<!-- <div class="form-group">


						<select id="selector1" class="form-control1" name="add_t_gender">
							<option>Select Gender</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div> -->


					<div class="col-sm-offset-2">
						<input type="submit" class="btn btn-default" name="add_teacher_info" value="Add Teacher Info">
					</div>
				</form>
			</div>

		</div>


	</div>