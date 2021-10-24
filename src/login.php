<?php
session_start();
// set the page title
$title = "Login";
include "./includes/header.php";
include "./includes/main_nav_bar.php";
include "./includes/redirect.php";
?>

<div class="form">
    <h1><a href="./index.php" id="title">Bethel University<br>4 Year Plan</a></h1>
    <form class="input" name="login" action="./auth.php" method="post" >
        <label for="email">Email</label>
        <br>
        <?php
        if (isset($_COOKIE['email'])) {
            echo '<input type="email" name="email" id="email" value="' . $_COOKIE['email'] . '">';
        } else echo '<input type="email" name="email" id="email" size="40">';
        ?>
        <br>
        <label for="password">Password</label>
        <br>
        <?php
        if (isset($_SESSION['Status'])) {
            if ($_SESSION['Status'] == 'Incorrect Username or Password.') {
                echo '<input type="password" name="password" id="password" class="error" size="40">';
            } else {
                header("Location: dashboard.php");
            }
        } else {
            echo '<input type="password" name="password" id="password" size="40">';
        } ?>

        <br>
        <?php
        if (isset($_COOKIE['email'])) {
            echo '<input type="checkbox" name="remember" id="remember" checked>';
        } else echo '<input type="checkbox" name="remember" id="remember">';
        ?>
        <label for="remember">Remember Me</label>
        <br>
        <input type="submit" class="submit" value="Submit">
    </form>
</div>
<?php
// include footer
include "./includes/footer.php";

?>