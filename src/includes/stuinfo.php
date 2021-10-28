<div class="row">
    <div class="col-12 dashboard_heading">
        <div class='row'>
            <div class="col">
                <?php
                echo'<h3 class="">';
                $query = oci_parse($database, "select unique s.s_name from STUDENT s where s.s_email = :email");
                oci_bind_by_name($query,":email", $email);
                oci_execute($query);
                while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
                    foreach ($row as $item){
                        echo($item);
                    }
                }
                echo'</h2>';
                echo'<p>Student ID: ';
                $query = oci_parse($database, "select unique s.s_id from STUDENT s where s.s_email = :email");
                oci_bind_by_name($query,":email", $email);
                oci_execute($query);
                while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
                    foreach ($row as $item){
                        echo($item);
                    }
                }
                echo'</p>';
                ?>
            </div>
            <div class="col">
                <h3>Major:</h3>
                <p>
                    <?php
                    $query = oci_parse($database, "select unique m.sm_major from STUDENT s, STU_MAJ m where s.s_email = :email and s.s_id = m.sm_stid");
                    oci_bind_by_name($query,":email", $email);
                    oci_execute($query);
                    while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
                        foreach ($row as $item){
                            echo($item);
                        }
                    }
                    echo'</p>';
                    ?>
            </div>
            <div class="col">
                <h3>Expected Graduation Semester:</h3>
                <?php
                $query = oci_parse($database, "select grad from PREFERENCES where email = :email");
                oci_bind_by_name($query,":email", $email);
                oci_execute($query);
                $set = false;
                while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
                    foreach ($row as $item){
                        $set = true;
                        echo("<p>" . $item . "</p>");
                        $expectedsemester = $item;
                    }
                }
                if(!$set){
                    include "./includes/calculatesemester.php";
                    echo ("<p>" . $nextsemester . "</p>");
                    echo ("<p>Please update expected graduation semseter in preferences</p>");
                }
                ?>
            </div>

        </div>
    </div>
</div>