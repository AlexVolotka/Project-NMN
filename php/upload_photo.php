<?php
// upload_photo.php
include 'UserC.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["photo"])) {
        $photo = $_FILES["photo"];

        $userController = new UserController();

        $username = "admin";
        $userController->uploadPhoto($username, $photo);
    } else {
        echo "Error: No se ha seleccionado ningún archivo de imagen.";
    }
} else {
    echo "Error: El formulario no ha sido enviado correctamente.";
}
?>

