<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/perfilstyle.css" type="text/css" rel="stylesheet">
    <title>No More Noobs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <nav>
        <div class="img">
            <a href="index_admin.php">
                <img class="logo" src="/imgs/logoWithoutText.png">
            </a>
        </div>
        <div class="info">
            <a href="index_admin.php">
                <button class="home-button">Home</button>
            </a>
            <div class="separator"></div>
            <a href="ranking_admin.html">
                <button class="about-button">Notices</button>
            </a>
        </div>
        <div class="search-container">
            <input type="search" placeholder="Search...">
        </div>
        <div class="reglog">
            <a href="/php/logout.php">
                <button class="reg-button">Logout</button>
            </a>
            <a href="perfil.html">
                <div class="separator"></div>
                <a href="#">
                    <button class="log-button">Perfil</button>
                </a>
            </a>
        </div>
    </nav>
</header>

<div class="ad-container">
    <div class="ad1">
        ADS
    </div>
    <div class="profile-container">
        <div class="profile-header">
            <?php
            // Obtener la ruta de la imagen de perfil del usuario desde la base de datos
            $profile_picture_src = obtenerRutaImagenPerfil();
            ?>
            <img class="profile-picture" src="<?php echo $profile_picture_src; ?>" alt="Profile Picture">
            <form action="/php/upload_photo.php" method="post" enctype="multipart/form-data">
                <label for="photo">Subir foto de perfil:</label><br>
                <input type="file" id="photo" name="photo"><br><br>
                <input type="submit" value="Subir Foto">
            </form>
        </div>
        <div class="favorite-games">
            <h2>Juegos Favoritos</h2>
            <!-- Lista de juegos favoritos -->
            <!-- ... -->
        </div>
        <div class="profile-content">
            <div class="left-column">
                <h1 class="profile-name">EL ADMIN</h1>
                <div class="bio">
                    <h2>Biografía</h2>
                    <p>¡Hola! Soy un apasionado de los videojuegos y la tecnología.</p>
                </div>

                <div class="badges">
                    <h2>Emblemas Obtenidos</h2>
                    <!-- Lista de emblemas obtenidos -->
                    <!-- ... -->
                </div>



                <div class="social-media">
                    <h2>Redes Sociales</h2>
                    <!-- Lista de enlaces a redes sociales -->
                    <!-- ... -->
                </div>
            </div>

            <div class="middle-column">
                <button class="add-friend-button">Añadir Amigos</button>
                <div class="friend-list">
                    <h2>Lista de Amigos</h2>
                    <!-- Lista de amigos -->
                    <!-- ... -->
                </div>
            </div>

        </div>
    </div>

    <div class="ad2">
        ADS
    </div>
</div>

</body>

</html>

<?php
// Función para obtener la ruta de la imagen de perfil del usuario desde la base de datos
function obtenerRutaImagenPerfil() {
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "myDB";

    try {
        // Establecer la conexión PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);

        // Establecer el modo de error de PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta SQL para obtener la ruta de la imagen de perfil del usuario actual (en este caso 'admin')
        $stmt = $conn->prepare("SELECT photo FROM user WHERE username = 'admin'"); // Reemplaza 'admin' con el nombre de usuario del usuario actual
        $stmt->execute();

        // Obtener el resultado de la consulta
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontró una imagen de perfil
        if ($row) {
            $conn = null; // Cerrar la conexión
            return $row["photo"];
        } else {
            $conn = null; // Cerrar la conexión
            return "logoWithoutText.png"; // Ruta de la imagen por defecto
        }
    } catch(PDOException $e) {
        // Error de conexión a la base de datos, mostrar mensaje de error
        echo "Error: " . $e->getMessage();
        return "logoWithoutText.png"; // Ruta de la imagen por defecto en caso de error
    }
}

?>

