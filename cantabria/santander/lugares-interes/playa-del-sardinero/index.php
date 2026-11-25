
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

<style>
:root {
    --navy: #092b3a;
    --blue: #0e6479;
    --turquoise: #54c4c5;
    --sand: #f1e8d8;
    --cream: #faf9f5;
    --white: #fff;
    --text: #173746;
    --muted: #73858b;
    --radius: 25px;
    --shadow: 0 20px 60px rgba(8,43,58,.10);
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
    background: var(--cream);
    color: var(--text);
    overflow-x: hidden;
}

a {
    text-decoration: none;
    color: inherit;
}

img {
    display: block;
    width: 100%;
    object-fit: cover;
}

.container {
    width: min(1180px, 90%);
    margin: auto;
}

/* NAVEGACIÓN */

.navbar {
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 0;
    transition: .4s ease;
    color: white;
}

.navbar.scrolled {
    background: rgba(7,35,47,.94);
    backdrop-filter: blur(18px);
    padding: 13px 0;
    box-shadow: 0 8px 30px rgba(0,0,0,.12);
}

.nav-inner {
    width: min(1250px, 90%);
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo {
    font-size: 19px;
    font-weight: 800;
    letter-spacing: -.7px;
}

.logo span {
    color: var(--turquoise);
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 30px;
    font-size: 13px;
    font-weight: 600;
}

.nav-links a {
    opacity: .9;
    transition: .3s;
}

.nav-links a:hover {
    color: var(--turquoise);
}

.nav-button {
    padding: 12px 20px;
    background: white;
    color: var(--navy);
    border-radius: 30px;
}

/* HERO */

.hero {
    min-height: 790px;
    height: 100vh;
    max-height: 950px;
    position: relative;
    display: flex;
    align-items: center;
    color: white;
    overflow: hidden;
    background:
        linear-gradient(90deg, rgba(4,28,39,.78), rgba(4,28,39,.12)),
        linear-gradient(0deg, rgba(4,28,39,.5), transparent 65%),
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
    width: min(1180px, 90%);
    margin: auto;
    position: relative;
    z-index: 2;
    padding-top: 60px;
}

.hero-kicker {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 17px;
    border: 1px solid rgba(255,255,255,.4);
    background: rgba(255,255,255,.12);
    backdrop-filter: blur(12px);
    border-radius: 50px;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 30px;
    animation: fadeUp .9s both;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(58px, 9vw, 112px);
    font-weight: 500;
    line-height: .98;
    letter-spacing: -4px;
    max-width: 850px;
    animation: fadeUp 1s .15s both;
}

.hero h1 span {
    color: #8de1dc;
    font-style: italic;
}

.hero-description {
    max-width: 530px;
    font-size: 17px;
    line-height: 1.8;
    margin-top: 30px;
    color: rgba(255,255,255,.88);
    animation: fadeUp 1s .3s both;
}

.hero-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    margin-top: 35px;
    animation: fadeUp 1s .45s both;
}

.button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 16px 25px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    transition: .35s;
}

.button-primary {
    background: var(--turquoise);
    color: var(--navy);
}

.button-primary:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(84,196,197,.3);
}

.button-outline {
    border: 1px solid rgba(255,255,255,.7);
    color: white;
    backdrop-filter: blur(10px);
}

.button-outline:hover {
    background: white;
    color: var(--navy);
}

.hero-bottom {
    position: absolute;
    z-index: 3;
    bottom: 55px;
    left: 5%;
    right: 5%;
    display: flex;
    justify-content: space-between;
    align-items: end;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.scroll-indicator {
    display: flex;
    align-items: center;
    gap: 12px;
}

.scroll-line {
    width: 55px;
    height: 1px;
    background: white;
    animation: lineMove 2s infinite;
}

/* INTRODUCCIÓN */

.intro {
    padding: 115px 0 100px;
}

.intro-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 90px;
}

.section-kicker {
    color: var(--blue);
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    margin-bottom: 20px;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(38px, 5vw, 60px);
    line-height: 1.12;
    font-weight: 500;
    letter-spacing: -1.5px;
}

.section-text {
    color: var(--muted);
    font-size: 15px;
    line-height: 1.9;
    margin-top: 25px;
}

.intro-image {
    height: 510px;
    position: relative;
    border-radius: 180px 180px 25px 25px;
    overflow: hidden;
    box-shadow: var(--shadow);
}

