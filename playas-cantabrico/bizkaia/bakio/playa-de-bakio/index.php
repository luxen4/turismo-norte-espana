
<?php
$pageTitle = 'Playa de Bakio (Bizkaia) | Surf, mar y naturaleza';
$pageDescription = 'Descubre la Playa de Bakio, en Bizkaia. Un amplio arenal de la costa vasca ideal para practicar surf, pasear junto al mar y disfrutar de paisajes como San Juan de Gaztelugatxe.';
$canonical = 'https://www.tudominio.com/pais-vasco/bizkaia/bakio/lugares-interes/playa-de-bakio/';
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
            ✦ BAKIO · BIZKAIA · COSTA VASCA
        </div>

        <h1>
            Bakio.<br>
            <span>Donde el mar se hace aventura.</span>
        </h1>

        <p class="hero-description">
            Arena dorada, olas que despiertan emociones
            y paisajes verdes que se funden con el Cantábrico.
            Descubre una de las playas más emblemáticas de Bizkaia.
        </p>

        <div class="hero-actions">
            <a href="#descubre" class="button button-primary">
                Descubrir Bakio ↓
            </a>

            <a href="#surf" class="button button-outline">
                Explorar el surf
            </a>
        </div>

    </div>

    <div class="hero-bottom">
        <span>43°25' N · COSTA DE BIZKAIA</span>

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
                Un lugar donde las olas, la arena y la naturaleza se encuentran.
            </h2>

            <p class="section-text">
                La Playa de Bakio, situada en la costa de Bizkaia,
                es uno de los grandes referentes del litoral vasco.
                Su amplio arenal, el paseo marítimo y su ambiente
                ligado al mar la convierten en un destino ideal
                para disfrutar de la naturaleza y las actividades
                al aire libre.
            </p>

            <p class="section-text">
                Aquí puedes caminar junto al Cantábrico, aprender
                a surfear, disfrutar de un día de playa o contemplar
                los paisajes costeros que se extienden hacia
                San Juan de Gaztelugatxe.
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
                ✦ El espíritu de la costa vasca
            </div>

        </div>

    </div>

</section>

<!-- DATOS -->
<section class="facts">

    <div class="container facts-grid">

        <div class="fact reveal">
            <strong>1 km</strong>
            <span>Longitud aproximada de la playa</span>
        </div>

        <div class="fact reveal">
            <strong>Surf</strong>
            <span>Una playa referente para las olas</span>
        </div>

        <div class="fact reveal">
            <strong>Arena</strong>
            <span>Dorada y fina</span>
        </div>

        <div class="fact reveal">
            <strong>Mar</strong>
            <span>El horizonte del Cantábrico</span>
        </div>

    </div>

</section>

<!-- EXPERIENCIAS -->
<section class="experiences" id="experiencias">

    <div class="container">

        <div class="heading-row reveal">

            <div>
                <p class="kicker">Mucho por descubrir</p>
                <h2 class="section-title">Bakio se vive al aire libre.</h2>
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
                    <p>Disfruta de las olas y descubre la cultura surfera de Bakio.</p>
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
                    <h3>Un arenal para disfrutar</h3>
                    <p>Camina junto al mar y disfruta de sus amplios espacios.</p>
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
                    <h3>Un entorno espectacular</h3>
                    <p>Descubre los acantilados, las rutas y los paisajes de la costa vasca.</p>
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
                    Bakio tiene el surf en su ADN.
                </h2>

                <p>
                    La Playa de Bakio es uno de los destinos más conocidos
                    de Bizkaia para practicar surf. Sus olas, su tradición
                    surfera y la presencia de escuelas hacen de esta playa
                    un lugar ideal para acercarse al mundo del surf.
                </p>

                <p>
                    Tanto si quieres iniciarte como si ya tienes experiencia,
                    puedes disfrutar de la energía del Cantábrico.
                    Recuerda consultar siempre las condiciones del mar
                    antes de entrar al agua.
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
                De la playa de Bakio a la magia de Gaztelugatxe.
            </h2>

            <p class="section-text">
                Bakio se encuentra en un entorno privilegiado
                de la costa vasca, rodeado de acantilados,
                paisajes verdes y vistas abiertas al Cantábrico.
                Muy cerca se encuentra San Juan de Gaztelugatxe,
                uno de los enclaves naturales más conocidos de Bizkaia.
            </p>

            <div class="nature-points">

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>San Juan de Gaztelugatxe.</strong>
                        Un espectacular islote unido a la costa
                        por un puente y una escalinata de piedra.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>Los acantilados.</strong>
                        Paisajes impresionantes donde el verde
                        de la costa se encuentra con el azul del mar.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>El paseo marítimo.</strong>
                        Un recorrido junto a la playa para disfrutar
                        del aire marino y las vistas de Bakio.
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
            <h2 class="section-title">Disfruta Bakio al máximo.</h2>

            <p class="section-text" style="max-width:570px;">
                Algunas recomendaciones para disfrutar de la playa,
                el mar y su entorno con seguridad.
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
                    El oleaje puede ser intenso. Comprueba las banderas
                    y las indicaciones de los servicios de salvamento
                    antes de entrar al agua.
                </p>
            </article>

            <article class="tip-card reveal">
                <div class="tip-icon">🌿</div>
                <h3>Cuida la costa</h3>
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
            <p class="kicker">Postales de la costa vasca</p>
            <h2 class="section-title">Bakio en imágenes.</h2>
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
                    alt="Surf en la costa"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=85"
                    alt="Playa de arena"
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
                    Tu próxima escapada está en Bakio.
                </h2>

                <p>
                    Playa de Bakio, Bakio, Bizkaia.
                    Puedes llegar por carretera y acceder a la playa
                    desde el paseo marítimo.
                    También puedes consultar las conexiones de
                    transporte público desde Bilbao y otras localidades
                    de la costa.
                </p>
            </div>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Playa+de+Bakio+Bizkaia"
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

        <h2>El Cantábrico te está esperando.</h2>

        <p>
            Prepara tu escapada, descubre nuevos rincones
            y disfruta de la esencia marinera de Bakio.
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

        <h2>Qué hacer en Bakio y alrededores</h2>

        <p>
            Encuentra actividades, excursiones y experiencias
            para completar tu escapada por Bizkaia y la costa vasca.
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
