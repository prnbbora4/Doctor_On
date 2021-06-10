<?php
session_start();
if(!isset($_SESSION['email']) )
{
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Doctor On</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="profile.php" class="nav__logo">Doctor On</a>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="nav__list">
                        <li class="nav__item"><a href="profile.php" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Blog</a></li>
                        <li class="nav__item"><a href="logout.php" class="nav__link">Log Out</a></li>


                    </ul>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__img">
                        <img src="assets/img/img1.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/img2.png" alt="" data-speed="2" class="move">
                        <img src="assets/img/img3.png" alt="" data-speed="2" class="move">
                        <img src="assets/img/img4.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/img5.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/img6.png" alt="" data-speed="2" class="move">
						<!--<img src="assets/img/logcopy.png" alt="" data-speed="2" class="move">-->
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Doctor On</h1>
                        <p class="home__description">Let's help you to consult with your Favorite <br> Doctors.</p>
                        <a href="search.php" class="home__button">Get Started</a>
                    </div>
                </div>
            </section>
        </main>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>