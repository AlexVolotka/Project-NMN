<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/perfilstyle.css" type="text/css" rel="stylesheet">
    <title>No More Noobs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="img">
                <a href="index_loged.html">
                    <img class="logo" src="/imgs/logoWithoutText.png">
                </a>
            </div>
            <div class="info">
                <a href="/loggedUser/index_loged.html">
                    <button class="home-button">Home</button>
                </a>
                <div class="separator"></div>
                <a href="/loggedUser/ranking_logged.html">
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
                <a href="#">
                    <div class="separator"></div>
                    <button class="log-button">Perfil</button>
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
                <img class="profile-picture" src="/imgs/logoWithoutText.png" alt="Profile Picture">
            </div>
            <div class="favorite-games">
                <h2>Juegos Favoritos</h2>
            </div>
            <div class="profile-content">
                <div class="left-column">
                <?php
                // Obtener nombre de usuario desde la base de datos
                $name_profile = getNameProfile();
                ?>
                    <h1 class="profile-name"><?php echo $name_profile; ?></h1>
                    <div class="bio">
                        <h2>Biografía</h2>
                        <p>¡Hola! Soy un apasionado de los videojuegos y la tecnología.</p>
                    </div>

                    <div class="badges">
                        <h2>Emblemas Obtenidos</h2>
                    </div>

                    <div class="social-media">
                        <h2>Redes Sociales</h2>
                    </div>
                </div>

                <div class="middle-column">
                    <button class="add-friend-button">Añadir Amigos</button>
                    <div class="friend-list">
                        <h2>Lista de Amigos</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="ad2">
            ADS
        </div>
    </div>

    <!-- Resto del contenido aquí -->

</body>

</html>

<?php
    function getNameProfile() {
        
    }
?>