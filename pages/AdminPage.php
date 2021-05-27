<?php
require_once '../constants.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\assets\css\AdminStyle.css"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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
                    <button type="button" class="btn btn-danger add-new" data-toggle="modal" data-target="#delModal"><i class="fa fa-plus"></i> Delete</button>
                    <button type="button" class="btn btn-info add-new" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New</button>
                </div>

            </div>
        </div>
        <table class="table ">
            <thead>
            <tr>
                <th style="width:10%" class="text-center">Name</th>
                <th style="width:22%" class="text-center">Email</th>
                <th style="width:22%" class="text-center">Number</th>
                <th style="width:8%" class="text-center">Role</th>
                
            </tr>
            </thead>
        

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
                     
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>




                <!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="../addUser.php" name="addForm">
      <div class="modal-body">
      <div class="user-details">

            <div class="input-box">
                <span class="details"><b>Full Name</b></span>
                <input type="text" placeholder="Enter  name" name="full-name" required>
            </div>
            <div class="input-box">
                <span class="details"><b>Username</b></span>
                <input type="text" placeholder="Enter username" name="uname" required>
            </div>
            <div class="input-box">
                <span class="details"><b>Email</b></span>
                <input type="text" placeholder="Enter email" name="email" required>
            </div>
            <div class="input-box">
                <span class="details"><b>Phone Number</b></span>
                <input type="text" placeholder="Enter number" name="phone-number" required>
            </div>
            <div class="input-box">
                <span class="details"><b>Password</b></span>
                <input type="password" placeholder="Enter  password" name="pwd" required>
            </div>
            <div class="input-box">
                <span class="details"><b>Confirm Password</b></span>
                <input type="password" placeholder="Confirm password" name="rpwd" required>
            </div>

        </div>
  
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" value="addUser">Add User</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="../addUser.php" name="delForm">
        <div class="modal-body">
            <div class="user-details">
                <div class="input-box">
                    <span class="details"><b>username</b></span>
                        <input type="text" placeholder="Enter your username" name="uname" required>
                </div>

            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button type="submit" class="btn btn-danger" value="delUser" >Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>



