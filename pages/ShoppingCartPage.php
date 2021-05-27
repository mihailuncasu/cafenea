<?php
require_once '../constants.php';
require '../helper.php';
?>

<?php
if (isset($_GET['id'])) {
    $helper = new Helper();
    $_SESSION['shopping_cart'][] = $product = $helper->getProductById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- For mobile -->
    <title>Plaseaza comanda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> <!-- Social media icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="..\assets\css\MenuStyle.css">
</head>
<?php
include './NavBar.php';
?>
<body>

<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3 text-center">
                Comanda a fost plasata!
            </div>
        </div>
    </div>
</div>

<div class="container">
    <?php
    if (isset($_SESSION['shopping_cart'])):
    ?>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Produs</th>
            <th style="width:10%">Pret</th>
        </tr>
        </thead>
        <?php $total = 0; ?>

        <tbody>
        <?php foreach ($_SESSION['shopping_cart'] as $key => $product): ?>
            <tr id="product-<?= $product['id'] ?>">
                <td data-th="Produs">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <img src="..\assets\images\<?= $product['image_name'] ?>" class="img-fluid" alt="">
                            <div class="col-sm-10">
                                <h4 class="nomargin"><?= $product['name'] ?></h4>
                            </div>
                        </div>
                </td>
                <td data-th="Pret" id="product-price-<?= $product['id'] ?>"><?= $product['price'] ?> lei</td>
            </tr>
            <?php $total += $product['price'] ?>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center" name="total-sum"><strong>Total <?= $total ?> lei</strong></td>
        </tr>
        <tr>
            <td><a href="<?= PAGES ?>MenuPage.php" class="btn btn-light"><i class="fa fa-angle-left"></i> Continue
                    Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center" name="total-sum"><strong>Total <?= $total ?> lei</strong></td>

            <td>
                <button data-toggle="modal" data-target="#modalSubscriptionForm"
                        class="btn btn-secondary btn-block">Checkout <i class="fa fa-angle-right"></i></button>
            </td>
        </tr>
        </tfoot>
        <?php else: ?>
            <a href="<?= PAGES ?>MenuPage.php" class="btn btn-light"><i class="fa fa-angle-left"></i> Continue
                Shopping</a>
        <?php endif; ?>
    </table>
</div>
</body>
</html>