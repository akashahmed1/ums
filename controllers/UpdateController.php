<?php

include("../models/dbConnection.php");

$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['id'];
$name = $mydata["name"];
$email = $mydata["email"];
$password = md5($mydata["password"]);
$phone = $mydata["phone"];
$gender = $mydata["gender"];
$address = $mydata["address"];
$city = $mydata["city"];
$state = $mydata["state"];
$subject = $mydata["subject"];
$type = "student";

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$num = mysqli_num_rows($result);

if (!empty($name) && !empty($email) && !empty($password) && !empty($phone) && !empty($gender) && !empty($address) && !empty($city) && !empty($state) && !empty($subject)){

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', gender='$gender', address='$address', city='$city', state='$state', subject='$subject', password='$password', type='$type' WHERE id='$id'";

    if ($conn->query($sql) == TRUE){
        echo "Student saved successfully!";
    }
    else {
        echo "Unable to save student";
    }
}
else {
    echo "The fields can not be empty!";
}
