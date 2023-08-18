<?php 

 $student_id = $_GET['studentid'];
 $edit_student_info = $ravi->edit_studentid($student_id);
	$edit_student_display = $edit_student_info->fetch_assoc();


if(isset($_POST['up_student']))
{
	
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
	
	$update_done = $ravi->update_student_info($std_fullname,$std_username,$std_password,$std_grade,$std_dob,$std_address,$std_gender,$std_father,$std_mother,$std_parent_contact,$student_id);
	if($update_done==true)
	{
		echo "<script>window.location='home.php?ravi=student-information';</script>";
	}
	else
	{
		echo "<script>alert(' update des Informations impossible');</script>";
	}
	

}

?>

<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">
				<!-- <?php if(isset($_GET['ravi'])){ echo strtoupper($page=$_GET['ravi']); } ?> -->
                Modifier les informations d'un habitant
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<!-- <?php echo strtoupper($_GET['ravi']); ?> -->
            Modifier les informations d'un habitant
		</h2>
        <div class="forms-main">

<div class="graph-form">
    <div class="validation-form">
        <!---->
        <!-- <h2 align="center">
            <?php echo strtoupper($_GET['ravi']); ?>
        </h2> -->

        <form method="post">
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Nom complet</label>
                <input type="text"  name="std_fullname" value="<?php echo $edit_student_display['st_fullname']; ?>">
            </div>
            <div class="vali-form">


                <div class="col-md-6 form-group1 form-last">
                    <label class="control-label">Code CMU</label>
                    <input type="text" placeholder="Username" required="" name="std_username" value="<?php echo $edit_student_display['st_username']; ?>">
                </div>

                <div class="col-md-6 form-group1">
                    <label class="control-label">Mot de passe</label>
                    <input type="text" placeholder="Password" required="" name="std_password" value="<?php echo $edit_student_display['st_password']; ?>">
                </div>
                <div class="clearfix"> </div>
                <div class="col-md-6 form-group2 group-mail">
                    <label class="control-label">Statut</label>
                    <select name="std_grade">
                        <option ><?php echo $edit_student_display['st_grade']; ?></option>
                        <option>Nouvelle Naissance</option>
                        <option >Nouveau résident</option>
                        <option>Ancien résident</option>
                        <option>Décès</option>
                    </select>

                </div>
                <div class="col-md-6 form-group1">
                <label class="control-label">Genre</label>
                    <select id="selector1" class="form-control1" name="std_gender">
                        <option ><?php echo $edit_student_display['st_gender']; ?></option>
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
                    
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
                    <input type="text" placeholder="ex: 02 Juin 2021" required="" name="std_dob" value="<?php echo $edit_student_display['st_dob']; ?>">
                </div>
                <div class="col-md-6 form-group1">
                    <label class="control-label">Adresse</label>
                    <input type="text" placeholder="Adresse" required="" name="std_address" value="<?php echo $edit_student_display['st_address']; ?>">
                </div>
                <!-- <div class="col-md-6 form-group1 form-last">
                    <label class="control-label">District</label>
                    <input type="text" placeholder="District" required="" name="std_district">
                </div> -->

                <div class="col-md-6 form-group1 form-last">
                    <label class="control-label">Père</label>
                    <input type="text" placeholder="Nom du père" required="" name="std_father" value="<?php echo $edit_student_display['st_father']; ?>">
                </div>
                <div class="col-md-6 form-group1">
                    <label class="control-label">Mère</label>
                    <input type="text" placeholder="Nom de la mère" required="" name="std_mother" value="<?php echo $edit_student_display['st_mother']; ?>">
                </div>
                <div class="col-md-12 form-group1 form-last">
                    <label class="control-label">Contact d'un Parent </label>
                    <input type="text" placeholder="Contact d'un Parent" required="" name="std_parent_contact" value="<?php echo $edit_student_display['st_parents_contact']; ?>">
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="up_student">Update  Profile</button> </div>
            <div class="clearfix"> </div>
        </form>

        <!---->
    </div>

</div>
</div>