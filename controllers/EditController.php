<?php

include("../models/dbConnection.php");

$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata["id"];

$sql = "SELECT * FROM users WHERE id = {$id}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Returning json format data as Response to ajax call
echo json_encode($row);