<?php
require_once '../constants.php';
?>

    <html>
    <head>
        <title> Login Page</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
              crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/LoginStyle.css">
    </head>
    <body>

    <?php
    include './NavBar.php';
    ?>
    <div class="loginbox">
        <div class="logo">
            <img src="..\assets\images\logo.jpg">
        </div>
        <br>
        <div class="title"><b>Sign in<b></div>
        <div class="content">
            <form method="post" action="<?php ?>" name="loginForm">

                <div class="user-details">

                    <div class="input-box">
                        <span class="details"><b>Username</b></span>
                        <input type="text" placeholder="Enter your username" name="uname" required>
                    </div>

                    <div class="input-box">
                        <span class="details"><b>Password<b></span>
                        <input type="password" placeholder="Enter your password" name="password" required>
                    </div>

                </div>

                <div class="button">
                    <input type="submit" value="Sign in" name="submit">
                </div>

            </form>

            <a href="PasswordPage.php">Forgot password?</a><br></br>
            <a href="RegisterPage.php">Don't have an account?</a><br> <br>


        </div>
    </div>
    </div>

    </body>

    </html>

<?php

if (isset($_POST['submit'])) {

    require '../helper.php';
    login();
}

function login()
{
    $helper = new Helper();
    $postValues = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $creds = $helper->checkCredentials($postValues);

    if ($creds) {
        $helper->createSession($creds);

        if ($_SESSION['userData']['admin']) {
            header('location:' . ROOT_URL . '/pages/AdminPage.php');
        } else {
            header('location:' . ROOT_URL);
        }

    } else {
        die('is no ok');
    }

}

?>