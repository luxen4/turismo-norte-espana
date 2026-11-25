
<?php
$pageTitle = 'Playa de Gorliz (Bizkaia): qué ver, cómo llegar y qué hacer';
$pageDescription = 'Descubre la Playa de Gorliz, en Bizkaia. 842 metros de arena, paseo marítimo, naturaleza, deportes acuáticos, servicios, accesibilidad y consejos para organizar tu visita.';
$canonical = 'https://www.tudominio.com/bizkaia/gorliz/lugares-interes/playa-de-gorliz/';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">

<meta name="robots" content="index, follow, max-image-preview:large">
<meta name="author" content="Playas del Cantábrico">
<meta name="theme-color" content="#092f3b">

<meta property="og:type" content="article">
<meta property="og:locale" content="es_ES">
<meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:site_name" content="Playas del Cantábrico">
<meta property="og:image" content="https://www.tudominio.com/imagenes/playas/playa-de-gorliz.jpg">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
  "name": "Playa de Gorliz",
  "description": "Playa de arena fina situada en la bahía de Gorliz, en Bizkaia, con paseo marítimo, zonas verdes y actividades acuáticas.",
  "url": "<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>",
  "image": "https://www.tudominio.com/imagenes/playas/playa-de-gorliz.jpg",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Gorliz",
    "addressRegion": "Bizkaia",
    "addressCountry": "ES"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.416,
    "longitude": -2.936
  },
  "containedInPlace": {
    "@type": "AdministrativeArea",
    "name": "Bizkaia, País Vasco, España"
  }
}
</script>

<style>
:root {
    --ocean: #092f3b;
    --blue: #126477;
    --aqua: #78d7ca;
    --sand: #e8d6b7;
    --cream: #f8f8f4;
    --white: #fff;
    --text: #183a43;
    --muted: #71848a;
    --radius: 25px;
    --shadow: 0 20px 55px rgba(9,47,59,.10);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
    scroll-padding-top: 90px;
}

body {
    font-family: 'DM Sans', sans-serif;
    color: var(--text);
    background: var(--cream);
    overflow-x: hidden;
}

a {
    color: inherit;
    text-decoration: none;
}

img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

.container {
    width: min(1180px, 90%);
    margin: auto;
}

.kicker {
    color: var(--blue);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 19px;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(38px, 5vw, 62px);
    line-height: 1.1;
    font-weight: 500;
    letter-spacing: -1.5px;
}

.section-text {
    color: var(--muted);
    font-size: 15px;
    line-height: 1.9;
    margin-top: 22px;
}

/* NAVEGACIÓN */

.navbar {
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 0;
    color: white;
    transition: .4s;
}

.navbar.scrolled {
    background: rgba(5,35,45,.95);
    backdrop-filter: blur(16px);
    padding: 13px 0;
    box-shadow: 0 8px 30px rgba(0,0,0,.13);
}

.nav-inner {
    width: min(1250px, 90%);
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-weight: 800;
    font-size: 17px;
    letter-spacing: -.5px;
}

.logo span {
    color: var(--aqua);
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 26px;
    font-size: 12px;
    font-weight: 700;
}

.nav-links a {
    transition: .3s;
}

.nav-links a:hover {
    color: var(--aqua);
}

.nav-cta {
    padding: 12px 19px;
    border-radius: 30px;
    background: white;
    color: var(--ocean);
}

/* HERO */

.hero {
    min-height: 790px;
    height: 100svh;
    max-height: 950px;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    color: white;
    background:
        linear-gradient(90deg, rgba(3,29,39,.78), rgba(3,29,39,.12)),
        linear-gradient(0deg, rgba(3,29,39,.48), transparent 65%),
        url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=2200&q=90') center/cover;
}

.hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 75%, var(--cream));
    pointer-events: none;
}

.hero-content {
    position: relative;
    z-index: 2;
    width: min(1180px, 90%);
    margin: auto;
    padding-top: 45px;
}

.hero-label {
    display: inline-block;
    padding: 11px 17px;
    border: 1px solid rgba(255,255,255,.4);
    background: rgba(255,255,255,.12);
    backdrop-filter: blur(12px);
    border-radius: 40px;
    font-size: 10px;
    letter-spacing: 2px;
    font-weight: 700;
    margin-bottom: 28px;
    animation: fadeUp .8s both;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(65px, 10vw, 120px);
    line-height: .96;
    font-weight: 500;
    letter-spacing: -4px;
    max-width: 900px;
    animation: fadeUp 1s .15s both;
}

