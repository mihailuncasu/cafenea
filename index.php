<?php
require_once 'constants.php';
?>

<html>
<head>
    <title> Home </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/HomeStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php
    include './pages/NavBar.php';
?>
<br>
<br>
<br>
<br>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="centered">
                    <h1 align="center"><b>Hai la o cafea de poveste!</b></h1> </br>
                    <p> &nbsp &nbsp Noi credem în poveștile spuse la cafea. Sau în cele care capătă sens când ne așezăm gândurile bându-ne cafeaua.
                        Coffe Shop vă așteaptă cu o cafea exclusivistă cu gust de poveste care își așteaptă, la rândul ei, poveștile. În inima Bucureștiului,
                        foarte aproape de Piața Victoriei, deschide gustul de povești cu o cafea cu totul specială. Băută în tihnă sau luată rapid <br> la pachet.
                        Pentru ca fiecare poveste are ritmul ei.
                    </p>
                </div>
                <a href='pages/AboutPage.php'><button class="buton">Afla mai multe</button></a>
                <img src="assets/images/home.jpg" style="width:100%; height:900px;">
            </div>

            <div class="item">
                <img src="assets/images/multiple.jpg" style="width:100%; height:900px; ">
                <div class="banner-text">
                    <div class="box">
                        <p align="center">Oferta 1+1 in fiecare luni daca vii cu un prieten!</p>
                        <br><br>
                        <a href='MenuPage.html'><button class="buton2">Alegeti cafeaua</button></a>
                    </div>
                </div>
            </div>

            <div class="item">

                <div class="row">
                    <div class="column">
                        <img src="assets/images/poza5.jpeg" style="width:100%; height:900px; ">
                    </div>
                    <div class="column">
                        <img src="assets/images/socialMedia.jpg"  style="width:100%; height:900px; ">
                    </div>
                </div>
                <div class="banner-text">
                    <div class="box">
                        <p align="center">Posteaza o poza din una dintre locatiile noastre pe instagram! Da-ne tag si poti castiga o cafea!</p>
                    </div>
                </div>

            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<footer>
    <div class="footer-content">
        <h3>Coffe Shop</h3>
        <p>Urmariti-ne pe retelele de socializare pentru a afla mai multe!</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/thecoffeeshop0/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/BrosCoffeeCo"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/brotherscoffeeco/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/watch?v=2Ao5b6uqI40&ab_channel=HowcastFoodDrinkHowcast"><i class="fa fa-youtube"></i></a></li>

        </ul>

    </div>

    <div class="footer-bottom">
        <p>Copyright &copy <script>document.write(new Date().getFullYear())</script> Coffe shop </p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</body>

</html>
