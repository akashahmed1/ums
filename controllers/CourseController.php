<?php

include("../models/dbConnection.php");

$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

$email = $mydata["email"];
$course1 = $mydata["course1"];
$course2 = $mydata["course2"];
$course3 = $mydata["course3"];
$course4 = $mydata["course4"];

$sql = "SELECT * FROM courses WHERE email = '$email'";
$result = $conn->query($sql);
$num = mysqli_num_rows($result);

if (!empty($email) && !empty($course1) && !empty($course2) && !empty($course3) && !empty($course4)){
    if ($num == 1) {
        echo "The user is already exist!";
    }
    else {
        $sql = "INSERT INTO courses(email, course1, course2, course3, course4) VALUES ('$email', '$course1', '$course2', '$course3', '$course4')";

        if ($conn->query($sql) == TRUE){
            echo "Student saved successfully!";
        }
        else {
            echo "Unable to save student";
        }
    }
}
else {
    echo "The fields can not be empty!";
}