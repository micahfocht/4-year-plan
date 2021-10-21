<?php
session_start();
$title = "Dashboard";
$user ='null';
$pass ='null';
include "./includes/redirect.php";
include "./includes/header.php";
include "./includes/main_nav_bar.php";
include "./includes/creds.php";
$email = "micah.focht@betheluniversity.edu";
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
                            $query = oci_parse($database, "select unique s.s_name from STUDENT s where s.s_email = 'micah.focht@betheluniversity.edu'");
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
                                <?php
                                $query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, c.c_title, c.c_max from ENROLL e, STUDENT s, COURSE c 
                                                    where e.e_stid = s.s_id and s.s_email = 'micah.focht@betheluniversity.edu' and e.e_semester = '2019FA'
                                                    and e.e_seccode = c.c_code and e.e_secnum = c.c_num
                                                    order by e.e_seccode, e.e_secnum asc");
                                oci_execute($query);
                                echo "<table border='1'>\n";
                                echo '<div class="row"';
                                while($code = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)){
                                    echo('
                                        <!-- COL 2 ROW -->
                                        <div class="col-2">
                                        <p>' .
                                        $code["E_SECCODE"] .
                                        '</p>
                                        </div>
                                        <!-- Course Code -->
                                        <div class="col-2">
                                        <p>' .
                                        $code["E_SECNUM"].
                                        '</p>
                                        </div>
                                        <!-- Course Name -->
                                        <div class="col-6">
                                        <p>' .
                                        $code["C_TITLE"] .
                                        '</p>
                                        </div>
                                        <!-- hours -->
                                        <div class="col-1">
                                        <p>' .
                                        $code["C_MAX"] .
                                        '</p>
                                        </div>
                                        <!-- delete button -->
                                        <div class="col-1">
                                            <p>
                                                <button type="button" class="btn btn-danger">X</button>
                                            </p>
                                        </div>
                                        '
                                    );
                                }
                                echo '</div>';
                                ?>
                                <!-- space before card -->
                                <br>
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
                    <div class="row">
                        <!-- content 1 -->
                        <div class="col-6">
                            <div class="card welcome-card">
                                <div class="card-body">
                                    <h5 class="card-title" align="center">Spring 2020</h5>
                                    <?php
                                    $query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, c.c_title, c.c_max from ENROLL e, STUDENT s, COURSE c 
                                                    where e.e_stid = s.s_id and s.s_email = 'micah.focht@betheluniversity.edu' and e.e_semester = '2020SP'
                                                    and e.e_seccode = c.c_code and e.e_secnum = c.c_num
                                                    order by e.e_seccode, e.e_secnum asc");
                                    oci_execute($query);
                                    echo "<table border='1'>\n";
                                    while($code = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)){
                                        echo('<div class="row">
                                        <!-- section code -->
                                        <div class="col-2">
                                        <p>' .
                                            $code["E_SECCODE"] .
                                            '</p>
                                        </div>
                                        <!-- Course Code -->
                                        <div class="col-2">
                                        <p>' .
                                            $code["E_SECNUM"].
                                            '</p>
                                        </div>
                                        <!-- Course Name -->
                                        <div class="col-6">
                                        <p>' .
                                            $code["C_TITLE"] .
                                            '</p>
                                        </div>
                                        <!-- hours -->
                                        <div class="col-1">
                                        <p>' .
                                            $code["C_MAX"] .
                                            '</p>
                                        </div>
                                        <!-- delete button -->
                                        <div class="col-1">
                                            <p>
                                                <button type="button" class="btn btn-danger">X</button>
                                            </p>
                                        </div>
                                        </div>'
                                        );
                                    }
                                    ?>
                                    <!-- space before card -->
                                    <br>
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
</div>

<?php
    include "./includes/footer_section.php";
    include "./includes/footer.php";