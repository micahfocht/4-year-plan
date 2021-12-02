<?php
session_start();
$_SESSION = array();
header("Location: index.php");#Destroys the session then redirects to the splash page.
