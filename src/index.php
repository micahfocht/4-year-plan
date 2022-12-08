<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/includes/style.css">
    </head>
    <body>
      <br><br>
      <!-- HTML form for the login page -->
      <form method="post" id="login">
        <label for="username">Email:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
<?php

// Start a session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  // Redirect the user to the protected page
  header('Location: /dashboard.php');
  exit;
}
// Check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
  
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  // Check the submitted username and password against a database or user list
  if ($username != null && $password == 'password') {
    // Set a session variable to indicate that the user is logged in
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = $username;
    // Redirect the user to the protected page
    header('Location: /dashboard.php');
    exit;
  }elseif ($username == 'professor' && $password == 'password') {
    // Set a session variable to indicate that the user is logged in
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = $username;
    // Redirect the user to the protected page
    header('Location: /report.php');
    exit;
  } else {
    // Show an error message if the username or password is invalid
    echo '<p name="error">Invalid username or password.</p>';
  }
}
?>
        <input type="submit" value="Log In">
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>