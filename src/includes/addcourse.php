<?php
session_start();
include './includes/redirect.php';
$user = null;
$pass = null;
include "./creds.php";
$email = $_SESSION["email"];
$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
$query = oci_parse($database, "select s_id from STUDENT where s_email = :email");
oci_bind_by_name($query,":email", $email);
oci_execute($query);
while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
    foreach ($row as $item) {
        $id = $item;
    }
}
if( isset($id) & isset($_POST["seccode"]) & isset($_POST["secnum"]) & isset($_POST["semester"]) & isset($_POST["coursetitle"]) & isset($_POST["credit"])){
    $query = oci_parse($database, "INSERT INTO ENROLL_MANUAL (E_STID, E_SECCODE, E_SECNUM,E_SEMESTER,E_TITLE, E_CREDIT ) 
                       VALUES (:stid, :seccode, :secnum, :semester, :title, :credit)");
    oci_bind_by_name($query, ":stid", $id);
    oci_bind_by_name($query,":seccode", $_POST["seccode"]);
    oci_bind_by_name($query,":secnum", $_POST["secnum"]);
    oci_bind_by_name($query,":semester", $_POST["semester"]);
    oci_bind_by_name($query,":title", $_POST["coursetitle"]);
    oci_bind_by_name($query,":credit", $_POST["credit"]);
    oci_execute($query);
    echo("Submitted");
    #header("Location: ../preferences.php");
}
else{
    echo("Course not set");
}