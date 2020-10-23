<?php


include("../models/dbConnection.php");

$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
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
    if ($num == 1) {
        echo "The user is already exist!";
    }
    else {
        $sql = "INSERT INTO users(name, email, phone, gender, address, city, state, subject, password, type) VALUES ('$name', '$email', '$phone', '$gender', '$address', '$city', '$state', '$subject', '$password', '$type')";

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