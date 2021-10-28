<?php
$query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, c.c_title, c.c_max from ENROLL e, STUDENT s, COURSE c 
                                                        where e.e_stid = s.s_id and s.s_email = :email and e.e_semester = :semester
                                                        and e.e_seccode = c.c_code and e.e_secnum = c.c_num and e.e_catalog = c.c_catalog
                                                        order by e.e_seccode, e.e_secnum");
oci_bind_by_name($query,":email",$email);
oci_bind_by_name($query, ":semester", $semester);
oci_execute($query);
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
                                                        order by e.e_seccode, e.e_secnum");
oci_bind_by_name($query,":email",$email);
oci_bind_by_name($query, ":semester", $semester);
oci_execute($query);
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
}
?>