
<?php
/*
 * PLAYA DE LAIDA — IBARRANGELU
 * Página SEO independiente.
 * Sustituir tudominio.com y las imágenes ilustrativas por recursos propios.
 */

$siteName = 'Playas del Cantábrico';
$pageUrl = 'https://www.tudominio.com/bizkaia/ibarrangelu/lugares-interes/playa-de-laida/';
$pageTitle = 'Playa de Laida (Ibarrangelu): guía completa, mareas y cómo llegar';
$pageDescription = 'Descubre la Playa de Laida, en Ibarrangelu: un gran arenal dunar de Urdaibai ideal para disfrutar de la naturaleza, el surf y los deportes acuáticos. Servicios, mareas, accesibilidad y cómo llegar.';
$heroImage = 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=85';

$faqs = [
    [
        'q' => '¿Dónde está la Playa de Laida?',
        'a' => 'La Playa de Laida se encuentra en el municipio de Ibarrangelu, en Bizkaia, en la margen derecha de la ría de Mundaka y dentro de la Reserva de la Biosfera de Urdaibai.'
    ],
    [
        'q' => '¿Cuánto mide la Playa de Laida?',
        'a' => 'Los perfiles ambientales de AZTI estiman una longitud aproximada de 812 metros y una anchura media de 166 metros. La superficie de arena cambia considerablemente con las mareas.'
    ],
    [
        'q' => '¿Es adecuada para ir con niños?',
        'a' => 'La playa cuenta con sectores de aguas poco profundas que pueden resultar apropiados para familias. No obstante, existen corrientes y zonas de distinta exposición al oleaje. Es imprescindible respetar la señalización y las indicaciones del personal de socorrismo.'
    ],
    [
        'q' => '¿Se puede practicar surf en Laida?',
        'a' => 'Sí. Laida es conocida por sus olas largas y suaves, especialmente interesantes para longboard. Las condiciones varían con el estado de la mar y la marea, por lo que conviene consultar con las escuelas y profesionales locales.'
    ],
    [
        'q' => '¿Qué deportes acuáticos se pueden practicar?',
        'a' => 'En el entorno de Laida se practican surf, windsurf, piragüismo, kayak, vela y paddle surf, entre otras actividades, siempre en los espacios y condiciones autorizados.'
    ],
    [
        'q' => '¿Tiene aparcamiento?',
        'a' => 'Sí, hay zonas de aparcamiento junto a la playa. En los días de mayor afluencia estival pueden llenarse pronto, por lo que es recomendable llegar temprano o utilizar el transporte público.'
    ],
    [
        'q' => '¿Es accesible para personas con movilidad reducida?',
        'a' => 'La playa dispone de acceso accesible, plazas reservadas y rampa desde el entorno del aparcamiento. Sin embargo, la ficha de accesibilidad indica que las pasarelas no llegan hasta la orilla del mar.'
    ],
    [
        'q' => '¿Hay servicio de socorrismo?',
        'a' => 'La playa dispone de vigilancia y socorrismo durante la temporada de baño. Los horarios y fechas concretas pueden variar cada año, por lo que deben comprobarse antes de la visita.'
    ],
    [
        'q' => '¿Se puede llegar a Laida en barco?',
        'a' => 'En temporada estival existen servicios de barco que conectan Laida con Mundaka y Sukarrieta. La operativa y los horarios dependen de la temporada.'
    ],
    [
        'q' => '¿Se admiten perros en la playa?',
        'a' => 'El perfil ambiental de la playa indica que el acceso de animales domésticos está prohibido durante la temporada de baño. Consulta la normativa municipal vigente para conocer las condiciones fuera de ese periodo.'
    ]
];

$schemaBeach = [
    '@context' => 'https://schema.org',
    '@type' => 'Beach',
    'name' => 'Playa de Laida',
    'description' => $pageDescription,
    'url' => $pageUrl,
    'image' => $heroImage,
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Ibarrangelu',
        'addressRegion' => 'Bizkaia',
        'addressCountry' => 'ES'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 43.4011,
        'longitude' => -2.6825
    ],
    'containedInPlace' => [
        '@type' => 'Place',
        'name' => 'Reserva de la Biosfera de Urdaibai'
    ]
];

$schemaFaq = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($faq) {
        return [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }, $faqs)
];

