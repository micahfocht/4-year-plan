<?php
// Start a session
session_start();

// Check if the user is logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  // Unset the session variable to log out the user
  unset($_SESSION['logged_in']);
  unset($_SESSION['user']);
}
// Redirect the user to the login page
header('Location: /index.php');
?>