.hero h1 span {
    color: var(--aqua);
    font-style: italic;
}

.hero-description {
    font-size: 16px;
    line-height: 1.9;
    max-width: 540px;
    color: rgba(255,255,255,.88);
    margin-top: 28px;
    animation: fadeUp 1s .3s both;
}

.hero-actions {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-top: 33px;
    animation: fadeUp 1s .45s both;
}

.button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 16px 24px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 800;
    transition: .35s;
}

.button-primary {
    background: var(--aqua);
    color: var(--ocean);
}

.button-primary:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(120,215,202,.3);
}

.button-outline {
    border: 1px solid rgba(255,255,255,.7);
    color: white;
}

.button-outline:hover {
    background: white;
    color: var(--ocean);
}

.hero-bottom {
    position: absolute;
    z-index: 3;
    bottom: 48px;
    left: 5%;
    right: 5%;
    display: flex;
    justify-content: space-between;
    font-size: 10px;
    letter-spacing: 2px;
}

.scroll-label {
    display: flex;
    align-items: center;
    gap: 12px;
}

.scroll-line {
    height: 1px;
    width: 48px;
    background: white;
    animation: lineMove 2s infinite;
}

/* INTRO */

.intro {
    padding: 110px 0;
}

.intro-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 80px;
}

.intro-image {
    height: 510px;
    border-radius: 180px 180px 25px 25px;
    position: relative;
    overflow: hidden;
    box-shadow: var(--shadow);
}

.intro-image img {
    transition: transform 1s;
}

.intro-image:hover img {
    transform: scale(1.07);
}

.image-caption {
    position: absolute;
    bottom: 23px;
    left: 23px;
    background: white;
    padding: 17px 22px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 700;
}

/* DATOS */

.facts {
    background: var(--ocean);
    color: white;
    padding: 60px 0;
}

.facts-grid {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    gap: 20px;
}

.fact {
    text-align: center;
    padding: 15px;
    border-right: 1px solid rgba(255,255,255,.15);
}

.fact:last-child {
    border: 0;
}

.fact strong {
    display: block;
    color: var(--aqua);
    font-family: 'Playfair Display',serif;
    font-size: 38px;
    margin-bottom: 9px;
}

.fact span {
    color: rgba(255,255,255,.72);
    font-size: 11px;
}

/* EXPERIENCIAS */

.experiences {
    padding: 115px 0;
}

.heading-row {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 30px;
    margin-bottom: 45px;
}

.heading-row .section-text {
    max-width: 340px;
    margin: 0;
}

.experience-grid {
    display: grid;
    grid-template-columns: 1.25fr 1fr 1fr;
    gap: 20px;
}

.experience-card {
    height: 420px;
    position: relative;
    border-radius: var(--radius);
    overflow: hidden;
    isolation: isolate;
    box-shadow: var(--shadow);
    transition: .5s;
}

.experience-card:hover {
    transform: translateY(-11px);
}

.experience-card img {
    position: absolute;
    inset: 0;
    z-index: -2;
    transition: transform .8s;
}

.experience-card:hover img {
    transform: scale(1.1);
}

.experience-card::after {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    background: linear-gradient(0deg, rgba(4,29,38,.9), transparent 75%);
}

.experience-content {
    position: absolute;
    bottom: 28px;
    left: 26px;
    right: 26px;
    color: white;
}

.experience-content small {
    color: var(--aqua);
    font-size: 10px;
    letter-spacing: 2px;
    font-weight: 800;
}

.experience-content h3 {
    font-family: 'Playfair Display',serif;
    font-size: 30px;
    font-weight: 500;
    margin: 12px 0;
}

.experience-content p {
    font-size: 12px;
    line-height: 1.7;
    color: rgba(255,255,255,.82);
}

/* NATURALEZA */

.nature {
    padding: 105px 0;
    background: #edf3ef;
}

.nature-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 75px;
}

.nature-image {
    height: 480px;
    overflow: hidden;
    border-radius: 25px;
    box-shadow: var(--shadow);
}

.nature-image img {
    transition: transform .8s;
}