function h($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= h($pageTitle) ?></title>
<meta name="description" content="<?= h($pageDescription) ?>">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="<?= h($pageUrl) ?>">

<meta property="og:type" content="article">
<meta property="og:locale" content="es_ES">
<meta property="og:site_name" content="<?= h($siteName) ?>">
<meta property="og:title" content="<?= h($pageTitle) ?>">
<meta property="og:description" content="<?= h($pageDescription) ?>">
<meta property="og:url" content="<?= h($pageUrl) ?>">
<meta property="og:image" content="<?= h($heroImage) ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= h($pageTitle) ?>">
<meta name="twitter:description" content="<?= h($pageDescription) ?>">
<meta name="twitter:image" content="<?= h($heroImage) ?>">

<meta name="theme-color" content="#073b43">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<script type="application/ld+json">
<?= json_encode($schemaBeach, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<script type="application/ld+json">
<?= json_encode($schemaFaq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<style>
:root {
    --deep: #073b43;
    --deep2: #0d5359;
    --teal: #168b86;
    --mint: #d9f1e9;
    --sand: #f5efe3;
    --cream: #fbfaf6;
    --ink: #183238;
    --muted: #64777a;
    --white: #fff;
    --line: rgba(7,59,67,.12);
    --shadow: 0 18px 55px rgba(7,59,67,.11);
    --radius: 24px;
}

* { box-sizing: border-box; }

html {
    scroll-behavior: smooth;
    scroll-padding-top: 100px;
}

body {
    margin: 0;
    color: var(--ink);
    background: var(--cream);
    font-family: 'DM Sans', sans-serif;
    line-height: 1.7;
}

a { color: inherit; }

img {
    max-width: 100%;
    display: block;
}

.container {
    width: min(1160px, calc(100% - 44px));
    margin-inline: auto;
}

.eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    color: var(--teal);
    font-size: .76rem;
    font-weight: 800;
    letter-spacing: .15em;
    text-transform: uppercase;
}

.eyebrow:before {
    content: "";
    width: 25px;
    height: 2px;
    background: currentColor;
}

h1, h2, h3 {
    font-family: 'Manrope', sans-serif;
    line-height: 1.13;
    letter-spacing: -.045em;
}

h2 {
    font-size: clamp(2rem, 4vw, 3.2rem);
    margin: 13px 0 18px;
}

h3 {
    font-size: 1.25rem;
    margin: 0 0 10px;
}

p { color: var(--muted); }

.site-header {
    position: sticky;
    top: 0;
    z-index: 100;
    background: rgba(251,250,246,.92);
    backdrop-filter: blur(18px);
    border-bottom: 1px solid var(--line);
}

.nav {
    min-height: 76px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.brand {
    font-family: 'Manrope', sans-serif;
    font-size: 1.15rem;
    font-weight: 800;
    color: var(--deep);
    text-decoration: none;
    letter-spacing: -.04em;
}

.brand span { color: var(--teal); }

.nav-links {
    display: flex;
    align-items: center;
    gap: 23px;
}

.nav-links a {
    text-decoration: none;
    color: var(--deep);
    font-size: .88rem;
    font-weight: 700;
    transition: color .2s ease;
}

.nav-links a:hover { color: var(--teal); }

.nav-cta, .button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    border-radius: 999px;
    padding: 13px 21px;
    background: var(--teal);
    color: white !important;
    text-decoration: none;
    font-weight: 800;
    font-size: .9rem;
    border: 0;
    transition: transform .25s, background .25s, box-shadow .25s;
}

.nav-cta:hover, .button:hover {
    transform: translateY(-3px);
    background: var(--deep);
    box-shadow: 0 12px 25px rgba(7,59,67,.2);
}

.hero {
    position: relative;
    min-height: 690px;
    display: flex;
    align-items: center;
    color: white;
    overflow: hidden;
    background: var(--deep);
}

.hero:before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(90deg, rgba(3,35,40,.83), rgba(3,35,40,.25)),
        linear-gradient(0deg, rgba(3,35,40,.38), transparent 60%),
        url("<?= h($heroImage) ?>") center 48% / cover;
    transform: scale(1.02);
    animation: heroZoom 18s ease-in-out infinite alternate;
}

@keyframes heroZoom {
    from { transform: scale(1.02); }
    to { transform: scale(1.1); }
}

.hero-content {
    position: relative;
    z-index: 1;
    max-width: 790px;
    padding: 105px 0 120px;
}

.hero .eyebrow { color: #b8f0db; }

.hero h1 {
    font-size: clamp(3.1rem, 7vw, 6.3rem);
    margin: 20px 0;
    letter-spacing: -.065em;
    line-height: .99;
}

.hero p {
    color: rgba(255,255,255,.88);
    font-size: clamp(1.05rem, 2vw, 1.25rem);
    max-width: 660px;
}

.hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 13px;
    margin-top: 30px;
}

.button-light {
    background: white;
    color: var(--deep) !important;
}

.hero-location {
    margin-top: 35px;
    color: rgba(255,255,255,.8);
    font-size: .88rem;
    letter-spacing: .04em;
}

.quick-wrap {
    position: relative;
    z-index: 3;
    margin-top: -55px;
}

.quick-facts {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    background: white;
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    padding: 27px 15px;
}

.fact {
    padding: 5px 22px;
    border-right: 1px solid var(--line);
}

.fact:last-child { border: 0; }

.fact strong {
    display: block;
    color: var(--deep);
    font: 800 1.65rem 'Manrope', sans-serif;
    letter-spacing: -.05em;
}

.fact span {
    display: block;
    color: var(--muted);
    font-size: .82rem;
}

.section { padding: 105px 0; }

.section-intro {
    max-width: 730px;
    margin-bottom: 42px;
}

.section-intro p {
    font-size: 1.05rem;
}

.intro-grid {
    display: grid;
    grid-template-columns: 1.08fr .92fr;
    align-items: center;
    gap: 65px;
}

.intro-image {
    position: relative;
    min-height: 470px;
    border-radius: 30px;
    overflow: hidden;
    box-shadow: var(--shadow);
}

.intro-image img {
    width: 100%;
    height: 100%;
    min-height: 470px;
    object-fit: cover;
}

.image-note {
    position: absolute;
    left: 20px;
    bottom: 20px;
    padding: 12px 16px;
    border-radius: 14px;
    color: white;
    background: rgba(7,59,67,.78);
    backdrop-filter: blur(10px);
    font-size: .8rem;
}

.text-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--teal);
    font-weight: 800;
    text-decoration: none;
    margin-top: 10px;
}

