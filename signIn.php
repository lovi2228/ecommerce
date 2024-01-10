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
    <link rel="stylesheet" href="../css/signiin.css">
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
                                    <h1>SIGN IN</h1>
                                </div>
                            </div>
                            <div class="col-sm-2">

                            </div>
                        </div>
                        <div class="contain-form">
                            <form id="form">
                                <div class="form-group">
                                    <label for="email">EMAIL ID</label>
                                    <input type="email" autocomplete="off" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pswd">PASSWORD</label>
                                    <input type="password" autocomplete="off" name="pswd" id="pswd" class="form-control" required>
                                </div>
                                <div class="contain-button">
                                    <button id="submit" class="btn btn-info" onclick="signIn()">Sign In</button>
                                </div>
                                <hr>
                                <div class="l1">
                                    <p>Don't Have An Account? <a href="signUp.php">Create Account</a></p>
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

        function signIn() {
            let email = document.getElementById('email').value;
            let pswd = document.getElementById('pswd').value;

            if (email != "" && pswd != "") {
                $.ajax({
                    type: "POST",
                    url: "../ajax/signinAjax.php",
                    data: {
                        email: email,
                        pswd: pswd
                    },
                    success: function(data) {
                        if (data == 0) {
                            
                            console.log(data);
                            window.location.href = "main.php";
                            
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