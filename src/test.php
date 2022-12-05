<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/includes/style.css">
    </head>
    <body>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
        <?php
        include './includes/redirect.php';
        include './includes/creds.php';
        $email = 'micah.focht@betheluniversity.edu';
        $database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');

        $query = oci_parse($database, "select s_id from STUDENT s where s.s_email = :email");
        oci_bind_by_name($query,":email", $email); //Get the name
        oci_execute($query);
        while ($row = oci_fetch_array($query, OCI_ASSOC)) {
            foreach ($row as $item){
                echo('<li class="list-group-item">' . $item . "</li>");
            }
        }

        $query = oci_parse($database, "select unique m.sm_major from STUDENT s, STU_MAJ m where s.s_email = :email and s.s_id = m.sm_stid");
        oci_bind_by_name($query,":email", $email);#Get the major
        oci_execute($query);
        while ($row = oci_fetch_array($query, OCI_ASSOC)) {
            foreach ($row as $item){
                echo('<li class="list-group-item">' . $item . "</li>");
            }
        }
        ?>
            </ul>
        </div>
        <div class="row">
            <?php
                $query = oci_parse($database, "select unique e_semester from enroll e, student s where s.s_email = :email and e.e_stid = s.s_id order by regexp_replace(e.e_semester, '[^0-9]+', ''), case regexp_replace(e.e_semester, '[^a-zA-Z]+', '') WHEN 'SP' THEN 1 WHEN 'SU' THEN 2 WHEN 'FA' THEN 3 WHEN 'WI' THEN 4 END");
                #$query = oci_parse($database, "select unique e_semester from enroll");
                oci_bind_by_name($query,":email", $email);
                oci_execute($query);
                oci_fetch_all($query,$row);
                foreach ($row['E_SEMESTER'] as $item){
                    $currsem = $item;
                    include './includes/semester.php';
                }
                $currsem = '2022SP';
                include './includes/emptysemester.php';
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>