.text-link:hover { color: var(--deep); }

.highlight-box {
    margin-top: 27px;
    padding: 22px 24px;
    border-radius: 18px;
    background: var(--mint);
    color: var(--deep);
}

.highlight-box p {
    margin: 5px 0 0;
    color: #315b5a;
}

.dark-section {
    background: var(--deep);
    color: white;
}

.dark-section p { color: rgba(255,255,255,.72); }
.dark-section .eyebrow { color: #9fe2ca; }

.tide-grid {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 22px;
    margin-top: 38px;
}

.tide-card {
    border: 1px solid rgba(255,255,255,.17);
    background: rgba(255,255,255,.07);
    border-radius: 23px;
    padding: 30px;
    transition: transform .3s, background .3s;
}

.tide-card:hover {
    transform: translateY(-7px);
    background: rgba(255,255,255,.12);
}

.tide-card .icon {
    font-size: 2rem;
    margin-bottom: 15px;
}

.tide-card h3 { color: white; }

.tide-card p { margin-bottom: 0; }

.notice {
    margin-top: 28px;
    border-left: 3px solid #9fe2ca;
    padding: 12px 20px;
    color: rgba(255,255,255,.85);
    background: rgba(255,255,255,.06);
    border-radius: 0 14px 14px 0;
}

.activity-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 20px;
    margin-top: 38px;
}

.activity {
    padding: 29px;
    border-radius: 22px;
    background: white;
    box-shadow: 0 10px 35px rgba(7,59,67,.055);
    transition: transform .3s, box-shadow .3s;
}

.activity:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow);
}

.activity-icon {
    width: 52px;
    height: 52px;
    display: grid;
    place-items: center;
    border-radius: 16px;
    background: var(--mint);
    font-size: 1.45rem;
    margin-bottom: 20px;
}

.activity p { margin-bottom: 0; }

.nature-grid {
    display: grid;
    grid-template-columns: .9fr 1.1fr;
    gap: 55px;
    align-items: center;
}

.nature-image {
    height: 480px;
    border-radius: 28px;
    overflow: hidden;
}

.nature-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.check-list {
    list-style: none;
    padding: 0;
    margin: 25px 0;
}

.check-list li {
    position: relative;
    padding: 10px 0 10px 34px;
    color: var(--muted);
}

.check-list li:before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 10px;
    display: grid;
    place-items: center;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    color: var(--deep);
    background: var(--mint);
    font-weight: 900;
    font-size: .8rem;
}

.services {
    background: var(--sand);
}

.service-grid {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    gap: 14px;
    margin-top: 36px;
}

.service {
    padding: 20px;
    background: rgba(255,255,255,.75);
    border: 1px solid rgba(7,59,67,.06);
    border-radius: 17px;
    font-weight: 700;
    color: var(--deep);
    display: flex;
    align-items: center;
    gap: 12px;
}

.service span { font-size: 1.35rem; }

.access-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 35px;
    margin-top: 35px;
}

.access-card {
    border-radius: 24px;
    padding: 30px;
    background: white;
    box-shadow: 0 10px 35px rgba(7,59,67,.06);
}

.access-card h3 { color: var(--deep); }

.access-warning {
    background: #fff3df;
    color: #76511d;
    border-radius: 15px;
    padding: 17px 20px;
    margin-top: 18px;
    font-size: .92rem;
}

.gallery {
    display: grid;
    grid-template-columns: 1.25fr .75fr .75fr;
    grid-template-rows: 210px 210px;
    gap: 14px;
    margin-top: 38px;
}

.gallery figure {
    margin: 0;
    overflow: hidden;
    border-radius: 19px;
    position: relative;
}

.gallery figure:first-child { grid-row: span 2; }

.gallery img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .6s;
}

.gallery figure:hover img { transform: scale(1.07); }

.gallery figcaption {
    position: absolute;
    left: 12px;
    bottom: 12px;
    padding: 7px 11px;
    background: rgba(7,59,67,.76);
    color: white;
    font-size: .75rem;
    border-radius: 9px;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 18px;
    margin-top: 35px;
}

.tip {
    padding: 25px;
    border-radius: 20px;
    border: 1px solid var(--line);
    background: white;
}

.tip strong {
    display: block;
    color: var(--deep);
    margin-bottom: 8px;
}

