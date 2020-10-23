<?php

include("../models/dbConnection.php");
$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata["id"];
// Deleting student
if (!empty($id)) {
    $sql = "DELETE FROM users WHERE id = {$id}";
    if ($conn->query($sql) == TRUE) {
        echo "Student deleted successfully!";
    }
    else {
        echo "Unable to delete";
    }
}
