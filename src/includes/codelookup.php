<?php
    $query = oci_parse($database, "select unique C_NUM from COURSE where C_CODE = :code order by C_NUM asc;");
    oci_bind_by_name($query, ":code", $_POST['dept']);
    oci_execute($query);