.tip p { margin: 0; font-size: .94rem; }

.location-box {
    display: grid;
    grid-template-columns: .8fr 1.2fr;
    gap: 30px;
    align-items: stretch;
    margin-top: 35px;
}

.location-info {
    padding: 32px;
    border-radius: 23px;
    background: var(--deep);
    color: white;
}

.location-info p { color: rgba(255,255,255,.76); }

.map-frame {
    border: 0;
    width: 100%;
    min-height: 390px;
    border-radius: 23px;
}

.transport-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.transport-list li {
    padding: 10px 0;
    border-bottom: 1px solid rgba(255,255,255,.15);
    color: rgba(255,255,255,.86);
}

.faq-list {
    max-width: 900px;
    margin: 38px auto 0;
}

.faq-list details {
    border-bottom: 1px solid var(--line);
    padding: 21px 0;
}

.faq-list summary {
    cursor: pointer;
    list-style: none;
    color: var(--deep);
    font-weight: 800;
    font-family: 'Manrope', sans-serif;
    padding-right: 35px;
    position: relative;
}

.faq-list summary::-webkit-details-marker { display: none; }

.faq-list summary:after {
    content: "+";
    position: absolute;
    right: 4px;
    top: -5px;
    font-size: 1.6rem;
    color: var(--teal);
}

.faq-list details[open] summary:after { content: "−"; }

.faq-list details p {
    margin: 13px 0 0;
    max-width: 780px;
}

.experience {
    background: linear-gradient(135deg, #e0f3ec, #f6f0e4);
    border-radius: 28px;
    padding: 42px;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 25px;
    align-items: center;
}

.experience h2 {
    font-size: clamp(1.8rem,3vw,2.7rem);
    color: var(--deep);
}

.experience p { max-width: 680px; }

.partner-section {
    padding: 50px 0;
    background: white;
}

.partner-box {
    border: 1px solid var(--line);
    border-radius: 22px;
    padding: 28px;
    text-align: center;
}

.partner-box h3 { color: var(--deep); }

.partner-box p {
    max-width: 650px;
    margin: 10px auto 20px;
}

.ad-slot {
    margin: 35px auto;
    min-height: 100px;
    text-align: center;
}

.site-footer {
    background: #052e34;
    color: white;
    padding: 55px 0 30px;
}

.footer-inner {
    display: flex;
    justify-content: space-between;
    gap: 25px;
    flex-wrap: wrap;
}

.site-footer p { color: rgba(255,255,255,.65); }

.site-footer a {
    color: #b7ead8;
    text-decoration: none;
}

.disclaimer {
    margin-top: 35px;
    padding-top: 20px;
    border-top: 1px solid rgba(255,255,255,.13);
    font-size: .8rem;
    color: rgba(255,255,255,.55);
}

.reveal {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity .75s ease, transform .75s ease;
}

.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}

@media (max-width: 900px) {
    .nav-links { display: none; }
    .quick-facts { grid-template-columns: repeat(2,1fr); gap: 20px 0; }
    .fact:nth-child(2) { border-right: 0; }
    .intro-grid, .nature-grid, .location-box { grid-template-columns: 1fr; }
    .activity-grid { grid-template-columns: repeat(2,1fr); }
    .service-grid { grid-template-columns: repeat(2,1fr); }
    .gallery { grid-template-columns: 1fr 1fr; grid-template-rows: 230px 180px; }
    .gallery figure:first-child { grid-row: auto; grid-column: span 2; }
}

@media (max-width: 600px) {
    .container { width: min(100% - 30px, 1160px); }
    .hero { min-height: 620px; }
    .hero-content { padding: 85px 0 100px; }
    .hero h1 { font-size: 3.25rem; }
    .quick-facts { padding: 20px 8px; }
    .fact { padding: 8px 12px; }
    .fact strong { font-size: 1.35rem; }
    .section { padding: 75px 0; }
    .intro-image, .intro-image img { min-height: 320px; }
    .activity-grid, .tide-grid, .access-grid, .tips-grid { grid-template-columns: 1fr; }
    .service-grid { grid-template-columns: 1fr 1fr; gap: 9px; }
    .service { padding: 14px 11px; font-size: .85rem; }
    .gallery { grid-template-columns: 1fr 1fr; grid-template-rows: 190px 150px; gap: 9px; }
    .experience { grid-template-columns: 1fr; padding: 27px; }
    .map-frame { min-height: 310px; }
    .location-info { padding: 25px; }
    .hero-actions .button { width: 100%; }
}

@media (prefers-reduced-motion: reduce) {
    *, *:before, *:after {
        scroll-behavior: auto !important;
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: .01ms !important;
    }
    .reveal { opacity: 1; transform: none; }
}
</style>
</head>

<body>

