<?php
include 'UserC.php';
// login.php
$userController = new UserController();


if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $userController->login($username, $password);
} else {
    echo "Error: Revise El usuario o la contraseña";
    header("Refresh: 5; URL=../public/RegLogPage.html");
}
?>
