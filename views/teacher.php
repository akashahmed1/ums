<?php

session_start();
include('../models/dbConnection.php');
$name = "";
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT name FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    $arr = mysqli_fetch_array($result);
    $name = $arr[0];
}

if (!isset($_SESSION['email'])) {
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT University | Teacher</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>

<section id="teacher-portal">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3">
                <h2 class="text-primary font-weight-bold lead">IT University</h2>
                <p class="lead text-info">Teacher Portal</p>
            </div>
            <div class="col-md-3">
                <h2 class="lead text-primary">Welcome <?php if (isset($_SESSION['email'])) echo $name ?></h2>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 id="teacher-settings" class="lead text-warning">Settings</h4>
                        <div class="d-none" id="teacher-password-cng">
                            <form action="" id="myform">
                                <label for="" class="form-check-label">Change password</label>
                                <input type="password" id="teacher-password-input" class="form-control">
                                <button id="teacher-password-save" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                        <div><small class="text-danger d-none" id="msg"></small></div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="lead text-danger"><a href="../controllers/LogoutController.php">Logout</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="teacher-class-schedule">
    <div class="container">
        <div class="card">
            <div class="card-header text-light bg-success lead">
                Class Schedule
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="lead text-info">Today</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="lead text-primary">WEB TECHNOLOGIES [K]</h5>
                        <h6 class="lead text-muted">Time: Wed 2:0 PM - Wed 5:0 PM Room: D0306</h6>
                    </div>
                    <div class="col-md-4">
                        <h5 class="lead text-primary">ENGINEERING MANAGEMENT [K]</h5>
                        <h6 class="lead text-muted">Time: Wed 9:30 - Wed 11:0 Room: 2111</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="lead text-info">16-Aug-2020</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="lead text-primary">COMPUTER NETWORKS [C]</h5>
                        <h6 class="lead text-muted">Time: Sun 2:0 PM - Sun 4:0 PM Room: D0604</h6>
                    </div>
                    <div class="col-md-4">
                        <h5 class="lead text-primary">DIGITAL LOGIC DESIGN [A]</h5>
                        <h6 class="lead text-muted">Time: Sun 11:0 - Sun 12:30 PM Room: 1118</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>