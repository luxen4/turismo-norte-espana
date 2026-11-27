
<?php
// ============================================================
// PLAYA DE DEBA - SANTIAGO Y LAPARI
// Playas del Cantábrico
// ============================================================

$siteName = "Playas del Cantábrico";
$pageTitle = "Playa de Deba: Santiago y Lapari, surf, servicios y cómo llegar";
$pageDescription = "Descubre la playa de Deba: Santiago y Lapari, arenales, surf, paseos marítimos, servicios, accesibilidad y el espectacular flysch del Geoparque de la Costa Vasca.";
$pageUrl = "https://www.tudominio.com/gipuzkoa/deba/lugares-interes/playa-de-deba/";
$pageImage = "https://www.tudominio.com/images/playa-de-deba.jpg";

$canonical = $pageUrl;

$faqs = [
    [
        "question" => "¿Cómo se llama la playa de Deba?",
        "answer" => "La playa principal de Deba se conoce como playa de Santiago o playa de Deba. Con la marea baja se prolonga hacia la zona de Lapari, formando un amplio arenal."
    ],
    [
        "question" => "¿Cuánto mide la playa de Deba?",
        "answer" => "La playa de Santiago tiene aproximadamente 400 metros de longitud según la ficha del Gobierno Vasco. Las dimensiones y la superficie de arena disponible cambian con las mareas."
    ],
    [
        "question" => "¿Es una playa adecuada para familias?",
        "answer" => "Deba dispone de servicios urbanos, paseos y accesos cómodos. Sin embargo, es una playa abierta al Cantábrico, con oleaje y corrientes que pueden ser fuertes. Es importante respetar las banderas y las indicaciones de socorrismo."
    ],
    [
        "question" => "¿Se puede practicar surf en Deba?",
        "answer" => "Sí. Deba tiene tradición surfera y cuenta con diferentes zonas de olas. Algunas pueden ser potentes y presentar fondos de roca y arena, por lo que es necesario conocer las condiciones y respetar las zonas delimitadas."
    ],
    [
        "question" => "¿Qué diferencia hay entre Santiago y Lapari?",
        "answer" => "Santiago es la zona principal y urbana de la playa. Lapari se encuentra hacia el extremo oriental y tiene un carácter más natural. Durante la bajamar ambas zonas pueden quedar unidas; con pleamar, parte del arenal de Lapari puede quedar cubierto."
    ],
    [
        "question" => "¿Tiene servicio de socorrismo?",
        "answer" => "La playa dispone de vigilancia y socorrismo durante la temporada de baño. El calendario y los horarios concretos deben consultarse cada verano."
    ],
    [
        "question" => "¿Es accesible para personas con movilidad reducida?",
        "answer" => "La playa principal cuenta con accesos adaptados y el Ayuntamiento publica servicios estivales como rampas y silla anfibia. La zona de Lapari tiene accesos con escaleras y no dispone de acceso adaptado."
    ],
    [
        "question" => "¿Se puede aparcar cerca de la playa?",
        "answer" => "Existe una zona de aparcamiento junto a la playa, aunque la disponibilidad puede ser limitada en días de gran afluencia. Conviene valorar el transporte público, ya que Deba cuenta con estación de Euskotren y conexiones de autobús."
    ],
    [
        "question" => "¿Se puede ir con perros?",
        "answer" => "El acceso de animales domésticos está prohibido durante la temporada de baño, según el perfil ambiental de la zona. Consulta la ordenanza municipal vigente para conocer las fechas y condiciones."
    ],
    [
        "question" => "¿Qué es el flysch de Deba?",
        "answer" => "Es una formación geológica de estratos rocosos que permite observar la historia de millones de años de la Tierra. El litoral de Deba forma parte del Geoparque Mundial UNESCO de la Costa Vasca."
    ]
];

$schemaBeach = [
    "@context" => "https://schema.org",
    "@type" => "Beach",
    "name" => "Playa de Santiago de Deba",
    "alternateName" => [
        "Playa de Deba",
        "Playa de Santiago",
        "Playa de Lapari"
    ],
    "description" => $pageDescription,
    "url" => $pageUrl,
    "image" => $pageImage,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Deba",
        "addressRegion" => "Gipuzkoa",
        "addressCountry" => "ES"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 43.298,
        "longitude" => -2.3528
    ],
    "isAccessibleForFree" => true
];

$schemaFaq = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => []
];

