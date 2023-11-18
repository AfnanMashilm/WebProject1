<?php 
session_start();
session_unset();
session_destroy();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>

    <div class="row header ">

    </div>
    <div class="title">
        <h1>Welcome! </h1>
    </div>
    <div class="container" style="border:0;">
        <div class="SignUpForm">
            <h2>Login </h2>

            <form action="../BE/login.php" method="POST" name="login-form">
                <label for="un">Username</label>

                <br>
                <input type="text" name="username" id="un" class="txtfield">
                <br>
                <br>

                <label for="pass">Password</label>
                <br>
                <input type="password" name="pass" id="pass" class="txtfield">
                <br>
                <br>


                <input type="button" value="Login" class="mButton" onclick="login()">
                <input type="button" value="Cancel" class="mButton" onclick="ClearForm()">
                <br><br>
            </form>
            <a href="./pages/signup.html">Sign Up...</a>
        </div>

    </div>
    <script>
        function login() {
            var mForm = document.querySelector("form[name='login-form']");
            console.log(mForm); // Log the value of mForm
            var un = mForm.elements["username"].value;
            var pass = mForm.elements["pass"].value;
            mForm.submit();
            // var un = document.getElementById("un").value;
            // var pass = document.getElementById("pass").value;
            if ((un == "") || (pass == "")) {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }
        }
        function ClearForm() {
            document.getElementById("un").value = "";
            document.getElementById("pass").value = "";
        }
    </script>
</body>
</html>