<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/event.css" type="text/css" rel="stylesheet">
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
                    <a href="perfil_admin.php">
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
            <div class="left-column">
                <div class="tournament-container">
                    <h2>Torneo</h2>
                    <form action="submit_tournament.php" method="post">
                        <input type="text" name="tournament_name" placeholder="Nombre del Torneo">
                    </form>
                    <h2>Otro título</h2>
                    <input type="text" placeholder="Otro input">
                    <h2>Otro título</h2>
                    <input type="text" placeholder="Otro input">
                    <h2>Otro título</h2>
                    <input type="text" placeholder="Otro input">
                </div>
            </div>

            <div class="middle-column">
            <div class="tournament-container">
                <h2>Otro título</h2>
                <input type="text" placeholder="Otro input">
                <h2>Otro título</h2>
                <input type="text" placeholder="Otro input">
                <h2>Otro título</h2>
                <input type="text" placeholder="Otro input">
            </div>
            <!-- Agregar más inputs aquí según sea necesario -->
             </div>

            <div class="right-column">
                <div class="tournament-container">
                    <h2>Otro título</h2>
                    <input type="text" placeholder="Otro input">
                    <h2>Otro título</h2>
                    <input type="text" placeholder="Otro input">
                    <h2>Otro título</h2>
                    <input type="text" placeholder="Otro input">
                </div>
                <!-- Agregar más inputs aquí según sea necesario -->
            </div>
        </div>
        <div class="ad2">
            ADS
        </div>
    </div>

</body>

</html>
