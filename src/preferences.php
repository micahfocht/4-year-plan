<?php
session_start();
$title = "Dashboard";
$user ='null';
$pass ='null';#Initialize so the ide doesn't yell, but this isn't strictly needed because they are imported from creds.php
include "./includes/redirect.php";
include "./includes/header.php";
include "./includes/main_nav_bar.php";
include "./includes/creds.php";
$email = $_SESSION["email"];
$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
?>