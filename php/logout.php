<?php
// logout.php
include 'UserC.php';

$userController = new UserController();

$userController->logout();
?>