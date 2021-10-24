<?php
include './includes/redirect.php';
include './includes/creds.php';
$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
if (isset($_POST['seccode']) && isset($_POST['secnum']) && isset($_POST['semester']) && isset($_SESSION['email'])) {

}
header("Location: dashboard.php"); //redirect to the dashboard after login.