<header class="site-header">
    <div class="container nav">
        <a class="brand" href="/">Playas del <span>Cantábrico</span></a>
        <nav class="nav-links" aria-label="Navegación principal">
            <a href="#descubre">La playa</a>
            <a href="#mareas">Mareas</a>
            <a href="#actividades">Actividades</a>
            <a href="#servicios">Servicios</a>
            <a href="#como-llegar">Cómo llegar</a>
            <a href="#preguntas">FAQ</a>
        </nav>
        <a class="nav-cta" href="#como-llegar">Planifica tu visita ↗</a>
    </div>
</header>

<main>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <span class="eyebrow">Urdaibai · Ibarrangelu · Bizkaia</span>
            <h1>Playa de<br>Laida.</h1>
            <p>Un paisaje de arena dorada, dunas y aguas cambiantes en plena Reserva de la Biosfera de Urdaibai. Naturaleza, mar y aventura en uno de los arenales más especiales de la costa vasca.</p>
            <div class="hero-actions">
                <a class="button" href="#descubre">Descubrir Laida ↓</a>
                <a class="button button-light" href="#como-llegar">Cómo llegar ↗</a>
            </div>
            <div class="hero-location">📍 Ibarrangelu · Reserva de la Biosfera de Urdaibai</div>
        </div>
    </div>
</section>

<div class="container quick-wrap">
    <div class="quick-facts reveal">
        <div class="fact">
            <strong>812 m</strong>
            <span>Longitud estimada del arenal</span>
        </div>
        <div class="fact">
            <strong>166 m</strong>
            <span>Anchura media estimada</span>
        </div>
        <div class="fact">
            <strong>Urdaibai</strong>
            <span>Reserva de la Biosfera</span>
        </div>
        <div class="fact">
            <strong>Dunar</strong>
            <span>Entorno natural protegido</span>
        </div>
    </div>
</div>

<section class="section" id="descubre">
    <div class="container intro-grid">
        <div class="reveal">
            <span class="eyebrow">Un rincón único de Bizkaia</span>
            <h2>Laida, donde la ría se encuentra con el Cantábrico</h2>
            <p>La Playa de Laida se sitúa en el municipio de Ibarrangelu, en la margen derecha de la ría de Mundaka, muy cerca de su desembocadura. Su paisaje combina arena fina y dorada, zonas dunares, canales de agua y una panorámica excepcional del estuario.</p>
            <p>Es el arenal más extenso de la ría de Mundaka y uno de los espacios más reconocibles de Urdaibai. Su configuración cambia con las mareas y las condiciones naturales, por lo que cada visita puede ofrecer una imagen diferente.</p>
            <p>Desde algunos puntos de la playa se contempla la desembocadura de la ría y, al fondo, la silueta de la isla de Izaro. Al otro lado del estuario se encuentra Mundaka, localidad estrechamente ligada al surf.</p>

            <div class="highlight-box">
                <strong>Un paisaje vivo</strong>
                <p>La arena, los bancos intermareales y los canales de agua forman parte de un ecosistema dinámico. Disfrutar de Laida también significa respetar sus dunas y su entorno protegido.</p>
            </div>
            <a class="text-link" href="#mareas">Descubre cómo influyen las mareas →</a>
        </div>

        <div class="intro-image reveal">
            <img src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1100&q=85" alt="Paisaje costero y playa de arena" loading="lazy">
            <div class="image-note">Imagen ilustrativa · Sustituir por fotografía propia de Laida</div>
        </div>
    </div>
</section>

<section class="section dark-section" id="mareas">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">El paisaje cambia</span>
            <h2>La magia de Laida está en sus mareas</h2>
            <p>La amplitud de la playa varía de forma notable entre la bajamar y la pleamar. Los bancos de arena y los canales de agua transforman el paisaje y condicionan las zonas disponibles para caminar, bañarse o practicar deportes acuáticos.</p>
        </div>

        <div class="tide-grid">
            <article class="tide-card reveal">
                <div class="icon">🌊</div>
                <h3>Con bajamar</h3>
                <p>El arenal gana superficie y aparecen extensiones de arena y zonas intermareales. Es un buen momento para contemplar la morfología de la ría y pasear, siempre evitando los canales y las zonas de corriente.</p>
            </article>
            <article class="tide-card reveal">
                <div class="icon">🏖️</div>
                <h3>Con pleamar</h3>
                <p>La superficie de arena se reduce y el agua ocupa buena parte del espacio intermareal. Conviene comprobar el estado de la marea antes de instalarse y mantener siempre una salida segura.</p>
            </article>
        </div>

        <div class="notice reveal">
            <strong>Importante:</strong> no confundas las zonas de agua aparentemente tranquilas con espacios libres de peligro. En Laida existen corrientes y canales de circulación de agua. Respeta las banderas, la señalización y las indicaciones del servicio de socorrismo.
        </div>
    </div>
</section>

