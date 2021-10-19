<?php
session_start();
$title = "Dashboard";
include "./includes/redirect.php";
include "./includes/header.php";
include "./includes/main_nav_bar.php";
?>
<div class="general-container">
    <div class="container-fluid dashboard">
        <div class="row">
            <div class="col-12 dashboard_heading">
                <div class='row'>
                    <div class="col">
                        <h2 class="">John doe</h2>
                    </div>
                    <div class="col">
                        <h3>Major:</h3>
                        <p>Computer Science</p>
                    </div>
                    <div class="col">
                        <h3>Expected Graduation Date:</h3>
                        <p>1/4/20</p>
                    </div>

                </div>
            </div>
            <div class="welcome-card">
                <div class="row">
                    <!-- content 1 -->
                    <div class="col-6">
                        <div class="card welcome-card">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Fall 2019</h5>
                                <!-- first row -->
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-2">
                                        <p>CSC</p>
                                    </div>
                                    <!-- code here -->
                                    <div class="col-2">
                                        <p>463</p>
                                    </div>
                                    <!-- title -->
                                    <div class="col-6">
                                        <p>Intro to programing</p>
                                    </div>
                                    <!-- hours -->
                                    <div class="col-1">
                                        <p>3</p>
                                    </div>
                                    <!-- delete button -->
                                    <div class="col-1">
                                        <p>
                                            <button type="button" class="btn btn-danger">X</button>
                                        </p>

                                    </div>

                                </div>

                                <!-- end of first row -->

                                <!-- second row -->
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-2">
                                        <p>CSC</p>
                                    </div>
                                    <!-- code here -->
                                    <div class="col-2">
                                        <p>100</p>
                                    </div>
                                    <!-- title -->
                                    <div class="col-6">
                                        <p>Programming II</p>
                                    </div>
                                    <!-- hours -->
                                    <div class="col-1">
                                        <p>3</p>
                                    </div>
                                    <!-- delete button -->
                                    <div class="col-1">
                                        <p>
                                            <button type="button" class="btn btn-danger">X</button>
                                        </p>

                                    </div>

                                </div>
                                <!-- end of second row -->
                                <!-- first row -->
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-2">
                                        <p>CSC</p>
                                    </div>
                                    <!-- code here -->
                                    <div class="col-2">
                                        <p>362</p>
                                    </div>
                                    <!-- title -->
                                    <div class="col-6">
                                        <p>Intro to Networking</p>
                                    </div>
                                    <!-- hours -->
                                    <div class="col-1">
                                        <p>3</p>
                                    </div>
                                    <!-- delete button -->
                                    <div class="col-1">
                                        <p>
                                            <button type="button" class="btn btn-danger">X</button>
                                        </p>

                                    </div>

                                </div>

                                <!-- space before card -->
                                <br />
                                <br />
                                <hr>

                                <!-- adding button -->
                                <div class="row">
                                    <!-- dropdown one -->
                                    <div class="col-3">


                                        <select name="course" id="course">
                                            <option value="0">Select Course</option>
                                            <option value="CSC">CSC</option>
                                            <option value="MATH">MATH</option>
                                            <option value="CTT">CTT</option>
                                            <option value="PHY">PHY</option>
                                        </select>
                                    </div>
                                    <!-- dropdown two -->
                                    <div class="col-3">
                                        <select name="course" id="course">
                                            <option value="0">Course Number</option>
                                            <option value="100">100</option>
                                            <option value="111">111</option>
                                            <option value="222">222</option>
                                            <option value="343">343</option>
                                        </select>
                                    </div>

                                    <!-- blank space -->
                                    <div class="col-6">
                                        <button type="button" class="btn btn-outline-primary btn-lg">Add</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- end of first col -->
                    <div class="col-6">
                        <div class="card welcome-card">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Spring 2020</h5>
                                <!-- first row -->
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-2">
                                        <p>CSC</p>
                                    </div>
                                    <!-- code here -->
                                    <div class="col-2">
                                        <p>463</p>
                                    </div>
                                    <!-- title -->
                                    <div class="col-6">
                                        <p>Intro to programing</p>
                                    </div>
                                    <!-- hours -->
                                    <div class="col-1">
                                        <p>3</p>
                                    </div>
                                    <!-- delete button -->
                                    <div class="col-1">
                                        <p>
                                            <button type="button" class="btn btn-danger">X</button>
                                        </p>

                                    </div>

                                </div>

                                <!-- end of first row -->

                                <!-- second row -->
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-2">
                                        <p>CSC</p>
                                    </div>
                                    <!-- code here -->
                                    <div class="col-2">
                                        <p>100</p>
                                    </div>
                                    <!-- title -->
                                    <div class="col-6">
                                        <p>Programming II</p>
                                    </div>
                                    <!-- hours -->
                                    <div class="col-1">
                                        <p>3</p>
                                    </div>
                                    <!-- delete button -->
                                    <div class="col-1">
                                        <p>
                                            <button type="button" class="btn btn-danger">X</button>
                                        </p>

                                    </div>

                                </div>
                                <!-- end of second row -->
                                <!-- first row -->
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-2">
                                        <p>CSC</p>
                                    </div>
                                    <!-- code here -->
                                    <div class="col-2">
                                        <p>362</p>
                                    </div>
                                    <!-- title -->
                                    <div class="col-6">
                                        <p>Intro to Networking</p>
                                    </div>
                                    <!-- hours -->
                                    <div class="col-1">
                                        <p>3</p>
                                    </div>
                                    <!-- delete button -->
                                    <div class="col-1">
                                        <p>
                                            <button type="button" class="btn btn-danger">X</button>
                                        </p>

                                    </div>

                                </div>

                                <!-- space before card -->
                                <br />
                                <br />
                                <hr>

                                <!-- adding button -->
                                <div class="row">
                                    <!-- dropdown one -->
                                    <div class="col-3">


                                        <select name="course" id="course">
                                            <option value="0">Select Course</option>
                                            <option value="CSC">CSC</option>
                                            <option value="MATH">MATH</option>
                                            <option value="CTT">CTT</option>
                                            <option value="PHY">PHY</option>
                                        </select>
                                    </div>
                                    <!-- dropdown two -->
                                    <div class="col-3">
                                        <select name="course" id="course">
                                            <option value="0">Course Number</option>
                                            <option value="100">100</option>
                                            <option value="111">111</option>
                                            <option value="222">222</option>
                                            <option value="343">343</option>
                                        </select>
                                    </div>

                                    <!-- blank space -->
                                    <div class="col-6">
                                        <button type="button" class="btn btn-outline-primary btn-lg">Add</button>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "./includes/footer_section.php";
    include "./includes/footer.php";