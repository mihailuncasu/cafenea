<?php

require 'constants.php';
unset($_SESSION['isLoggedIn']);
session_destroy();
header('location: '.ROOT_URL);
?>