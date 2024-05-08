<?php
// register.php
include 'UserC.php';

$userController = new UserController();

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$userController->register($username, $password, $email);
?>
