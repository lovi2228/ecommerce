<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN_IN</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/signUp.css">
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">

                    <div class="box">

                        <div class="col-sm-12">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-8">
                                <div class="heading">
                                    <h1>SIGN UP</h1>
                                </div>
                            </div>
                            <div class="col-sm-2">

                            </div>
                        </div>
                        <div class="contain-form">
                            <form id="form">
                                <div class="form-group">
                                    <label for="email">NAME</label>
                                    <input type="text" autocomplete="off" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">MOBILE</label>
                                    <input type="text" autocomplete="off" name="num" id="num" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">EMAIL ID</label>
                                    <input type="email" autocomplete="off" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pswd">PASSWORD</label>
                                    <input type="password" autocomplete="off" name="pswd" id="pswd" class="form-control" required>
                                </div>
                                <div class="contain-button">
                                    <button id="submit" class="btn btn-info" onclick="done()">Done</button>
                                </div>
                                
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">

                </div>

            </div>

        </div>
    </section>
    <script type="text/javascript">
        $('#form').submit(function(e) {
            e.preventDefault();
        });

        function done() {
            let name = document.getElementById('name').value;
            let phnumber = document.getElementById('num').value;
            let email = document.getElementById('email').value;
            let pswd = document.getElementById('pswd').value;
            console.log("hello");

            if (name != "" && phnumber != "" && email != "" && pswd != "") {
                $.ajax({
                    type: "POST",
                    url: "../ajax/signupAjax.php",
                    data: {
                        name: name,
                        phnumber: phnumber,
                        email: email,
                        pswd: pswd
                    },
                    success: function(data) {
                        if (data == 0) {
                            alert("signup successfully");
                            window.location.href = "signIn.php";
                        } else {
                            alert(data);
                        }
                    }
                });
            }
        }
    </script>

</body>

</html>