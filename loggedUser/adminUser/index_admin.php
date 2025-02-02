<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/stylesheets.css" type="text/css" rel="stylesheet">
    <title>No More Noobs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <div class="img">
            <a href="#">
            <img class="logo" src="/imgs/logoWithoutText.png">
            </a>
        </div>
        <div class="info">
            <a href="#">
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
                <a href="perfil_admin.php">
                    <div class="separator"></div>
                    <button class="log-button">Perfil</button>
                </a>
        </div>
    </nav>
</header>
<main>
    <div class="ad1">
        ADS
    </div>
    <div class="content-container">
        <h1 class="title-body">Bienvenido a No More Noobs</h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="imagen1.jpg" alt="Imagen 1"></div>
                <div class="swiper-slide"><img src="imagen2.jpg" alt="Imagen 2"></div>
                <div class="swiper-slide"><img src="imagen3.jpg" alt="Imagen 3"></div>
            </div>
        </div>
        <div class="search-container-main">

            <div class="left-buttons">
                <button class="left-button">Left Button</button>

                <div class="dropdown">
                    <button class="games-dropdown">Games</button>
                    <div class="dropdown-content">
                        <a href="#">Game 1</a>
                        <a href="#">Game 2</a>
                        <a href="#">Game 3</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="status-dropdown">Status</button>
                    <div class="dropdown-content">
                        <a href="#">Status 1</a>
                        <a href="#">Status 2</a>
                        <a href="#">Status 3</a>
                    </div>
                </div>
            </div>

            <div class="right-buttons">
                <button class="right-button">Right Button 1</button>
                <button class="right-button">Right Button 2</button>
                <button class="right-button">Right Button 3</button>
            </div>
        </div>
        <div class="eventEdit">
            <a href="edit_events.php">
                <button class="event-button">Edit Events</button>
            </a>
        </div>
        <div class="content">
            <div class="tournament-container">
                <div class="tournament-info">
                    <div class="event-details">
                        <p class="event-date">Fecha: 14 de febrero, 2024</p>
                        <p class="event-time">Hora: 18:00</p>
                        <p class="game-name">Nombre del Juego 1</p>
                        <h2 class="tournament-name">Nombre del Torneo 1</h2>
                        <p class="tournament-description">Breve descripción del torneo 1...</p>
                    </div>
                    <div class="game-logo">
                        <img src="logo-juego-1.png" alt="Logo del Juego 1">
                    </div>
                </div>
            </div>

            <div class="tournament-container">
                <div class="tournament-info">
                    <div class="event-details">
                        <p class="event-date">Fecha: 15 de febrero, 2024</p>
                        <p class="event-time">Hora: 19:30</p>
                        <p class="game-name">Nombre del Juego 2</p>
                        <h2 class="tournament-name">Nombre del Torneo 2</h2>
                        <p class="tournament-description">Breve descripción del torneo 2...</p>
                    </div>
                    <div class="game-logo">
                        <img src="logo-juego-2.png" alt="Logo del Juego 2">
                    </div>
                </div>
            </div>

            <div class="tournament-container">
                <div class="tournament-info">
                    <div class="event-details">
                        <p class="event-date">Fecha: 16 de febrero, 2024</p>
                        <p class="event-time">Hora: 20:15</p>
                        <p class="game-name">Nombre del Juego 3</p>
                        <h2 class="tournament-name">Nombre del Torneo 3</h2>
                        <p class="tournament-description">Breve descripción del torneo 3...</p>
                    </div>
                    <div class="game-logo">
                        <img src="logo-juego-3.png" alt="Logo del Juego 3">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="ad2">
        ADS
    </div>
</main>

</body>
</html>
