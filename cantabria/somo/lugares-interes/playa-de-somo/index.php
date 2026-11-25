
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

<style>
:root {
    --ocean: #092d36;
    --ocean-light: #155b68;
    --turquoise: #79d5c7;
    --sand: #e9d7b7;
    --cream: #f8f7f2;
    --white: #fff;
    --text: #173a40;
    --muted: #718387;
    --radius: 26px;
    --shadow: 0 20px 60px rgba(9,45,54,.10);
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
    background: var(--cream);
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    overflow-x: hidden;
}

a {
    color: inherit;
    text-decoration: none;
}

img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container {
    width: min(1180px, 90%);
    margin: auto;
}

.kicker {
    color: var(--ocean-light);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 19px;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(38px, 5vw, 62px);
    font-weight: 500;
    letter-spacing: -1.5px;
    line-height: 1.1;
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
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    color: white;
    padding: 21px 0;
    transition: .4s ease;
}

.navbar.scrolled {
    background: rgba(5,37,45,.94);
    backdrop-filter: blur(18px);
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
    color: var(--turquoise);
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 27px;
    font-size: 12px;
    font-weight: 700;
}

.nav-links a {
    transition: .3s;
}

.nav-links a:hover {
    color: var(--turquoise);
}

.nav-cta {
    background: white;
    color: var(--ocean);
    padding: 12px 20px;
    border-radius: 30px;
}

/* PORTADA */

.hero {
    min-height: 780px;
    height: 100svh;
    max-height: 950px;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    color: white;

    background:
        linear-gradient(90deg, rgba(3,30,38,.76), rgba(3,30,38,.12)),
        linear-gradient(0deg, rgba(3,30,38,.48), transparent 65%),
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
    display: inline-flex;
    align-items: center;
    gap: 10px;
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
    line-height: .95;
    font-weight: 500;
    letter-spacing: -4px;
    max-width: 900px;
    animation: fadeUp 1s .15s both;
}

.hero h1 span {
    color: var(--turquoise);
    font-style: italic;
}

.hero-description {
    font-size: 16px;
    line-height: 1.9;
    max-width: 520px;
    color: rgba(255,255,255,.86);
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
    background: var(--turquoise);
    color: var(--ocean);
}

.button-primary:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(121,213,199,.3);
}

.button-outline {
    border: 1px solid rgba(255,255,255,.7);
    color: white;
    backdrop-filter: blur(10px);
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
    align-items: center;
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

/* INTRODUCCIÓN */

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
    border-radius: 190px 190px 25px 25px;
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
    left: 23px;
    bottom: 23px;
    background: white;
    padding: 17px 22px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 700;
}

/* CARACTERÍSTICAS */

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
    color: var(--turquoise);
    font-family: 'Playfair Display',serif;
    font-size: 38px;
    margin-bottom: 9px;
}

.fact span {
    color: rgba(255,255,255,.7);
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
    color: var(--turquoise);
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
    color: rgba(255,255,255,.8);
}

/* SURF */

.surf {
    padding: 25px 0 110px;
}

.surf-box {
    min-height: 510px;
    border-radius: 35px;
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 70px;
    color: white;
    background:
        linear-gradient(90deg, rgba(4,35,43,.92), rgba(4,35,43,.15)),
        url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1800&q=90') center/cover;
}

.surf-content {
    max-width: 550px;
}

.surf-content h2 {
    font-family: 'Playfair Display',serif;
    font-size: clamp(42px,5vw,67px);
    font-weight: 500;
    line-height: 1.1;
    margin-bottom: 23px;
}

.surf-content p {
    font-size: 14px;
    line-height: 1.9;
    color: rgba(255,255,255,.85);
    margin-bottom: 28px;
}

/* PUNTAL Y NATURALEZA */

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
    color: var(--ocean-light);
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

/* CONSEJOS */

.tips {
    padding: 110px 0;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 20px;
    margin-top: 45px;
}

.tip-card {
    padding: 33px;
    background: white;
    border: 1px solid rgba(9,45,54,.05);
    border-radius: 23px;
    transition: .4s;
}

.tip-card:hover {
    transform: translateY(-9px);
    box-shadow: var(--shadow);
}

.tip-icon {
    height: 55px;
    width: 55px;
    display: grid;
    place-items: center;
    border-radius: 16px;
    background: #e4f4ee;
    font-size: 24px;
    margin-bottom: 24px;
}

.tip-card h3 {
    font-size: 17px;
    margin-bottom: 13px;
}

.tip-card p {
    font-size: 13px;
    line-height: 1.8;
    color: var(--muted);
}

/* GALERÍA */

.gallery {
    padding: 100px 0;
    background: #edf3ef;
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
    padding: 110px 0;
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

/* CTA */

.final-cta {
    background: var(--ocean);
    color: white;
    text-align: center;
    padding: 100px 25px;
    border-radius: 35px;
    margin-bottom: 85px;
    position: relative;
    overflow: hidden;
}

.final-cta::before,
.final-cta::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(121,213,199,.2);
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
    color: var(--ocean-light);
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
        gap: 14px;
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

    .tips-grid {
        grid-template-columns: 1fr 1fr;
    }

    .surf-box {
        padding: 45px;
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
    .tips,
    .location {
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

    .experience-grid {
        grid-template-columns: 1fr;
    }

    .experience-card,
    .experience-card:first-child {
        grid-column: auto;
        height: 350px;
    }

    .surf {
        padding-bottom: 75px;
    }

    .surf-box {
        min-height: 450px;
        padding: 32px 24px;
        border-radius: 24px;
    }

    .nature {
        padding: 75px 0;
    }

    .nature-image {
        height: 340px;
    }

    .tips-grid {
        grid-template-columns: 1fr;
    }

    .gallery {
        padding: 75px 0;
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
        margin-bottom: 55px;
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

<!-- MENÚ -->
<nav class="navbar" id="navbar">
    <div class="nav-inner">

        <a href="/turismo-norte-espana" class="logo">
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

        <a href="/turismo-norte-espana" class="logo">
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

<script>
// Menú que cambia al desplazarse
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
}, { passive: true });

// Animaciones progresivas de los contenedores
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

<!-- Conserva aquí los scripts oficiales de AdCash y GetYourGuide
     si no están cargados ya globalmente en tu proyecto. -->

</body>
</html>