.intro-image img {
    height: 100%;
    transition: transform 1s;
}

.intro-image:hover img {
    transform: scale(1.07);
}

.floating-label {
    position: absolute;
    bottom: 25px;
    left: 25px;
    background: white;
    padding: 18px 23px;
    border-radius: 17px;
    box-shadow: var(--shadow);
    font-size: 12px;
    font-weight: 700;
}

/* DATOS */

.stats {
    background: var(--navy);
    color: white;
    padding: 65px 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.stat {
    text-align: center;
    padding: 15px;
    border-right: 1px solid rgba(255,255,255,.15);
}

.stat:last-child {
    border: 0;
}

.stat strong {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 36px;
    color: var(--turquoise);
    margin-bottom: 8px;
}

.stat span {
    font-size: 12px;
    color: rgba(255,255,255,.7);
}

/* EXPERIENCIAS */

.experiences {
    padding: 115px 0;
}

.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 30px;
    margin-bottom: 50px;
}

.experience-grid {
    display: grid;
    grid-template-columns: 1.25fr 1fr 1fr;
    gap: 22px;
}

.experience-card {
    min-height: 410px;
    position: relative;
    overflow: hidden;
    border-radius: var(--radius);
    isolation: isolate;
    box-shadow: var(--shadow);
    transition: transform .5s, box-shadow .5s;
}

.experience-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 30px 65px rgba(8,43,58,.2);
}

.experience-card img {
    position: absolute;
    inset: 0;
    height: 100%;
    transition: transform .8s;
    z-index: -2;
}

.experience-card:hover img {
    transform: scale(1.09);
}

.experience-card::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(0deg, rgba(3,28,39,.9), transparent 75%);
    z-index: -1;
}

.experience-content {
    position: absolute;
    bottom: 28px;
    left: 28px;
    right: 28px;
    color: white;
}

.experience-number {
    font-size: 11px;
    letter-spacing: 2px;
    color: var(--turquoise);
    margin-bottom: 12px;
}

.experience-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 10px;
}

.experience-content p {
    font-size: 12px;
    line-height: 1.7;
    color: rgba(255,255,255,.8);
}

/* BLOQUE DESTACADO */

.highlight {
    padding: 30px 0 115px;
}

.highlight-box {
    position: relative;
    overflow: hidden;
    min-height: 490px;
    border-radius: 35px;
    padding: 75px;
    color: white;
    display: flex;
    align-items: center;
    background:
        linear-gradient(90deg, rgba(5,35,47,.9), rgba(5,35,47,.25)),
        url('https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=1800&q=85') center/cover;
}

.highlight-content {
    max-width: 550px;
}

.highlight h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(40px, 5vw, 65px);
    font-weight: 500;
    line-height: 1.1;
    margin-bottom: 25px;
}

.highlight p {
    line-height: 1.9;
    color: rgba(255,255,255,.85);
    font-size: 14px;
    margin-bottom: 28px;
}

/* INFORMACIÓN */

.tips {
    padding: 110px 0;
    background: #edf4f1;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
    margin-top: 50px;
}

.tip-card {
    background: white;
    padding: 35px;
    border-radius: 23px;
    transition: .4s;
    border: 1px solid rgba(9,43,58,.04);
}

.tip-card:hover {
    transform: translateY(-9px);
    box-shadow: var(--shadow);
}

.tip-icon {
    width: 55px;
    height: 55px;
    display: grid;
    place-items: center;
    background: #e2f5f1;
    color: var(--blue);
    border-radius: 17px;
    font-size: 24px;
    margin-bottom: 25px;
}

.tip-card h3 {
    font-size: 18px;
    margin-bottom: 13px;
}

.tip-card p {
    color: var(--muted);
    font-size: 13px;
    line-height: 1.8;
}

/* GALERÍA */

.gallery {
    padding: 115px 0;
}

.gallery-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr 1fr;
    grid-template-rows: 220px 220px;
    gap: 15px;
    margin-top: 45px;
}

.gallery-item {
    overflow: hidden;
    border-radius: 19px;
}

.gallery-item:first-child {
    grid-row: span 2;
}

.gallery-item img {
    height: 100%;
    transition: transform .7s;
}

.gallery-item:hover img {
    transform: scale(1.08);
}

/* CTA */

.final-cta {
    background: var(--navy);
    color: white;
    padding: 100px 25px;
    text-align: center;
    border-radius: 35px;
    margin-bottom: 100px;
    position: relative;
    overflow: hidden;
}

