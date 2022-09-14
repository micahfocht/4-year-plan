<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
        <?php
        include './includes/creds.php';
        $email = 'micah.focht@betheluniversity.edu';
        $database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');

        $query = oci_parse($database, "select * from STUDENT s where s.s_email = :email");
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
        <?php
            $currsem = "2019FA";
            include './includes/semester.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>