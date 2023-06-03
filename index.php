<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/css/style.css">
    <link rel="stylesheet" href="./styles/css/fe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- FONT FAMILY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="shortcut icon" href="assets/icon/favicon.webp" type="image/svg+xml">

    <!-- HTML Meta Tags -->
    <title>▷ Emaús - Esperanza Viva [ Donaciones ]</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

</head>
<body class="body"><!--v1.0-->
    <!-- Agregando componente header -->
    <?php include('components/header.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="banner f-elements f-col f-elements--end my-scroll" id="banner">
            <div class="container f-elements f-elements--responsive gap-sm">
                <div class="banner__container">
                    <h1 class="banner__title">TU DONACIÓN LLENA DE ESPERANZA A LOS QUE MÁS NECESITAN</h1>
                    <p class="banner__description">
                        Cambia una vida. Dona hoy
                    </p>
                    <a class="button button--primary" href="#contact"><i class="bi bi-balloon-heart"></i> deseo donar</a>
                </div>
            </div>
        </section>
        
        <!-- DONACIONES -->
        <section class="section">
            <div class="container">
                <div class="f-elements f-col f-elements--center gap-md">
                    <p class="section__title section__title--primary">¿Qué puedes donar?</p>
                    <div class="g-elements g-center gap-md g-template-columns">
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/cosas-usadas.svg" alt="donacion-de-cosas-usadas" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de cosas usadas</h3>
                            </div>
                        </div>
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/ropa.svg" alt="donacion-de-ropa" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de ropa</h3>
                            </div>
                        </div>
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/muebles.svg" alt="donacion-de-muebles" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de muebles</h3>
                            </div>
                        </div>
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/juguetes.svg" alt="donacion-de-jueguetes" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de juguetes</h3>
                            </div>
                        </div>
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/maquinas.svg" alt="donacion-de-maquinas" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de máquinas</h3>
                            </div>
                        </div>
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/maquinas.svg" alt="donacion-de-salud" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de salud</h3>
                            </div>
                        </div>
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-reciclaje" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de reciclaje</h3>
                            </div>
                        </div>
                        <div class="card f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/atun.svg" alt="donacion-de-atun" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h3 class="card__title card__title--primary">Donación de atún</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--   QUIENES SOMOS  -->

        <section class="section" id="nosotros">
            <div class="container">
                <div class="f-elements f-col md:f-row">
                    <div class="f-elements f-col gap-sm">
                        <p class="section__title section__title--secondary">¿Quiénes Somos?</p>
                        <p class="section__description">Somos una organización sin fines de lucro, conformada por un grupo de personas con gran vocación social que trabaja día a día con mucho amor, llevando esperanza a los pobladores de los sectores más vulnerables de Lima, Perú.</p>
                        <p class="section__description">Nos esforzamos en difundir nuestro trabajo para así recibir la mayor cantidad de ayuda posible y seguir llevando oportunidades de un futuro mejor para todos.</p>
                    </div>
                    <div class="f-elements f-col f-elements--center gap-md py-md md:w-50">
                        <div class="swiper mySwiper4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border">
                                        <img src="assets/img/nosotros/nosotros-2.webp" alt="" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border">
                                        <img src="assets/img/nosotros/nosotros-1.webp" alt="" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border">
                                        <img src="assets/img/nosotros/nosotros-3.webp" alt="" class="card__img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--  ACTIVIDADES  -->

        <section class="section" id="actividades">
            <div class="container">
                <div class="f-elements f-col bg-green border p-responsive--section gap-sm">
                    <h3 class="section__title section__title--third">Donación en Nueva Esperanza, Alto Retamal</h3>
                    <p class="section__text">Villa María del Triunfo, Lima</p>
                    <div class="f-elements f-col f-elements--center gap-md py-md">
                        <div class="swiper mySwiper5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="assets/img/donaciones/nueva-esperanza-1.webp" alt="donacion-nueva-esperanza-1" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="assets/img/donaciones/nueva-esperanza-2.webp" alt="donacion-nueva-esperanza-2" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="assets/img/donaciones/nueva-esperanza-3.webp" alt="donacion-nueva-esperanza-3" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="assets/img/donaciones/nueva-esperanza-4.webp" alt="donacion-nueva-esperanza-4" class="card__img">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="swiper-pagination mt-auto"></div>
                            -->
                        </div>
                        <!--
                        <a class="button button--primary" href="./actividades-sociales.php"><i class="bi bi-balloon-heart"></i> Ver más</a>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-dark-green">
            <div class="container">
                <div class="f-elements f-elements--responsive gap-sm border p-responsive--cta bg-parallax">
                    <div class="f-elements f-col">
                        <p class="section__title section__title--fourt">¡Cambiemos el mañana De muchas personas!</p>
                        <p class="section__text">Con tu aporte ayudaremos a más familias.</p>
                    </div>
                    <div class="f-elements f-col f-elements--center">
                        <a class="button button--outline-primary" href="#contact"><i class="bi bi-balloon-heart"></i> deseo donar</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECCIONES CONSULTAS -->
        <section class="section" id="donar">
            <div class="container f-elements f-col gap-md">
              <h3 class="section__title section__title--primary">Donar es muy fácil!</h3>
              <P class="section__description section__description--secondary">Forma parte de nuestras acciones sociales. Recibimos cosas usadas, ropa, muebles, juguetes, máquinas, salud, reciclaje y víveres no perecibles.</P>
              <div class="g-elements g-elements--center gap-md g-template-columns">
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-1.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            1) Llámanos o escríbenos al WhatsApp 963 344 569 ó llena nuestro formulario de contacto.
                        </p>
                    </div>
                </div>
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-2.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            2) Te atenderemos y brindaremos toda la información que necesites.
                        </p>
                    </div>
                </div>
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-3.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            3) Programaremos el recojo hasta tu domicilio o centro de labores.
                        </p>
                    </div>
                </div>
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-4.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            4) Realizamos el recojo cumpliendo con todos los protocolos de bioseguridad.
                        </p>
                    </div>
                </div>
              </div>
            </div>
        </section>
        
        
        <!-- Agregando componente footer -->
        <?php include('components/contact.php') ?>
        <!-- FIN -->

        <section class="section">
        </section>
    </main>

    <!-- Agregando componente footer -->
    <?php include('components/footer.php') ?>
    <!-- FIN -->
    
    <script src="./js/swiper.js" type="module"></script>
    <script src="./js/header.js"></script>
</body>
</html>