.final-cta::before,
.final-cta::after {
    content: "";
    position: absolute;
    width: 260px;
    height: 260px;
    border-radius: 50%;
    border: 1px solid rgba(84,196,197,.25);
}

.final-cta::before {
    top: -140px;
    left: -80px;
}

.final-cta::after {
    bottom: -170px;
    right: -60px;
}

.final-cta h2 {
    position: relative;
    font-family: 'Playfair Display', serif;
    font-size: clamp(38px, 5vw, 60px);
    font-weight: 500;
    margin-bottom: 20px;
}

.final-cta p {
    position: relative;
    max-width: 570px;
    margin: 0 auto 30px;
    color: rgba(255,255,255,.72);
    line-height: 1.8;
    font-size: 14px;
}

/* GETYOURGUIDE */

.gyg-container {
    padding: 30px 0 100px;
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
    font-family: 'Playfair Display', serif;
    font-size: 42px;
    font-weight: 500;
    margin: 15px 0;
}

.gyg-heading p {
    color: var(--muted);
    font-size: 14px;
}

/* FOOTER */

footer {
    background: #061f2b;
    color: white;
    padding: 40px 0;
}

.footer-inner {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    align-items: center;
}

footer p {
    font-size: 12px;
    color: rgba(255,255,255,.6);
}

/* ANIMACIONES */

.reveal {
    opacity: 0;
    transform: translateY(45px);
    transition: opacity .85s ease, transform .85s cubic-bezier(.2,.7,.2,1);
}

.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(35px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes lineMove {
    0%, 100% { transform: scaleX(.5); transform-origin: left; }
    50% { transform: scaleX(1); transform-origin: left; }
}

/* RESPONSIVE */

@media(max-width: 850px) {
    .nav-links {
        gap: 15px;
        font-size: 11px;
    }

    .intro-grid {
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

    .highlight-box {
        padding: 50px;
    }
}

@media(max-width: 600px) {
    .navbar {
        padding: 17px 0;
    }

    .nav-links a:not(.nav-button) {
        display: none;
    }

    .hero {
        min-height: 740px;
        height: 90svh;
    }

    .hero h1 {
        font-size: 60px;
        letter-spacing: -2px;
    }

    .hero-description {
        font-size: 14px;
    }

    .hero-bottom {
        bottom: 35px;
        font-size: 9px;
    }

    .intro,
    .experiences,
    .gallery {
        padding: 75px 0;
    }

    .intro-grid {
        grid-template-columns: 1fr;
    }

    .intro-image {
        height: 390px;
        border-radius: 130px 130px 22px 22px;
    }

    .stats-grid {
        grid-template-columns: 1fr 1fr;
        gap: 20px 10px;
    }

    .stat:nth-child(2) {
        border: 0;
    }

    .stat strong {
        font-size: 29px;
    }

    .section-heading {
        display: block;
    }

    .experience-grid {
        grid-template-columns: 1fr;
    }

    .experience-card,
    .experience-card:first-child {
        grid-column: auto;
        min-height: 350px;
    }

    .highlight {
        padding-bottom: 75px;
    }

    .highlight-box {
        min-height: 440px;
        padding: 35px 25px;
        border-radius: 25px;
    }

    .tips {
        padding: 75px 0;
    }

    .tips-grid {
        grid-template-columns: 1fr;
    }

    .gallery-grid {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 220px 160px 160px;
    }

    .gallery-item:first-child {
        grid-column: span 2;
        grid-row: auto;
    }

    .final-cta {
        padding: 75px 22px;
        border-radius: 25px;
        margin-bottom: 60px;
    }

    .gyg-heading h2 {
        font-size: 34px;
    }
}

@media(prefers-reduced-motion: reduce) {
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

        <a href="/" class="logo">
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

<script>
// Navegación dinámica
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
}, { passive: true });

// Animaciones al entrar en pantalla
const observer = new IntersectionObserver((entries) => {

    entries.forEach((entry) => {

        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }

    });

}, {
    threshold: 0.12,
    rootMargin: '0px 0px -35px 0px'
});

document.querySelectorAll('.reveal').forEach((element) => {
    observer.observe(element);
});
</script>

<!-- Carga aquí los scripts oficiales de AdCash y GetYourGuide,
     si no están ya cargados globalmente en tu proyecto. -->

</body>
</html>
