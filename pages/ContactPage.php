<?php
require_once '../constants.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\assets\css\ContactStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">

    <title>Contact Page</title>
</head>
<body>

<?php
include './NavBar.php';
?>


<div class="center">

    <div class="detailsbox">
        <div class="logo">
            <img src="..\assets\images\logo.jpg">
        </div>

        <div class="info">
            </br></br>
            <h1>Contact</h1>
            </br>
            <p>&nbsp &nbsp &nbsp Suntem mereu bucurosi sa raspundem oricaror intrebari, iar daca este cazul, va invitam
                cu drag la magazinul nostru sa discutam mai pe larg, la o cafea.</p>
            </br><p><i class="fa fa-phone"></i> &nbsp 0249.210.200</p> </br>
            <p><i class="fa fa-envelope"></i> &nbsp coffe_shop@gmail.com </p> </br>
            <p><i class="fa fa-map-marker"></i> &nbsp Str. Vasile Alecsandri, nr. 4, Bucuresti </p> </br>
            <p><i class="fa fa-clock-o"></i></i> &nbsp Luni – Vineri: 6:30 – 18:00 <br>&nbsp &nbsp &nbsp Sambata -
                Duminica: 8:00 - 20:00 </p>
        </div>

    </div>

</div>


</br></br></br></br>
<footer>
    <div class="footer-content">
        <h3>Coffe Shop</h3>
        <p>Urmariti-ne pe retelele de socializare pentru a afla mai multe!</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/thecoffeeshop0/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/BrosCoffeeCo"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/brotherscoffeeco/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/watch?v=2Ao5b6uqI40&ab_channel=HowcastFoodDrinkHowcast"><i
                            class="fa fa-youtube"></i></a></li>

        </ul>

    </div>

    <div class="footer-bottom">
        <p>Copyright &copy
            <script>document.write(new Date().getFullYear())</script>
            Coffe shop
        </p>
    </div>
</footer>
</body>
</html>