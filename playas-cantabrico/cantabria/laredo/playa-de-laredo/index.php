
<?php
$pageTitle = 'Playa de Laredo (Cantabria) | La Salvé, mar y naturaleza';
$pageDescription = 'Descubre la Playa de La Salvé en Laredo, Cantabria. Un extenso arenal de aguas cantábricas, paseo marítimo, dunas, deportes acuáticos y paisajes únicos junto a la bahía de Santander.';
$canonical = 'https://www.tudominio.com/cantabria/laredo/lugares-interes/playa-de-laredo/';
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
            <a href="#surf">Deportes</a>
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
            ✦ LAREDO · COSTA ORIENTAL · CANTABRIA
        </div>

        <h1>
            Laredo.<br>
            <span>El horizonte infinito.</span>
        </h1>

        <p class="hero-description">
            Kilómetros de arena fina, el azul del Cantábrico
            y un paseo junto al mar que invita a detener el tiempo.
            Descubre la belleza de la Playa de La Salvé.
        </p>

        <div class="hero-actions">
            <a href="#descubre" class="button button-primary">
                Descubrir Laredo ↓
            </a>

            <a href="#surf" class="button button-outline">
                Explorar el mar
            </a>
        </div>

    </div>

    <div class="hero-bottom">
        <span>43°25' N · COSTA ORIENTAL DE CANTABRIA</span>

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
                Una playa inmensa donde el Cantábrico se convierte en paisaje.
            </h2>

            <p class="section-text">
                La Playa de La Salvé, situada en Laredo, es uno de los
                grandes arenales de la costa de Cantabria. Su extensa
                franja de arena fina, sus vistas abiertas al mar y su
                ambiente costero la convierten en uno de los destinos
                más emblemáticos del litoral oriental.
            </p>

            <p class="section-text">
                Aquí puedes disfrutar de largos paseos junto al agua,
                practicar deportes acuáticos, contemplar las vistas
                de la bahía o descubrir el encanto de la villa marinera
                de Laredo.
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
                ✦ La belleza del litoral de Laredo
            </div>

        </div>

    </div>

</section>

<!-- DATOS -->
<section class="facts">

    <div class="container facts-grid">

        <div class="fact reveal">
            <strong>4 km</strong>
            <span>Longitud aproximada de La Salvé</span>
        </div>

        <div class="fact reveal">
            <strong>Mar</strong>
            <span>Horizonte abierto al Cantábrico</span>
        </div>

        <div class="fact reveal">
            <strong>Arena</strong>
            <span>Fina y dorada</span>
        </div>

        <div class="fact reveal">
            <strong>Paseo</strong>
            <span>Un litoral para caminar</span>
        </div>

    </div>

</section>

<!-- EXPERIENCIAS -->
<section class="experiences" id="experiencias">

    <div class="container">

        <div class="heading-row reveal">

            <div>
                <p class="kicker">Mucho por descubrir</p>
                <h2 class="section-title">Laredo se vive junto al mar.</h2>
            </div>

            <p class="section-text">
                Un destino que combina playa, deporte,
                historia marinera y paisajes inolvidables.
            </p>

        </div>

        <div class="experience-grid">

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1100&q=85"
                    alt="Deportes acuáticos y surf en el océano"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>01 / AVENTURA</small>
                    <h3>Deportes en el mar</h3>
                    <p>Disfruta del surf, el paddle surf y otras actividades acuáticas.</p>
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
                    <h3>La inmensidad de La Salvé</h3>
                    <p>Camina por uno de los arenales más extensos de Cantabria.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=850&q=85"
                    alt="Paisaje natural de costa"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>03 / NATURALEZA</small>
                    <h3>El Puntal de Laredo</h3>
                    <p>Descubre paisajes de arena, dunas y vistas sobre la bahía.</p>
                </div>

            </article>

        </div>

    </div>

</section>

<!-- DEPORTES ACUÁTICOS -->
<section class="surf" id="surf">

    <div class="container">

        <div class="surf-box reveal">

            <div class="surf-content">

                <p class="kicker" style="color:#79d5c7;">
                    La energía del Cantábrico
                </p>

                <h2>
                    Laredo, un destino para disfrutar del mar.
                </h2>

                <p>
                    La Playa de La Salvé ofrece un amplio espacio
                    para disfrutar de diferentes actividades acuáticas.
                    El surf, el paddle surf y los deportes de playa
                    forman parte de la experiencia durante los meses
                    de mayor actividad.
                </p>

                <p>
                    Tanto si buscas iniciarte en el mundo de las olas
                    como si prefieres contemplar el mar desde la arena,
                    Laredo ofrece un entorno perfecto para disfrutar
                    del litoral cántabro.
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
                De La Salvé al espectacular Puntal de Laredo.
            </h2>

            <p class="section-text">
                Laredo se encuentra en un entorno privilegiado,
                junto a la bahía de Santoña y rodeado de paisajes
                costeros de gran belleza. Su litoral combina amplios
                arenales, zonas dunares y vistas abiertas sobre
                el mar Cantábrico.
            </p>

            <div class="nature-points">

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>El Puntal de Laredo.</strong>
                        Una lengua de arena con vistas excepcionales
                        hacia la bahía de Santoña.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>La Playa de La Salvé.</strong>
                        Un gran arenal para caminar, descansar
                        y disfrutar del paisaje.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>La bahía de Santoña.</strong>
                        Un entorno natural de marismas,
                        aves y paisajes protegidos.
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
            <h2 class="section-title">Disfruta Laredo al máximo.</h2>

            <p class="section-text" style="max-width:570px;">
                Algunas recomendaciones para disfrutar de La Salvé,
                el mar y su entorno con seguridad.
            </p>
        </div>

        <div class="tips-grid">

            <article class="tip-card reveal">
                <div class="tip-icon">🏄</div>
                <h3>Practica deportes acuáticos</h3>
                <p>
                    Consulta las condiciones del mar y las zonas
                    habilitadas para cada actividad. Si estás empezando,
                    puedes recurrir a una escuela especializada.
                </p>
            </article>

            <article class="tip-card reveal">
                <div class="tip-icon">🌊</div>
                <h3>Respeta el océano</h3>
                <p>
                    El oleaje y las corrientes pueden cambiar.
                    Comprueba las banderas y las indicaciones
                    de los servicios de salvamento antes de bañarte.
                </p>
            </article>

            <article class="tip-card reveal">
                <div class="tip-icon">🌿</div>
                <h3>Cuida el entorno natural</h3>
                <p>
                    Utiliza los accesos habilitados y evita pisar
                    la vegetación de las dunas. No dejes residuos
                    y ayuda a conservar la belleza de la costa.
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
            <h2 class="section-title">Laredo en imágenes.</h2>
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
                    alt="Deportes acuáticos"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=85"
                    alt="Playa de arena fina"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=800&q=85"
                    alt="Naturaleza y costa"
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
                    Tu próxima escapada está en Laredo.
                </h2>

                <p>
                    Playa de La Salvé, Laredo, Cantabria.
                    Puedes llegar por carretera y acceder a la playa
                    desde diferentes puntos del paseo marítimo.
                    También puedes consultar las conexiones marítimas
                    de la bahía de Santoña.
                </p>
            </div>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Playa+La+Salve+Laredo+Cantabria"
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

        <h2>El Cantábrico te espera.</h2>

        <p>
            Prepara tu escapada, descubre nuevos rincones
            y disfruta de la esencia marinera de Laredo.
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

        <h2>Qué hacer en Laredo y alrededores</h2>

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