.nature-image:hover img {
    transform: scale(1.07);
}

.nature-points {
    margin-top: 30px;
    display: grid;
    gap: 17px;
}

.nature-point {
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

.nature-point span {
    background: white;
    color: var(--blue);
    width: 38px;
    height: 38px;
    min-width: 38px;
    display: grid;
    place-items: center;
    border-radius: 12px;
}

.nature-point p {
    font-size: 13px;
    color: var(--muted);
    line-height: 1.7;
}

/* SERVICIOS */

.services {
    padding: 110px 0;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 20px;
    margin-top: 45px;
}

.service-card {
    background: white;
    padding: 32px;
    border-radius: 23px;
    border: 1px solid rgba(9,47,59,.05);
    transition: .4s;
}

.service-card:hover {
    transform: translateY(-9px);
    box-shadow: var(--shadow);
}

.service-icon {
    width: 55px;
    height: 55px;
    display: grid;
    place-items: center;
    border-radius: 16px;
    background: #e4f4ee;
    font-size: 24px;
    margin-bottom: 23px;
}

.service-card h3 {
    font-size: 17px;
    margin-bottom: 12px;
}

.service-card p {
    font-size: 13px;
    color: var(--muted);
    line-height: 1.8;
}

/* CONSEJOS */

.tips {
    padding: 105px 0;
    background: #edf3ef;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 20px;
    margin-top: 45px;
}

/* GALERÍA */

.gallery {
    padding: 110px 0;
}

.gallery-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr 1fr;
    grid-template-rows: 220px 220px;
    gap: 15px;
    margin-top: 42px;
}

.gallery-item {
    border-radius: 18px;
    overflow: hidden;
}

.gallery-item:first-child {
    grid-row: span 2;
}

.gallery-item img {
    transition: transform .7s;
}

.gallery-item:hover img {
    transform: scale(1.08);
}

/* UBICACIÓN */

.location {
    padding: 20px 0 110px;
}

.location-card {
    background: white;
    border-radius: 27px;
    padding: 40px;
    box-shadow: var(--shadow);
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: center;
    gap: 30px;
}

.location-card p {
    font-size: 14px;
    line-height: 1.8;
    color: var(--muted);
    margin-top: 12px;
}

/* FAQ */

.faq {
    padding: 100px 0;
    background: #edf3ef;
}

.faq-list {
    max-width: 850px;
    margin: 40px auto 0;
}

.faq-item {
    background: white;
    border-radius: 16px;
    padding: 23px 26px;
    margin-bottom: 13px;
    box-shadow: 0 7px 25px rgba(9,47,59,.04);
}

.faq-item h3 {
    font-size: 15px;
    margin-bottom: 10px;
}

.faq-item p {
    font-size: 13px;
    line-height: 1.8;
    color: var(--muted);
}

/* CTA */

.final-cta {
    background: var(--ocean);
    color: white;
    text-align: center;
    padding: 100px 25px;
    border-radius: 35px;
    margin: 100px auto 85px;
    position: relative;
    overflow: hidden;
}

.final-cta::before,
.final-cta::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(120,215,202,.2);
    border-radius: 50%;
    width: 300px;
    height: 300px;
}

.final-cta::before {
    top: -180px;
    left: -100px;
}

.final-cta::after {
    right: -100px;
    bottom: -190px;
}

.final-cta h2 {
    font-family: 'Playfair Display',serif;
    font-size: clamp(40px,5vw,65px);
    font-weight: 500;
    margin-bottom: 20px;
    position: relative;
}

.final-cta p {
    color: rgba(255,255,255,.75);
    max-width: 570px;
    line-height: 1.8;
    font-size: 14px;
    margin: 0 auto 30px;
    position: relative;
}

/* GETYOURGUIDE */

.gyg-container {
    padding: 20px 0 95px;
}

.gyg-heading {
    text-align: center;
    margin-bottom: 35px;
}

.gyg-heading span {
    color: var(--blue);
    font-size: 11px;
    letter-spacing: 2px;
    font-weight: 800;
}

.gyg-heading h2 {
    font-family: 'Playfair Display',serif;
    font-size: 43px;
    font-weight: 500;
    margin: 14px 0;
}

.gyg-heading p {
    color: var(--muted);
    font-size: 14px;
}

/* FOOTER */

