<?php
session_start();
include('../models/dbConnection.php');

if (isset($_SESSION['email'])) {
    $email = $_SESSION["email"];
    $sql = "SELECT type FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    $arr = mysqli_fetch_array($result);
    if ($arr[0] == 'student') {
        header('location:student.php');
    }
    elseif ($arr[0] == 'teacher') {
        header('location:teacher.php');
    }
    else {
        header('location:admin.php');
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT University | Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>

<section id="login-form" class="">
    <div class="container justify-content-center">
        <h2 class="text-light text-center">IT University</h2>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 bg-light rounded justify-content-center p-4">
                <h3 class="text-center">Login Here</h3>
                <form action="../controllers/ValidationController.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" placeholder="Email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" placeholder="Password" name="password" id="password" class="form-control">
                    </div>
                    <div><small class="text-danger"><?php if (isset($_GET['message'])) echo $_GET['message']?></small></div>
                    <input type="submit" class="btn btn-outline-primary form-control" value="Login">
                    <small class="text-muted">You don't have any account? <a href="register.php">Create an account</a></small>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>