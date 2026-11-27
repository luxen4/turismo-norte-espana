
<?php
$pageTitle = 'Playa de Laga (Ibarrangelu) | Surf, naturaleza y Urdaibai';
$pageDescription = 'Descubre la Playa de Laga, en Ibarrangelu, Bizkaia. Un espectacular arenal de la Reserva de la Biosfera de Urdaibai, rodeado por el cabo Ogoño y perfecto para disfrutar del surf, la naturaleza y el mar Cantábrico.';
$canonical = 'https://www.tudominio.com/pais-vasco/bizkaia/ibarrangelu/lugares-interes/playa-de-laga/';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="theme-color" content="#092d36">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="./../../../styles-playa.css">
</head>

<body>

<!-- MENÚ -->
<nav class="navbar" id="navbar">
    <div class="nav-inner">

        <a href="/turismo-norte-espana/playas-cantabrico/" class="logo">
            PLAYAS <span>DEL CANTÁBRICO</span>
        </a>

        <div class="nav-links">
            <a href="#descubre">La playa</a>
            <a href="#surf">Surf</a>
            <a href="#naturaleza">Naturaleza</a>
            <a href="#consejos">Consejos</a>
            <a href="#actividades" class="nav-cta">Experiencias</a>
        </div>

    </div>
</nav>

<!-- PORTADA -->
<header class="hero" id="inicio">

    <div class="hero-content">

        <div class="hero-label">
            ✦ LAGA · IBARRANGELU · BIZKAIA
        </div>

        <h1>
            Laga.<br>
            <span>La naturaleza en estado puro.</span>
        </h1>

        <p class="hero-description">
            Arena dorada, olas salvajes y montañas verdes
            que se asoman al Cantábrico. Descubre una de las
            playas más espectaculares de la costa vasca.
        </p>

        <div class="hero-actions">
            <a href="#descubre" class="button button-primary">
                Descubrir Laga ↓
            </a>

            <a href="#surf" class="button button-outline">
                Explorar el surf
            </a>
        </div>

    </div>

    <div class="hero-bottom">
        <span>43°24' N · RESERVA DE LA BIOSFERA DE URDAIBAI</span>

        <div class="scroll-label">
            DESLIZA PARA DESCUBRIR
            <span class="scroll-line"></span>
        </div>
    </div>

</header>

<!-- INTRODUCCIÓN -->
<section class="intro" id="descubre">

    <div class="container intro-grid">

        <div class="reveal">

            <p class="kicker">La esencia de la costa vasca</p>

            <h2 class="section-title">
                Un rincón salvaje donde el mar se encuentra con la montaña.
            </h2>

            <p class="section-text">
                La Playa de Laga, situada en el municipio de Ibarrangelu,
                es uno de los grandes tesoros naturales de Bizkaia.
                Sus 574 metros de arena fina y dorada se encuentran
                dentro de la Reserva de la Biosfera de Urdaibai,
                en un entorno dominado por acantilados y naturaleza.
            </p>

            <p class="section-text">
                Aquí puedes disfrutar de un día de playa, practicar
                surf, contemplar el impresionante cabo Ogoño
                o descubrir algunos de los paisajes más bellos
                de la costa vasca.
            </p>

            <a href="#experiencias" class="button button-primary" style="margin-top:28px;">
                Descubrir sus encantos →
            </a>

        </div>

        <div class="intro-image reveal">

            <img
                src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1100&q=85"
                alt="Olas y paisaje de una playa del Cantábrico"
                loading="lazy"
            >

            <div class="image-caption">
                ✦ La belleza natural de Urdaibai
            </div>

        </div>

    </div>

</section>

<!-- DATOS -->
<section class="facts">

    <div class="container facts-grid">

        <div class="fact reveal">
            <strong>574 m</strong>
            <span>Longitud aproximada de la playa</span>
        </div>

        <div class="fact reveal">
            <strong>Surf</strong>
            <span>Un referente para los amantes de las olas</span>
        </div>

        <div class="fact reveal">
            <strong>Arena</strong>
            <span>Fina y dorada</span>
        </div>

        <div class="fact reveal">
            <strong>Urdaibai</strong>
            <span>Reserva de la Biosfera</span>
        </div>

    </div>

