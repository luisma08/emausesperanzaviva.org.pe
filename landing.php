<!DOCTYPE html>
<html lang="en">
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
<body class="body">
    <!-- Agregando componente header -->
    <?php include('components/header-landing.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="bg-img">
            <div class="container">
                <div class="f-elements f-col md:f-row md:f-row--reverse">
                    <div class="f-elements f-col md:w-50 bg-img-wsp">
                        <div class="d-block mt-auto">
                            <a class="button button--primary" href="#contact"><i class="bi bi-whatsapp"></i> deseo donar</a>
                        </div>
                    </div>
                    <div class="f-elements f-col f-elements--center md:w-50 py-md">
                        <div class="f-elements f-col gap-sm">
                            <h1 class="section__title section__title--secondary">DONA CON ESPERANZA Y TRANSFORMA EL FUTURO.</h1>
                            <p class="section__p">
                                Impacta vidas. Sé parte del cambio donando hoy
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DONACIONES -->
        <section class="section">
            <div class="container">
                <div class="f-elements f-col f-elements--center gap-md">
                    <p class="section__title section__title--primary">Realiza una donación</p>
                    <div class="g-elements g-center gap-md g-template-columns">
                        <div class="slider f-elements f-col">
                            <div class="swiper mySwiperDonate">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/cosas-usadas.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--primary">Donación de cosas usadas</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/ropa.svg" alt="donacion-de-ropa" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--primary">Donación de ropa</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/muebles.svg" alt="donacion-de-muebles" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--primary">Donación de muebles</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/juguetes.svg" alt="donacion-de-jueguetes" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--primary">Donación de juguetes</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/maquinas.svg" alt="donacion-de-maquinas" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--primary">Donación de máquinas</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/maquinas.svg" alt="donacion-de-salud" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--primary">Donación de salud</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-reciclaje" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--primary">Donación de reciclaje</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slider">
                                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-dark-green">
            <div class="container">
                <div class="f-elements f-elements--responsive gap-sm border p-responsive--cta bg-parallax">
                    <div class="f-elements f-col">
                        <p class="section__title section__title--fourt">!Actúa ahora y sé parte del cambio. Dona y comparte esperanza!</p>
                        <p class="section__text">Tu aporte marca la diferencia para más familias</p>
                    </div>
                    <div class="f-elements f-col f-elements--center">
                        <a class="button button--outline-primary" href="#contact"><i class="bi bi-balloon-heart"></i> deseo donar</a>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <!-- Agregando componente footer -->
    <?php include('components/footer-landing.php') ?>
    <!-- FIN -->

    <script src="./js/swiper.js" type="module"></script>
    <script src="./js/showContent.js"></script>

</body>
</html>