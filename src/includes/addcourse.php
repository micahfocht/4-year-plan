<?php
session_start(); #Make sure a session is started.
include './redirect.php'; #Redirect if the user is not logged  in.
$user = null;#Initialize the credentials
$pass = null;
include "./creds.php"; #Load the credentials from a file.
$email = $_SESSION["email"];#Load the student's email from their session.
$database = oci_connect($user,$pass,'//csoracle.betheluniversity.edu:1521/orclpdb'); #Connect to the database
$query = oci_parse($database, "select s_id from STUDENT where s_email = :email");#Get the student id from the email
oci_bind_by_name($query,":email", $email); #Bind the email to the query.
oci_execute($query);#Execute the query
while ($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)) {
    foreach ($row as $item) {
        $id = $item; #get the id and store it in a variable
    }
}
if( isset($id) & isset($_POST["seccode"]) & isset($_POST["secnum"]) & isset($_POST["semester"])){ #if the info is passed
    $query = oci_parse($database, "INSERT INTO ENROLL_MANUAL (E_STID, E_SECCODE, E_SECNUM,E_SEMESTER,E_TITLE, E_CREDIT ) 
                       VALUES (:stid, UPPER(:seccode), :secnum, :semester, :title, :credit)"); #Insert it into the database.
    oci_bind_by_name($query, ":stid", $id);
    oci_bind_by_name($query,":seccode", $_POST["seccode"]);
    oci_bind_by_name($query,":secnum", $_POST["secnum"]);
    oci_bind_by_name($query,":semester", $_POST["semester"]);
    oci_bind_by_name($query,":title", $_POST["coursetitle"]);
    oci_bind_by_name($query,":credit", $_POST["credit"]); #Bind the variables if they exist.
    oci_execute($query);#execute the query
    echo("Submitted"); #Echo submitted
}
else{
    echo("Course not set"); #Error, the data needed was not provided
    foreach ($_POST as $key => $value){ #Echo what was provided.
        echo "{$key} = {$value}\r\n";
    }
}