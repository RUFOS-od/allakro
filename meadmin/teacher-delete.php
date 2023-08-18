<?php
// $teacher_id = $_GET['teacherid'];
// $delete_teacher_info = $ravi->delete_teacher($del_teacher);
//    $delete_teacher_display = $delete_teacher_info->fetch_assoc();

if(isset($_POST['delete']))
{
   
	require_once('./setting/config.php');

//    $up_fullname = $_POST['up_fullname'];
//    $up_address = $_POST['up_address'];
//    $up_email = $_POST['up_email'];
//    $up_father = $_POST['up_father'];
//    $up_mother = $_POST['up_mother'];
//    $up_dob = $_POST['up_dob'];
//    $up_qualification = $_POST['up_qualification'];
//    $up_contact = $_POST['up_contact'];
//    $up_staff = $_POST['up_staff'];
//    $up_gender = $_POST['up_gender'];
   
   $delete_done = $ravi->delete_teacher($del_teacher);
   if($delete_done==true)
   {
	   echo "<script>window.location='home.php?ravi=teacher-information';</script>";
   }
   else
   {
	   echo "<script>alert('Cant update Information');</script>";
   }
   

}


?>

<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">
				<?php if (isset($_GET['teacher'])) {
					echo strtoupper($page = $_GET['teacher']);
				} ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<!-- <?php echo strtoupper($_GET['teacher']); ?> -->
			Supprimer un emplois
		</h2>


		<div class="tables">


			<table class="table table-bordered ">

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
						<th>Action</th>
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
							<!-- <td>
								<?php echo $teacher_info_admin['t_pass']; ?>
							</td> -->
							<td>
								<?php echo $teacher_info_admin['t_father']; ?>
							</td>
							<!-- <td>
								<?php echo $teacher_info_admin['t_mother']; ?>
							</td> -->
							<td>
								<?php echo $teacher_info_admin['t_dob']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_qualification']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_contact']; ?>
							</td>
							<!-- <td>
								<?php echo $teacher_info_admin['t_gender']; ?>
							</td> -->
							<td>

								<!-- <button type="submit" name = "delete" class="btn red"> Delete </button> -->
								<a href="home.php?teacher=teacher-del&teacherid=<?php echo $teacher_info_admin['t_id']; ?>"
									class="btn red" name = "delete">Delete</a>
							</td>
						</tr>
						<?php $t_sn++;
					} ?>
				</tbody>

			</table>

		</div>
	</div>


</div>
<!--//graph-visual-->