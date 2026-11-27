
<?php
$pageTitle = 'Playa del Sardinero, Santander | Guía para descubrirla';
$pageDescription = 'Descubre la Playa del Sardinero en Santander: sus playas, paseo marítimo, rincones especiales y experiencias para disfrutar del Cantábrico.';
$canonical = 'https://www.tudominio.com/cantabria/santander/lugares-interes/playa-de-el-sardinero/';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">

<meta name="theme-color" content="#092b3a">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="./../../../styles-playa.css">
</head>

<body>

<!-- NAVEGACIÓN -->
<nav class="navbar" id="navbar">
    <div class="nav-inner">

        <a href="/turismo-norte-espana" class="logo">
            PLAYAS <span>DEL CANTÁBRICO</span>
        </a>

        <div class="nav-links">
            <a href="#descubre">Descubre</a>
            <a href="#experiencias">Experiencias</a>
            <a href="#consejos">Consejos</a>
            <a href="#galeria">Galería</a>
            <a href="#experiencias-turisticas" class="nav-button">Qué hacer</a>
        </div>

    </div>
</nav>

<!-- HERO -->
<header class="hero">

    <div class="hero-content">

        <div class="hero-kicker">
            <span>✦</span>
            SANTANDER · CANTABRIA
        </div>

        <h1>
            El Sardinero.<br>
            <span>Un mar de sensaciones.</span>
        </h1>

        <p class="hero-description">
            Arena dorada, horizonte infinito y el encanto de Santander.
            Descubre uno de los rincones más especiales de la costa cantábrica.
        </p>

        <div class="hero-actions">
            <a href="#descubre" class="button button-primary">
                Descubrir la playa ↓
            </a>

            <a href="#experiencias" class="button button-outline">
                Explorar experiencias
            </a>
        </div>

    </div>

    <div class="hero-bottom">
        <span>43°28' N · Santander</span>

        <div class="scroll-indicator">
            DESLIZA PARA DESCUBRIR
            <span class="scroll-line"></span>
        </div>
    </div>

</header>

<!-- INTRODUCCIÓN -->
<section class="intro" id="descubre">

    <div class="container intro-grid">

        <div class="reveal">

            <p class="section-kicker">Una costa inolvidable</p>

            <h2 class="section-title">
                Mucho más que una playa. Una forma de sentir el Cantábrico.
            </h2>

            <p class="section-text">
                El Sardinero es uno de los grandes iconos de Santander.
                Sus extensos arenales, el paseo marítimo y la belleza de
                su entorno convierten esta zona en un lugar perfecto para
                disfrutar del mar durante cualquier época del año.
            </p>

            <p class="section-text">
                Aquí puedes pasear junto al océano, contemplar las olas,
                disfrutar de sus terrazas y descubrir algunos de los
                paisajes más reconocibles de la capital cántabra.
            </p>

            <a href="#experiencias" class="button button-primary" style="margin-top:30px;">
                Explorar el entorno →
            </a>

        </div>

        <div class="intro-image reveal">
            <img
                src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1000&q=85"
                alt="Mar y olas del Cantábrico"
                loading="lazy"
            >

            <div class="floating-label">
                ✦ El encanto de la costa de Santander
            </div>
        </div>

    </div>

</section>

<!-- DATOS -->
<section class="stats">

    <div class="container stats-grid">

        <div class="stat reveal">
            <strong>01</strong>
            <span>Una playa emblemática</span>
        </div>

        <div class="stat reveal">
            <strong>∞</strong>
            <span>Horizontes por descubrir</span>
        </div>

        <div class="stat reveal">
            <strong>365</strong>
            <span>Días para disfrutar</span>
        </div>

        <div class="stat reveal">
            <strong>100%</strong>
            <span>Esencia cantábrica</span>
        </div>

    </div>

</section>

<!-- EXPERIENCIAS -->
<section class="experiences" id="experiencias">

    <div class="container">

        <div class="section-heading reveal">

            <div>
                <p class="section-kicker">Explora el entorno</p>
                <h2 class="section-title">Un destino, mil momentos.</h2>
            </div>

            <p class="section-text" style="max-width:340px; margin:0;">
                Descubre los rincones y experiencias que hacen
                especial esta parte de Santander.
            </p>

        </div>

        <div class="experience-grid">

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1000&q=85"
                    alt="Olas del mar"
                    loading="lazy"
                >

                <div class="experience-content">
                    <div class="experience-number">01 / MAR Y ARENA</div>
                    <h3>La belleza del océano</h3>
                    <p>Disfruta del paisaje, la arena y la inmensidad del Cantábrico.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=800&q=85"
                    alt="Paisaje de costa"
                    loading="lazy"
                >

                <div class="experience-content">
                    <div class="experience-number">02 / AIRE LIBRE</div>
                    <h3>Paseos junto al mar</h3>
                    <p>Recorre el litoral y contempla sus paisajes.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=85"
                    alt="Playa y arena"
                    loading="lazy"
                >

                <div class="experience-content">
                    <div class="experience-number">03 / RELAX</div>
                    <h3>Tiempo para desconectar</h3>
                    <p>Regálate una pausa y disfruta del ambiente marinero.</p>
                </div>

            </article>

        </div>

    </div>

