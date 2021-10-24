<?php
$query = oci_parse($database, "select unique e.e_seccode,e.e_secnum, c.c_title, c.c_max from ENROLL e, STUDENT s, COURSE c 
                                                        where e.e_stid = s.s_id and s.s_email = 'micah.focht@betheluniversity.edu' and e.e_semester = :semester
                                                        and e.e_seccode = c.c_code and e.e_secnum = c.c_num
                                                        order by e.e_seccode, e.e_secnum");
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
?>