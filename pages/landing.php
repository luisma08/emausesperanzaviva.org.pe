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
    <link rel="shortcut icon" href="./assets/icon/favicon.svg" type="image/svg+xml">

    <!-- HTML Meta Tags -->
    <title>▷ Emaús - Esperanza Viva  | Donaciones lima</title>
    <meta name="description" content="Únete a nuestra misión en Lima, Perú, y marca la diferencia en la vida de quienes más lo necesitan. Tu donación de hoy es un acto de generosidad que brinda esperanza y oportunidades a personas que enfrentan desafíos. Juntos, transformaremos vidas a través de donaciones significativas. ¡Haz tu aporte ahora y se parte del cambio positivo!">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://emausesperanzaviva.org/landing.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="▷ Emaús - Esperanza Viva  | Donaciones lima">
    <meta property="og:description" content="Únete a nuestra misión en Lima, Perú, y marca la diferencia en la vida de quienes más lo necesitan. Tu donación de hoy es un acto de generosidad que brinda esperanza y oportunidades a personas que enfrentan desafíos. Juntos, transformaremos vidas a través de donaciones significativas. ¡Haz tu aporte ahora y se parte del cambio positivo!">
    <meta property="og:image" content="https://emausesperanzaviva.org/assets/img/logo.webp">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="emausesperanzaviva.org">
    <meta property="twitter:url" content="https://emausesperanzaviva.org/landing.php">
    <meta name="twitter:title" content="▷ Emaús - Esperanza Viva  | Donaciones lima">
    <meta name="twitter:description" content="Únete a nuestra misión en Lima, Perú, y marca la diferencia en la vida de quienes más lo necesitan. Tu donación de hoy es un acto de generosidad que brinda esperanza y oportunidades a personas que enfrentan desafíos. Juntos, transformaremos vidas a través de donaciones significativas. ¡Haz tu aporte ahora y se parte del cambio positivo!">
    <meta name="twitter:image" content="https://emausesperanzaviva.org/assets/img/logo.webp">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-272457029-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-272457029-1');
    </script>

    <!-- Hotjar Tracking Code for https://emausesperanzaviva.org/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3560444,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</head>
