<?php
session_start();
// set the page title
$title = "Welcome";
$page = "index.php";

include "./includes/redirect.php";
include "./includes/header.php";

// include main nav bar
include "./includes/main_nav_bar.php";
// include welcome page
include "./pages/welcome_page.php";

// include footer section
include './includes/footer_section.php';
// include footer
include "./includes/footer.php";