
<?php
// ============================================================
// PLAYA DE GETARIA - MALKORBE
// Playas del Cantábrico
// ============================================================

$siteName = "Playas del Cantábrico";
$pageTitle = "Playa de Getaria (Malkorbe): qué ver, servicios y cómo llegar";
$pageDescription = "Descubre la playa de Malkorbe en Getaria: arena dorada, aguas tranquilas, vistas al Ratón de Getaria, servicios, actividades acuáticas y consejos para tu visita.";
$pageUrl = "https://www.tudominio.com/gipuzkoa/getaria/lugares-interes/playa-de-getaria/";
$pageImage = "https://www.tudominio.com/images/playa-de-getaria.jpg";

$canonical = $pageUrl;

$faqs = [
    [
        "question" => "¿Cómo se llama la playa principal de Getaria?",
        "answer" => "La playa principal y más resguardada de Getaria es Malkorbe, situada junto al puerto deportivo y muy cerca del casco urbano."
    ],
    [
        "question" => "¿Cuánto mide la playa de Malkorbe?",
        "answer" => "Malkorbe tiene aproximadamente 420 metros de longitud y una anchura media de 75 metros."
    ],
    [
        "question" => "¿Es una playa adecuada para familias?",
        "answer" => "Sí. Sus aguas suelen ser tranquilas y dispone de servicios como duchas, aseos, juegos infantiles y vigilancia durante la temporada de baño."
    ],
    [
        "question" => "¿Tiene servicios de socorrismo?",
        "answer" => "La playa cuenta con servicio de vigilancia y socorrismo durante la temporada de baño. Los horarios pueden variar según la época del año."
    ],
    [
        "question" => "¿Es accesible para personas con movilidad reducida?",
        "answer" => "Malkorbe dispone de accesos adaptados y se han ofrecido servicios de baño asistido y sillas acuáticas. Conviene consultar la disponibilidad y los horarios antes de acudir."
    ],
    [
        "question" => "¿Qué actividades se pueden practicar?",
        "answer" => "En Malkorbe se pueden practicar actividades como piragüismo, windsurf, submarinismo y voleibol, además de disfrutar del baño y de los deportes náuticos."
    ],
    [
        "question" => "¿Qué diferencia hay entre Malkorbe y Gaztetape?",
        "answer" => "Malkorbe es una playa más protegida y de aguas generalmente tranquilas, junto al puerto. Gaztetape es más abierta al mar y tiene un carácter más deportivo, especialmente cuando hay olas."
    ],
    [
        "question" => "¿Se permiten perros en la playa?",
        "answer" => "Durante la temporada de baño existen restricciones para el acceso de animales domésticos. Es recomendable consultar la normativa municipal vigente."
    ]
];

