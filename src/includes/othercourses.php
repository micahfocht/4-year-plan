<?php
if(!isset($semester)) return;
if(!isset($database)) return;

$querysem = oci_parse($database, "select unique e.e_semester from ENROLL e, STUDENT s where e.e_stid = s.s_id and s.s_email = :email");
oci_bind_by_name($querysem,":email",$email);
oci_execute($querysem);
$curr = $semester;
/*while($semesters = oci_fetch_array($querysem, OCI_ASSOC+OCI_RETURN_NULLS)) {
    if ('$semester' == $semesters["E_SEMESTER"] or $semester2 = $semesters["E_SEMESTER"]){
        if(!isset($draw)){
        $draw = true;
        if($draw = true){
            echo('                <div class="row">
                    <div class="col-12">
                        <div class="card reusable-card">
                            <div class="card-body">
                                <h5 class="card-title">Other Courses</h5>
                                <div class="row">');
        }
        }
        $query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, c.c_title, c.c_max from ENROLL e, STUDENT s, COURSE c
                                                        where e.e_stid = s.s_id and s.s_email = :email and e.e_semester = :semester
                                                        and e.e_seccode = c.c_code and e.e_secnum = c.c_num and e.e_catalog = c.c_catalog
                                                        order by e.e_seccode, e.e_secnum");
        oci_bind_by_name($query, ":email", $email);
        oci_bind_by_name($query, ":semester", $semester);
        oci_execute($query);
        while ($code = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
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
                $code["E_SECNUM"] .
                '</p>
                                        </div>
                                        <!-- Course Name -->
                                        <div class="col-7">
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
                                        '
            );
        }
    }
}

*/
$querysem = oci_parse($database, "select unique e.e_semester from ENROLL_MANUAL e, STUDENT s where e.e_stid = s.s_id and s.s_email = :email");
oci_bind_by_name($querysem,":email",$email);
oci_execute($querysem);
$curr = $semester;
if(!isset($semseter2)) $semester2 = $semester;
while($semesters = oci_fetch_array($querysem, OCI_ASSOC+OCI_RETURN_NULLS)) {
    if ($semester == $semesters["E_SEMESTER"] or $semester2 == $semesters["E_SEMESTER"]){
        if (!isset($draw)) {
            $draw = true;
            if ($draw = true) {
                echo('                <div class="row">
                    <div class="col-12">
                        <div class="card reusable-card">
                            <div class="card-body">
                                <h5 class="card-title">Other Courses</h5>
                                <div class="row">');
            }
        }
         $query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, e.e_title, e.e_credit from ENROLL_MANUAL e, STUDENT s, COURSE c 
                                                        where e.e_stid = s.s_id and s.s_email = :email and e.e_semester = :semester
                                                        order by e.e_seccode, e.e_secnum");
        oci_bind_by_name($query, ":email", $email);
        oci_bind_by_name($query, ":semester", $semesters['E_SEMESTER']);
        oci_execute($query);
        while ($codemanual = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
            echo('
                                        <!-- COL 2 ROW -->
                                        <div class="col-2">
                                        <p>' .
                $codemanual["E_SECCODE"] .
                '</p>
                                        </div>
                                        <!-- Course Code -->
                                        <div class="col-2">
                                        <p>' .
                $codemanual["E_SECNUM"] .
                '</p>
                                        </div>
                                        <!-- Course Name -->
                                        <div class="col-7">
                                        <p>' .
                $codemanual["E_TITLE"] .
                '</p>
                                        </div>
                                        <!-- hours -->
                                        <div class="col-1">
                                        <p>' .
                $codemanual["E_CREDIT"] .
                '</p>
                                        </div>
                                        '
            );
        }
    }
}
if(isset($draw) & $draw = true){
    if(isFuture($semester2)){
    echo('<form action="./includes/addcourse.php" method="post" id="addcourse">
                        <div class="row">
                                    <div class="col-2">
                                        <label for="seccode" class="formgray">Department Code</label>
                                        <input type="text" name="seccode" id="seccode" size ="4">
                                    </div>
                                    <div class="col-2">
                                        <label for="secnum" class="formgray">Section Number</label>
                                        <input type="text" name="secnum" id="secnum" size="4">
                                    </div>
                                    <div class="col-2">
                                        <label for="semester" class="formgray">Semester</label>
                                        <input type="text" name="semester" id="semester" size="8">
                                    </div>
                                    <div class="col-3">
                                        <label for="coursetitle" class="formgray">Title</label>
                                        <input type="text" name="coursetitle" id="coursetitle" size="25">
                                    </div>
                                    <div class="col-1">
                                        <label for="credit" class="formgray">Credit</label>
                                        <input type="text" name="credit" id="credit" size ="2">
                                    </div>
                                    <div class="col-2">
                                        <input type="submit" value="Submit">
                                    </div>
                            </div>
                        </form>');}
echo('                        </div>
                            </div>
                        </div>
');
unset($draw);}
?>
