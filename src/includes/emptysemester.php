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
                $query = oci_parse($database, "select unique CONCAT(e_seccode, e_secnum), c_title, e_title, c_min, c_max, e_credit from enroll_manual e, student s, course c where e.e_stid = s.s_id and s.s_email = :email and e_semester = :sem and c.c_num = e.e_secnum  and c.c_code = e.e_seccode and c.c_catalog = 'UG21'");
                oci_bind_by_name($query,":email", $email); //Get the name
                oci_bind_by_name($query, ":sem", $currsem);
                oci_execute($query);
                while ($row = oci_fetch_array($query, OCI_ASSOC)) {
                    if(isset($row['E_CREDIT'])){
                        echo('<li class="list-group-item">' . $row["C_TITLE"] ." " . $row['E_CREDIT'] . " Credits</li>");
                        $credmin += intval($row['E_CREDIT']);
                        $credmax += intval($row['E_CREDIT']);    
                    }
                    elseif($row["C_MIN"] == $row["C_MAX"]){
                        echo('<li class="list-group-item">' . $row["C_TITLE"] ." " . $row['C_MAX'] . " Credits</li>");
                        $credmin += intval($row['C_MIN']);
                        $credmax += intval($row['C_MAX']);    
                    }
                    else{
                        echo('<li class="list-group-item">' . $row["C_TITLE"] . " " . $row['C_MIN'] . " to " . $row['C_MAX'] . " Credits"."</li>");
                        $credmin += intval($row['C_MIN']);
                        $credmax += intval($row['C_MAX']);
                    }
                }
                echo('
                    <li class="list-group-item">
                        <form target="_self" action="../includes/coursesubmit.php" method="get" id="course">
                            <input name="email" type="hidden" value="' . $email . '"/>
                            <input name="sem" type="hidden" value= "'. $currsem . '"/>
                            <label for="dept" id="course">Department:</label>
                            <input name="dept"/>
                            <label for="code" id="course">Course Code:</label>
                            <input name="code"/>
                            <label for="cred" id="course">Credit:</label>
                            <input name="cred"/>
                            <input type="submit"/>
                        </form>
                    </li>');
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