<section class="section" id="actividades">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">Mar y aventura</span>
            <h2>Qué hacer en la Playa de Laida</h2>
            <p>Laida es mucho más que un lugar para tomar el sol. Su posición en el estuario y su relación con el Cantábrico permiten disfrutar de diferentes actividades deportivas y de naturaleza.</p>
        </div>

        <div class="activity-grid">
            <article class="activity reveal">
                <div class="activity-icon">🏄</div>
                <h3>Surf y longboard</h3>
                <p>La playa es conocida por sus olas largas y suaves, especialmente atractivas para la práctica del longboard. Las condiciones dependen del oleaje, el viento y la marea.</p>
            </article>
            <article class="activity reveal">
                <div class="activity-icon">🛶</div>
                <h3>Kayak y piragüismo</h3>
                <p>El estuario ofrece un entorno muy atractivo para recorrer el paisaje desde el agua. Existen operadores locales que organizan actividades y alquiler de material.</p>
            </article>
            <article class="activity reveal">
                <div class="activity-icon">🏄‍♀️</div>
                <h3>Paddle surf</h3>
                <p>Una forma diferente de explorar el entorno acuático, siempre eligiendo zonas y condiciones adecuadas y siguiendo las indicaciones de los profesionales.</p>
            </article>
            <article class="activity reveal">
                <div class="activity-icon">⛵</div>
                <h3>Vela y windsurf</h3>
                <p>Laida y la ría de Mundaka son un escenario interesante para los deportes de viento y navegación recreativa.</p>
            </article>
            <article class="activity reveal">
                <div class="activity-icon">🪁</div>
                <h3>Cometas y juegos</h3>
                <p>Las zonas abiertas de arena permiten disfrutar de actividades recreativas, siempre respetando las áreas de baño, las dunas y a otros usuarios.</p>
            </article>
            <article class="activity reveal">
                <div class="activity-icon">🚶</div>
                <h3>Paseos y fotografía</h3>
                <p>El paisaje de la ría, la arena, los canales y las vistas hacia Izaro y Mundaka convierten Laida en un lugar perfecto para disfrutar sin prisas.</p>
            </article>
        </div>
    </div>
</section>

<section class="section services">
    <div class="container nature-grid">
        <div class="nature-image reveal">
            <img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1100&q=85" alt="Mar y paisaje natural" loading="lazy">
        </div>
        <div class="reveal">
            <span class="eyebrow">Naturaleza protegida</span>
            <h2>Un paisaje que forma parte de Urdaibai</h2>
            <p>Laida se integra en la Reserva de la Biosfera de Urdaibai, un espacio de gran valor ecológico en el que conviven marismas, arenales, dunas, bosques y paisajes rurales.</p>
            <p>El entorno de la desembocadura del Oka es especialmente sensible a los cambios naturales y a la presión humana. Por eso es importante utilizar los accesos habilitados y evitar pisar las zonas dunares protegidas.</p>
            <ul class="check-list">
                <li>Respeta la vegetación y las zonas de recuperación dunar.</li>
                <li>No dejes residuos ni abandones colillas en la arena.</li>
                <li>Evita circular por espacios naturales delimitados.</li>
                <li>Respeta las indicaciones y restricciones ambientales.</li>
            </ul>
        </div>
    </div>
</section>

<section class="section" id="servicios">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">Prepara tu día de playa</span>
            <h2>Servicios de la Playa de Laida</h2>
            <p>La playa dispone de equipamientos que facilitan la visita, especialmente durante la temporada estival. La disponibilidad de algunos servicios puede variar según la época del año.</p>
        </div>

        <div class="service-grid">
            <div class="service reveal"><span>🚿</span> Duchas</div>
            <div class="service reveal"><span>🚻</span> Aseos públicos</div>
            <div class="service reveal"><span>🧼</span> Lavapiés</div>
            <div class="service reveal"><span>👕</span> Vestuarios</div>
            <div class="service reveal"><span>🛟</span> Socorrismo en temporada</div>
            <div class="service reveal"><span>🚗</span> Aparcamiento</div>
            <div class="service reveal"><span>🚲</span> Guardabicicletas</div>
            <div class="service reveal"><span>🥤</span> Hostelería cercana</div>
            <div class="service reveal"><span>🛶</span> Actividades náuticas</div>
            <div class="service reveal"><span>⛱️</span> Zona de descanso</div>
            <div class="service reveal"><span>⛲</span> Fuentes</div>
            <div class="service reveal"><span>🏐</span> Vóley playa</div>
        </div>

        <p style="font-size:.88rem;margin-top:20px">La presencia y el funcionamiento de duchas, aseos, socorrismo, vestuarios y otros equipamientos deben confirmarse para las fechas concretas de visita.</p>
    </div>
</section>

