<?php
require_once '../constants.php';
?>
    <html lang="">
    <head>
        <title> Register Page</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
              crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/RegisterStyle.css">
    </head>
    <body>
    <?php
    include './NavBar.php';
    ?>
    <div class="loginbox">
        <div class="logo">
            <img src="../assets/images/logo.jpg">
        </div>
        <br>
        <div class="title"><b>Registration<b></div>
        <div class="content">
            <form method="post" action="<?php ?>" onsubmit="return validateForm()" name="registerForm">

                <div class="user-details">

                    <div class="input-box">
                        <span class="details"><b>Full Name</b></span>
                        <input type="text" placeholder="Enter your name" name="full-name" required>
                    </div>
                    <div class="input-box">
                        <span class="details"><b>Username</b></span>
                        <input type="text" placeholder="Enter your username" name="uname" required>
                    </div>
                    <div class="input-box">
                        <span class="details"><b>Email</b></span>
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details"><b>Phone Number</b></span>
                        <input type="text" placeholder="Enter your number" name="phone-number" required>
                    </div>
                    <div class="input-box">
                        <span class="details"><b>Password</b></span>
                        <input type="text" placeholder="Enter your password" name="pwd" required>
                    </div>
                    <div class="input-box">
                        <span class="details"><b>Confirm Password</b></span>
                        <input type="text" placeholder="Confirm your password" name="rpwd" required>
                    </div>

                </div>

                <div class="button">
                    <input type="submit" value="Register" name="submit">
                </div>

            </form>
        </div>
    </div>
    </body>

    </html>

    <script>
        function validateForm() {
            var password = document.registerForm.pwd.value;
            var rpassword = document.registerForm.rpwd.value;

            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }
            if (password !== rpassword) {
                alert("Passwords must match, please try again!");
                return false;

            }

        }
    </script>


<?php


if (isset($_POST['submit'])) {

    require '../helper.php';

    register();
}


function register()
{
    $helper = new Helper();
    $postValues = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $result = $helper->insertUser($postValues);
    if ($result) {
        header('location: http://localhost/index.php');
    } else {
        die('is no ok');
    }

}