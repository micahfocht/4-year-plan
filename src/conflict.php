<?php
session_start();
$title = "Conflict";
include "./includes/redirect.php";
include "./includes/header.php";
include "./includes/main_nav_bar.php";
// content start her
include './pages/conflict_page.php';
// footer start
// include footer section
include './includes/footer_section.php';
include "./includes/footer.php";