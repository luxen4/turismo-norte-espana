
<?php
$pageTitle = 'Playa de Somo (Cantabria) | Surf, naturaleza y mar';
$pageDescription = 'Descubre la Playa de Somo, en Ribamontán al Mar. Surf, arena dorada, dunas, paseos junto al mar y el impresionante paisaje de la bahía de Santander.';
$canonical = 'https://www.tudominio.com/cantabria/somo/lugares-interes/playa-de-somo/';
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
<header class="hero">

    <div class="hero-content">

        <div class="hero-label">
            ✦ SOMO · RIBAMONTÁN AL MAR · CANTABRIA
        </div>

        <h1>
            Somo.<br>
            <span>Donde nace el mar.</span>
        </h1>

        <p class="hero-description">
            Kilómetros de arena dorada, olas que invitan a surfear
            y paisajes que enamoran. Descubre uno de los destinos
            más especiales de la costa de Cantabria.
        </p>

        <div class="hero-actions">
            <a href="#descubre" class="button button-primary">
                Descubrir Somo ↓
            </a>

            <a href="#surf" class="button button-outline">
                Explorar el surf
            </a>
        </div>

    </div>

    <div class="hero-bottom">
        <span>43°27' N · COSTA DE TRASMIERA</span>

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

            <p class="kicker">La esencia de Cantabria</p>

            <h2 class="section-title">
                Un lugar donde la arena, el viento y las olas se encuentran.
            </h2>

            <p class="section-text">
                La Playa de Somo, situada en Ribamontán al Mar,
                es uno de los grandes referentes del litoral cántabro.
                Su extenso arenal, su ambiente marinero y sus condiciones
                para la práctica del surf la convierten en un destino
                perfecto para disfrutar del océano.
            </p>

            <p class="section-text">
                Aquí puedes caminar junto al mar, aprender a surfear,
                descubrir paisajes dunares o simplemente contemplar
                el horizonte de la bahía de Santander.
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
                ✦ El espíritu del Cantábrico
            </div>

        </div>

    </div>

</section>

<!-- DATOS -->
<section class="facts">

    <div class="container facts-grid">

        <div class="fact reveal">
            <strong>2 km</strong>
            <span>Longitud aproximada de playa</span>
        </div>

        <div class="fact reveal">
            <strong>Surf</strong>
            <span>Destino para amantes de las olas</span>
        </div>

        <div class="fact reveal">
            <strong>Arena</strong>
            <span>Dorada y fina</span>
        </div>

        <div class="fact reveal">
            <strong>Mar</strong>
            <span>Horizonte cantábrico</span>
        </div>

    </div>

</section>

<!-- EXPERIENCIAS -->
<section class="experiences" id="experiencias">

    <div class="container">

        <div class="heading-row reveal">

            <div>
                <p class="kicker">Mucho por descubrir</p>
                <h2 class="section-title">Somo se vive al aire libre.</h2>
            </div>

            <p class="section-text">
                Un destino que combina deporte, naturaleza,
                tranquilidad y paisajes inolvidables.
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
                    <p>Disfruta de las olas y descubre la cultura surfera de Somo.</p>
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
                    <h3>Un arenal infinito</h3>
                    <p>Camina junto al mar y disfruta de sus amplios espacios.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=850&q=85"
                    alt="Naturaleza y paisaje"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>03 / NATURALEZA</small>
                    <h3>Rincones por explorar</h3>
                    <p>Descubre las dunas, los paisajes y el entorno de la costa.</p>
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
                    Somo tiene el surf en su ADN.
                </h2>

                <p>
                    Somo es uno de los destinos más conocidos de Cantabria
                    para practicar surf. Su tradición surfera, las escuelas
                    y el ambiente que rodea a este deporte forman parte
                    de la personalidad de la localidad.
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
                Del arenal de Somo a la magia de El Puntal.
            </h2>

            <p class="section-text">
                La costa de Somo forma parte de un gran paisaje de arena,
                dunas y estuario. Muy cerca se encuentra El Puntal,
                una espectacular lengua de arena que se adentra en la
                bahía de Santander.
            </p>

            <div class="nature-points">

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>El Puntal.</strong>
                        Un paisaje de arena y vistas abiertas sobre la bahía.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>Las dunas.</strong>
                        Un entorno natural que merece la pena descubrir
                        respetando sus senderos y vegetación.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>La bahía de Santander.</strong>
                        Un horizonte privilegiado con la ciudad al otro lado del agua.
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
            <h2 class="section-title">Disfruta Somo al máximo.</h2>

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
                    Consulta las condiciones del mar y las zonas habilitadas.
                    Si estás empezando, puedes recurrir a una escuela
                    y seguir las indicaciones de sus monitores.
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
                <h3>Cuida las dunas</h3>
                <p>
                    Utiliza los accesos y pasarelas habilitados.
                    Evita pisar la vegetación y deja el entorno
                    natural tal como lo encontraste.
                </p>
            </article>

        </div>

    </div>

</section>

<!-- GALERÍA -->
<section class="gallery" id="galeria">

    <div class="container">

        <div class="reveal">
            <p class="kicker">Postales de Cantabria</p>
            <h2 class="section-title">Somo en imágenes.</h2>
        </div>

        <div class="gallery-grid">

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1100&q=85"
                    alt="Mar y olas"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=800&q=85"
                    alt="Surf"
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
                    alt="Naturaleza"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=800&q=85"
                    alt="Paisaje costero"
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
                    Tu próxima escapada está en Somo.
                </h2>

                <p>
                    Playa de Somo, Ribamontán al Mar, Cantabria.
                    Puedes llegar por carretera o consultar las conexiones
                    marítimas de la bahía de Santander.
                </p>
            </div>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Playa+de+Somo+Cantabria"
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
            Descubre la costa de Cantabria
        </p>

        <h2>El mar te está esperando.</h2>

        <p>
            Prepara tu escapada, descubre nuevos rincones
            y disfruta de la esencia del Cantábrico.
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

        <h2>Qué hacer cerca de Somo</h2>

        <p>
            Encuentra actividades, excursiones y experiencias
            para completar tu escapada por Cantabria.
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