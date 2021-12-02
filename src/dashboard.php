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

<!-- general container div -->
<div class="general-container">
    <!-- container fluid and dashboard div -->
    <div class="container-fluid dashboard">

        <?php
            include "./includes/stuinfo.php";
            ?>


        <!-- heading row-->

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
        <!-- end of heading row -->

        <!-- start of second row -->
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
            <!-- end of col - 6 -->


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
            <!-- end of second col - 6 -->
        </div>
        <!-- end of second row -->

        <!-- start of third row -->
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
            <!-- end of row -->
            <?php
                include "./includes/othercourses.php";
                ?>
        </div>
    </div>
</div>

<?php
include "./includes/footer_section.php";
include "./includes/footer.php";