$schemaBeach = [
    "@context" => "https://schema.org",
    "@type" => "Beach",
    "name" => "Playa de Malkorbe",
    "description" => $pageDescription,
    "url" => $pageUrl,
    "image" => $pageImage,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Getaria",
        "addressRegion" => "Gipuzkoa",
        "addressCountry" => "ES"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 43.30130,
        "longitude" => -2.20210
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
                linear-gradient(90deg, rgba(5,30,43,.76), rgba(5,30,43,.12)),
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

        .gaztetape {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 45px;
            align-items: center;
        }

        .gaztetape-image {
            min-height: 390px;
            border-radius: var(--radius);
            background: url("https://images.unsplash.com/photo-1502933691298-84fc14542831?auto=format&fit=crop&w=1200&q=85") center/cover;
        }

        .gaztetape p {
            color: var(--muted);
            margin-bottom: 16px;
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
            .gaztetape,
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
            .gaztetape-image,
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
        <span>Getaria · Gipuzkoa</span>
    </div>
</div>

<header class="navbar">
    <div class="container nav-inner">
        <a class="brand" href="/">PLAYAS <span>DEL CANTÁBRICO</span></a>

        <nav class="nav-links" aria-label="Navegación principal">
            <a href="#playa">La playa</a>
            <a href="#experiencias">Experiencias</a>
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
                <span class="eyebrow">Getaria · Costa de Gipuzkoa</span>
                <h1>Playa de Getaria: descubre Malkorbe</h1>
                <p>
                    Un rincón de arena dorada junto al puerto, con aguas generalmente
                    tranquilas y unas vistas únicas al emblemático Ratón de Getaria.
                    Disfruta del mar y del encanto marinero de la costa vasca.
                </p>
                <a href="#playa" class="btn btn-light">Descubrir la playa <span>→</span></a>
            </div>
        </div>
    </section>

    <!-- DATOS RÁPIDOS -->
    <div class="container quick-wrap">
        <div class="quick-grid">
            <div class="quick-item">
                <strong>420 m</strong>
                <span>Longitud aproximada</span>
            </div>
            <div class="quick-item">
                <strong>75 m</strong>
                <span>Anchura media</span>
            </div>
            <div class="quick-item">
                <strong>Arena</strong>
                <span>Dorada</span>
            </div>
            <div class="quick-item">
                <strong>Getaria</strong>
                <span>Gipuzkoa, Euskadi</span>
            </div>
        </div>
    </div>

    <!-- INTRODUCCIÓN -->
    <section id="playa">
        <div class="container intro-grid">
            <div class="intro-copy reveal">
                <div class="section-heading">
                    <div class="kicker">Un paisaje marinero</div>
                    <h2>Una playa resguardada junto al puerto de Getaria</h2>
                    <p class="lead">
                        Malkorbe es uno de los arenales más cómodos y agradables
                        de la costa guipuzcoana.
                    </p>
                </div>

                <p>
                    Situada junto al puerto deportivo y a pocos pasos del centro
                    de Getaria, la playa de Malkorbe combina la comodidad de un
                    arenal urbano con el atractivo de un paisaje marinero.
                </p>

                <p>
                    Su orientación y la protección que ofrece el monte San Antón
                    contribuyen a que sus aguas sean habitualmente más tranquilas
                    que las de otras playas abiertas al Cantábrico.
                </p>

                <p>
                    Desde la arena se disfruta de una de las estampas más
                    reconocibles de Gipuzkoa: el perfil del Ratón de Getaria,
                    la península del monte San Antón que se adentra en el mar.
                </p>

                <div class="highlight">
                    Malkorbe es una buena elección para combinar un día de playa
                    con un paseo por el puerto, el casco histórico y la gastronomía
                    marinera de Getaria.
                </div>
            </div>

            <div class="intro-image reveal" role="img" aria-label="Paisaje costero y playa"></div>
        </div>
    </section>

    <!-- EXPERIENCIAS -->
    <section id="experiencias" class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Mucho más que sol y arena</div>
                <h2>Qué hacer en la playa de Malkorbe</h2>
                <p class="lead">
                    Un entorno perfecto para disfrutar del mar, practicar actividades
                    acuáticas y descubrir el ambiente de un pueblo pesquero vasco.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <div class="card-image experience-1"></div>
                    <div class="card-body">
                        <h3>Disfrutar del baño</h3>
                        <p>
                            Sus aguas suelen presentar poco oleaje gracias a la
                            protección natural de la bahía. Es una opción muy
                            agradable para pasar el día junto al mar.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image experience-2"></div>
                    <div class="card-body">
                        <h3>Deportes acuáticos</h3>
                        <p>
                            El entorno permite disfrutar de actividades como
                            piragüismo, windsurf, vela y submarinismo, siempre
                            atendiendo a las condiciones del mar.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image experience-3"></div>
                    <div class="card-body">
                        <h3>Ambiente familiar</h3>
                        <p>
                            La cercanía al centro, los servicios de playa y la
                            presencia de juegos infantiles hacen de Malkorbe
                            un arenal cómodo para familias.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ENTORNO -->
    <section>
        <div class="container">
            <div class="section-heading reveal">
                <div class="kicker">Un entorno especial</div>
                <h2>El Ratón de Getaria y su paisaje marinero</h2>
                <p class="lead">
                    La visita a Malkorbe merece completarse con algunos de los
                    rincones más representativos de Getaria.
                </p>
            </div>

            <div class="feature-grid">
                <article class="feature reveal">
                    <div class="feature-icon">⛰️</div>
                    <h3>Monte San Antón</h3>
                    <p>
                        Conocido popularmente como el Ratón de Getaria por su
                        silueta, este monte es uno de los grandes símbolos
                        paisajísticos de la localidad. Sus senderos permiten
                        contemplar la costa desde diferentes perspectivas.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">⚓</div>
                    <h3>Puerto de Getaria</h3>
                    <p>
                        El puerto pesquero y deportivo forma parte de la identidad
                        del municipio. Es un lugar perfecto para pasear y observar
                        la actividad marítima de la localidad.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🏛️</div>
                    <h3>Casco histórico</h3>
                    <p>
                        Sus calles tradicionales, la iglesia de San Salvador
                        y sus edificios históricos permiten descubrir el
                        patrimonio de uno de los pueblos más bonitos de la costa vasca.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🐟</div>
                    <h3>Gastronomía marinera</h3>
                    <p>
                        Getaria es conocida por sus pescados a la parrilla,
                        sus restaurantes del puerto y productos tradicionales
                        como las anchoas y el pescado fresco.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- GAZTETAPE -->
    <section class="sand-section">
        <div class="container gaztetape">
            <div class="gaztetape-image reveal" role="img" aria-label="Costa abierta del Cantábrico"></div>

            <div class="reveal">
                <div class="kicker">Otra playa de Getaria</div>
                <h2>Gaztetape: una alternativa más abierta al mar</h2>

                <p>
                    Getaria cuenta también con la playa de Gaztetape, situada
                    al otro lado del monte San Antón. Su carácter es diferente
                    al de Malkorbe: está más expuesta al oleaje y tiene un
                    ambiente más vinculado a los deportes de mar.
                </p>

                <p>
                    Es una alternativa interesante para quienes disfrutan
                    observando las olas o buscan un entorno costero más abierto.
                    Las condiciones de baño pueden variar considerablemente
                    según el viento y el estado del mar.
                </p>

                <p>
                    Si buscas aguas habitualmente más tranquilas y servicios
                    cerca del centro urbano, Malkorbe suele ser la opción
                    más cómoda.
                </p>
            </div>
        </div>
    </section>

    <!-- DEPORTES -->
    <section>
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Mar y aventura</div>
                <h2>Actividades para disfrutar del Cantábrico</h2>
                <p class="lead">
                    El entorno de Malkorbe permite combinar el descanso en la arena
                    con diferentes propuestas deportivas y náuticas.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🛶</div>
                        <h3>Piragüismo y kayak</h3>
                        <p>
                            Una manera diferente de descubrir la costa de Getaria
                            desde el agua. Las salidas deben adaptarse siempre
                            al estado del mar.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🏄</div>
                        <h3>Windsurf y vela</h3>
                        <p>
                            Las actividades de vela y windsurf forman parte
                            de la oferta deportiva vinculada a la playa y
                            su entorno náutico.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🤿</div>
                        <h3>Buceo y submarinismo</h3>
                        <p>
                            El litoral de Getaria ofrece posibilidades para
                            descubrir el medio submarino mediante actividades
                            organizadas y respetando las zonas autorizadas.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section id="servicios" class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Comodidad junto al mar</div>
                <h2>Servicios de la playa de Malkorbe</h2>
                <p class="lead">
                    La playa dispone de distintos equipamientos para facilitar
                    la visita. Algunos servicios pueden ser estacionales.
                </p>
            </div>

            <div class="services-grid">
                <div class="service reveal"><span>🚿</span> Duchas</div>
                <div class="service reveal"><span>🚻</span> Aseos públicos</div>
                <div class="service reveal"><span>🚰</span> Fuentes</div>
                <div class="service reveal"><span>🛟</span> Socorrismo en temporada</div>
                <div class="service reveal"><span>🧒</span> Juegos infantiles</div>
                <div class="service reveal"><span>🏐</span> Voleibol playa</div>
                <div class="service reveal"><span>🅿️</span> Aparcamiento cercano</div>
                <div class="service reveal"><span>🍽️</span> Hostelería próxima</div>
                <div class="service reveal"><span>⛵</span> Puerto deportivo</div>
                <div class="service reveal"><span>🚿</span> Lavapiés</div>
                <div class="service reveal"><span>🛶</span> Actividades náuticas</div>
                <div class="service reveal"><span>🧹</span> Limpieza y papeleras</div>
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
                    Malkorbe dispone de accesos adaptados para personas con
                    movilidad reducida. Además, se han ofrecido servicios
                    de baño asistido mediante sillas acuáticas durante
                    la temporada estival.
                </p>

                <p>
                    Estos recursos facilitan que más personas puedan disfrutar
                    del arenal y del baño en el mar con apoyo cuando sea necesario.
                </p>

                <p>
                    Es recomendable consultar previamente con el Ayuntamiento
                    o con el servicio de playa para confirmar la disponibilidad,
                    los horarios y las condiciones del servicio asistido.
                </p>
            </div>

            <div class="access-photo reveal" role="img" aria-label="Paisaje natural de la costa"></div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section id="galeria">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Imágenes de la costa</div>
                <h2>Galería de la playa de Getaria</h2>
                <p class="lead">
                    El paisaje de Malkorbe, el mar Cantábrico y el entorno
                    marinero de la localidad.
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
                <h2>Consejos para disfrutar de Malkorbe</h2>
                <p class="lead">
                    Algunas recomendaciones para organizar una jornada
                    de playa en Getaria.
                </p>
            </div>

            <div class="tips-grid">
                <div class="tip reveal">
                    <strong>☀️ Consulta el tiempo y el estado del mar</strong>
                    <p>
                        Aunque Malkorbe suele estar resguardada, las condiciones
                        pueden cambiar. Atiende siempre a las banderas y
                        las indicaciones del personal de vigilancia.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🅿️ Llega con tiempo en verano</strong>
                    <p>
                        La playa tiene una ubicación muy cómoda junto al centro
                        y el puerto, por lo que puede registrar una afluencia
                        elevada durante los días de buen tiempo.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>👨‍👩‍👧‍👦 Ideal para combinar planes</strong>
                    <p>
                        Puedes pasar la mañana en la arena y dedicar la tarde
                        a recorrer el puerto, el casco histórico o los alrededores
                        del monte San Antón.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🐕 Consulta las normas para mascotas</strong>
                    <p>
                        Durante la temporada de baño existen restricciones
                        para los animales domésticos. Comprueba la normativa
                        municipal vigente antes de acudir con tu mascota.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>♿ Comprueba los servicios accesibles</strong>
                    <p>
                        Si necesitas baño asistido o equipamiento específico,
                        consulta previamente las condiciones y los horarios
                        de prestación.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🍽️ Descubre la gastronomía local</strong>
                    <p>
                        Aprovecha la visita para conocer los restaurantes
                        y establecimientos del puerto, famosos por el pescado
                        fresco y las parrillas.
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
                <h2>Actividades y experiencias en Getaria</h2>
                <p>
                    Completa tu visita a la playa con excursiones y actividades
                    para descubrir la costa vasca y sus alrededores.
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
                <h2>Dónde está la playa de Malkorbe</h2>
                <p class="lead">
                    Malkorbe se encuentra junto al puerto deportivo de Getaria,
                    en pleno núcleo urbano y con acceso desde el entorno
                    de la carretera N-634.
                </p>
            </div>

            <div class="map-frame reveal">
                <iframe
                    src="https://www.google.com/maps?q=43.30130,-2.20210&z=16&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de la playa de Malkorbe en Getaria">
                </iframe>
            </div>

            <div class="location-details">
                <div>
                    <h3>Playa de Malkorbe</h3>
                    <p>Puerto de Getaria · 20808 Getaria · Gipuzkoa, España</p>
                    <p>Coordenadas: 43.30130, -2.20210</p>
                </div>

                <a
                    class="btn"
                    href="https://www.google.com/maps/dir/?api=1&destination=43.30130,-2.20210"
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
                    la playa de Getaria.
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
            <h2>Descubre el encanto marinero de Getaria</h2>
            <p>
                Arena dorada, aguas resguardadas, tradición pesquera y
                paisajes inolvidables. Malkorbe es una invitación a disfrutar
                del Cantábrico a otro ritmo.
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
                    <a href="#playa">Playa de Malkorbe</a>
                    <a href="#experiencias">Actividades</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#ubicacion">Cómo llegar</a>
                </div>
            </div>

            <div>
                <h3>Descubre Getaria</h3>
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
