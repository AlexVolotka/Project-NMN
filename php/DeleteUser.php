<?php
include 'UserC.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["user_id"])) {
        $user_id = $_POST["user_id"];

        $userController = new UserController();

        // Call a method in UserController to delete the user
        $userController->deleteUser($user_id);
    } else {
        echo "Error: No se ha especificado el ID de usuario.";
    }
} else {
    echo "Error: El formulario no se ha enviado correctamente.";
}
?>
