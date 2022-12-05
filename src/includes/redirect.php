<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    // Redirect the user to the protected page
    header('Location: /index.php');
    exit;
  }
?>