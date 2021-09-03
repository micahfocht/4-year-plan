<?php
session_start();
// set the page title
$title = "Welcome";

include "./includes/header.php";

// include main nav bar
include "./includes/main_nav_bar.php";
// include welcome page
include "./pages/welcome_page.php";


// include footer
include "./includes/footer.php";