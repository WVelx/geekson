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
            <section id="Home" class="section show">
                <div class="content-home">
                    <h1 class="font-company font-extrabold">GEEKSON DIGITAL</h1>
                    <span class="typewrite b8" data-period="2000" data-type='[ "Somos Creatividad", "Somos Tecnologia", "Somos Innovacion", "Somos Geeks" ]'>
                        <p class="wrap "></p>
                    </span>
                </div>
            </section>

            <div class="container">
                <section id="About-us" class="py-2 section title-section change-section" data-title="title-about-us">
                    <div class="pt-4">
                        <div class="div_title">
                            <h2 class="font-title color-change-import font-bold font-shadow" id="title-about-us">
                                < SOBRE NOSOTROS />
                            </h2>
                        </div>

                        <div class="line-title">
                            <hr class="border-2 animated-fliter m-0" id="line1">
                        </div>
                    </div>

                    <div class="pt-4 row">
                        <div class="col-lg">
                            <h3 class="font-subtitle color-change-import font-bold mb-3">¿QUIENES SOMOS?</h3>
                            <p class="font-normal color-change-normal">
                                Somos una empresa Colombiana apasionada por la tecnología,
                                dedicada a ofrecer servicios digitales con los mas altos estándares de
                                calidad.
                                En <b>Geekson Digital</b> no solo ofrecemos un simple servicio; también
                                oportunidades de impulsar
                                el crecimiento y éxito empresarial de nuestros clientes, teniendo como base
                                la creatividad, experiencia técnica y un enfoque centrado en el cliente.
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <img class="img-about border-r" src="source/Fondo_Inicial.jpg" alt="Geekson Digital empresa">
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="font-subtitle color-change-import font-bold mb-3">NUESTRO EQUIPO</h3>
                        <div class="swiper swiper-employeed">
                            <div class="swiper-wrapper">
                                <!-- AGREGAR EMPLEADOS -->
                                <?php include('./source/JSON/Employed/employed.php'); ?>
                            </div>
                            <div class="pagination-space"></div>
                            <div class="swiper-pagination swiper-pagination-employeed"></div>
                        </div>
                    </div>
                </section>

                <section id="Service-us" class="py-2 section title-section change-section" data-title="title-service-us">
                    <div class="pt-4">
                        <div class="div_title">
                            <h2 class="font-title color-change-import font-bold font-shadow" id="title-service-us">
                                < SERVICIOS />
                            </h2>
                        </div>

                        <div class="line-title">
                            <hr class="border-2 animated-fliter m-0 " id="line2">
                        </div>
                    </div>

                    <div class="pt-4 row justify-content-center mx-1">
                        <!-- AGREGAR SERVICIOS -->
                        <?php include('./source/JSON/Services/services.php'); ?>
                    </div>
                </section>

                <section id="Our-portfolio" class="py-2 section title-section" data-title="title-our-portfolio">
                    <div class="pt-4">
                        <div class="div_title">
                            <h2 class="font-title color-change-import font-bold font-shadow" id="title-our-portfolio">
                                < PROYECTOS />
                            </h2>
                        </div>

                        <div class="line-title">
                            <hr class="border-2  animated-fliter m-0 " id="line3">
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="row justify-content-center">
                            <!-- AGREGAR PORTAFOLIO -->
                            <?php include('./source/JSON/Projects/projects.php'); 
                                echo last_project();
                            ?>
                        </div>

                        <div class="text-center pt-4">
                            <a href="./Projects.php" class="btn btn-dark">Ver Mas </a>
                        </div>
                    </div>

                </section>

                <section id="Our-clients" class="py-2 section title-section" data-title="title-our-clients">
                    <div class="pt-4">
                        <div class="div_title">
                            <h2 class="font-title color-change-import font-bold font-shadow" id="title-our-clients">
                                < CLIENTES />
                            </h2>
                        </div>

                        <div class="line-title">
                            <hr class="border-2  animated-fliter m-0 " id="line4">
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="swiper swiper-clients">
                            <div class="swiper-wrapper">
                                <!-- AGREGAR CLIENTES -->
                                <?php include('./source/JSON/Clients/clients.php'); ?>
                            </div>
                            <div class="pagination-space"></div>
                            <div class="swiper-pagination swiper-pagination-clients"></div>
                        </div>
                    </div>
                </section>

                <section id="Contact" class="py-2 section title-section" data-title="title-contact">
                    <div class="pt-4">
                        <div class="div_title">
                            <h2 class="font-title color-change-import font-bold font-shadow" id="title-contact">
                                < CONTACTANOS />
                            </h2>
                        </div>

                        <div class="line-title">
                            <hr class="border-2  animated-fliter m-0 " id="line5">
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="row div-form-contact">
                            <div class="col-lg-6 div-follow">
                                <div class="container">
                                    <h3 class=" fw-bold fs-4">Síguenos</h3>
                                    <a class="fa-brands fa-facebook icon-big color-change-normal color-purple-hover scale-1 transition-300" href=""></a>
                                </div>
                                <div class="container">
                                    <h3 class="fw-bold fs-4">Charla con nosotros</h3>
                                    <a class="fa-brands fa-whatsapp icon-big color-change-normal color-purple-hover scale-1 transition-300" href=""></a>
                                </div>
                            </div>
                            <div class="col-lg div-form">
                                <div class="content-form">
                                    <form name="sentMessage" method="post" action="./sendEmail/Email.php">
                                        <div class="py-4 displayflex">
                                            <input type="text" class="form-control form-contact mx-3" name="name" placeholder="Nombre">
                                        </div>

                                        <div class="pb-4 displayflex">
                                            <input type="text" class="form-control form-contact mx-3" name="email" placeholder="Correo electrónico">
                                        </div>

                                        <div class="pb-4 displayflex">
                                            <input type="text" class="form-control form-contact mx-3" name="subject" placeholder="Asunto del correo">
                                        </div>
                                        <div class="pb-4 displayflex">
                                            <textarea class="form-control form-contact mx-3" rows="5" name="message" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="text-center pb-4">
                                            <button class="btn btn-dark ">Enviar <i class="fa-solid fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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