<?php
$query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, c.c_title, c.c_max from ENROLL e, STUDENT s, COURSE c 
                                                        where e.e_stid = s.s_id and s.s_email = :email and e.e_semester = :semester
                                                        and e.e_seccode = c.c_code and e.e_secnum = c.c_num and e.e_catalog = c.c_catalog
                                                        order by e.e_seccode, e.e_secnum"); #Get all courses from the database for a past semester.
oci_bind_by_name($query,":email",$email);
oci_bind_by_name($query, ":semester", $semester);
oci_execute($query);
while($code = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)){#Echo all the classes.
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
$query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, e.e_title, e.e_credit from ENROLL_MANUAL e, STUDENT s, COURSE c 
                                                        where e.e_stid = s.s_id and s.s_email = :email and e.e_semester = :semester
                                                        order by e.e_seccode, e.e_secnum"); #Do it all again for the manual enrolls.
oci_bind_by_name($query,":email",$email);
oci_bind_by_name($query, ":semester", $semester);
oci_execute($query);
while($code = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)){
    if ($code["E_TITLE"] != "" && $code["E_CREDIT"] != "") {
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
            $code["E_TITLE"] .
            '</p>
                                        </div>
                                        <!-- hours -->
                                        <div class="col-1">
                                        <p>' .
            $code["E_CREDIT"] .
            '</p>
                                        </div>
                                        '
        );
    }else{
        $name = oci_parse($database, "select unique c_title, c_max, c_catalog from COURSE where c_code like UPPER(:code) and c_num like :num order by  c_catalog desc");
        oci_bind_by_name($name,":code",$code['E_SECCODE']);
        oci_bind_by_name($name, ":num", $code['E_SECNUM']);
        oci_execute($name);
        $done = False;
        while($extra = oci_fetch_array($name, OCI_ASSOC+OCI_RETURN_NULLS)) {
            if (!$done) {
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
                    $extra["C_TITLE"] .
                    '</p>
                                        </div>
                                        <!-- hours -->
                                        <div class="col-1">
                                        <p>' .
                    $extra["C_MAX"] .
                    '</p>
                                        </div>
                                        '
                );
                $done = true;
            }
        }
        if(!$done){
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
                $code["E_TITLE"] .
                '</p>
                                        </div>
                                        <!-- hours -->
                                        <div class="col-1">
                                        <p>' .
                $code["E_CREDIT"] .
                '</p>
                                        </div>
                                        ');
        }
    }
}
