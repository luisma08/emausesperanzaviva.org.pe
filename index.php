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
                <div class="f-elements f-col f-elements--center gap-md px-sm py-sm">
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
                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-atun" class="icon">
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

        <section class="section" id="">
            <div class="container f-elements f-col">
                <h3 class="section__title">¿Quiénes Somos?</h3>
                <p class="section__description">Somos una organización sin fines de lucro, conformada por un grupo de personas con gran vocación social que trabaja día a día con mucho amor, llevando esperanza a los pobladores de los sectores más vulnerables de Lima, Perú.</p>
                <p class="section__description">Nos esforzamos en difundir nuestro trabajo para así recibir la mayor cantidad de ayuda posible y seguir llevando oportunidades de un futuro mejor para todos.</p>
                <div class="f-elements f-col f-elements--center gap-md py-md">
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
        </section>
        
        <!--  Actividades Navideñas  -->

        <section class="section bg-green" id="">
            <div class="container f-elements f-col">
                <p class="section__description">Algunas de nuestras</p>
                <h3 class="section__title section__title--primary">Actividades Navideñas</h3>
                <div class="f-elements f-col f-elements--center gap-md py-md">
                    <div class="swiper mySwiper5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-1.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-2.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-3.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-4.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-5.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-6.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-7.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-8.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-9.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-10.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-11.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-12.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-13.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-14.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-15.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-16.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-nav/actividad-nav-17.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-18.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-19.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-20.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-21.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-22.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-23.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-24.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-25.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-26.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-27.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-28.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-29.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-30.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-31.webp" alt="" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border">
                                    <img src="assets/img/actividades-sociales/actividades-sociales-32.webp" alt="" class="card__img">
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
        </section>

        
        <!-- SECCIONES CONSULTAS -->
        <section class="section" id="services">
            <div class="container f-elements f-col gap-md">
              <h3 class="section__title">¿Cómo donar?</h3>
              <P class="section__description">Sigue los siguientes pasos para poder realizar tu donación</P>
              <div class="g-elements g-elements--center gap-md g-template-columns">
                <div class="card card__services f-elements f-col f-elements--center">
                    <div class="card__img-icon f-elements f-elements--center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-1-circle icon" viewBox="0 0 16 16">
                            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                        </svg>
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm">
                        <h3 class="card__title">Contactanos</h3>
                        <p class="card__text">
                            Ponte en contacto con nosotros a través de nuestros números telefónicos. Llámanos al: +51 923 995 006
                        </p>
                    </div>
                    <div class="card__footer">
                        <div class="f-elements f-elements--center gap-md">
                            <a href="tel:+51923995006" rel="noopener noreferrer" class="button button--primary"><i class="bi bi-telephone"></i> Llamar</a>
                        </div>
                    </div>
                </div>
                <div class="card card__services f-elements f-col f-elements--center">
                    <div class="card__img-icon f-elements f-elements--center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-2-circle icon" viewBox="0 0 16 16">
                            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
                        </svg>
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm">
                        <h3 class="card__title">Te asesoramos</h3>
                        <p class="card__text">
                            Te atenderemos, brindaremos toda la información que necesites y programaremos el recojo hasta tu domicilio.
                        </p>
                    </div>
                    <div class="card__footer">
                        <div class="f-elements f-elements--center gap-md">
                            <a href="https://wa.me/+51923995006?text=Hola Emaús Manos Solidarias, necesito más información sobre las donaciones" rel="noopener noreferrer" class="button button--primary"><i class="bi bi-whatsapp"></i> Consultar</a>
                        </div>
                    </div>
                </div>
                <div class="card card__services f-elements f-col f-elements--center">
                    <div class="card__img-icon f-elements f-elements--center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-3-circle icon" viewBox="0 0 16 16">
                            <path d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z"/>
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z"/>
                        </svg>
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm">
                        <h3 class="card__title">Recojo gratuito</h3>
                        <p class="card__text">
                            Realizamos el recojo cumpliendo con todos los protocolos de bioseguridad sin costo en Lima y Callao.
                        </p>
                    </div>
                    <div class="card__footer">
                        <div class="f-elements f-elements--center gap-md">
                            <a href="https://wa.me/+51923995006?text=Hola Emaús Manos Solidarias, quisiera realizar una donación" rel="noopener noreferrer" class="button button--primary"><i class="bi bi-balloon-heart"></i> Donar</a>
                        </div>
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