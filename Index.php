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

    <div class="offcanvas offcanvas-start bg-black slide" tabindex="-1" id="offcanvasResponsive">
        <div class="offcanvas-header">
            <div class="ms-0 row">
                <div class="col ps-2 light-dark" id="button-change1">
                    <i class="fas fa-moon" id="icon-change"></i>
                </div>
                <div class="col select-header">
                    <select class="bg-transparent select-box" name="" id="">
                        <option selected>ES</option>
                        <option>EN</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn-close me-2 btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="container text-center pb-2">
                <a href="">
                    <img loading="lazy" class="icon-logo" src="source/Icon_Logo.png" alt="logo Geekson Digital extendido">
                </a>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item py-1">
                    <a href="#About-us" class="nav-link">Acerca de</a>
                </li>
                <li class="nav-item py-1">
                    <a href="#Service-us" class="nav-link">Servicios</a>
                </li>
                <li class="nav-item py-1">
                    <a href="#Our-portfolio" class="nav-link">Nuestros portafolio</a>
                </li>
                <li class="nav-item py-1">
                    <a href="#Our-clients" class="nav-link">Nuestros clientes</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto text-center">
            <p class="color-graywhite">Derechos de autor &copy; 2024 GeeksonDigital</p>
            <ul class="list-inline">
                <a class="px-2 color-white color-purple-hover fa-brands fa-facebook icon-menu scale-1 transition-300" href=""></a>
                <a class=" px-2 color-white color-purple-hover fa-brands fa-whatsapp icon-menu scale-1 transition-300" href=""></a>
            </ul>
        </div>
    </div>

    <!-- Content page -->
    <div data-aos="fade" data-aos-delay="1000">

        <header class="navbar navbar-expand-lg navbar-dark fixed-top opacity-9 transparent" id="header">
            <div class="container p-0">
                <button class="ms-2 navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                    <span class="navbar-toggler-icon navbar-toggler-white"></span>
                </button>

                <div class="col-md center-md">
                    <a href="#Home" class="navbar-brand m-0 p-0">
                        <img loading="lazy" class="logo-header" src="source/Logo.png" alt="logo Geekson Digital extendido">
                    </a>
                </div>

                <div class="col-md collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <a href="#About-us" class="nav-link">Acerca de</a>
                        </li>
                        <li class="nav-item ps-2">
                            <a href="#Service-us" class="nav-link">Servicios</a>
                        </li>
                        <li class="nav-item ps-2">
                            <a href="#Our-portfolio" class="nav-link">Nuestros portafolio</a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="#Our-clients" class="nav-link">Nuestros clientes</a>
                        </li>
                        <li class="row">
                            <div class="col select-header">
                                <select class="bg-transparent select-box" name="" id="">
                                    <option selected>ES</option>
                                    <option>EN</option>
                                </select>
                            </div>
                            <div class="col ps-2 light-dark" id="button-change2">
                                <i class="fas fa-moon" id="icon-change"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

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
                            <div class="col-md-4">
                                <div class="card-portfolio border-r p-3 m-2">
                                    <div class="cont-img border-r position-relative overflow-hidden d-inline-block">
                                        <img class="img-project" src="/source/Fondo_Inicial.jpg">
                                        <div class="overlay overlay-project position-absolute">
                                            <a class="button-overlay fa-solid fa-eye icon-medium color-purple scale-1 transition-300" href="#"></a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-title-card color-change-import my-2 text-center font-semibold font-shadow-small"> Proyecto de pasatiempo</p>
                                        <div class="desc-project">
                                            <p class="font-card color-change-normal m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                accumsan tortor magna, in imperdiet nunc molestie sed.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-portfolio border-r p-3 m-2">
                                    <div class="cont-img border-r position-relative overflow-hidden d-inline-block">
                                        <img class="img-project" src="/source/Fondo_Inicial.jpg">
                                        <div class="overlay overlay-project position-absolute">
                                            <a class="button-overlay fa-solid fa-eye icon-medium color-purple scale-1 transition-300" href="#"></a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-title-card color-change-import my-2 text-center font-semibold font-shadow-small"> Proyecto de pasatiempo</p>
                                        <div class="desc-project">
                                            <p class="font-card color-change-normal m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                accumsan tortor magna, in imperdiet nunc molestie sed.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-portfolio border-r p-3 m-2">
                                    <div class="cont-img border-r position-relative overflow-hidden d-inline-block">
                                        <img class="img-project" src="/source/Fondo_Inicial.jpg">
                                        <div class="overlay overlay-project position-absolute">
                                            <a class="button-overlay fa-solid fa-eye icon-medium color-purple scale-1 transition-300" href="#"></a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-title-card color-change-import my-2 text-center font-semibold font-shadow-small"> Proyecto de pasatiempo</p>
                                        <div class="desc-project">
                                            <p class="font-card color-change-normal m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                accumsan tortor magna, in imperdiet nunc molestie sed.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        <footer class="container-fluid text-center py-2 section ">
            <div class="p-4">
                <div class="row">
                    <div class="col-md text-center pb-2">
                        <p class="mb-2">
                            <img loading="lazy" class="logo-footer my-1" src="/source/logo-center.png" alt="logo footer">
                        </p>

                        <div class="pb-2">
                            <a class="px-2 fa-brands fa-facebook icon-medium color-white color-purple-hover scale-1 transition-300" href=""></a>
                            <a class=" px-2 fa-brands fa-whatsapp icon-medium color-white color-purple-hover scale-1 transition-300" href=""></a>
                        </div>
                    </div>

                    <div class="col-md font-normal pb-2">
                        <h6 class="font-bold color-purple font-semisubtitle">Acceso directo</h6>
                        <p class="my-1 p_info">

                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#Home">Inicio</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#About-us">Acerca de nosotros</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#Service-us">Servicios</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#Our-portfolio">Nuestros proyectos</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#Our-clients">Clientes</a>
                            </li>
                        </ul>
                        </p>
                    </div>

                    <div class="col-md font-normal pb-2">
                        <h6 class="font-bold color-purple font-semisubtitle">Contáctenos</h6>
                        <ul class="navbar-nav list-nomark">
                            <li class="nav-link">
                                <i class="fa-solid fa-location-dot"></i> Florencia - Caquetá, Colombia
                            </li>
                            <li class="nav-link">
                                <i class="fa-solid fa-mobile-screen"></i> +57 3133151739
                            </li>
                            <li class="nav-link">
                                <i class="fa-solid fa-envelope"></i> geeksondigital@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pt-2">
                    <p class="text-center font-normal m-0">
                        © Copyright 2024 <a class="font-blod color-purple" href="#">Geekson Digital</a>.
                        <br>
                        Todos Los Derechos Reservados.
                        <br>
                    </p>
                </div>
            </div>
        </footer>

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