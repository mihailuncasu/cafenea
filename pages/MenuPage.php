<?php
require_once '../constants.php';
?>


<html>
<head>
    <title>Menu Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="..\assets\css\MenuStyle.css">
<body>

<?php
include './NavBar.php';
?>

<div class="container" style="display: grid">
    <div class="Categorii">
        <h2 class="categorie">Categorii produse</h2>
    </div>

    <div class="card-deck myCardDeck">
        <?php
        require '../helper.php';
        $helper = new Helper();
        $categories = $helper->getAllProductCategories();
        foreach ($categories as $category) :
            ?>
            <div class="card mb-4 myProduct">
                <a href="#<?= $category ?>">
                    <img class="card-img-top img-fluid myImage" src="..\assets\images\<?= $category ?>.jpg"
                         alt="Vizualizeaza sortimentele noastre de <?= $category ?>"
                         title="Vizualizeaza sortimentele noastre de <?= $category ?>"/>
                </a>
                <div class="card-body myCard-body">
                    <div class="myTitle">
                        <h4 class="card-title">
                            <?= ucfirst($category) ?>
                        </h4>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <?php
    foreach ($categories as $category) :
        $products = $helper->getAllProductsFromCategory($category);
        ?>
        <section id="<?= $category ?>" class="section-4">
            <div class="Categorii">
                <h2 class="categorie"><?= $category ?></h2>
            </div>
        </section>
        <div class="card-deck myCardDeck">
            <?php foreach ($products as $product) : ?>
                <div class="card mb-4 myProduct">
                    <img class="card-img-top img-fluid myImage" src="..\assets\images\<?= $product['image_name'] ?>"/>
                    <div class="card-body myCard-body">
                        <div class="myTitle">
                            <h4 class="card-title">
                                <?= $product['name'] ?>
                            </h4>
                        </div>
                        <div class="myText">
                            <p class="card-text"><?= $product['price'] ?> lei &nbsp &nbsp
                                <a href="Product.php?id=<?= $product['id'] ?>" style="color: #1b1919"><i class="fa fa-shopping-cart"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
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