footer {
    background: #061f27;
    color: white;
    padding: 35px 0;
}

.footer-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

footer p {
    color: rgba(255,255,255,.6);
    font-size: 11px;
}

/* ANIMACIONES */

.reveal {
    opacity: 0;
    transform: translateY(42px);
    transition: opacity .85s ease, transform .85s cubic-bezier(.2,.7,.2,1);
}

.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes lineMove {
    0%,100% { transform: scaleX(.5); transform-origin: left; }
    50% { transform: scaleX(1); transform-origin: left; }
}

/* RESPONSIVE */

@media(max-width:850px) {
    .nav-links {
        gap: 13px;
        font-size: 10px;
    }

    .intro-grid,
    .nature-grid {
        gap: 40px;
    }

    .experience-grid {
        grid-template-columns: 1fr 1fr;
    }

    .experience-card:first-child {
        grid-column: span 2;
    }

    .services-grid,
    .tips-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media(max-width:600px) {
    .nav-links a:not(.nav-cta) {
        display: none;
    }

    .hero {
        min-height: 730px;
        height: 92svh;
    }

    .hero h1 {
        font-size: 61px;
        letter-spacing: -2px;
    }

    .hero-description {
        font-size: 14px;
    }

    .hero-bottom {
        font-size: 8px;
        bottom: 32px;
    }

    .intro,
    .experiences,
    .services,
    .tips,
    .gallery,
    .faq {
        padding: 75px 0;
    }

    .intro-grid,
    .nature-grid {
        grid-template-columns: 1fr;
    }

    .intro-image {
        height: 380px;
        border-radius: 140px 140px 22px 22px;
    }

    .facts-grid {
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .fact:nth-child(2) {
        border: 0;
    }

    .fact strong {
        font-size: 30px;
    }

    .heading-row {
        display: block;
    }

    .heading-row .section-text {
        margin-top: 18px;
    }

    .experience-grid,
    .services-grid,
    .tips-grid {
        grid-template-columns: 1fr;
    }

    .experience-card,
    .experience-card:first-child {
        grid-column: auto;
        height: 350px;
    }

    .nature-image {
        height: 340px;
    }

    .gallery-grid {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 210px 150px 150px;
    }

    .gallery-item:first-child {
        grid-column: span 2;
        grid-row: auto;
    }

    .location-card {
        grid-template-columns: 1fr;
        padding: 27px;
    }

    .final-cta {
        padding: 75px 22px;
        border-radius: 25px;
        margin: 65px auto;
    }

    .gyg-heading h2 {
        font-size: 34px;
    }
}

@media(prefers-reduced-motion:reduce) {
    *,
    *::before,
    *::after {
        scroll-behavior: auto !important;
        animation-duration: .01ms !important;
        transition-duration: .01ms !important;
    }

    .reveal {
        opacity: 1;
        transform: none;
    }
}
</style>
</head>

<body>

<!-- NAVEGACIÓN -->
<nav class="navbar" id="navbar">
    <div class="nav-inner">

        <a href="/" class="logo">
            PLAYAS <span>DEL CANTÁBRICO</span>
        </a>

        <div class="nav-links">
            <a href="#descubre">La playa</a>
            <a href="#experiencias">Experiencias</a>
            <a href="#servicios">Servicios</a>
            <a href="#consejos">Consejos</a>
            <a href="#actividades" class="nav-cta">Qué hacer</a>
        </div>

    </div>
</nav>

<!-- HERO -->
<header class="hero" id="inicio">

    <div class="hero-content">

        <div class="hero-label">
            ✦ GORLIZ · BIZKAIA · COSTA VASCA
        </div>

        <h1>
            Gorliz.<br>
            <span>La bahía que enamora.</span>
        </h1>

        <p class="hero-description">
            Arena fina, aguas protegidas y un entorno natural
            para disfrutar del Cantábrico. Descubre una de las
            playas más especiales de Bizkaia.
        </p>

        <div class="hero-actions">
            <a href="#descubre" class="button button-primary">
                Descubrir Gorliz ↓
            </a>

            <a href="#experiencias" class="button button-outline">
                Explorar la playa
            </a>
        </div>

    </div>

    <div class="hero-bottom">
        <span>GORLIZ · BIZKAIA</span>

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

            <p class="kicker">Un rincón de la costa vasca</p>

            <h2 class="section-title">
                Una bahía para disfrutar del mar sin prisas.
            </h2>

            <p class="section-text">
                La Playa de Gorliz es uno de los arenales más conocidos
                de Bizkaia. Su característica forma de concha, la arena
                fina y su entorno urbano y natural la convierten en un
                destino ideal para disfrutar de un día junto al mar.
            </p>

            <p class="section-text">
                Su paseo marítimo invita a caminar junto a la bahía,
                mientras que las zonas verdes, los espacios recreativos
                y las actividades acuáticas ofrecen diferentes maneras
                de descubrir este rincón del litoral vasco.
            </p>

            <a href="#experiencias" class="button button-primary" style="margin-top:28px;">
                Descubrir sus encantos →
            </a>

        </div>

        <div class="intro-image reveal">

            <img
                src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1100&q=85"
                alt="Paisaje de mar y playa en la costa"
                loading="lazy"
            >

            <div class="image-caption">
                ✦ La esencia del Cantábrico
            </div>

        </div>

    </div>

</section>

<!-- DATOS DESTACADOS -->
<section class="facts">

    <div class="container facts-grid">

        <div class="fact reveal">
            <strong>842 m</strong>
            <span>Longitud del arenal</span>
        </div>

        <div class="fact reveal">
            <strong>Arena</strong>
            <span>Fina y dorada</span>
        </div>

        <div class="fact reveal">
            <strong>Bahía</strong>
            <span>Entorno parcialmente protegido</span>
        </div>

        <div class="fact reveal">
            <strong>Mar</strong>
            <span>Deporte y naturaleza</span>
        </div>

    </div>

</section>

<!-- EXPERIENCIAS -->
<section class="experiences" id="experiencias">

    <div class="container">

        <div class="heading-row reveal">

            <div>
                <p class="kicker">Mucho por descubrir</p>
                <h2 class="section-title">Gorliz se disfruta de mil maneras.</h2>
            </div>

            <p class="section-text">
                Un destino para disfrutar de la playa, practicar deporte,
                pasear junto al mar y conectar con la naturaleza.
            </p>

        </div>

        <div class="experience-grid">

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1100&q=85"
                    alt="Deporte de surf en el mar"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>01 / DEPORTE</small>
                    <h3>Aventura en el agua</h3>
                    <p>Descubre actividades como surf, vela, piragüismo y paddle surf.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=850&q=85"
                    alt="Arena y mar en una playa"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>02 / RELAX</small>
                    <h3>Un día de playa</h3>
                    <p>Disfruta de la arena, el baño y los espacios de descanso.</p>
                </div>

            </article>

            <article class="experience-card reveal">

                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=850&q=85"
                    alt="Paisaje de naturaleza"
                    loading="lazy"
                >

                <div class="experience-content">
                    <small>03 / NATURALEZA</small>
                    <h3>Paseos y paisajes</h3>
                    <p>Recorre el paseo marítimo y descubre el entorno de la bahía.</p>
                </div>

            </article>

        </div>

    </div>

</section>

<!-- ENTORNO NATURAL -->
<section class="nature">

    <div class="container nature-grid">

        <div class="nature-image reveal">

            <img
                src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1100&q=85"
                alt="Paisaje natural de costa"
                loading="lazy"
            >

        </div>

        <div class="reveal">

            <p class="kicker">Naturaleza y paisaje</p>

            <h2 class="section-title">
                Una bahía rodeada de rincones naturales.
            </h2>

            <p class="section-text">
                La playa forma parte de un entorno costero de gran
                atractivo. Su bahía, el entorno de Astondo y los
                paisajes próximos permiten combinar el descanso
                en la arena con paseos y rutas por la costa.
            </p>

            <div class="nature-points">

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>La bahía de Gorliz.</strong>
                        Una ensenada de forma característica que protege
                        parcialmente la zona de baño.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>Astondo.</strong>
                        Un entorno costero desde el que descubrir
                        otros paisajes de la zona.
                    </p>
                </div>

                <div class="nature-point">
                    <span>✦</span>
                    <p>
                        <strong>El paseo marítimo.</strong>
                        Un recorrido para disfrutar de las vistas
                        y del ambiente de la playa.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- SERVICIOS -->
<section class="services" id="servicios">

    <div class="container">

        <div class="reveal">
            <p class="kicker">Prepara tu visita</p>
            <h2 class="section-title">Servicios para disfrutar de Gorliz.</h2>

            <p class="section-text" style="max-width:600px;">
                La playa dispone de diferentes equipamientos y servicios
                para facilitar una visita cómoda durante todo el año.
            </p>
        </div>

        <div class="services-grid">

            <article class="service-card reveal">
                <div class="service-icon">🚿</div>
                <h3>Servicios de playa</h3>
                <p>
                    Duchas, aseos, fuentes, lavapiés y otros equipamientos
                    para disfrutar de la jornada junto al mar.
                </p>
            </article>

            <article class="service-card reveal">
                <div class="service-icon">♿</div>
                <h3>Accesibilidad</h3>
                <p>
                    Cuenta con accesos adaptados y dispone de servicio
                    de baño asistido en temporada, sujeto a organización
                    y disponibilidad.
                </p>
            </article>

            <article class="service-card reveal">
                <div class="service-icon">🛝</div>
                <h3>Espacios familiares</h3>
                <p>
                    Zonas verdes, áreas recreativas y juegos infantiles
                    para disfrutar en familia.
                </p>
            </article>

            <article class="service-card reveal">
                <div class="service-icon">🚗</div>
                <h3>Aparcamiento</h3>
                <p>
                    Hay zonas de estacionamiento próximas a la playa.
                    Comprueba las condiciones y posibles restricciones
                    de temporada antes de viajar.
                </p>
            </article>

            <article class="service-card reveal">
                <div class="service-icon">🏄</div>
                <h3>Actividades acuáticas</h3>
                <p>
                    En el entorno se pueden practicar actividades como
                    surf, vela, piragüismo y otras propuestas náuticas.
                </p>
            </article>

            <article class="service-card reveal">
                <div class="service-icon">🌳</div>
                <h3>Áreas de descanso</h3>
                <p>
                    El entorno cuenta con zonas verdes, mesas y espacios
                    para descansar y disfrutar al aire libre.
                </p>
            </article>

        </div>

    </div>

</section>

<!-- CONSEJOS -->
<section class="tips" id="consejos">

    <div class="container">

        <div class="reveal">
            <p class="kicker">Consejos para tu escapada</p>
            <h2 class="section-title">Disfruta Gorliz con tranquilidad.</h2>
        </div>

        <div class="tips-grid">

            <article class="service-card reveal">
                <div class="service-icon">🌊</div>
                <h3>Consulta el estado del mar</h3>
                <p>
                    Antes de bañarte, comprueba las banderas, las mareas
                    y las indicaciones del servicio de socorrismo.
                </p>
            </article>

            <article class="service-card reveal">
                <div class="service-icon">☀️</div>
                <h3>Protégete del sol</h3>
                <p>
                    Lleva protección solar, agua y todo lo necesario
                    para disfrutar de la playa de forma cómoda.
                </p>
            </article>

            <article class="service-card reveal">
                <div class="service-icon">🌿</div>
                <h3>Cuida el entorno</h3>
                <p>
                    Utiliza las zonas habilitadas, respeta la naturaleza
                    y evita dejar residuos en la arena o las zonas verdes.
                </p>
            </article>

        </div>

    </div>

</section>

<!-- GALERÍA -->
<section class="gallery" id="galeria">

    <div class="container">

        <div class="reveal">
            <p class="kicker">Postales de Bizkaia</p>
            <h2 class="section-title">Gorliz en imágenes.</h2>
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
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=85"
                    alt="Arena y agua"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=800&q=85"
                    alt="Paisaje de costa"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=800&q=85"
                    alt="Naturaleza y paisaje"
                    loading="lazy"
                >
            </div>

            <div class="gallery-item reveal">
                <img
                    src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=800&q=85"
                    alt="Paisaje natural"
                    loading="lazy"
                >
            </div>

        </div>

        <p style="font-size:11px;color:var(--muted);margin-top:15px;">
            Fotografías provisionales de paisaje. Sustituir por imágenes propias
            y verificadas de la Playa de Gorliz antes de publicar.
        </p>

    </div>

</section>

<!-- UBICACIÓN -->
<section class="location">

    <div class="container">

        <div class="location-card reveal">

            <div>
                <p class="kicker">Cómo llegar</p>

                <h2 class="section-title">
                    Tu próxima escapada está en Bizkaia.
                </h2>

                <p>
                    Playa de Gorliz, municipio de Gorliz, Bizkaia.
                    Puedes consultar la ruta en el mapa y planificar
                    tu llegada desde Bilbao o desde otras localidades.
                </p>
            </div>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Playa+de+Gorliz+Bizkaia"
                target="_blank"
                rel="noopener noreferrer"
                class="button button-primary"
            >
                Ver ubicación en el mapa ↗
            </a>

        </div>

    </div>

</section>

<!-- PREGUNTAS FRECUENTES -->
<section class="faq" id="preguntas">

    <div class="container">

        <div class="reveal" style="text-align:center;">
            <p class="kicker">Resolvemos tus dudas</p>
            <h2 class="section-title">Preguntas frecuentes sobre Gorliz.</h2>
        </div>

        <div class="faq-list">

            <article class="faq-item reveal">
                <h3>¿Cuánto mide la Playa de Gorliz?</h3>
                <p>
                    La Playa de Gorliz tiene aproximadamente 842 metros
                    de longitud, con un amplio arenal de arena fina.
                </p>
            </article>

            <article class="faq-item reveal">
                <h3>¿Es una playa adecuada para ir con niños?</h3>
                <p>
                    Su bahía protege parcialmente la zona de baño y cuenta
                    con espacios recreativos y servicios que la hacen
                    una opción popular para las familias. Aun así,
                    hay que comprobar siempre el estado del mar.
                </p>
            </article>

            <article class="faq-item reveal">
                <h3>¿Qué actividades se pueden practicar en Gorliz?</h3>
                <p>
                    En la playa y su entorno se pueden realizar actividades
                    como surf, vela, piragüismo, voleibol y otras propuestas
                    deportivas y acuáticas.
                </p>
            </article>

            <article class="faq-item reveal">
                <h3>¿Tiene servicios y duchas?</h3>
                <p>
                    Sí. Entre sus equipamientos figuran duchas, aseos,
                    fuentes, lavapiés, aparcamiento y áreas recreativas.
                    Algunos servicios pueden variar según la temporada.
                </p>
            </article>

            <article class="faq-item reveal">
                <h3>¿Dispone de accesibilidad y baño asistido?</h3>
                <p>
                    Gorliz dispone de accesos adaptados y servicio de baño
                    asistido durante la temporada correspondiente.
                    Conviene consultar previamente las condiciones y
                    la disponibilidad del servicio.
                </p>
            </article>

            <article class="faq-item reveal">
                <h3>¿Dónde está la Playa de Gorliz?</h3>
                <p>
                    Se encuentra en el municipio de Gorliz, en la costa
                    de Bizkaia, País Vasco, junto a la bahía de Gorliz
                    y la playa de Plentzia.
                </p>
            </article>

        </div>

    </div>

</section>

<!-- CTA FINAL -->
<section class="container">

    <div class="final-cta reveal">

        <p class="kicker" style="color:#78d7ca;">
            Descubre la costa de Bizkaia
        </p>

        <h2>El Cantábrico te está esperando.</h2>

        <p>
            Prepara tu escapada, descubre nuevos paisajes
            y disfruta de la Playa de Gorliz.
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

        <h2>Qué hacer cerca de Gorliz</h2>

        <p>
            Encuentra excursiones, actividades y experiencias
            para completar tu visita a Bizkaia.
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

        <a href="/" class="logo">
            PLAYAS <span>DEL CANTÁBRICO</span>
        </a>

        <p>
            © <?= date('Y'); ?> Playas del Cantábrico · Turismo Norte de España
        </p>

        <a href="#inicio">Volver arriba ↑</a>

    </div>

</footer>

<script>
// Menú con fondo al desplazarse
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
}, { passive: true });

// Aparición progresiva de los contenedores
const revealObserver = new IntersectionObserver((entries, observer) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }

    });

}, {
    threshold: 0.12,
    rootMargin: '0px 0px -35px 0px'
});

document.querySelectorAll('.reveal').forEach(element => {
    revealObserver.observe(element);
});
</script>

<!-- Mantén aquí los scripts oficiales de AdCash y GetYourGuide
     si no están cargados ya globalmente en tu proyecto. -->

</body>
</html>
