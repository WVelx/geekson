<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINKS STYLE-EXTRAS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/source/Icon_Logo.png" type="image/png">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">
    <title>GEEKSON DIGITAL</title>
</head>

<body data-target=".fixed-top">
    <!-- Line of Preloader page -->
    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- AGREGAR MENU -->
    <?php include('./source/Layout/menu.php'); ?>

    <!-- Content page -->
    <div data-aos="fade" data-aos-delay="1000">

        <!-- AGREGAR HEADER -->
        <?php include('./source/Layout/header.php'); ?>


        <main>
            <section id="Home2" class="section show">
                <div class="content-home2 text-center">
                    <h1 class="name-company">Nuestros Proyectos</h1>
                </div>
            </section>


            <div class="container">
                <section id="Our-portfolio" class="py-4 section show title-section" data-title="title-our-portfolio">
                    <div class="container pt-3">
                        <div class="row justify-content-center">
                            <!-- AGREGAR PORTAFOLIO -->
                            <?php include('./source/JSON/Projects/projects.php');
                            echo all_project();
                            ?>
                        </div>
                    </div>
                </section>
            </div>

        </main>

        <!-- AGREGAR FOOTER -->
        <?php include('./source/Layout/footer.php'); ?>

    </div>

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/change_mode.js"></script>
    <script src="js/change_lenguaje.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/animation_writer.js"></script>
</body>

</html>