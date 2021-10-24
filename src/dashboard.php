<?php
session_start();
$title = "Dashboard";
$user ='null';
$pass ='null';#Initialize so the ide doesn't yell, but this isn't strictly needed because they are imported from creds.php
include "./includes/redirect.php";
include "./includes/header.php";
include "./includes/main_nav_bar.php";
include "./includes/creds.php";
$email = $_SESSION["email"];
$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
?>


    <div class="general-container">
        <div class="container-fluid dashboard">


            <div class="row">
                <div class="col-12 dashboard_heading">
                    <div class='row'>
                        <div class="col">
                            <?php
                            echo'<h2 class="">';
                            $query = oci_parse($database, "select unique s.s_name from STUDENT s where s.s_email = :email");
                            oci_bind_by_name($query,":email", $email);
                            oci_execute($query);
                            while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                foreach ($row as $item){
                                    echo($item);
                                }
                            }
                            echo'</h2>';
                            ?>
                        </div>
                        <div class="col">
                            <h3>Major:</h3>
                            <p>
                            <?php
                            $query = oci_parse($database, "select unique m.sm_major from STUDENT s, STU_MAJ m where s.s_email = :email and s.s_id = m.sm_stid");
                            oci_bind_by_name($query,":email", $email);
                            oci_execute($query);
                            while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                foreach ($row as $item){
                                    echo($item);
                                }
                            }
                            echo'</p>';
                            ?>
                        </div>
                        <div class="col">
                            <h3>Expected Graduation Date:</h3>
                            <p>1/4/20</p>
                        </div>

                    </div>
                </div>
            </div>


<!--            end of heading row-->

<!--            #####################################################-->

<div class="row">

            <!-- content 1 -->
                <div class="col-6">
                    <div class="card welcome-card">
                        <div class="card-body">
                            <h5 class="card-title">Fall 2019</h5>
                            <div class="row">
                                <?php
                                    $semester = '2019FA';
                                    include "./includes/coursespast.php";
                                ?>
                        </div>
                        </div>
                    </div>
                </div>


    <div class="col-6">
        <div class="card welcome-card">
            <div class="card-body">
                <h5 class="card-title">Spring 2020</h5>
                <div class="row">
                    <?php
                    $semester = '2020SP';
                    include "./includes/coursespast.php";
                    ?>
                </div>
            </div>
        </div>
    </div>


</div>
            <div class="row">

                <!-- content 1 -->
                <div class="col-6">
                    <div class="card welcome-card">
                        <div class="card-body">
                            <h5 class="card-title">Fall 2020</h5>
                            <div class="row">
                                <?php
                                $semester = '2020FA';
                                include "./includes/coursespast.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <div class="card welcome-card">
                        <div class="card-body">
                            <h5 class="card-title">Spring 2021</h5>
                            <div class="row">
                                <?php
                                $semester = '2021SP';
                                include "./includes/coursespast.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">

                <!-- content 1 -->
                <div class="col-6">
                    <div class="card welcome-card">
                        <div class="card-body">
                            <h5 class="card-title">Fall 2021</h5>
                            <div class="row">
                                <?php
                                $semester = '2021FA';
                                include "./includes/coursespast.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <div class="card welcome-card">
                        <div class="card-body">
                            <h5 class="card-title">Spring 2022</h5>
                            <div class="row">
                                <?php
                                $semester = '2022SP';
                                include "./includes/coursespast.php";
                                include "./includes/courseselect.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
<!--    end of welcome card-->


        </div>
        </div>


<?php
include "./includes/footer_section.php";
include "./includes/footer.php";
