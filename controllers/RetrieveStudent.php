<?php

include("../models/dbConnection.php");

$sql = "SELECT * FROM users WHERE type = 'student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}


//Returning JSON format Data as Response to Ajax call
echo json_encode($data);