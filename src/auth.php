<?php
//require 'credentials.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Create connection
    $username = $_POST["username"];
    $password = $_POST["password"];
    session_start();
    $result = true;
    /*$conn = new mysqli($servername, $dbuser, $dbpass, $dbname); //These credentials come from credentials.php
    // Check connection
    if ($conn->connect_error) {
        die("Database offline");
        //Because the database credentials and name are properly set, this error should never be displayed to the user
        //except in cases of the database service not running, which is a bigger issue than this file needs to address.
    }
    $sql = "SELECT username, password, Name,User_ID FROM Users";
    $result = $conn->query($sql);
    */
    if ($result){
        /*if (mysqli_num_rows($result) >0){//If there are any entries in the database
            $_SESSION["Status"] = "Incorrect Username or Password."; //Default the status to incorrect
            while($user = mysqli_fetch_array($result)){//While there are more rows
                if($user['username'] == $username){//If the username matches
                    if(password_verify($password, $user['password'])){//Check the password
                        $_SESSION["Name"] = $user['Name'];//Set the session variables
                        $_SESSION["Status"] = "Logged in";
                        $_SESSION["UID"] = $user['User_ID'];
                        $newsql = "INSERT INTO Access (Access_Time, User_ID) VALUES (CURRENT_TIMESTAMP, '" . $_SESSION["UID"] . "');";
                        $conn->query($newsql);//Log the login in the database
                        if(isset($_POST['remember'])) {//Check if the remember checkbox is checked and if it is save the username in a cookie
                            setcookie("username", $username, time() + 60 * 60 * 24 * 30);
                        }else{
                            setcookie("username", "", time() - 1);
                        }
                        header("Location: dashboard.php"); //redirect to the dashboard after login.
                    }
                }
            }
        }*/
        $_SESSION["Name"] = $username;//Set the session variables
        $_SESSION["Status"] = "Logged in";
        $_SESSION["UID"] = 0;
        if(isset($_POST['remember'])) {//Check if the remember checkbox is checked and if it is save the username in a cookie
            setcookie("username", $username, time() + 60 * 60 * 24 * 30);
        }else{
            setcookie("username", "", time() - 1);
        }
        header("Location: dashboard.php"); //redirect to the dashboard after login.
    }
}
if($_SESSION["Status"] != "Logged in") header("Location: login.php");