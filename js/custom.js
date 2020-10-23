// Register data

$(document).ready(function () {

    $("#btn-add").click(function (e) {
        e.preventDefault()

        let name = $("#name").val()
        let email = $("#email").val()
        let password = $("#password").val()
        let phone = $("#phone").val()

        let gender = ""
        if (document.getElementById('maleid').checked) {
            gender = $("#maleid").val();
        }
        else if (document.getElementById('femaleid').checked){
            gender = $("#femaleid").val();
        }

        let address = $("#address").val()
        let city = $("#city").val()
        let state = $("#inputState").val()

        let subject = ""
        if (document.getElementById('r1').checked) {
            subject = $("#r1").val();
        }
        else if (document.getElementById('r2').checked){
            subject = $("#r2").val();
        }
        else if (document.getElementById('r3').checked){
            subject = $("#r3").val();
        }
        else if (document.getElementById('r4').checked){
            subject = $("#r4").val();
        }
        else if (document.getElementById('r5').checked){
            subject = $("#r5").val();
        }

        // console.log(name, email, phone, gender, address, city, state, subject)

        mydata = {name: name, email: email, phone: phone , gender: gender, address: address, city: city, state,subject: subject, password: password}

        $.ajax({
            url: "../controllers/RegisterController.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>"
                console.log(data)
                $("#msg").html(msg)
                console.log(data)
                console.log(mydata['password'])
                $("#myform")[0].reset()
            },
        })
    })

// Teacher password change
    $("#teacher-settings").click(function (e) {
        e.preventDefault()

        $("#teacher-password-cng").removeClass("d-none")
    })

    // Teacher password save
    $("#teacher-password-save").click(function (e) {
        e.preventDefault()

        let password = $("#teacher-password-input").val()

        mydata = {password: password}

        // console.log(mydate['password'])
        $.ajax({
            url: "../controllers/PasswordChange.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>"
                console.log(data)
                $("#msg").removeClass("d-none")
                $("#teacher-password-cng").addClass("d-none")
                $("#msg").html(msg)
                console.log(data)
                console.log(mydata['password'])
                $("#myform")[0].reset()
            },
        })
    })

    // Register Teacher
    $("#btn-add-teacher").click(function (e) {
        e.preventDefault()

        let name = $("#name").val()
        let email = $("#email").val()
        let password = $("#password").val()
        let phone = $("#phone").val()

        let gender = ""
        if (document.getElementById('maleid').checked) {
            gender = $("#maleid").val();
        }
        else if (document.getElementById('femaleid').checked){
            gender = $("#femaleid").val();
        }

        let address = $("#address").val()
        let city = $("#city").val()
        let state = $("#inputState").val()

        let subject = ""
        if (document.getElementById('r1').checked) {
            subject = $("#r1").val();
        }
        else if (document.getElementById('r2').checked){
            subject = $("#r2").val();
        }
        else if (document.getElementById('r3').checked){
            subject = $("#r3").val();
        }
        else if (document.getElementById('r4').checked){
            subject = $("#r4").val();
        }
        else if (document.getElementById('r5').checked){
            subject = $("#r5").val();
        }

        // console.log(name, email, phone, gender, address, city, state, subject)

        mydata = {name: name, email: email, phone: phone , gender: gender, address: address, city: city, state,subject: subject, password: password}

        $.ajax({
            url: "../controllers/RegisterTeacherController.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>"
                console.log(data)
                $("#msg").html(msg)
                console.log(data)
                console.log(mydata['password'])
                $("#myform")[0].reset()
            },
        })
    })

    // Retrieve Student data
    function showdata() {

        output = ""

        $.ajax({
            url: "../controllers/RetrieveStudent.php",
            method: "GET",
            dataType: "json",
            success: function (data) {
                console.log(data)

                if (data) {
                    x = data
                } else {
                    x = ""
                }

                for (i = 0; i < x.length; i++) {
                    output += "<tr><td>" + x[i].id + "</td><td>" + x[i].name + "</td><td>" + x[i].email
                        + "</td><td>" + x[i].phone + "</td><td><button class='btn btn-warning btn-sm btn-edit' data-sid=" + x[i].id + ">Edit</button>" +
                        "<button class='btn btn-danger btn-sm btn-del' data-sid=" + x[i].id + ">Delete</button></td></tr>"
                }
                $("#tbody").html(output)
            },
        })
    }

    showdata()

    // Ajax request for editing data
    $("#tbody").on("click", ".btn-edit", function () {
        console.log("Edit button clicked!");

        // $("#btnadd").attr('id', 'btnupdate')

        let id = $(this).attr("data-sid")
        mydata = {id: id}

        $.ajax({
            url: "../controllers/EditController.php",
            method: "POST",
            dataType: "json",
            data: JSON.stringify(mydata),
            success: function (data) {
                $("#stuid").val(data.id)
                $("#name").val(data.name)
                $("#email").val(data.email)
                $("#password").val(data.password)
                $("#phone").val(data.phone)
                $("#address").val(data.address)
                $("#city").val(data.city)
                $("#inputState").val(data.state)
            }
        })
    })

    // Update student data
    $("#btn-update-student").click(function (e) {
        e.preventDefault()

        let id = $("#stuid").val()
        let name = $("#name").val()
        let email = $("#email").val()
        let password = $("#password").val()
        let phone = $("#phone").val()

        let gender = ""
        if (document.getElementById('maleid').checked) {
            gender = $("#maleid").val();
        }
        else if (document.getElementById('femaleid').checked){
            gender = $("#femaleid").val();
        }

        let address = $("#address").val()
        let city = $("#city").val()
        let state = $("#inputState").val()

        let subject = ""
        if (document.getElementById('r1').checked) {
            subject = $("#r1").val();
        }
        else if (document.getElementById('r2').checked){
            subject = $("#r2").val();
        }
        else if (document.getElementById('r3').checked){
            subject = $("#r3").val();
        }
        else if (document.getElementById('r4').checked){
            subject = $("#r4").val();
        }
        else if (document.getElementById('r5').checked){
            subject = $("#r5").val();
        }

        // console.log(name, email, phone, gender, address, city, state, subject)

        mydata = {id: id, name: name, email: email, phone: phone , gender: gender, address: address, city: city, state,subject: subject, password: password}

        $.ajax({
            url: "../controllers/UpdateController.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>"
                console.log(data)
                $("#msg").html(msg)
                console.log(data)
                console.log(mydata['password'])
                $("#myform")[0].reset()

                showdata()
            },
        })
    })

    // Delete student
    $("#tbody").on("click", ".btn-del", function () {
        console.log("Delete button clicked!");

        let id = $(this).attr("data-sid")

        mydata = {id: id}
        mythis = this
        $.ajax({
            url: "../controllers/DeleteController.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                // console.log(data)
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>"
                $("#msg").html(msg)

                // Calling showdata function
                // showdata()
                $(mythis).closest("tr").fadeOut()
            }
        })
    })

    // Course Register
    $("#course-register-btn").click(function (e) {
        e.preventDefault()

        let email = $("#email").val()
        let course1 = $("#course1").val()
        let course2 = $("#course2").val()
        let course3 = $("#course3").val()
        let course4 = $("#course4").val()


        // console.log(name, email, phone, gender, address, city, state, subject)

        mydata = {email: email, course1: course1, course2: course2, course3: course3, course4: course4}

        $.ajax({
            url: "../controllers/CourseController.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>"
                console.log(data)
                $("#msg").html(msg)
                console.log(data)
                console.log(mydata['password'])
                $("#myform")[0].reset()
            },
        })
    })
})