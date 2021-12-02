<?php
session_start();
$title = "Dashboard";
$user ='null';
$pass ='null';#Initialize so the ide doesn't yell, but this isn't strictly needed because they are imported from creds.php
include "./includes/redirect.php";
include "./includes/header.php";
include "./includes/main_nav_bar.php";
include "./includes/creds.php";
include "./includes/isfuture.php";
$email = $_SESSION["email"];
$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
?>

<!-- general container div -->
<div class="general-container">
    <!-- container fluid and dashboard div -->
    <div class="container-fluid dashboard">

        <?php
            include "./includes/stuinfo.php";
            $semester = "TRANSFER";
            include "./includes/othercourses.php";
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
                                include "./includes/coursespast.php";?>
<!--            end of heading row-->
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
                            <?php
            $semester = "2019WI";
            $semester2 = "2020SU";
            include "./includes/othercourses.php";
            ?>
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
            <?php
            $semester = "2020WI";
            $semester2 = "2021SU";
            include "./includes/othercourses.php";
            ?>
            <div class="row">
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
                $semester = "2021WI";
                $semester2 = "2022SU";
                include "./includes/othercourses.php";
                ?>
            <div class="row">

                <!-- content 1 -->
                <div class="col-6">
                    <div class="card reusable-card">
                        <div class="card-body">
                            <h5 class="card-title">Fall 2022</h5>
                            <div class="row">
                                <?php
                                $semester = '2022FA';
                                include "./includes/coursespast.php";
                                include "./includes/courseselect.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <div class="card reusable-card">
                        <div class="card-body">
                            <h5 class="card-title">Spring 2023</h5>
                            <div class="row">
                                <?php
                                $semester = '2023SP';
                                include "./includes/coursespast.php";
                                include "./includes/courseselect.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $semester = "2022WI";
            $semester2 = "2023SU";
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
</div>

<?php
include "./includes/footer_section.php";
include "./includes/footer.php";