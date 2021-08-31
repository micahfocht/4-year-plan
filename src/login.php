<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="header()">
<div class="form">
    <h1><a href="index.php" id="title">Bethel University<br>4 Year Plan</a></h1>
    <form class="input" name="login" action="auth.php" method="post">
        <label for="username">Username</label>
        <br>
        <?php
        if (isset($_COOKIE['username'])){
            echo'<input type="text" name="username" id="username" value="' . $_COOKIE['username'] . '">';
        }else echo'<input type="text" name="username" id="username">';
        ?>
        <br>
        <label for="password">Password</label>
        <br>
        <?php
        if (isset($_SESSION['Status'])){
            if($_SESSION['Status'] == 'Incorrect Username or Password.'){
                echo '<input type="password" name="password" id="password" class="error">';
            }else{
                header("Location: dashboard.php");
            }
        }else{
            echo'<input type="password" name="password" id="password">';
        }?>

        <br>
        <?php
        if (isset($_COOKIE['username'])){
            echo'<input type="checkbox" name="remember" id="remember" checked>';
        }else echo'<input type="checkbox" name="remember" id="remember">';
        ?>
        <label for="remember">Remember Me</label>
        <br>
        <input type="submit" class="submit" value = "Submit">
    </form>
</div>
</body>
</html>