foreach ($faqs as $faq) {
    $schemaFaq["mainEntity"][] = [
        "@type" => "Question",
        "name" => $faq["question"],
        "acceptedAnswer" => [
            "@type" => "Answer",
            "text" => $faq["answer"]
        ]
    ];
}

function h($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= h($pageTitle) ?></title>
    <meta name="description" content="<?= h($pageDescription) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= h($canonical) ?>">

    <meta property="og:type" content="article">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="<?= h($siteName) ?>">
    <meta property="og:title" content="<?= h($pageTitle) ?>">
    <meta property="og:description" content="<?= h($pageDescription) ?>">
    <meta property="og:url" content="<?= h($pageUrl) ?>">
    <meta property="og:image" content="<?= h($pageImage) ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= h($pageTitle) ?>">
    <meta name="twitter:description" content="<?= h($pageDescription) ?>">
    <meta name="twitter:image" content="<?= h($pageImage) ?>">

    <script type="application/ld+json">
    <?= json_encode($schemaBeach, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <script type="application/ld+json">
    <?= json_encode($schemaFaq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --blue: #087eaa;
            --blue-dark: #075477;
            --blue-light: #eaf7fb;
            --sand: #f7f2e9;
            --ink: #18313e;
            --muted: #657781;
            --white: #ffffff;
            --radius: 22px;
            --shadow: 0 15px 45px rgba(16, 55, 73, .09);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            font-family: "DM Sans", sans-serif;
            color: var(--ink);
            background: #fff;
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            width: 100%;
            object-fit: cover;
        }

        .container {
            width: min(1160px, calc(100% - 40px));
            margin: auto;
        }

        .topbar {
            background: var(--blue-dark);
            color: white;
            font-size: .82rem;
            padding: 9px 0;
        }

        .topbar .container {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #edf1f3;
        }

        .nav-inner {
            min-height: 74px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
        }

        .brand {
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: -.5px;
            color: var(--blue-dark);
        }

        .brand span {
            color: var(--blue);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
            font-size: .9rem;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: var(--blue);
        }

        .hero {
            min-height: 620px;
            display: flex;
            align-items: center;
            position: relative;
            isolation: isolate;
            color: white;
            background:
                linear-gradient(90deg, rgba(5,30,43,.78), rgba(5,30,43,.12)),
                url("https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=2000&q=85") center/cover;
        }

        .hero::after {
            content: "";
            position: absolute;
            z-index: -1;
            inset: 0;
            background: linear-gradient(0deg, rgba(4,30,43,.42), transparent 55%);
        }

        .hero-content {
            max-width: 760px;
            padding: 100px 0;
        }

        .eyebrow {
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: .76rem;
            font-weight: 800;
            color: #b8e9f7;
            margin-bottom: 18px;
        }

        h1, h2, h3 {
            font-family: "Playfair Display", serif;
            line-height: 1.18;
        }

        h1 {
            font-size: clamp(2.8rem, 7vw, 5.3rem);
            letter-spacing: -2px;
            margin-bottom: 24px;
        }

        .hero p {
            font-size: 1.15rem;
            max-width: 620px;
            color: rgba(255,255,255,.92);
            margin-bottom: 30px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 14px 23px;
            border-radius: 50px;
            background: var(--blue);
            color: white;
            font-weight: 700;
            transition: .25s ease;
        }

        .btn:hover {
            background: var(--blue-dark);
            transform: translateY(-3px);
        }

        .btn-light {
            background: white;
            color: var(--blue-dark);
        }

        .btn-light:hover {
            background: var(--sand);
            color: var(--blue-dark);
        }

        .quick-wrap {
            position: relative;
            z-index: 3;
            margin-top: -48px;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 27px;
        }

        .quick-item {
            text-align: center;
            padding: 10px 15px;
            border-right: 1px solid #e9eef0;
        }

        .quick-item:last-child {
            border: 0;
        }

        .quick-item strong {
            display: block;
            color: var(--blue-dark);
            font-size: 1.35rem;
            font-weight: 800;
        }

        .quick-item span {
            color: var(--muted);
            font-size: .85rem;
        }

        section {
            padding: 90px 0;
        }

        .section-heading {
            max-width: 720px;
            margin-bottom: 38px;
        }

        .section-heading.center {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .kicker {
            color: var(--blue);
            font-size: .77rem;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        h2 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            margin-bottom: 18px;
            letter-spacing: -.7px;
        }

        h3 {
            font-size: 1.45rem;
            margin-bottom: 12px;
        }

        .lead {
            font-size: 1.08rem;
            color: var(--muted);
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 55px;
            align-items: center;
        }

        .intro-image {
            min-height: 430px;
            border-radius: var(--radius);
            background: url("https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1200&q=85") center/cover;
            box-shadow: var(--shadow);
        }

        .intro-copy p {
            margin-bottom: 17px;
            color: var(--muted);
        }

        .highlight {
            border-left: 4px solid var(--blue);
            padding: 16px 20px;
            background: var(--blue-light);
            border-radius: 0 13px 13px 0;
            margin-top: 24px;
            font-weight: 600;
        }

        .sand-section {
            background: var(--sand);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(20,50,60,.06);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .card:hover {
            transform: translateY(-7px);
            box-shadow: var(--shadow);
        }

        .card-image {
            height: 225px;
            background-size: cover;
            background-position: center;
        }

        .card-body {
            padding: 25px;
        }

        .card-body p {
            color: var(--muted);
            font-size: .95rem;
        }

        .experience-1 {
            background-image: url("https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=900&q=80");
        }

        .experience-2 {
            background-image: url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=80");
        }

        .experience-3 {
            background-image: url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=80");
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .feature {
            padding: 28px;
            border: 1px solid #e8eef0;
            border-radius: 18px;
            background: white;
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 15px;
            background: var(--blue-light);
            color: var(--blue);
            display: grid;
            place-items: center;
            font-size: 1.4rem;
            margin-bottom: 17px;
        }

        .feature p {
            color: var(--muted);
        }

        .lapari-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 45px;
            align-items: center;
        }

        .lapari-image {
            min-height: 390px;
            border-radius: var(--radius);
            background: url("https://images.unsplash.com/photo-1502933691298-84fc14542831?auto=format&fit=crop&w=1200&q=85") center/cover;
        }

        .lapari-grid p {
            color: var(--muted);
            margin-bottom: 16px;
        }

        .notice {
            background: #fff5df;
            border-left: 4px solid #d99b27;
            border-radius: 0 13px 13px 0;
            padding: 16px 20px;
            margin-top: 20px;
            color: #624a20;
            font-weight: 600;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .service {
            display: flex;
            gap: 13px;
            align-items: center;
            background: white;
            border: 1px solid #edf0f1;
            padding: 18px;
            border-radius: 14px;
            font-weight: 600;
        }

        .service span {
            font-size: 1.35rem;
        }

        .accessibility {
            background: #eaf7fb;
        }

        .access-box {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .access-box p {
            color: var(--muted);
            margin-bottom: 16px;
        }

        .access-photo {
            min-height: 350px;
            border-radius: var(--radius);
            background: url("https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?auto=format&fit=crop&w=1100&q=85") center/cover;
        }

        .gallery {
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr;
            grid-template-rows: 210px 210px;
            gap: 15px;
        }

        .gallery-item {
            border-radius: 17px;
            overflow: hidden;
            background-size: cover;
            background-position: center;
        }

        .gallery-item:first-child {
            grid-row: span 2;
        }

        .gallery-1 {
            background-image: url("https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1000&q=80");
        }

        .gallery-2 {
            background-image: url("https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=900&q=80");
        }

        .gallery-3 {
            background-image: url("https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=900&q=80");
        }

        .gallery-4 {
            background-image: url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=80");
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .tip {
            padding: 23px;
            border-radius: 16px;
            background: white;
            border: 1px solid #edf0f1;
        }

        .tip strong {
            display: block;
            margin-bottom: 7px;
            color: var(--blue-dark);
        }

        .tip p {
            color: var(--muted);
            font-size: .95rem;
        }

        .map-frame {
            overflow: hidden;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            height: 430px;
        }

        .map-frame iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .location-details {
            display: flex;
            justify-content: space-between;
            gap: 25px;
            align-items: center;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .location-details p {
            color: var(--muted);
        }

        .faq-list {
            max-width: 850px;
            margin: auto;
        }

        details {
            border-bottom: 1px solid #e7edef;
            padding: 20px 0;
        }

        summary {
            cursor: pointer;
            list-style: none;
            font-weight: 700;
            font-size: 1.04rem;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary::after {
            content: "+";
            color: var(--blue);
            font-size: 1.4rem;
            line-height: 1;
        }

        details[open] summary::after {
            content: "−";
        }

        details p {
            color: var(--muted);
            padding-top: 14px;
            max-width: 760px;
        }

        .cta {
            color: white;
            text-align: center;
            background:
                linear-gradient(120deg, rgba(5,55,76,.94), rgba(8,126,170,.84)),
                url("https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1800&q=80") center/cover;
        }

        .cta h2 {
            max-width: 760px;
            margin: 0 auto 20px;
        }

        .cta p {
            color: rgba(255,255,255,.85);
            max-width: 650px;
            margin: 0 auto 28px;
        }

        .activities-widget {
            background: #f6fafb;
            border-radius: var(--radius);
            padding: 35px;
            border: 1px solid #e7eff2;
        }

        .activities-widget p {
            color: var(--muted);
            margin-bottom: 20px;
        }

        .ad-container {
            padding: 25px 0;
            text-align: center;
        }

        footer {
            background: #102f3d;
            color: white;
            padding: 50px 0 25px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 35px;
            margin-bottom: 35px;
        }

        footer p, footer a {
            color: #c0d0d6;
            font-size: .9rem;
        }

        footer h3 {
            font-family: "DM Sans", sans-serif;
            font-size: 1rem;
            margin-bottom: 14px;
        }

        .footer-links {
            display: grid;
            gap: 9px;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,.15);
            padding-top: 20px;
            color: #a9bec7;
            font-size: .82rem;
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 850px) {
            .nav-links {
                gap: 13px;
                font-size: .82rem;
            }

            .intro-grid,
            .lapari-grid,
            .access-box {
                grid-template-columns: 1fr;
            }

            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px 0;
            }

            .quick-item:nth-child(2) {
                border-right: 0;
            }

            .quick-item:nth-child(3),
            .quick-item:nth-child(4) {
                border-top: 1px solid #e9eef0;
                padding-top: 20px;
            }
        }

        @media (max-width: 600px) {
            .container {
                width: min(100% - 30px, 1160px);
            }

            .topbar .container {
                justify-content: center;
                text-align: center;
            }

            .nav-inner {
                min-height: 65px;
                flex-wrap: wrap;
                padding: 12px 0;
            }

            .nav-links {
                width: 100%;
                overflow-x: auto;
                padding-bottom: 5px;
            }

            .hero {
                min-height: 570px;
            }

            .hero-content {
                padding: 80px 0;
            }

            .hero p {
                font-size: 1rem;
            }

            section {
                padding: 65px 0;
            }

            .quick-grid {
                padding: 18px 10px;
            }

            .quick-item strong {
                font-size: 1.15rem;
            }

            .cards,
            .feature-grid,
            .services-grid,
            .tips-grid {
                grid-template-columns: 1fr;
            }

            .intro-image,
            .lapari-image,
            .access-photo {
                min-height: 290px;
            }

            .gallery {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 190px 150px 150px;
            }

            .gallery-item:first-child {
                grid-column: span 2;
                grid-row: auto;
            }

            .map-frame {
                height: 330px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .activities-widget {
                padding: 23px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body>

<div class="topbar">
    <div class="container">
        <span>Playas del Cantábrico · Costa Vasca</span>
        <span>Deba · Gipuzkoa</span>
    </div>
</div>

<header class="navbar">
    <div class="container nav-inner">
        <a class="brand" href="/turismo-norte-espana/playas-cantabrico/">PLAYAS <span>DEL CANTÁBRICO</span></a>

        <nav class="nav-links" aria-label="Navegación principal">
            <a href="#playa">La playa</a>
            <a href="#lapari">Lapari</a>
            <a href="#actividades">Actividades</a>
            <a href="#servicios">Servicios</a>
            <a href="#galeria">Galería</a>
            <a href="#ubicacion">Cómo llegar</a>
            <a href="#faq">FAQ</a>
        </nav>
    </div>
</header>

<main>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content reveal">
                <span class="eyebrow">Deba · Costa de Gipuzkoa</span>
                <h1>Playa de Deba: Santiago y Lapari</h1>
                <p>
                    Un gran arenal abierto al Cantábrico, rodeado de paseos marítimos
                    y paisajes geológicos extraordinarios. Descubre una de las playas
                    más emblemáticas del Geoparque de la Costa Vasca.
                </p>
                <a href="#playa" class="btn btn-light">Descubrir la playa <span>→</span></a>
            </div>
        </div>
    </section>

    <!-- DATOS RÁPIDOS -->
    <div class="container quick-wrap">
        <div class="quick-grid">
            <div class="quick-item">
                <strong>400 m</strong>
                <span>Longitud aproximada</span>
            </div>
            <div class="quick-item">
                <strong>Arena fina</strong>
                <span>Arenal dorado</span>
            </div>
            <div class="quick-item">
                <strong>Surf</strong>
                <span>Playa abierta al mar</span>
            </div>
            <div class="quick-item">
                <strong>Deba</strong>
                <span>Gipuzkoa, Euskadi</span>
            </div>
        </div>
    </div>

    <!-- INTRODUCCIÓN -->
    <section id="playa">
        <div class="container intro-grid">
            <div class="intro-copy reveal">
                <div class="section-heading">
                    <div class="kicker">Un arenal junto a la ría</div>
                    <h2>La playa de Santiago, el gran arenal de Deba</h2>
                    <p class="lead">
                        Naturaleza, deporte y paseos junto al Cantábrico en una
                        de las localidades costeras más interesantes de Gipuzkoa.
                    </p>
                </div>

                <p>
                    La playa de Santiago, conocida también como playa de Deba,
                    se encuentra junto a la desembocadura del río Deba. Su arena
                    fina y dorada, su amplitud y los paseos marítimos que la rodean
                    la convierten en uno de los espacios más atractivos del municipio.
                </p>

                <p>
                    El arenal comprende también el entorno de Lapari, que queda
                    conectado con la playa principal durante la bajamar. La
                    superficie de arena disponible cambia notablemente con
                    el movimiento de las mareas.
                </p>

                <p>
                    A diferencia de otras playas más protegidas, Santiago está
                    abierta al mar Cantábrico y puede presentar oleaje intenso,
                    corrientes y viento. Es un lugar muy apreciado por los
                    aficionados al surf y otros deportes acuáticos.
                </p>

                <div class="highlight">
                    Una playa para disfrutar del paisaje, pasear junto al mar
                    y practicar deportes acuáticos, siempre prestando atención
                    al estado del oleaje y a las indicaciones de seguridad.
                </div>
            </div>

            <div class="intro-image reveal" role="img" aria-label="Paisaje de playa y mar"></div>
        </div>
    </section>

    <!-- EXPERIENCIAS -->
    <section id="actividades" class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Mucho más que sol y arena</div>
                <h2>Qué hacer en la playa de Deba</h2>
                <p class="lead">
                    Un destino para disfrutar del mar, practicar deporte y
                    descubrir algunos de los paisajes más singulares de la costa vasca.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <div class="card-image experience-1"></div>
                    <div class="card-body">
                        <h3>Surf y bodyboard</h3>
                        <p>
                            Deba cuenta con tradición surfera y diferentes zonas
                            de olas. Algunas pueden ser potentes y requieren
                            experiencia, conocimiento del fondo y atención
                            a las condiciones del mar.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image experience-2"></div>
                    <div class="card-body">
                        <h3>Paseos junto al mar</h3>
                        <p>
                            Los paseos marítimos que rodean el arenal permiten
                            disfrutar de las vistas del Cantábrico y contemplar
                            la playa desde diferentes perspectivas.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image experience-3"></div>
                    <div class="card-body">
                        <h3>Deportes acuáticos</h3>
                        <p>
                            El entorno ofrece posibilidades para practicar
                            piragüismo, windsurf, submarinismo y otras actividades
                            náuticas, según la temporada y las condiciones del agua.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- LAPARI -->
    <section id="lapari">
        <div class="container lapari-grid">
            <div class="lapari-image reveal" role="img" aria-label="Paisaje de costa y formaciones rocosas"></div>

            <div class="reveal">
                <div class="kicker">El otro rostro del arenal</div>
                <h2>Lapari: naturaleza, mareas y flysch</h2>

                <p>
                    En el extremo oriental de la playa se encuentra Lapari,
                    un espacio de carácter más natural que completa el gran
                    arenal de Deba. Su aspecto cambia mucho según el nivel
                    de la marea.
                </p>

                <p>
                    Durante la bajamar, Santiago y Lapari pueden quedar unidos
                    y formar una extensa superficie de arena. Con la pleamar,
                    parte de Lapari queda cubierta por el agua y su acceso
                    puede resultar más limitado.
                </p>

                <p>
                    La zona es especialmente interesante para quienes disfrutan
                    de la geología. Sus afloramientos rocosos permiten observar
                    formaciones vinculadas al flysch negro y a la historia
                    geológica de este tramo del litoral.
                </p>

                <div class="notice">
                    Consulta la tabla de mareas antes de acercarte a Lapari.
                    El espacio disponible cambia con rapidez y el acceso
                    no está adaptado para personas con movilidad reducida.
                </div>
            </div>
        </div>
    </section>

    <!-- ENTORNO -->
    <section>
        <div class="container">
            <div class="section-heading reveal">
                <div class="kicker">Un entorno extraordinario</div>
                <h2>Qué descubrir alrededor de la playa de Deba</h2>
                <p class="lead">
                    La visita a la playa puede convertirse en una escapada
                    completa entre patrimonio, naturaleza y geología.
                </p>
            </div>

            <div class="feature-grid">
                <article class="feature reveal">
                    <div class="feature-icon">🌍</div>
                    <h3>Geoparque de la Costa Vasca</h3>
                    <p>
                        Deba forma parte del Geoparque Mundial UNESCO de la
                        Costa Vasca, un territorio reconocido por sus
                        espectaculares acantilados, estratos rocosos y
                        patrimonio geológico.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🪨</div>
                    <h3>El flysch de Deba</h3>
                    <p>
                        Los acantilados y plataformas costeras muestran
                        capas de roca que permiten interpretar millones
                        de años de historia de la Tierra. Es importante
                        observarlos desde zonas seguras.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">⛪</div>
                    <h3>Casco histórico</h3>
                    <p>
                        El centro de Deba conserva un interesante patrimonio
                        arquitectónico. Destaca la iglesia de Santa María,
                        uno de los monumentos góticos más representativos
                        de la localidad.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🥾</div>
                    <h3>Senderismo y Camino del Norte</h3>
                    <p>
                        Deba es una etapa del Camino de Santiago de la Costa
                        y un buen punto de partida para recorrer senderos
                        y paisajes del litoral guipuzcoano.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- DEPORTES -->
    <section class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Mar y aventura</div>
                <h2>Deportes y actividades en el Cantábrico</h2>
                <p class="lead">
                    Deba es un destino especialmente atractivo para quienes
                    buscan una playa con personalidad deportiva.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🏄</div>
                        <h3>Surf</h3>
                        <p>
                            Las olas de Deba atraen a surfistas de distintos
                            niveles. Algunas rompientes, como la conocida
                            Sorgin-Zulo, pueden ser potentes y no resultan
                            adecuadas para bañistas o principiantes.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🛶</div>
                        <h3>Piragüismo</h3>
                        <p>
                            Una opción para descubrir el entorno desde el agua.
                            Las salidas deben realizarse con material adecuado,
                            experiencia y condiciones marítimas favorables.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🌬️</div>
                        <h3>Windsurf y bodyboard</h3>
                        <p>
                            El viento y el oleaje pueden ofrecer oportunidades
                            para practicar deportes de tabla. Es fundamental
                            respetar las zonas delimitadas y las indicaciones
                            del servicio de vigilancia.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SEGURIDAD -->
    <section>
        <div class="container">
            <div class="section-heading reveal">
                <div class="kicker">Disfruta con precaución</div>
                <h2>Oleaje, corrientes y seguridad en el baño</h2>
                <p class="lead">
                    La playa de Deba está abierta al Cantábrico. Su belleza
                    natural exige prestar especial atención a las condiciones
                    del mar.
                </p>
            </div>

            <div class="feature-grid">
                <article class="feature reveal">
                    <div class="feature-icon">🌊</div>
                    <h3>Una playa de fuerte oleaje</h3>
                    <p>
                        El oleaje puede aumentar rápidamente y las corrientes
                        pueden variar a lo largo del arenal. No te confíes
                        aunque el mar parezca tranquilo desde la orilla.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🚩</div>
                    <h3>Respeta las banderas</h3>
                    <p>
                        Atiende a la señalización, las banderas y las
                        instrucciones del personal de socorrismo.
                        Las zonas habilitadas para el baño pueden cambiar
                        según las condiciones del mar.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🏄</div>
                    <h3>Convive con los deportes acuáticos</h3>
                    <p>
                        Respeta la separación entre las zonas de baño y
                        las áreas destinadas al surf y otros deportes.
                        No entres en zonas señalizadas para actividades náuticas.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🪨</div>
                    <h3>Cuidado en las zonas rocosas</h3>
                    <p>
                        En Lapari y los sectores de flysch hay superficies
                        irregulares y resbaladizas. Evita acercarte a los
                        acantilados o caminar por plataformas expuestas
                        al oleaje sin conocer las mareas.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section id="servicios" class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Comodidad junto al mar</div>
                <h2>Servicios de la playa de Deba</h2>
                <p class="lead">
                    La playa principal cuenta con equipamientos para disfrutar
                    de una jornada junto al mar. Algunos servicios funcionan
                    únicamente durante la temporada estival.
                </p>
            </div>

            <div class="services-grid">
                <div class="service reveal"><span>🚿</span> Duchas en temporada</div>
                <div class="service reveal"><span>🚻</span> Aseos públicos</div>
                <div class="service reveal"><span>🚰</span> Fuentes</div>
                <div class="service reveal"><span>🛟</span> Socorrismo en temporada</div>
                <div class="service reveal"><span>♿</span> Accesos adaptados</div>
                <div class="service reveal"><span>🦽</span> Silla anfibia en verano</div>
                <div class="service reveal"><span>🏖️</span> Toldos en temporada</div>
                <div class="service reveal"><span>🍽️</span> Bares y restauración</div>
                <div class="service reveal"><span>🅿️</span> Aparcamiento cercano</div>
                <div class="service reveal"><span>🧹</span> Limpieza y papeleras</div>
                <div class="service reveal"><span>🏄</span> Cursos y actividades de surf</div>
                <div class="service reveal"><span>🌳</span> Área recreativa próxima</div>
            </div>
        </div>
    </section>

    <!-- ACCESIBILIDAD -->
    <section class="accessibility">
        <div class="container access-box">
            <div class="reveal">
                <div class="kicker">Una playa para todos</div>
                <h2>Accesibilidad y baño asistido</h2>

                <p>
                    La playa principal de Santiago cuenta con accesos adaptados
                    para facilitar la llegada a personas con movilidad reducida.
                    El Ayuntamiento recoge entre los servicios estivales
                    las rampas de acceso y la disponibilidad de silla anfibia.
                </p>

                <p>
                    Estos recursos permiten disfrutar del entorno de playa
                    y facilitan el acceso al baño con asistencia cuando
                    el servicio está operativo.
                </p>

                <p>
                    Lapari presenta condiciones diferentes: el acceso se
                    realiza mediante escaleras y no está adaptado para
                    personas con movilidad reducida.
                </p>

                <p>
                    Antes de desplazarte, consulta con el Ayuntamiento
                    los horarios, la reserva y la disponibilidad del
                    servicio de baño asistido.
                </p>
            </div>

            <div class="access-photo reveal" role="img" aria-label="Paisaje costero"></div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section id="galeria">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Imágenes de la costa</div>
                <h2>Galería de la playa de Deba</h2>
                <p class="lead">
                    El arenal, el Cantábrico y los paisajes que hacen
                    especial este tramo de la costa guipuzcoana.
                </p>
            </div>

            <div class="gallery reveal">
                <div class="gallery-item gallery-1"></div>
                <div class="gallery-item gallery-2"></div>
                <div class="gallery-item gallery-3"></div>
                <div class="gallery-item gallery-4"></div>
            </div>
        </div>
    </section>

    <!-- CONSEJOS -->
    <section class="sand-section">
        <div class="container">
            <div class="section-heading reveal">
                <div class="kicker">Prepara tu visita</div>
                <h2>Consejos para disfrutar de Deba</h2>
                <p class="lead">
                    Algunas recomendaciones para organizar una jornada
                    de playa o una escapada por el Geoparque.
                </p>
            </div>

            <div class="tips-grid">
                <div class="tip reveal">
                    <strong>🌊 Consulta el estado del mar</strong>
                    <p>
                        Antes de bañarte, comprueba el oleaje, las banderas
                        y las indicaciones del servicio de socorrismo.
                        No te bañes en zonas cerradas o señalizadas como peligrosas.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🌙 Comprueba las mareas</strong>
                    <p>
                        La bajamar permite disfrutar de una mayor extensión
                        de arena y acceder al entorno de Lapari. Con pleamar,
                        parte de esta zona puede quedar cubierta.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🚆 Valora el transporte público</strong>
                    <p>
                        Deba dispone de estación de Euskotren y conexiones
                        de autobús. En los días de mayor afluencia puede
                        ser una alternativa cómoda al coche.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🪨 Explora el flysch con prudencia</strong>
                    <p>
                        Las formaciones rocosas son uno de los grandes
                        atractivos del entorno. Evita caminar por zonas
                        expuestas al oleaje y respeta los espacios protegidos.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🐕 Infórmate sobre las mascotas</strong>
                    <p>
                        Durante la temporada de baño existen restricciones
                        para el acceso de animales domésticos. Comprueba
                        la normativa municipal vigente.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🍽️ Descubre el centro de Deba</strong>
                    <p>
                        Completa el día con un paseo por el casco histórico,
                        una visita a sus monumentos y una parada en los
                        establecimientos de hostelería de la localidad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ACTIVIDADES Y EXCURSIONES -->
    <section>
        <div class="container">
            <div class="activities-widget reveal">
                <div class="kicker">Organiza tu escapada</div>
                <h2>Actividades y experiencias en Deba</h2>
                <p>
                    Completa tu visita a la playa con excursiones, rutas
                    guiadas y experiencias para descubrir el Geoparque
                    de la Costa Vasca y sus alrededores.
                </p>

                <div data-gyg-widget="auto" data-gyg-partner-id="VW16GKQ"></div>
            </div>
        </div>
    </section>

    <!-- UBICACIÓN -->
    <section id="ubicacion" class="sand-section">
        <div class="container">
            <div class="section-heading reveal">
                <div class="kicker">Cómo llegar</div>
                <h2>Dónde está la playa de Deba</h2>
                <p class="lead">
                    La playa de Santiago se encuentra junto al núcleo urbano
                    de Deba y a la desembocadura del río. Se puede llegar
                    a pie, en coche y mediante transporte público.
                </p>
            </div>

            <div class="map-frame reveal">
                <iframe
                    src="https://www.google.com/maps?q=43.298,-2.3528&z=16&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de la playa de Santiago en Deba">
                </iframe>
            </div>

            <div class="location-details">
                <div>
                    <h3>Playa de Santiago</h3>
                    <p>Hondartza Kalea · 20820 Deba · Gipuzkoa, España</p>
                    <p>Coordenadas aproximadas: 43.298, -2.3528</p>
                </div>

                <a
                    class="btn"
                    href="https://www.google.com/maps/dir/?api=1&destination=43.298,-2.3528"
                    target="_blank"
                    rel="noopener noreferrer">
                    Cómo llegar <span>→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Preguntas frecuentes</div>
                <h2>Todo lo que necesitas saber</h2>
                <p class="lead">
                    Resolvemos las dudas más habituales antes de visitar
                    la playa de Deba.
                </p>
            </div>

            <div class="faq-list reveal">
                <?php foreach ($faqs as $faq): ?>
                    <details>
                        <summary><?= h($faq["question"]) ?></summary>
                        <p><?= h($faq["answer"]) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container reveal">
            <div class="kicker">Costa Vasca · Gipuzkoa</div>
            <h2>Descubre el paisaje natural de Deba</h2>
            <p>
                Un gran arenal, olas para disfrutar del surf, paseos junto
                al mar y un entorno geológico único. Deba te espera en
                uno de los tramos más especiales del Cantábrico.
            </p>
            <a href="#ubicacion" class="btn btn-light">Planificar mi visita</a>
        </div>
    </section>

    <!-- PUBLICIDAD -->
    <div class="container ad-container">
        <div id="adcash-zone" data-adcash-zone="mnaewnieki" style="width:100%;text-align:center;"></div>
    </div>

</main>

<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <a class="brand" href="/" style="color:white;">PLAYAS <span>DEL CANTÁBRICO</span></a>
                <p style="margin-top:15px;max-width:390px;">
                    Descubre las mejores playas, rincones naturales y destinos
                    costeros del norte de España.
                </p>
            </div>

            <div>
                <h3>Explora</h3>
                <div class="footer-links">
                    <a href="#playa">Playa de Santiago</a>
                    <a href="#lapari">Playa de Lapari</a>
                    <a href="#actividades">Actividades</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#ubicacion">Cómo llegar</a>
                </div>
            </div>

            <div>
                <h3>Descubre Deba</h3>
                <div class="footer-links">
                    <a href="#ubicacion">Ubicación</a>
                    <a href="#faq">Preguntas frecuentes</a>
                    <a href="#galeria">Galería</a>
                </div>
            </div>
        </div>

        <div class="copyright">
            © <?= date("Y") ?> Playas del Cantábrico. Todos los derechos reservados.
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".reveal");

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        elements.forEach(function (element) {
            observer.observe(element);
        });
    } else {
        elements.forEach(function (element) {
            element.classList.add("visible");
        });
    }
});
</script>

<script async defer src="https://widget.getyourguide.com/v2/widget.js"></script>

</body>
</html>