<section class="section" id="accesibilidad">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">Una visita más cómoda</span>
            <h2>Accesibilidad en Laida</h2>
            <p>La playa cuenta con elementos de accesibilidad en el entorno de llegada y acceso al arenal. Es importante conocer también sus limitaciones para organizar la visita.</p>
        </div>

        <div class="access-grid">
            <article class="access-card reveal">
                <h3>♿ Accesos y aparcamiento</h3>
                <p>La información turística de accesibilidad recoge plazas reservadas para personas con movilidad reducida, acceso mediante rampa desde el entorno del aparcamiento y un paseo accesible.</p>
                <p>La ficha señala que algunos tramos de acceso pueden requerir ayuda de terceros por la pendiente.</p>
            </article>
            <article class="access-card reveal">
                <h3>🚶 Llegada a la orilla</h3>
                <p>La ficha de VisitBiscay indica que las pasarelas no llegan prácticamente hasta la orilla del mar. El terreno de arena puede dificultar el desplazamiento autónomo.</p>
                <div class="access-warning">
                    Conviene consultar previamente los servicios disponibles y las condiciones de acceso si necesitas llegar hasta la zona de baño con silla de ruedas.
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">Un entorno para descubrir</span>
            <h2>Qué ver cerca de Laida</h2>
            <p>La visita a Laida se puede combinar con otros lugares destacados de Urdaibai. La ría, los pueblos marineros y los paisajes costeros ofrecen muchas posibilidades para completar la jornada.</p>
        </div>

        <div class="activity-grid">
            <article class="activity reveal">
                <div class="activity-icon">⛵</div>
                <h3>Mundaka</h3>
                <p>Al otro lado de la ría, Mundaka es una localidad marinera muy conocida por su ambiente, su puerto y su famosa ola izquierda.</p>
            </article>
            <article class="activity reveal">
                <div class="activity-icon">🏝️</div>
                <h3>Isla de Izaro</h3>
                <p>La isla de Izaro destaca en el horizonte de la desembocadura. Es uno de los elementos paisajísticos más reconocibles de esta parte de la costa.</p>
            </article>
            <article class="activity reveal">
                <div class="activity-icon">🌊</div>
                <h3>Playa de Laga</h3>
                <p>También en Ibarrangelu, Laga ofrece un paisaje más abierto al Cantábrico, con arena, oleaje y la presencia imponente del cabo Ogoño.</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">Imágenes del entorno</span>
            <h2>La costa de Urdaibai en imágenes</h2>
            <p>Una selección visual para inspirar tu próxima escapada. Sustituye estas imágenes ilustrativas por fotografías originales de Laida, su sistema dunar y la ría de Mundaka.</p>
        </div>

        <div class="gallery reveal">
            <figure>
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1100&q=85" alt="Playa de arena y mar, imagen ilustrativa" loading="lazy">
                <figcaption>Arenales del Cantábrico</figcaption>
            </figure>
            <figure>
                <img src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=700&q=85" alt="Paisaje de costa, imagen ilustrativa" loading="lazy">
                <figcaption>Paisaje costero</figcaption>
            </figure>
            <figure>
                <img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=700&q=85" alt="Olas y agua, imagen ilustrativa" loading="lazy">
                <figcaption>El mar</figcaption>
            </figure>
            <figure>
                <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?auto=format&fit=crop&w=700&q=85" alt="Olas del mar, imagen ilustrativa" loading="lazy">
                <figcaption>Oleaje</figcaption>
            </figure>
            <figure>
                <img src="https://images.unsplash.com/photo-1497250681960-ef046c08a56e?auto=format&fit=crop&w=700&q=85" alt="Vegetación natural, imagen ilustrativa" loading="lazy">
                <figcaption>Naturaleza</figcaption>
            </figure>
        </div>
    </div>
</section>

<section class="section services">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">Consejos útiles</span>
            <h2>Consejos para disfrutar de Laida</h2>
            <p>Un poco de planificación ayuda a disfrutar de este entorno natural con mayor comodidad y seguridad.</p>
        </div>

        <div class="tips-grid">
            <article class="tip reveal">
                <strong>01 · Consulta las mareas</strong>
                <p>Comprueba la previsión antes de ir. La superficie de arena disponible puede cambiar mucho a lo largo del día.</p>
            </article>
            <article class="tip reveal">
                <strong>02 · Llega temprano</strong>
                <p>El aparcamiento puede llenarse en jornadas de mucha afluencia, especialmente durante los fines de semana de verano.</p>
            </article>
            <article class="tip reveal">
                <strong>03 · Vigila las corrientes</strong>
                <p>No te alejes de las zonas habilitadas para el baño y sigue las instrucciones del servicio de socorrismo.</p>
            </article>
            <article class="tip reveal">
                <strong>04 · Protege las dunas</strong>
                <p>Camina por los accesos habilitados y evita pisar las zonas de vegetación y recuperación dunar.</p>
            </article>
            <article class="tip reveal">
                <strong>05 · Valora el transporte público</strong>
                <p>En temporada puede haber conexiones en autobús desde Gernika y servicios de barco desde localidades cercanas.</p>
            </article>
            <article class="tip reveal">
                <strong>06 · Comprueba los servicios</strong>
                <p>Los horarios de socorrismo, aseos y otros equipamientos dependen del calendario de temporada de baño.</p>
            </article>
        </div>
    </div>
</section>

