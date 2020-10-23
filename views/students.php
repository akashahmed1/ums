<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT University | Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>

<section>
    <h2 class="text-center py-3">Students INFO</h2>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="myform" action="">
                    <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control d-none" id="stuid">
                        <input type="text" placeholder="Full name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" placeholder="Email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">password*</label>
                        <input type="password" placeholder="Password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" placeholder="Phone" id="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gender*</label>
                        <div id="gender-radiobtn">
                            <input type="radio" id="maleid" name="gender" value="Male"> Male <br>
                            <input type="radio" id="femaleid" name="gender" value="Female" checked="checked"> Female <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address1">Address*</label>
                        <input type="text" placeholder="Address" id="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="city">City*</label>
                        <input type="text" placeholder="City" id="city" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label for="inputState">State*</label>
                        <select id="inputState" class="form-control col-md-4">
                            <option selected>Choose...</option>
                            <option>Dhaka</option>
                            <option>Cumilla</option>
                            <option>Khulna</option>
                            <option>Barishal</option>
                            <option>Rajshahi</option>
                        </select>
                    </div>
                    <label>Subject*</label>
                    <div id="subject-radiobtn">
                        <input type="radio" id="r1" name="rate" value="CSE"> CSE <br>
                        <input type="radio" id="r2" name="rate" value="SE"> SE <br>
                        <input type="radio" id="r3" name="rate" value="EEE" > EEE <br>
                        <input type="radio" id="r4" name="rate" value="LLB" > LLB <br>
                        <input type="radio" id="r5" name="rate" value="ENGLISH" checked="checked"> ENGLISH <br>
                    </div>
                    <div><small class="text-danger" id="msg"></small></div>
                    <div><small class="text-success" id="msg1"></small></div>
                    <input type="submit" id="btn-update-student" class="btn btn-outline-primary form-control" value="Update">
                    <small class="text-muted">Already have an account? <a href="admin.php">Home</a></small>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>
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
