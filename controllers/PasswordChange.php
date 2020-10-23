<?php
session_start();
include("../models/dbConnection.php");

$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$password = md5($mydata['password']);
$password2 = $mydata['password'];

$email = "";

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}

if (!empty($password2)) {
    $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";

    if ($conn->query($sql) == TRUE){
        echo "Password changed successfully!";
    }
    else {
        echo "Unable to change!";
    }
}
else {
    echo "The fields can not be empty!";
}