</section>

<!-- EXPERIENCIAS -->
<section class="experiences" id="experiencias">

    <div class="container">

        <div class="heading-row reveal">

            <div>
                <p class="kicker">Mucho por descubrir</p>
                <h2 class="section-title">Laga se vive al aire libre.</h2>
            </div>

            <p class="section-text">
                Un destino que combina deporte, playa,
                naturaleza y paisajes inolvidables.
            </p>

        </div>

        <div class="experience-grid">

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1100&q=85"
                    alt="Surf en el océano"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>01 / AVENTURA</small>
                    <h3>El paraíso del surf</h3>
                    <p>Disfruta de las olas y descubre la cultura surfera de Laga.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=850&q=85"
                    alt="Arena y agua del mar"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>02 / PLAYA</small>
                    <h3>Un arenal natural</h3>
                    <p>Relájate sobre la arena dorada y disfruta del horizonte.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=850&q=85"
                    alt="Naturaleza y paisaje costero"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>03 / NATURALEZA</small>
                    <h3>El encanto de Urdaibai</h3>
                    <p>Descubre los paisajes verdes y los acantilados de la costa.</p>
                </div>

            </article>

        </div>

    </div>

</section>

<!-- SURF -->
<section class="surf" id="surf">

    <div class="container">

        <div class="surf-box reveal">

            <div class="surf-content">

                <p class="kicker" style="color:#79d5c7;">
                    La cultura de las olas
                </p>

                <h2>
                    Laga tiene el surf en su ADN.
                </h2>

                <p>
                    La Playa de Laga es uno de los destinos más conocidos
                    de Bizkaia para practicar surf. Sus olas atraen
                    a surfistas de diferentes niveles y forman parte
                    de la personalidad de esta playa de Urdaibai.
                </p>

                <p>
                    También es posible disfrutar de otras actividades
                    acuáticas, como el piragüismo o la vela.
                    Si estás empezando, puedes consultar las escuelas
                    y actividades disponibles en la zona.
                </p>

                <a href="#actividades" class="button button-primary">
                    Buscar experiencias →
                </a>

            </div>

        </div>

    </div>

</section>

<!-- NATURALEZA -->
<section class="nature" id="naturaleza">

    <div class="container nature-grid">

        <div class="nature-image reveal">

            <img
                src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1100&q=85"
                alt="Paisaje natural de costa y vegetación"
                loading="lazy"
            >

        </div>

        <div class="reveal">

            <p class="kicker">Naturaleza y horizonte</p>

            <h2 class="section-title">
                De la playa de Laga a los paisajes de Urdaibai.
            </h2>

            <p class="section-text">
                Laga se encuentra en un entorno natural privilegiado,
                dentro de la Reserva de la Biosfera de Urdaibai.
                La playa está encajada entre el cabo de Antzora
                y el impresionante macizo de Ogoño, que domina
                el paisaje desde sus alturas.
            </p>

            <div class="nature-points">

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>El cabo Ogoño.</strong>
                        Una imponente formación rocosa que se eleva
                        sobre la playa y ofrece vistas espectaculares
                        de la costa de Bizkaia.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>La Reserva de Urdaibai.</strong>
                        Un espacio natural de gran riqueza paisajística,
                        con marismas, bosques y una extraordinaria biodiversidad.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>La playa de Laida.</strong>
                        Otro de los grandes arenales de Urdaibai,
                        situado cerca de Laga y rodeado de un paisaje
                        natural único.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- CONSEJOS -->
