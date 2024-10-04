<?php

$host = "localhost";
$user="root";
$pass="";
$db="loginSignupTutorial";
$conn=new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    echo "Failed to connect DB";
}

?>