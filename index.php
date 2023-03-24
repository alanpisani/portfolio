<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="snorlax.png">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Portfolio</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar__brand">
                <h1>A<span>P</span></h1>
            </div>
            <ul class="navbar__menu">
                <li><a class="link active" href="index.html">Inicio</a></li>
                <li><a class="link" href="#formation">Formación</a></li>
                <li><a class="link" href="#portfolio">Proyectos</a></li>
                <li><a class="link" href="#contact">Contacto</a></li>
            </ul>
            <button id="btn-menu" class="navbar__btn-menu" id="menu-btn"><i class="fa-solid fa-bars"></i></button>
        </nav>
        <nav class="modal-navbar">
            <button id="close-menu" class="modal-navbar__close-menu">
                <i class="fa-sharp fa-solid fa-xmark"></i>
            </button>

            <ul class="modal-navbar__menu">
                <li><a class="m-link active" href="index.html">Inicio</a></li>
                <li><a class="m-link" href="#formation">Formación</a></li>
                <li><a class="m-link" href="#portfolio">Proyectos</a></li>
                <li><a class="m-link" href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="wrapper">
        <main class="main">
            <div class="info-content">
                <h1>Soy <span>A</span>lan <span>P</span>isani</h1>
                <img class="foto2" src="foto.png" alt="foto Alan Pisani">
                <p> Soy una persona motivada y apasionada en lo que hace, que le gusta los desafios y los retos.<br>
                    Poseo gran capacidad para aprender nuevas habilidades rápidamente, capacidad para trabajar en equipo
                    y, sobre
                    todo, una buena relación interpersonal.<br>
                    Deseo comenzar mi vida laboral en el área IT para fortalecer mis habilidades, poder superarme dia a
                    dia y seguir desarrollándome como profesional.</p>
                <div class="cv-container">
                    <a class="download-cv" download href="cv alan pisani.pdf">Descargar CV</a>
                    <a class="download-cv" href="https://drive.google.com/file/d/1G7Z2O9TAKlz7AOOAaWWYN8N0ky0jHyLe/view?usp=share_link" target="_blank">Ver CV</a>
                </div>
            </div>
            <img class="foto" src="foto.png" alt="foto Alan Pisani">
        </main>
    </div>

    <section id="formation" class="formation">
        <div class="formation__info">
            <h1 class="formation__info__title">Formación</h1>
            <p class="formation__info__description">Cursé Programación Web en el Centro de Formación Profesional N° 421
                Rafael Cigliutti (CFP N°421).<br>
                Actualimente me encuentro cursando el primer año de la Tecnicatura en Análisis de
                Sistemas en el Instituto de Formación Técnica Superior N° 19 (IFTS N° 19) y Java en Codo a Codo.</p>
            <div class="formation__skills">
                <img class="formation__skills__icon html" src="icons/html5.svg" alt="">
                <img class="formation__skills__icon" src="icons/CSS3.svg" alt="">
                <img class="formation__skills__icon" src="icons/js.svg" alt="">
                <img class="formation__skills__icon bootstrap" src="icons/bootstrap.svg" alt="">
                <img class="formation__skills__icon" src="icons/PHP.svg" alt="">
                <img class="formation__skills__icon" src="icons/mysql.svg" alt="">
            </div>

        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="portfolio__heading">
            <h2>Mis proyectos</h2>
        </div>
        <div class="container">
            <div class="container__card">
                <div class="container__card__image">
                </div>
                <div class="container__card__title">
                    <h2>e-commerce</h2>
                    <p>Tienda online de mi emprendimiento de impresiones 3D. Solo fron-end por el momento.</p>
                    <div class="container__card__langs">
                        <ul>
                            <li>HTML</li>
                            <li>SASS</li>
                            <li>BOOTSTRAP</li>
                            <li>JAVASCRIPT</li>
                        </ul>
                    </div>
                </div>
                <div class="container__card__links">
                    <a href="https://github.com/alanpisani/e-commerce" target="_blank"><i
                            class="fa-brands fa-github"></i></a>
                    <a href="https://alanpisani.github.io/e-commerce/" target="_blank"><i
                            class="fa-sharp fa-solid fa-globe"></i></a>
                </div>
            </div>

            <div class="container__card">
                <div class="container__card__image2">
                </div>
                <div class="container__card__title">
                    <h2>ESCAPE ROOM</h2>
                    <p>Juego de sala de escape que creamos como proyecto final en el centro de formación profesional.
                        Posee una cuenta regresiva y un ranking en donde figura los 10 mejores jugadores.</p>
                    <div class="container__card__langs">
                        <ul>
                            <li>PHP</li>
                            <li>MYSQL</li>
                            <li>CSS</li>
                            <li>BOOTSTRAP</li>
                            <li>JAVASCRIPT</li>
                        </ul>
                    </div>
                </div>
                <div class="container__card__links">
                    <a href="https://github.com/alanpisani/Sala-de-escape" target="_blank"><i
                            class="fa-brands fa-github"></i></a>
                    <a href="http://saladeescape.great-site.net/" target="_blank"><i
                            class="fa-sharp fa-solid fa-globe"></i></a>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="contact">
        <div class="contact-heading">
            <h2>Contacto</h2>
        </div>
        <div class="contact-form">
            <h4>Ante cualquier consulta, envíeme un mensaje:</h4>
            <form class="contact-form__form" method="post">
                <input type="text" placeholder="Nombre" required="required" name="nombre">
                <input type="email" placeholder="Correo electrónico" required="required" name="correo">
                <input type="text" placeholder="Asunto" required="required" name="asunto">
                <textarea name="mensaje" placeholder="Escriba su mensaje..."></textarea>
                <button name="enviar" type="submit" class="btn-submit">Enviar mensaje</button>
            </form>
            <?php
                include("correo.php");
            ?>

        </div>
    </section>

    <footer class="footer">
        <h2 class="footer__name">Alan Pisani</h2>
        <div class="footer__social-network">
            <a target="_blank" href="https://www.facebook.com/alan.pisani.9/"><i class="fa-brands fa-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/alan.pisani/"><i class="fa-brands fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/alan-pisani-72527b258/"><i
                    class="fa-brands fa-linkedin"></i></a>
        </div>


    </footer>

    <script src="script.js"></script>


</body>

</html>