<?php



?>

<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="index.html">Home</a></li>
            <li class="active">
                <?php if (isset($_GET['student'])) {
                    echo strtoupper($page = $_GET['student']);
                } ?>
            </li>
        </ol>
    </div>
    <!--//sub-heard-part-->
    <div class="graph-visual tables-main">
        <h2 class="inner-tittle">
            <!-- <?php echo strtoupper($_GET['student']); ?> -->
            Supprimer un habitant
        </h2>


        <div class="tables">


            <table class="table table-bordered ">

                <thead>
                    <tr>
                        <th>#</th>
                        <!-- <th>Photo</th> -->
                        <th>Nom et Prnoms</th>
                        <th>Address</th>
                        <th>Coce CMU</th>
                        <!-- <th>Mot de passe</th> -->
                        <!-- <th>Père</th> -->
                        <!-- <th>Mère</th> -->
                        <!-- <th>Date Anniv</th> -->
                        <th>Statut</th>
                        <th>Contact</th>
                        <th>Genre</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $student_dis_admin = $ravi->st_info_display_admin();
                    $t_sn = 1;
                    while ($student_info_admin = $student_dis_admin->fetch_assoc()) {


                        ?>


                        <tr>
                            <th scope="row">
                                <?php echo $t_sn; ?>
                            </th>
                            <!-- <th></th> -->
                            <td>
                                <?php echo $student_info_admin['st_fullname']; ?>
                            </td>
                            <td>
                                <?php echo $student_info_admin['st_address']; ?>
                            </td>
                            <td>
                                <?php echo $student_info_admin['st_username']; ?>
                            </td>
                            <!-- <td>
                                <?php echo $student_info_admin['st_password']; ?>
                            </td> -->
                            <!-- <td>
                                <?php echo $student_info_admin['st_father']; ?>
                            </td> -->
                            <!-- <td>
                                <?php echo $student_info_admin['st_mother']; ?>
                            </td> -->
                            <!-- <td>
                                <?php echo $student_info_admin['st_dob']; ?>
                            </td> -->
                            <td>
                                <?php echo $student_info_admin['st_grade'] ?>
                            </td>
                            <td>
                                <?php echo $student_info_admin['st_parents_contact']; ?>
                            </td>
                            <td>
                                <?php echo $student_info_admin['st_gender']; ?>
                            </td>
                            <td>

                                <a href="home.php?student=student-del&studentid=<?php echo $student_info_admin['st_id']; ?>"
                                    class="btn red">Delete</a>
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