<body class="body">
    <!-- Agregando componente header -->
    <?php include('./components/header-landing.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="bg-img">
            <div class="container">
                <div class="f-elements f-col md:f-row md:f-row--reverse">
                    <div class="f-elements f-col md:f-elements--center md:w-50 bg-img-wsp">
                        <div class="d-block mt-auto">
                            <a class="button button--alternative" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación"><i class="bi bi-whatsapp"></i> deseo donar</a>
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

        <!-- DONACIONES SLIDER-->
        <section class="section">
            <div class="container">
                <div class="f-elements f-col f-elements--center gap-md">
                    <p class="section__title section__title--primary">Realiza una donación</p>
                    <div class="slider f-elements f-col">
                        <div class="swiper mySwiperDonation">
                            <div class="f-elements f-elements--end gap-sm py-sm">
                                <div class="button-prev cursor-pointer"><img src="./assets/icon/button-prev.webp" alt="" /></div>
                                <div class="button-next cursor-pointer"><img src="./assets/icon/button-next.webp" alt="" /></div>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#donacion-de-cosas-usadas" class="section__link donacion-1">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/cosas-usadas.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de cosas usadas</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-ropa" class="section__link donacion-2">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/ropa.svg" alt="donacion-de-ropa" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de ropa</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-muebles" class="section__link donacion-3">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/muebles.svg" alt="donacion-de-muebles" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de muebles</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-jueguetes" class="section__link donacion-4">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/juguetes.svg" alt="donacion-de-jueguetes" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de juguetes</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-maquinas" class="section__link donacion-5">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/maquinas.svg" alt="donacion-de-maquinas" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de máquinas / electrodomesticos</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-salud" class="section__link donacion-6">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/salud.svg" alt="donacion-de-salud" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de salud</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-reciclaje" class="section__link donacion-7">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-reciclaje" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de reciclaje</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-atun" class="section__link donacion-8">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-green p-responsive">
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/atun.svg" alt="donacion-de-atun" class="icon">
                                            </div>
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de atún</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTENIDO DONACIONES -->

        <section class="section donacion-content-1" id="donacion1">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm md:h-360">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                cosas usadas
                            </p>
                        </div>
                        <ul class="px-md">
                            <li class="section__list">Donación de cosas usadas</li>
                            <li class="section__list">Donación de obejtos fuera de uso</li>
                        </ul>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de cosas usadas."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-2 d-none" id="donacion2">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                ropa y calzado
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Abrigos</li>
                                <li class="section__list">Donación de Batas</li>
                                <li class="section__list">Donación de Blusas</li>
                                <li class="section__list">Donación de Calzado</li>
                                <li class="section__list">Donación de Camisas</li>
                                <li class="section__list">Donación de Casacas</li>
                                <li class="section__list">Donación de Chalecos</li>
                                <li class="section__list">Donación de Chompas</li>
                                <li class="section__list">Donación de Faldas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Frazadas</li>
                                <li class="section__list">Donación de Pantalones</li>
                                <li class="section__list">Donación de Pañales</li>
                                <li class="section__list">Donación de Polos</li>
                                <li class="section__list">Donación de Ropa</li>
                                <li class="section__list">Donación de Toallas</li>
                                <li class="section__list">Donación de Uniformes</li>
                                <li class="section__list">Donación de Zapatillas</li>
                                <li class="section__list">Donación de Zapatos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de ropa y calzado."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-3 d-none" id="donacion3">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                muebles
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Alfombras</li>
                                <li class="section__list">Donación de Camarotes</li>
                                <li class="section__list">Donación de Camas</li>
                                <li class="section__list">Donación de Colchones</li>
                                <li class="section__list">Donación de Cómodas</li>
                                <li class="section__list">Donación de Juegos de sala</li>
                                <li class="section__list">Donación de Juegos de Comedor</li>
                                <li class="section__list">Donación de Mesas</li>
                                <li class="section__list">Donación de Muebles</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Roperos</li>
                                <li class="section__list">Donación de Sillas</li>
                                <li class="section__list">Donación de Sillones</li>
                                <li class="section__list">Donación de Sofás</li>
                                <li class="section__list">Donación de Tarimas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de muebles."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-4 d-none" id="donacion4">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm md:h-360">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                juguetes
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Bicicletas</li>
                                <li class="section__list">Donación de Carritos de Juguetes</li>
                                <li class="section__list">Donación de Juegos Recreativos</li>
                                <li class="section__list">Donación de Juguetes</li>
                                <li class="section__list">Donación de Muñecas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Pelotas</li>
                                <li class="section__list">Donación de Peluches</li>
                                <li class="section__list">Donación de Sillones</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de juguetes."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-5 d-none" id="donacion5">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                maquinas / electrodomesticos
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Artefactos</li>
                                <li class="section__list">Donación de Cocinas</li>
                                <li class="section__list">Donación de Electrodomésticos</li>
                                <li class="section__list">Donación de Equipos de Sonido</li>
                                <li class="section__list">Donación de Lavadoras</li>
                                <li class="section__list">Donación de Licuadoras</li>
                                <li class="section__list">Donación de Microondas</li>
                                <li class="section__list">Donación de Refrigeradoras</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Reproductor Blu Ray</li>
                                <li class="section__list">Donación de Reproductor de DVD</li>
                                <li class="section__list">Donación de Secadoras de Ropa</li>
                                <li class="section__list">Donación de Televisores</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de maquinas / electrodomesticos."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-6 d-none" id="donacion6">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm md:h-360">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                salud
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">donar medicinas</li>
                                <li class="section__list">donar muletas</li>
                                <li class="section__list">donar andadores</li>
                                <li class="section__list">donar ortopédicos</li>
                                <li class="section__list">donar silla de ruedas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">donar camas clínicas</li>
                                <li class="section__list">donar alimentos no perecederos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de salud."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-7 d-none" id="donacion7">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                reciclaje
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Baterias</li>
                                <li class="section__list">Donación de Cartón</li>
                                <li class="section__list">Donación de Chatarra</li>
                                <li class="section__list">Donación de Libros</li>
                                <li class="section__list">Donación de Reciclaje</li>
                                <li class="section__list">Donación de Saldo Almacén</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Saldo Depósitos</li>
                                <li class="section__list">Donación de Papel</li>
                                <li class="section__list">Donación de Plástico</li>
                                <li class="section__list">Donación de Vidrio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de reciclaje."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-8 d-none" id="donacion8">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-silver border px-sm py-sm">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                alimentos
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Aceite</li>
                                <li class="section__list">Donación de Agua</li>
                                <li class="section__list">Donación de Atún</li>
                                <li class="section__list">Donación de Arroz</li>
                                <li class="section__list">Donación de Avena</li>
                                <li class="section__list">Donación de Cereales</li>
                                <li class="section__list">Donación de Comida de Bebé</li>
                                <li class="section__list">Donación de Conservas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Fideos</li>
                                <li class="section__list">Donación de Frutas Enlatadas</li>
                                <li class="section__list">Donación de Jugos Envasados</li>
                                <li class="section__list">Donación de Menestras</li>
                                <li class="section__list">Donación de Sal</li>
                                <li class="section__list">Donación de Vegetales Enlatados</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación de alimentos."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FIN DE DONACIONES -->

        <section class="section">
            <div class="container">
                <div class="f-elements f-col p-relative py-md">
                    <img src="./assets/img/leaf.webp" class="section__icon" alt="" />
                    <p class="section__description section__description--third">
                        Tu generosidad puede marcar la diferencia.
                    </p>
                    <p class="section__description section__description--third">
                        Imagina un mundo donde cada donación ofrece esperanza a quienes más lo necesitan.
                    </p>
                    <p class="section__description section__description--third">
                        Con tu apoyo, podemos transformar vidas y construir un futuro mejor, Cada donación cuenta.
                    </p>
                    <p class="section__description section__description--fourth">
                        ¡Actúa ahora!  Haz tu donación y sé parte del cambio que tanto necesitamos.
                    </p>
                    <p class="section__description section__description--third">
                        Juntos, podemos brindar esperanza a quienes más lo necesitan. Dona hoy y haz una diferencia real.
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="f-elements f-col md:f-row md:f-row--reverse gap-md">
                    <div class="f-elements f-col md:w-50">
                        <img src="./assets/img/nosotros/nosotros-4.png" alt="" />
                    </div>
                    <div class="f-elements f-col f-elements--center md:w-50 py-md">
                        <div class="f-elements f-col gap-sm">
                            <p class="section__description section__description--responsive">
                                Somos una organización sin fines de lucro en Lima, Perú, dedicada a llevar esperanza a los sectores más vulnerables. Nuestro equipo apasionado trabaja incansablemente para brindar oportunidades de un futuro mejor a través de proyectos sociales. Tu apoyo nos permite alcanzar a más personas necesitadas. ¡Únete a nosotros en esta misión de esperanza y ayuda!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ACTIVIDADES 1 -->

        <section class="section">
            <div class="f-elements f-col f-elements--center">
                <p class="section__description section__description--fourth">
                    ¡Pequeñas acciones hacen la diferencia!
                </p>
            </div>
        </section>

        <section class="" id="actividades">
            <div class="container f-elements f-col bg-green p-responsive--section gap-sm">
                <p class="section__title section__title--third">Donación en Nueva Esperanza, Alto Retamal</p>
                <p class="section__text section__text--primary">Villa María del Triunfo, Lima</p>
                <div class="f-elements f-col f-elements--center gap-md py-md">
                    <div class="swiper mySwiperActivity1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/donaciones/nueva-esperanza-1.png" alt="donacion-nueva-esperanza-1" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/donaciones/nueva-esperanza-2.png" alt="donacion-nueva-esperanza-2" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/donaciones/nueva-esperanza-3.png" alt="donacion-nueva-esperanza-3" class="card__img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/donaciones/nueva-esperanza-4.png" alt="donacion-nueva-esperanza-4" class="card__img">
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

        <section class="section bg-dark-green">
            <div class="container">
                <div class="g-elements g-elements--responsive g-elements--center gap-sm border-cta py-md px-md bg-parallax">
                    <div class="f-elements f-col">
                        <p class="section__title section__title--fourt">!Actúa ahora y sé parte del cambio. Dona y comparte esperanza!</p>
                        <p class="section__text section__text--responsive">Tu aporte marca la diferencia para más familias</p>
                    </div>
                    <div class="f-elements f-col f-elements--center mt-auto">
                        <a class="button button--outline-primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación"><i class="bi bi-balloon-heart"></i> deseo donar</a>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <!-- Agregando componente footer -->
    <?php include('./components/footer-landing.php') ?>
    <!-- FIN -->

    <script src="./js/swiper.js" type="module"></script>
    <script src="./js/showDonation.js"></script>

</body>
</html>