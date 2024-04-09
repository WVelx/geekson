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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/source/Icon_Logo.png" type="image/png">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">
    <title>GEEKSON DIGITAL</title>
</head>

<body data-target=".fixed-top">
    <!-- Line of Preloader page -->
    <div id="preloader">
        <div class="line"></div>
    </div>

    <div class="offcanvas offcanvas-start header-offcanvas slide" tabindex="-1" id="offcanvasResponsive">
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
            <button type="button" class="btn-close me-2 btn-close-white" data-bs-dismiss="offcanvas"
                data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="container text-center pb-2">
                <a href="">
                    <img class="icon-logo" src="source/Icon_Logo.png" alt="">
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
        <div class="mt-auto offcanvas-footer text-center">
            <p>Derechos de autor &copy; 2024 GeeksonDigital</p>
            <ul class="list-inline">
                <a class="px-2 a-offcanvas" href=""><i class="fa-brands fa-facebook icon a"></i></a>
                <a class=" px-2 a-offcanvas" href=""><i class="fa-brands fa-whatsapp icon a"></i></a>
            </ul>
        </div>
    </div>

    <!-- Content page -->
    <div data-aos="fade" data-aos-delay="1000">

        <header class="navbar navbar-expand-lg navbar-dark fixed-top transparent" id="header">
            <button class="ms-2 navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                <span class="navbar-toggler-icon navbar-toggler-white"></span>
            </button>

            <div class="col-md me-auto ms-auto text-center">
                <a href="#Home" class="navbar-brand">
                    <img class="logo-header" src="source/Logo.png" alt="">
                </a>
            </div>

            <div class="col-md collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a href="./Index.html" class="nav-link">Inicio</a>
                    </li>
                    
                    <li class="me-4 row">
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
        </header>


        <main>
            <section id="Home2" class="section show">
                <div class="content-home2 text-center">
                    <h1 class="name-company">Nuestros Proyectos</h1>
                </div>
            </section>

        
            
            <section id="Our-portfolio" class="section py-4 title-section margin4" data-title="title-our-portfolio" >
                <div class="container pt-3">
                    <div class="row justify-content-center mx-2">    
                        <div class="col-md-4">                 
                            <a href="" >
                                <div class="card card-portfolio inheritcolor">
                                    <div class="py-2">
                                        <img class="img-project" src="/source/Fondo_Inicial.jpg">
                                    </div>
                                    <div>
                                        <h5 class="card-title title-project text-center"> Proyecto de pasatiempo</h5>
                                        <div class="desc-project">
                                            <p class="card-text padding3+">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                accumsan tortor magna, in imperdiet nunc molestie sed. Proin dictum sollicitudin
                                                faucibus. Curabitur molestie tristique vehicula. Sed ultrices magna sed ante
                                                tincidunt vestibulum. Pellentesque suscipit ornare maximus.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>                                               
                        <div class="col-md-4">                 
                            <a href="" >
                                <div class="card card-portfolio inheritcolor">
                                    <div class="py-2">
                                        <img class="img-project" src="/source/Fondo_Inicial.jpg">
                                    </div>
                                    <div>
                                        <h5 class="card-title title-project text-center"> Proyecto de pasatiempo</h5>
                                        <div class="desc-project">
                                            <p class="card-text padding3+">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                accumsan tortor magna, in imperdiet nunc molestie sed. Proin dictum sollicitudin
                                                faucibus. Curabitur molestie tristique vehicula. Sed ultrices magna sed ante
                                                tincidunt vestibulum. Pellentesque suscipit ornare maximus.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>   
                        <div class="col-md-4">                 
                            <a href="" >
                                <div class="card card-portfolio inheritcolor">
                                    <div class="py-2">
                                        <img class="img-project" src="/source/Fondo_Inicial.jpg">
                                    </div>
                                    <div>
                                        <h5 class="card-title title-project text-center"> Proyecto de pasatiempo</h5>
                                        <div class="desc-project">
                                            <p class="card-text padding3+">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                accumsan tortor magna, in imperdiet nunc molestie sed. Proin dictum sollicitudin
                                                faucibus. Curabitur molestie tristique vehicula. Sed ultrices magna sed ante
                                                tincidunt vestibulum. Pellentesque suscipit ornare maximus.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>  
                    </div>
                </div>              
            </section>

            
        </main>

        <footer class="container-fluid text-center py-3 section ">

            <div class="row padding3">
                <div class="col-md text-center pb-2">
                    <p class="mb-1">
                        <img class="logo-footer my-1" src="/source/logo-center.png">
                    </p>

                    <div class="pb-2">
                        <a class="px-2 a-footer" href=""><i class="fa-brands fa-facebook icon"></i></a>
                        <a class=" px-2 a-footer" href=""><i class="fa-brands fa-whatsapp icon"></i></a>
                    </div>
                </div>

                <div class="col-md pb-2">
                    <h6 class="fw-bold fs-5 icon3">Acceso directo</h6>
                    <p class="my-1 p_info">

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link p-1" href="#Home">Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link p-1" href="#About-us">Acerca de nosotros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link p-1" href="#Service-us">Servicios</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link p-1" href="#Our-portfolio">Nuestros proyectos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link p-1" href="#Our-clients">Clientes</a>
                        </li>
                    </ul>
                    </p>
                </div>

                <div class="col-md pb-2">
                    <h6 class="fw-bold fs-5 icon3">Contáctenos</h6>
                    <p class="my-1 p_info"><i class="fa-solid fa-location-dot"></i> Florencia - Caquetá, Colombia
                    </p>
                    <p class="my-1 p_info"><i class="fa-solid fa-mobile-screen"></i> +57 3133151739</p>
                    <p class="my-1 p_info"><i class="fa-solid fa-envelope"></i> geeksondigital@gmail.com
                    </p>
                </div>

            </div>

            <div>
                <p class="text-center m-0">
                    © Copyright 2024 <a class="font-weight-bold colorBase" href="#">Geekson Digital</a>.
                    <br>
                    Todos Los Derechos Reservados.
                    <br>
                </p>
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