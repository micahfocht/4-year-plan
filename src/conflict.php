<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/includes/style.css">
    </head>
    <body>
        <br>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <?php
                ini_set('display_startup_errors', 1);
                ini_set('display_errors', 1);
                error_reporting(-1);
                    include './includes/redirect.php';
                    include './includes/creds.php';
                    $currsem = '2022FA';
                    if(!isset($currsem)){
                        return;
                    }
                    echo('<h5 class="header">' . $currsem . '</h5>
                    <table>
                        <tr><th/>');
                    $database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
                    $query = oci_parse($database, "select concat(e_seccode, e_secnum), count(*) from enroll_manual where e_seccode = 'CSC' and e_semester = :sem group by e_secnum,e_seccode");
                    oci_bind_by_name($query, ":sem", $currsem);
                    oci_execute($query);
                    while ($row = oci_fetch_array($query, OCI_NUM)) {
                        $rows[] = $row; 
                    }
                    foreach ($rows as $row) {
                        echo ("<th>  " . $row[0] . "  </th>");
                    }
                    echo ("</tr><tr>");
                    $others = oci_parse($database, "select concat(e_seccode, e_secnum), count(*) from enroll_manual where not e_seccode = 'CSC' and e_semester = :sem group by e_secnum,e_seccode order by e_seccode");
                    oci_bind_by_name($others, ":sem", $currsem);
                    oci_execute($others);
                    while ($row = oci_fetch_array($others, OCI_NUM)) {
                        $courses[] = $row; 
                    }
                    foreach ($courses as $row) {
                        echo ("<th>  " . $row[0] . "  </th>");
                        foreach($rows as $csc){
                            $num = $csc[1] + $row[1];
                            echo ('<td>'. $num .'</td>');
                        }
                        echo ("</tr><tr>");
                    }
                    echo ("</tr></table>");
                ?>

            </div>
            <div class="col-sm-1"></div>
        </div>
    </body>
</html>