<section class="tips" id="consejos">

    <div class="container">

        <div class="reveal">
            <p class="kicker">Prepara tu visita</p>
            <h2 class="section-title">Disfruta Laga al máximo.</h2>

            <p class="section-text" style="max-width:570px;">
                Algunas recomendaciones para disfrutar de la playa,
                el mar y su entorno natural con seguridad.
            </p>
        </div>

        <div class="tips-grid">

            <article class="tip-card reveal">
                <div class="tip-icon">🏄</div>
                <h3>Si quieres hacer surf</h3>
                <p>
                    Consulta las condiciones del mar y las zonas
                    habilitadas. Si estás empezando, puedes acudir
                    a una escuela de surf y seguir las indicaciones
                    de sus monitores.
                </p>
            </article>

            <article class="tip-card reveal">
                <div class="tip-icon">🌊</div>
                <h3>Respeta el océano</h3>
                <p>
                    Laga es una playa abierta al mar y puede presentar
                    oleaje intenso. Comprueba las banderas y las
                    indicaciones de los servicios de salvamento
                    antes de entrar al agua.
                </p>
            </article>

            <article class="tip-card reveal">
                <div class="tip-icon">🌿</div>
                <h3>Cuida Urdaibai</h3>
                <p>
                    Respeta los senderos y el entorno natural.
                    No dejes residuos y evita acceder a zonas
                    de acantilados que puedan resultar peligrosas.
                </p>
            </article>

        </div>

    </div>

</section>

<!-- GALERÍA -->
<section class="gallery" id="galeria">

    <div class="container">

        <div class="reveal">
            <p class="kicker">Postales de Urdaibai</p>
            <h2 class="section-title">Laga en imágenes.</h2>
        </div>

        <div class="gallery-grid">

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1100&q=85"
                    alt="Mar y olas del Cantábrico"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=800&q=85"
                    alt="Surf en la costa vasca"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=85"
                    alt="Playa de arena dorada"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=800&q=85"
                    alt="Naturaleza y paisaje costero"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=800&q=85"
                    alt="Paisaje de la costa vasca"
                    loading="lazy"
                >
            </div>

        </div>

    </div>

</section>

<!-- UBICACIÓN -->
<section class="location">

    <div class="container">

        <div class="location-card reveal">

            <div>
                <p class="kicker">Cómo llegar</p>

                <h2 class="section-title">
                    Tu próxima escapada está en Laga.
                </h2>

                <p>
                    Playa de Laga, Ibarrangelu, Bizkaia.
                    Puedes llegar por carretera a través de la
                    BI-3234, que conecta esta zona de la costa
                    con los municipios cercanos.
                    También puedes consultar las conexiones
                    de transporte público desde Gernika.
                </p>
            </div>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Playa+de+Laga+Ibarrangelu+Bizkaia"
                target="_blank"
                rel="noopener noreferrer"
                class="button button-primary"
            >
                Ver ubicación en el mapa ↗
            </a>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="container">

    <div class="final-cta reveal">

        <p class="kicker" style="color:#79d5c7;">
            Descubre la costa vasca
        </p>

        <h2>La naturaleza te está esperando.</h2>

        <p>
            Prepara tu escapada, descubre nuevos rincones
            y disfruta de la belleza de Laga y Urdaibai.
        </p>

        <a href="#actividades" class="button button-primary">
            Descubrir experiencias →
        </a>

    </div>

</section>

<!-- GETYOURGUIDE -->
<section class="container gyg-container" id="actividades">

    <div class="gyg-heading reveal">

        <span>✈️ DESCUBRE EXPERIENCIAS</span>

        <h2>Qué hacer en Laga y alrededores</h2>

        <p>
            Encuentra actividades, excursiones y experiencias
            para completar tu escapada por Urdaibai y la costa vasca.
        </p>

    </div>

    <div
        data-gyg-widget="auto"
        data-gyg-partner-id="VW16GKQ">
    </div>

</section>

<!-- PUBLICIDAD -->
<div class="container" style="padding-bottom:45px;">
    <div id="adcash-zone" style="width:100%;"></div>
</div>

<!-- FOOTER -->
<footer>

    <div class="container footer-inner">

        <a href="/turismo-norte-espana/playas-cantabrico/" class="logo">
            PLAYAS <span>DEL CANTÁBRICO</span>
        </a>

        <p>
            © <?= date('Y'); ?> Playas del Cantábrico · Turismo Norte de España
        </p>

        <a href="#inicio" onclick="window.scrollTo({top:0,behavior:'smooth'});return false;">
            Volver arriba ↑
        </a>

    </div>

</footer>

<script src="./../../../script-playa.js"></script>

<!-- Conserva aquí los scripts oficiales de AdCash y GetYourGuide
     si no están cargados ya globalmente en tu proyecto. -->

</body>
</html>
