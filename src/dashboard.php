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


            <?php
            include "./includes/stuinfo.php";
            $semester = "OTHER"
            ?>


<!--            end of heading row-->

<!--            #####################################################-->

<div class="row">

            <!-- content 1 -->
                <div class="col-6">
                    <div class="card reusable-card">
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
        <div class="card reusable-card">
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
                    <div class="card reusable-card">
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
                    <div class="card reusable-card">
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
                    <div class="card reusable-card">
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
                    <div class="card reusable-card">
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
                <?php
                include "./includes/othercourses.php";
                ?>

              <!--  <div class="col-2">
                    <div class="card welcome-card">
                        <div class="card-body">
                            <button type="button" class="btn btn-outline-primary btn-lg">Add</button>
                        </div>
                    </div>
                </div>
            </div>   -->
<!--    end of welcome card-->


        </div>
        </div>
    </div>

<?php
include "./includes/footer_section.php";
include "./includes/footer.php";
