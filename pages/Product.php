<?php
require_once '../constants.php';
?>

<html>
<head>
    <title>Briosa cu cicolata</title>

    <link rel="stylesheet" type="text/css" href="BriosaStyle.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="..\assets\css\ProductStyle.css">

<body>

<?php
include './NavBar.php';
?>

<?php
require '../helper.php';
$helper = new Helper();
$product = $helper->getProductById($_GET['id']);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-5">
            <a href="#" class="img-bg">
                <img src="..\assets\images\<?= $product['image_name']?>" class="img-fluid" alt="">
            </a>

        </div>
        <div class="col-lg-6 prod-des pl-md-5">
            <h3><?= $product['name'] ?></h3>
            <div class="rating d-flex">
                <p class="text-left mr-4">
                    <a href="#" class="mr-2 text-dark">5.0</a>
                    <a href="#"><span class="fas fa-star"></span></a>
                    <a href="#"><span class="fas fa-star"></span></a>
                    <a href="#"><span class="fas fa-star"></span></a>
                    <a href="#"><span class="fas fa-star"></span></a>
                    <a href="#"><span class="fas fa-star"></span></a>
                </p>

            </div>
            <p class="amount"><?= $product['price'] ?> lei</p>

            <p><?= $product['descriere'] ?></p>

            <p><b>Cantitate: </b><?= $product['amount'] ?></p>
            <p><b>Incrediente: </b><?= $product['incrediente'] ?>
            </p>

            <p>
                <a class="btn btn-bg py-2 px-3 mr-2" href="ShoppingCartPage.php?id=<?= $product['id'] ?>">
                    Adauga in cos
                </a>
            </p>

        </div>
    </div>
</div>


<script src="..\assets\js\button.js" type="text/javascript"></script>


</body>


</head>
</html>