<section class="section" id="como-llegar">
    <div class="container">
        <div class="section-intro reveal">
            <span class="eyebrow">Planifica tu ruta</span>
            <h2>Cómo llegar a la Playa de Laida</h2>
            <p>La playa se encuentra en Ibarrangelu, en la costa de Bizkaia. El acceso habitual por carretera se realiza a través de la BI-3234.</p>
        </div>

        <div class="location-box">
            <div class="location-info reveal">
                <h3>📍 Playa de Laida</h3>
                <p>Antzora auzoa · 48311 Ibarrangelu · Bizkaia · España</p>

                <ul class="transport-list">
                    <li><strong>En coche:</strong> acceso por la BI-3234, en el tramo que comunica Gautegiz Arteaga e Ibarrangelu.</li>
                    <li><strong>En autobús:</strong> línea A-3526 de Bizkaibus, con parada en Laida y en el entorno del camping. Comprueba horarios y servicios de temporada.</li>
                    <li><strong>En barco:</strong> conexiones estivales con Mundaka y Sukarrieta, sujetas a calendario y condiciones de servicio.</li>
                    <li><strong>Aparcamiento:</strong> hay estacionamiento junto a la playa, con posible saturación en días de máxima afluencia.</li>
                </ul>

                <a class="button button-light" target="_blank" rel="noopener" href="https://www.google.com/maps/dir/?api=1&destination=Playa+de+Laida%2C+Ibarrangelu%2C+Bizkaia">Abrir indicaciones ↗</a>
            </div>

            <iframe
                class="map-frame reveal"
                title="Mapa de ubicación de la Playa de Laida en Ibarrangelu"
                src="https://www.google.com/maps?q=Playa+de+Laida,+Ibarrangelu,+Bizkaia&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<section class="section" id="preguntas">
    <div class="container">
        <div class="section-intro reveal" style="margin-inline:auto;text-align:center">
            <span class="eyebrow">Resolvemos tus dudas</span>
            <h2>Preguntas frecuentes sobre Laida</h2>
            <p>Información práctica para organizar tu visita a esta playa de Urdaibai.</p>
        </div>

        <div class="faq-list">
            <?php foreach ($faqs as $faq): ?>
                <details class="reveal">
                    <summary><?= h($faq['q']) ?></summary>
                    <p><?= h($faq['a']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="experience reveal">
            <div>
                <span class="eyebrow">Vive Urdaibai desde el agua</span>
                <h2>Descubre la ría de Mundaka y su entorno</h2>
                <p>El kayak, el piragüismo y otras actividades náuticas permiten conocer el paisaje de Urdaibai desde otra perspectiva. Consulta las experiencias disponibles y las condiciones de cada actividad.</p>
            </div>
            <a class="button" href="https://www.google.com/search?q=actividades+acuaticas+Laida+Urdaibai" target="_blank" rel="noopener">Ver actividades ↗</a>
        </div>
    </div>
</section>

<section class="partner-section">
    <div class="container">
        <div class="partner-box reveal">
            <span class="eyebrow">Explora más destinos</span>
            <h3>Organiza tu escapada por Bizkaia</h3>
            <p>Completa tu visita a Laida con otras experiencias y excursiones por la costa vasca y el entorno de Urdaibai.</p>

            <!-- Widget GetYourGuide -->
            <div
                data-gyg-href="https://widget.getyourguide.com/default/activities.frame"
                data-gyg-locale-code="es-ES"
                data-gyg-widget="city"
                data-gyg-partner-id="VW16GKQ"
                data-gyg-number-of-items="3"
                data-gyg-cmp="Urdaibai y alrededores">
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="ad-slot">
        <!-- AdCash: sustituir por el código oficial de la zona -->
        <div id="adcash-playas-laida" data-zone="mnaewnieki"></div>
    </div>
</div>

</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-inner">
            <div>
                <a class="brand" href="/" style="color:white">Playas del <span>Cantábrico</span></a>
                <p>Descubre playas, pueblos y paisajes de la costa cantábrica.</p>
            </div>
            <div>
                <strong>Explora también</strong>
                <p><a href="/bizkaia/ibarrangelu/lugares-interes/playa-de-laga/">Playa de Laga</a></p>
                <p><a href="/bizkaia/mundaka/">Mundaka</a></p>
                <p><a href="/bizkaia/">Playas de Bizkaia</a></p>
            </div>
        </div>

        <div class="disclaimer">
            Información orientativa. Los servicios, horarios de vigilancia, transporte y actividades pueden cambiar según la temporada y las condiciones ambientales. Consulta siempre la información oficial antes de tu visita. Las fotografías de esta plantilla son ilustrativas y deben sustituirse por imágenes reales de Laida antes de publicar.
        </div>
    </div>
</footer>

<script>
(function () {
    const elements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -35px 0px'
        });

        elements.forEach(element => observer.observe(element));
    } else {
        elements.forEach(element => element.classList.add('visible'));
    }

    // Acordeón FAQ: permite mantener abierta una sola pregunta.
    const faqItems = document.querySelectorAll('.faq-list details');

    faqItems.forEach(item => {
        item.addEventListener('toggle', () => {
            if (item.open) {
                faqItems.forEach(other => {
                    if (other !== item) other.open = false;
                });
            }
        });
    });
})();
</script>

<script async defer src="https://widget.getyourguide.com/v2/widget.js"></script>

</body>
</html>
