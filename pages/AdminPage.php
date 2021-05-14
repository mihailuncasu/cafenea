<?php
require_once '../constants.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\assets\css\AdminStyle.css"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>
<?php
include './NavBar.php';
?>

</br></br>
<h1>Admin page</h1> </br>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Detalii <b>Clienti</b></h2></div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                </div>
            </div>
        </div>
        <table class="table ">
            <thead>
            <tr>
                <th style="width:10%" class="text-center">Nume</th>
                <th style="width:22%" class="text-center">Adresa de email</th>
                <th style="width:22%" class="text-center">Numar telefon</th>
                <th style="width:8%" class="text-center">Rol</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <!--<thead>
            <tr>
                <th>ID</th>
                <th>FullName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Is_Admin</th>
                <th>Actions</th>
            </tr>
            </thead>-->

            <tbody>
            <?php

            require '../helper.php';
            $helper = new Helper();
            $users = $helper->getAllUsers();

            if (!empty($users)) :
                foreach ($users as $key => $user) :
                    ?>

                    <tr id="user-<?= $user['id'] ?>">
                        <td data-th="Utilizator">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h4 class="nomargin"><?= $user['full_name'] ?></h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Adresa de email" class="text-center"><?= $user['email'] ?></td>
                        <td data-th="Numar telefon" class="text-center"><?= $user['phone'] ?></td>
                        <td data-th="Rol" class="text-center">
                            <?= $user['is_admin'] == 1 ? 'Admin' : 'Utilizator' ?>
                        </td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                        class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                        class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>