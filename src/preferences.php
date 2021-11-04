<?php
session_start();
$title = "Preferences";
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
        ?>
        <div class="row">

            <!-- content 1 -->
            <div class="col-12">
                <div class="card reusable-card">
                    <div class="card-body">
                        <h5 class="card-title">Expected Graduation Semester</h5>
                        <div class="row">
                            <form action="./includes/updategradsemester.php" method="post">
                            <div class="col-3">
                                <label for="year" class="formgray">Graduation year:</label>
                                <select name="year" id="year">
                                    <option value="null">Year</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="semester" class="formgray">Graduation year:</label>
                                <select name="semester" id="semester">
                                    <option value="null">Semester</option>
                                    <option value="FA">FA</option>
                                    <option value="SP">SP</option>
                                </select>
                            </div>
                                <div class="col-6">
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- content 2 -->
            <div class="col-12">
                <div class="card reusable-card">
                    <div class="card-body">
                        <h5 class="card-title">Manually Enter Courses</h5>
                        <div class="row">
                            <h3>Manually add courses that have been taken in the past if they are not available.</h3>
                                <form action="./includes/addcourse.php" method="post" id="addcourse">
                                    <div class="col-2">
                                        <label for="seccode" class="formgray">Section Code</label>
                                        <input type="text" name="seccode" id="seccode">
                                    </div>
                                    <div class="col-1">
                                        <label for="secnum" class="formgray">Section Number</label>
                                        <input type="text" name="secnum" id="secnum">
                                    </div>
                                    <div class="col-3">
                                        <label for="semester" class="formgray">Semester</label>
                                        <input type="text" name="semester" id="semester">
                                    </div>
                                    <div class="col-3">
                                        <label for="coursetitle" class="formgray">Title</label>
                                        <input type="text" name="coursetitle" id="coursetitle">
                                    </div>
                                    <div class="col-1">
                                        <label for="credit" class="formgray">Credit</label>
                                        <input type="text" name="credit" id="credit">
                                    </div>
                                    <div class="col-2">
                                        <input type="submit" value="Submit">
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
