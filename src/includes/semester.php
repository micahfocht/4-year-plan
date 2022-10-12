<div class="card col-sm-6" style="width: 36rem;">
    <div class="card-body">
        <ul class="list-group list-group-flush">

            <?php
                if(!isset($currsem) && !isset($email)){
                    return;
                }
                echo('<h5 class="card-title">' . $currsem . '</h5>');
                $credmin = 0;
                $credmax = 0;
                $query = oci_parse($database, "select c_title, c_min, c_max from enroll e, student s, course c where e.e_stid = s.s_id and s.s_email = :email and e_semester = :sem and c.c_num = e.e_secnum  and c.c_code = e.e_seccode and e.e_catalog = c.c_catalog and e.e_program = c.c_program");
                        oci_bind_by_name($query,":email", $email); //Get the name
                        oci_bind_by_name($query, ":sem", $currsem);
                        oci_execute($query);
                        while ($row = oci_fetch_array($query, OCI_ASSOC)) {
                            if($row["C_MIN"] == $row["C_MAX"]){
                                echo('<li class="list-group-item">' . $row["C_TITLE"] ." " . $row['C_MAX'] . " Credits</li>");
                            }
                            else{
                                echo('<li class="list-group-item">' . $row["C_TITLE"] . " " . $row['C_MIN'] . " to " . $row['C_MAX'] . " Credits"."</li>");
                            }
                            $credmin += intval($row['C_MIN']);
                            $credmax += intval($row['C_MAX']);
                        }
                        if ($credmax == $credmin){
                            echo('<li class="list-group-item">' . $credmin . " Credits Total</li>");
                        }
                        else{
                            echo('<br><h6>' . $credmin . " to " . $credmax . " Credits Total</h6>");
                        }
            ?>
        </ul>
    </div>
</div>