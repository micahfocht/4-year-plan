<?php
//Get the page uri to see what page we're on.
$page = $_SERVER['REQUEST_URI'];
if (isset($_SESSION["Status"])){//See if the status is logged in or not.
    if(str_contains( $page,'index.php')){//See if we're on the home page.
        if ($_SESSION["Status"] == "Logged in"){//If we are, and we're logged in
            header("Location: dashboard.php");//then redirect to the dashboard.
        }
    }
    elseif(str_contains($page, 'login.php')){//otherwise, check if we're logged in on the login page.
        if ($_SESSION["Status"] == "Logged in"){
            header("Location: dashboard.php"); //If we are, redirect to the dashboard
        }
    }
    else{
        //We are logged in, so we can be basically anywhere.  We aren't on the login or the homepage, so we're good.
    }
}else{//If we aren't logged in,
    if (str_contains($page, 'index.php')){//And we're on the home page do nothing
        //do not redirect
    }elseif(str_contains($page, 'login.php')){//If we're trying to log in, do nothing.
        //do not redirect
    }else{//Otherwise, send us back to the login page because we shouldn't be there.
        header("Location: login.php");
    }
}
