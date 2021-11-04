<?php
session_start();
include './redirect.php';
$user = null;
$pass = null;
include "./creds.php";
$email = $_SESSION["email"];
$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');

$query = oci_parse($database, "select grad from PREFERENCES where email = :email");
oci_bind_by_name($query,":email", $email);
oci_execute($query);
while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
    foreach ($row as $item) {
        $expectedsemester = $item;
    }
}
if(isset($_SESSION["email"]) & isset($_POST["year"]) & isset($_POST["semester"])) {
    $semester = $_POST['year'] . $_POST["semester"];
    if (isset($expectedsemester)) {
        $query = oci_parse($database, "DELETE FROM PREFERENCES WHERE EMAIL LIKE :email");
        oci_bind_by_name($query, ":email", $email);
        oci_execute($query);
    }
    $query = oci_parse($database, "INSERT INTO PREFERENCES (EMAIL, GRAD) VALUES (:email, :semester)");
    oci_bind_by_name($query, ":email", $email);
    oci_bind_by_name($query,":semester", $semester);
    oci_execute($query);
    header("Location: ../preferences.php");
}