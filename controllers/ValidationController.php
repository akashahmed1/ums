<?php

session_start();
include('../models/dbConnection.php');

$email = $_POST['email'];
//$pass = $_POST['password'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email = '$email' && password = '$pass'";
$sql2 = "SELECT type FROM users WHERE email = '$email'";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$arr = mysqli_fetch_array($result2);

$num = mysqli_num_rows($result);

if (empty($email) || empty($pass)) {
    $message = "The fields can not be empty!";
    header('location:../views/login.php? message='.$message);
}
else {
    if ($num == 1) {
        if ($arr[0] == 'student'){
            $_SESSION['email'] = $email;
            header('location:../views/student.php');
        }
        else if ($arr[0] == "teacher") {
            $_SESSION['email'] = $email;
            header('location:../views/teacher.php');
        }
        else {
            $_SESSION['email'] = $email;
            header('location:../views/admin.php');
        }
    }
    else {
        $message = "Wrong email or password!";
        header('location:../views/login.php? message='.$message);
    }
}
