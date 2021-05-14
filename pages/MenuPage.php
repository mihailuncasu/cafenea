<html>
<head>
    <title>Menu Page</title>
    <link rel="stylesheet" type="text/css" href="..\assets\css\MenuStyle.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="zoom: 80%">


<?php
include './NavBar.php';
?>


<div class="Categorii">
    <h2>Categorii produse</h2>
</div>

<div id="autoWidth" class="Produse">
    <?php

    require '../helper.php';
    $helper = new Helper();
    $categories = $helper->getAllProductCategories();
    foreach ($categories as $category) :
        ?>
        <div class="sectiune-categorie">
            <div class="category-box">
                <a href="#<?= $category ?>">
                    <img src="..\assets\images\<?= $category ?>.jpg"
                         alt="Vizualizeaza sortimentele noastre de <?= $category ?>"
                         title="Vizualizeaza sortimentele noastre de <?= $category ?>"/>
                </a>
            </div>
            <span><?= ucfirst($category) ?></span>
        </div>
    <?php endforeach; ?>
</div>

<div class="content">

    <?php
    foreach ($categories as $category) :
        $products = $helper->getAllProductsFromCategory($category);
        ?>
        <section id="<?= $category ?>">
            <div class="Categorii">
                <h2><?= ucfirst($category) ?></h2>
            </div>
            <div id="autoWidth" class="sectiune-produse">
                <?php
                foreach ($products as $product) :
                    ?>
                    <div class="produs">
                        <div class="category-boxP">
                            <a href="#">
                                <img src="..\assets\images\<?= $product['image_name'] ?>"/>
                            </a>

                        </div>

                        <div class="details">
                            <h3><?= $product['name'] ?></h3>
                            <br>
                            <p> <?= $product['price'] ?> lei &nbsp &nbsp <i class="fa fa-shopping-cart"></i></p>
                        </div>

                    </div>

                <?php
                endforeach;
                ?>
                <br>
        </section>
    <?php endforeach; ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
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

</head>
</html>