</section>

<!-- BLOQUE DESTACADO -->
<section class="highlight">

    <div class="container">

        <div class="highlight-box reveal">

            <div class="highlight-content">

                <p class="section-kicker" style="color:#8de1dc;">
                    La esencia de Santander
                </p>

                <h2>
                    Hay lugares que se quedan contigo.
                </h2>

                <p>
                    El Sardinero es uno de ellos. Un lugar para caminar
                    sin prisa, contemplar el mar y dejarse llevar por
                    el ritmo tranquilo de la costa.
                </p>

                <a href="#galeria" class="button button-primary">
                    Ver la galería →
                </a>

            </div>

        </div>

    </div>

</section>

<!-- CONSEJOS -->
<section class="tips" id="consejos">

    <div class="container">

        <div class="reveal">
            <p class="section-kicker">Prepara tu visita</p>
            <h2 class="section-title">Disfruta cada momento.</h2>
            <p class="section-text" style="max-width:550px;">
                Algunas ideas para aprovechar al máximo tu visita
                a la costa de Santander.
            </p>
        </div>

        <div class="tips-grid">

            <article class="tip-card reveal">
                <div class="tip-icon">☀️</div>
                <h3>Elige tu momento</h3>
                <p>
                    La luz cambia a lo largo del día. Los paseos de primera
                    hora y los atardeceres ofrecen ambientes diferentes.
                </p>
            </article>

            <article class="tip-card reveal">
                <div class="tip-icon">🌊</div>
                <h3>Respeta el mar</h3>
                <p>
                    Consulta el estado de la playa, las banderas y las
                    indicaciones de los servicios de salvamento.
                </p>
            </article>

            <article class="tip-card reveal">
                <div class="tip-icon">📷</div>
                <h3>Descubre sus rincones</h3>
                <p>
                    No te quedes solo en la arena. Recorre el paseo
                    marítimo y disfruta del entorno de El Sardinero.
                </p>
            </article>

        </div>

    </div>

</section>

<!-- GALERÍA -->
<section class="gallery" id="galeria">

    <div class="container">

        <div class="reveal">
            <p class="section-kicker">Postales del Cantábrico</p>
            <h2 class="section-title">Santander en imágenes.</h2>
        </div>

        <div class="gallery-grid">

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1100&q=85"
                    alt="Olas del océano"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=700&q=85"
                    alt="Arena y mar"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=700&q=85"
                    alt="Paisaje costero"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=700&q=85"
                    alt="Costa y naturaleza"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=700&q=85"
                    alt="Paisaje natural"
                    loading="lazy"
                >
            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="container">

    <div class="final-cta reveal">

        <p class="section-kicker" style="color:#8de1dc;">
            Tu próxima escapada empieza aquí
        </p>

        <h2>El Cantábrico te está esperando.</h2>

        <p>
            Descubre Santander, siente el mar y prepara una escapada
            inolvidable a la Playa del Sardinero.
        </p>

        <a href="#experiencias-turisticas" class="button button-primary">
            Descubrir experiencias →
        </a>

    </div>

</section>

<!-- GETYOURGUIDE -->
<section class="container gyg-container" id="experiencias-turisticas">

    <div class="gyg-heading reveal">
        <span>✈️ DESCUBRE EXPERIENCIAS</span>
        <h2>Qué hacer en Santander</h2>
        <p>
            Encuentra excursiones, visitas y actividades para completar tu viaje.
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

        <a href="/turismo-norte-espana" class="logo">
            PLAYAS <span>DEL CANTÁBRICO</span>
        </a>

        <p>
            © <?= date('Y'); ?> Playas del Cantábrico · Turismo Norte de España
        </p>

        <a href="#top" onclick="window.scrollTo({top:0,behavior:'smooth'}); return false;">
            Volver arriba ↑
        </a>

    </div>
</footer>

<script src="./../../../script-playa.js"></script>

<!-- Carga aquí los scripts oficiales de AdCash y GetYourGuide,
     si no están ya cargados globalmente en tu proyecto. -->

</body>
</html>
