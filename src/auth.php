<?php
require './includes/creds.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Create connection
    $email = $_POST["email"];
    $password = $_POST["password"];
    session_start();
    $result = true;
    $database =  oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb');
    $query = oci_parse($database, "SELECT s_email from STUDENT");
    oci_execute($query);
    if ($result){
        while($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)){
            foreach ($row as $item){
                if($item == $email){
                    $_SESSION["email"] = $email;//Set the session variables
                    $_SESSION["Status"] = "Logged in";
                    $_SESSION["UID"] = 0;
                    if(isset($_POST['remember'])) {//Check if the "remember" checkbox is checked and if it is, save the username in a cookie
                        setcookie("email", $email, time() + 60 * 60 * 24 * 30);
                    }else{
                        setcookie("email", "", time() - 1);
                    }
                    header("Location: dashboard.php"); //redirect to the dashboard after login.
                }
            }
        }
            /*if (mysqli_num_rows($result) >0){//If there are any entries in the database
                $_SESSION["Status"] = "Incorrect Username or Password."; //Default the status to incorrect
                while($user = mysqli_fetch_array($result)){ //While there are more rows
                    if($user['username'] == $username){//If the username matches
                        if(password_verify($password, $user['password'])){//Check the password
                            $_SESSION["Name"] = $user['Name'];//Set the session variables
                            $_SESSION["Status"] = "Logged in";
                            $_SESSION["UID"] = $user['User_ID'];
                            $newsql = "INSERT INTO Access (Access_Time, User_ID) VALUES (CURRENT_TIMESTAMP, '" . $_SESSION["UID"] . "');";
                            $conn->query($newsql);//Log the login in the database
                            if(isset($_POST['remember'])) {//Check if the "remember" checkbox is checked and if it is, save the username in a cookie
                                setcookie("username", $username, time() + 60 * 60 * 24 * 30);
                            }else{
                                setcookie("username", "", time() - 1);
                            }
                            header("Location: dashboard.php"); //redirect to the dashboard after login.
                        }
                    }
                }
            }*/
    }
}
include 'includes/redirect.php';