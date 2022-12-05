<?php
    include 'creds.php';
    if(isset($_GET['sem']) and isset($_GET['dept']) and isset($_GET['code']) and isset($_GET['email'])){
        $database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
        $query = oci_parse($database, 'select unique s_id from student where s_email = :email');
        oci_bind_by_name($query,":email", $_GET['email']);
        oci_execute($query);
        while ($row = oci_fetch_array($query, OCI_ASSOC)) {
            $id = $row['S_ID'];
        }
        $query = oci_parse($database, 'insert into enroll_manual (e_stid, e_seccode, e_secnum, e_semester) values(:id, :seccode, :secnum, :sem)');
        oci_bind_by_name($query,":id", $id);
        oci_bind_by_name($query,":seccode", $_GET['dept']);
        oci_bind_by_name($query,":secnum", $_GET['code']);
        oci_bind_by_name($query,":sem", $_GET['sem']);
        oci_execute($query);
    }
    header('Location: /test.php');