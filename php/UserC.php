<?php

class UserController {

    public function login($username, $password) {
        session_start(); // Iniciar la sesión

        // Verificar si la solicitud es de tipo POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username_db = "root";
            $password_db = "";
            $dbname = "myDB";

            // Obtener los datos del formulario de inicio de sesión
            $username = $_POST['username'];
            $password = $_POST['password'];

            try {
                // Establecer la conexión PDO
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);

                // Establecer el modo de error de PDO
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Ejecutar la consulta SQL para verificar las credenciales
                $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $password);
                $stmt->execute();

                // Obtener el resultado de la consulta
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verificar si se encontró un usuario con las credenciales proporcionadas
                if ($result) {
                    // Verificar si el usuario es admin
                    if ($username == "admin") {
                        // Redireccionar al perfil del administrador
                        header("Location: ../loggedUser/adminUser/perfil_admin.php");
                    } else {
                        // Redireccionar al perfil de usuario normal
                        header("Location: ../loggedUser/perfil.php");
                    }
                    exit(); // Terminar el script después de redireccionar
                } else {
                    // Credenciales incorrectas, mostrar mensaje de error
                    $_SESSION["error_message"] = "Credenciales incorrectas. Por favor, inténtelo de nuevo.";
                    header("Location: log.php"); // Redireccionar de vuelta al formulario de inicio de sesión
                    exit(); // Terminar el script después de redireccionar
                }
            } catch(PDOException $e) {
                // Error de conexión a la base de datos, mostrar mensaje de error
                $_SESSION["error_message"] = "Error al conectar a la base de datos: " . $e->getMessage();
                header("Location: log.php"); // Redireccionar de vuelta al formulario de inicio de sesión
                exit(); // Terminar el script después de redireccionar
            }
        }
    }

    public function logout() {
        session_start();

        $_SESSION = array();

        session_destroy();

        header("Refresh: 5; URL=../public/index.html");

        echo "Cerrando sesión. Redirigiendo a la pagina de inicio sesion en 5 segundos...";

        exit();
    }

    public function register($username, $password, $email) {
        session_start(); // Iniciar la sesion

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username_db = "root";
            $password_db = "";
            $dbname = "myDB";

            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $conn->exec("SET NAMES utf8");

                // Obtener los datos del formulario de registro
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];

                // Consulta preparada para insertar un nuevo usuario
                $stmt = $conn->prepare("INSERT INTO user (Username, Password, Email) VALUES (:username, :password, :email)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':email', $email);

                // Ejecutar la consulta
                if ($stmt->execute()) {
                    header("Location: ../public/index.html");
                    exit();
                } else {
                    $_SESSION["error_message"] = "Error al registrar el usuario.";
                    header("Location: reg.php"); // Redireccionar de vuelta al formulario de registro
                    exit();
                }
            } catch(PDOException $e){
                // Error de conexión a la base de datos, mostrar mensaje de error
                $_SESSION["error_message"] = "Error al conectar a la base de datos: " . $e->getMessage();
                header("Location: reg.php"); // Redireccionar de vuelta al formulario de registro
                exit();
            }
        }
    }

    public function uploadPhoto($username, $photo) {
        if (isset($photo['tmp_name']) && !empty($photo['tmp_name'])) {
            $servername = "localhost";
            $username_db = "root";
            $password_db = "";
            $dbname = "myDB";

            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $conn->exec("SET NAMES utf8");

                // Obtener el nombre de usuario escapado
                $escaped_username = $conn->quote($username);

                // Directorio de carga de archivos
                $upload_dir = "../loggedUser/adminUser/uploads/";
                $upload_file = $upload_dir . basename($photo['name']);
                $upload_select = "/loggedUser/adminUser/uploads/"; 
                $upload_database = $upload_select . basename($photo['name']);

                // Mover el archivo cargado al directorio de carga
                if (move_uploaded_file($photo['tmp_name'], $upload_file)) {
                    // Actualizar la ruta de la foto de perfil en la base de datos
                    $sql = "UPDATE user SET photo = '$upload_database' WHERE username = $escaped_username";
                    if ($conn->exec($sql)) {
                        echo "La foto de perfil se ha subido y guardado correctamente.";
                        header("Refresh: 5; URL=../loggedUser/adminUser/perfil_admin.php");
                    } else {
                        echo "Error al guardar la foto de perfil en la base de datos.";
                    }
                } else {
                    echo "Error al subir la foto de perfil.";
                }
            } catch(PDOException $e){
                // Error de conexión a la base de datos, mostrar mensaje de error
                echo "Error al conectar a la base de datos: " . $e->getMessage();
            }
        } else {
            echo "Por favor, seleccione un archivo de imagen.";
        }
    }

    public function deleteUser($user_id) {
        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $dbname = "myDB";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare and execute statement to delete the user
            $stmt = $conn->prepare("DELETE FROM user WHERE id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            
            if ($stmt->execute()) {
                echo "El usuario ha sido eliminado correctamente.";
            } else {
                echo "Error al eliminar el usuario.";
            }
        } catch(PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
        }
    }
}
?>
