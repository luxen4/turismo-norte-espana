
<?php
// ============================================================
// PLAYAS DE BIARRITZ - FRANCIA
// Playas del Cantábrico
// ============================================================

$siteName = "Playas del Cantábrico";
$pageTitle = "Playa de Biarritz: Grande Plage, Côte des Basques y mejores playas";
$pageDescription = "Descubre las playas de Biarritz: Grande Plage, Côte des Basques, Port Vieux, Miramar y Milady. Surf, mareas, servicios, accesibilidad y cómo llegar.";
$pageUrl = "https://www.tudominio.com/francia/biarritz/lugares-interes/playa-de-biarritz/";
$pageImage = "https://www.tudominio.com/images/playa-de-biarritz.jpg";

$canonical = $pageUrl;

$faqs = [
    [
        "question" => "¿Cuál es la playa más famosa de Biarritz?",
        "answer" => "La Grande Plage es la playa más emblemática y céntrica de Biarritz. Se encuentra junto al Hôtel du Palais, el Casino Municipal y el paseo marítimo."
    ],
    [
        "question" => "¿Cuáles son las mejores playas de Biarritz?",
        "answer" => "Entre las playas más conocidas destacan la Grande Plage, la Côte des Basques, Port Vieux, Miramar y Milady. Cada una tiene características diferentes en cuanto a oleaje, paisaje, servicios y accesibilidad."
    ],
    [
        "question" => "¿Se puede practicar surf en Biarritz?",
        "answer" => "Sí. Biarritz es uno de los destinos históricos del surf en Europa. La Côte des Basques es especialmente conocida por sus olas y sus escuelas de surf. También hay zonas de práctica en otras playas, según las condiciones y la señalización."
    ],
    [
        "question" => "¿La Côte des Basques desaparece con la marea alta?",
        "answer" => "Sí. La playa puede quedar completamente cubierta durante la pleamar. Según la información municipal, con coeficientes de marea superiores a 45 puede desaparecer la superficie de arena disponible. Es imprescindible consultar las mareas antes de acudir."
    ],
    [
        "question" => "¿Qué playa de Biarritz es mejor para familias?",
        "answer" => "Port Vieux es una pequeña cala resguardada y la Grande Plage ofrece servicios y una ubicación muy cómoda. La elección depende del estado del mar, la marea y la vigilancia disponible."
    ],
    [
        "question" => "¿Qué playa de Biarritz tiene menos oleaje?",
        "answer" => "Port Vieux suele estar más protegida por su configuración entre rocas. Aun así, las condiciones del mar pueden cambiar y siempre hay que respetar las indicaciones de los socorristas."
    ],
    [
        "question" => "¿Hay servicio de socorrismo en las playas de Biarritz?",
        "answer" => "Las principales playas cuentan con vigilancia en periodos determinados del año. Los horarios cambian según la playa y la temporada, por lo que conviene consultar el calendario oficial del Ayuntamiento de Biarritz."
    ],
    [
        "question" => "¿Biarritz tiene playas accesibles?",
        "answer" => "Biarritz dispone de itinerarios accesibles junto al mar y de servicios adaptados en determinados puntos. La playa de Milady cuenta con infraestructura Handiplage. Es recomendable consultar los servicios disponibles antes de desplazarse."
    ],
    [
        "question" => "¿Se puede ir con perros a las playas de Biarritz?",
        "answer" => "Existen restricciones para el acceso de perros a las playas durante la temporada de verano. Consulta la normativa municipal vigente y la señalización de cada arenal."
    ],
    [
        "question" => "¿Dónde aparcar para ir a la Grande Plage?",
        "answer" => "Hay aparcamientos en el entorno del centro y del paseo marítimo, pero las plazas pueden ser limitadas en temporada alta. Es aconsejable utilizar los aparcamientos públicos o el transporte urbano."
    ]
];

$schemaBeach = [
    "@context" => "https://schema.org",
    "@type" => "Beach",
    "name" => "Grande Plage de Biarritz",
    "alternateName" => [
        "Grande Plage",
        "Plage du Casino",
        "Playa Grande de Biarritz"
    ],
    "description" => $pageDescription,
    "url" => $pageUrl,
    "image" => $pageImage,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Biarritz",
        "addressRegion" => "Pyrénées-Atlantiques",
        "addressCountry" => "FR"
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
            gap: 22px;
            font-size: .88rem;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: var(--blue);
        }

        .hero {
            min-height: 640px;
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
            max-width: 780px;
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
            max-width: 650px;
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
            font-size: 1.3rem;
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
            max-width: 740px;
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
            min-height: 440px;
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

        .beach-detail {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 45px;
            align-items: center;
        }

        .beach-photo {
            min-height: 390px;
            border-radius: var(--radius);
            background-size: cover;
            background-position: center;
        }

        .photo-cote {
            background-image: url("https://images.unsplash.com/photo-1502933691298-84fc14542831?auto=format&fit=crop&w=1200&q=85");
        }

        .photo-port {
            background-image: url("https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1200&q=85");
        }

        .beach-detail p {
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
            max-width: 680px;
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
            .beach-detail,
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
            .beach-photo,
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
        <span>Biarritz · Francia</span>
    </div>
</div>

<header class="navbar">
    <div class="container nav-inner">
        <a class="brand" href="/turismo-norte-espana/playas-cantabrico/">PLAYAS <span>DEL CANTÁBRICO</span></a>

        <nav class="nav-links" aria-label="Navegación principal">
            <a href="#playa">Grande Plage</a>
            <a href="#cote">Côte des Basques</a>
            <a href="#otras-playas">Otras playas</a>
            <a href="#servicios">Servicios</a>
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
                <span class="eyebrow">Biarritz · País Vasco francés</span>
                <h1>Playas de Biarritz: descubre la costa atlántica</h1>
                <p>
                    Grandes arenales, pequeñas calas entre rocas, olas legendarias
                    y paseos frente al océano. Biarritz reúne algunas de las playas
                    más conocidas del litoral atlántico francés.
                </p>
                <a href="#playa" class="btn btn-light">Descubrir las playas <span>→</span></a>
            </div>
        </div>
    </section>

    <!-- DATOS RÁPIDOS -->
    <div class="container quick-wrap">
        <div class="quick-grid">
            <div class="quick-item">
                <strong>Atlántico</strong>
                <span>Océano y grandes olas</span>
            </div>
            <div class="quick-item">
                <strong>Surf</strong>
                <span>Destino histórico europeo</span>
            </div>
            <div class="quick-item">
                <strong>5 playas</strong>
                <span>Principales arenales</span>
            </div>
            <div class="quick-item">
                <strong>Francia</strong>
                <span>Pirineos Atlánticos</span>
            </div>
        </div>
    </div>

    <!-- INTRODUCCIÓN -->
    <section id="playa">
        <div class="container intro-grid">
            <div class="intro-copy reveal">
                <div class="section-heading">
                    <div class="kicker">El corazón de Biarritz</div>
                    <h2>La Grande Plage, la playa más emblemática</h2>
                    <p class="lead">
                        Una playa urbana rodeada de arquitectura histórica,
                        comercios, terrazas y un animado paseo marítimo.
                    </p>
                </div>

                <p>
                    La Grande Plage es la imagen más reconocible de Biarritz.
                    Se extiende en pleno centro urbano, entre el Hôtel du Palais,
                    el Casino Municipal y el entorno de Bellevue.
                </p>

                <p>
                    Su amplio arenal y su ubicación hacen que sea uno de los
                    lugares más visitados de la ciudad. Desde la playa se
                    contemplan algunos de los edificios más representativos
                    de Biarritz y el horizonte abierto del océano Atlántico.
                </p>

                <p>
                    En verano, las tradicionales carpas de playa y las zonas
                    de descanso forman parte de su imagen característica.
                    Además, su entorno cuenta con restaurantes, cafeterías,
                    tiendas y un paseo marítimo muy agradable.
                </p>

                <p>
                    La Grande Plage combina zonas de baño y espacios destinados
                    a la práctica del surf. La distribución puede modificarse
                    según las mareas, el oleaje y la afluencia de usuarios.
                </p>

                <div class="highlight">
                    Es la mejor opción para quienes quieren disfrutar de una
                    playa urbana con servicios, ambiente y los principales
                    atractivos de Biarritz a pocos pasos.
                </div>
            </div>

            <div class="intro-image reveal" role="img" aria-label="Paisaje de playa y océano"></div>
        </div>
    </section>

    <!-- EXPERIENCIAS -->
    <section class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Mucho más que sol y arena</div>
                <h2>Qué hacer en las playas de Biarritz</h2>
                <p class="lead">
                    La costa ofrece propuestas para surfistas, familias,
                    amantes de los paseos marítimos y viajeros que buscan
                    paisajes atlánticos.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <div class="card-image experience-1"></div>
                    <div class="card-body">
                        <h3>Practicar surf</h3>
                        <p>
                            Biarritz es uno de los grandes destinos históricos
                            del surf en Europa. Sus playas ofrecen diferentes
                            rompientes y escuelas para aprender o perfeccionar
                            la técnica.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image experience-2"></div>
                    <div class="card-body">
                        <h3>Disfrutar del baño</h3>
                        <p>
                            La Grande Plage y Port Vieux permiten disfrutar
                            del mar en un entorno urbano. La elección depende
                            del estado del océano, las mareas y las zonas
                            habilitadas para el baño.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image experience-3"></div>
                    <div class="card-body">
                        <h3>Pasear por la costa</h3>
                        <p>
                            Los paseos junto al mar ofrecen vistas de los
                            acantilados, las playas y los edificios históricos
                            de Biarritz. Son especialmente atractivos al atardecer.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- COTE DES BASQUES -->
    <section id="cote">
        <div class="container beach-detail">
            <div class="beach-photo photo-cote reveal" role="img" aria-label="Playa atlántica y acantilados"></div>

            <div class="reveal">
                <div class="kicker">La cuna del surf europeo</div>
                <h2>Côte des Basques: olas y acantilados</h2>

                <p>
                    La Côte des Basques es una de las playas más famosas
                    de Biarritz y uno de los lugares históricos del surf
                    en Europa. Está rodeada de acantilados y ofrece una
                    panorámica espectacular del océano y, en días despejados,
                    de las montañas de la costa española.
                </p>

                <p>
                    Su extensa superficie de arena durante la bajamar permite
                    disfrutar de un paisaje abierto y espectacular. También
                    es un lugar muy popular entre surfistas de diferentes niveles,
                    con escuelas y propuestas de aprendizaje.
                </p>

                <p>
                    Desde lo alto de los acantilados se obtiene una de las
                    vistas más conocidas de Biarritz, especialmente al caer
                    la tarde.
                </p>

                <div class="notice">
                    Atención a las mareas: la playa puede desaparecer
                    completamente durante la pleamar. El Ayuntamiento indica
                    que con coeficientes superiores a 45 puede no quedar
                    superficie de playa disponible. Comprueba siempre la
                    tabla de mareas antes de bajar.
                </div>
            </div>
        </div>
    </section>

    <!-- OTRAS PLAYAS -->
    <section id="otras-playas" class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Cinco playas, cinco ambientes</div>
                <h2>Otras playas que merece la pena conocer</h2>
                <p class="lead">
                    Además de la Grande Plage y la Côte des Basques,
                    Biarritz cuenta con pequeñas calas y arenales
                    de características muy diferentes.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <div class="card-image" style="background-image:url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=900&q=80')"></div>
                    <div class="card-body">
                        <h3>Port Vieux</h3>
                        <p>
                            Una pequeña cala situada entre rocas, muy cerca
                            del centro y del puerto antiguo. Su configuración
                            la hace más resguardada que otros arenales de la ciudad.
                            Es una de las opciones más populares para disfrutar
                            de un baño en un entorno recogido.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image" style="background-image:url('https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=900&q=80')"></div>
                    <div class="card-body">
                        <h3>Miramar</h3>
                        <p>
                            Situada al norte de la Grande Plage, entre el faro
                            y el Hôtel du Palais. Tiene un ambiente más tranquilo
                            y vistas espectaculares al océano y a la Roche Ronde.
                            Con mar agitado puede presentar corrientes fuertes.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-image" style="background-image:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=80')"></div>
                    <div class="card-body">
                        <h3>Milady</h3>
                        <p>
                            Situada al sur de Biarritz, es una playa amplia
                            y popular entre residentes y visitantes. Dispone
                            de infraestructura adaptada Handiplage y un parque
                            infantil próximo, por lo que resulta interesante
                            para una visita familiar.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- PORT VIEUX -->
    <section>
        <div class="container beach-detail">
            <div class="reveal">
                <div class="kicker">Una cala en el centro</div>
                <h2>Port Vieux: una playa más recogida</h2>

                <p>
                    Port Vieux es una pequeña playa situada junto al antiguo
                    puerto pesquero. Está rodeada de rocas y edificios,
                    lo que le proporciona un carácter muy distinto al de
                    los grandes arenales de Biarritz.
                </p>

                <p>
                    Su configuración hace que habitualmente esté más protegida
                    del oleaje que la Côte des Basques o la Grande Plage.
                    Es un lugar muy apreciado para disfrutar del baño
                    y contemplar el ambiente del casco urbano.
                </p>

                <p>
                    En temporada dispone de vigilancia y servicios próximos.
                    Como en el resto del litoral, es necesario respetar
                    las indicaciones del personal de socorrismo.
                </p>
            </div>

            <div class="beach-photo photo-port reveal" role="img" aria-label="Paisaje de una cala costera"></div>
        </div>
    </section>

    <!-- SURF -->
    <section class="sand-section">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Una ciudad ligada al océano</div>
                <h2>Biarritz, uno de los grandes destinos del surf</h2>
                <p class="lead">
                    La relación de Biarritz con el surf forma parte de su
                    identidad. Sus playas y escuelas atraen a aficionados
                    de todo el mundo.
                </p>
            </div>

            <div class="cards">
                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🏄</div>
                        <h3>Escuelas de surf</h3>
                        <p>
                            La Côte des Basques reúne escuelas que ofrecen
                            clases y cursos adaptados a distintos niveles.
                            Es recomendable reservar con antelación en verano.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🌊</div>
                        <h3>Olas atlánticas</h3>
                        <p>
                            El oleaje del golfo de Bizkaia ofrece condiciones
                            variables a lo largo del año. La fuerza de las olas,
                            el viento y las mareas determinan las posibilidades
                            de práctica.
                        </p>
                    </div>
                </article>

                <article class="card reveal">
                    <div class="card-body">
                        <div class="feature-icon">🏆</div>
                        <h3>Cultura surfera</h3>
                        <p>
                            Biarritz es uno de los lugares fundamentales
                            en la historia del surf europeo. Su ambiente,
                            comercios especializados y eventos mantienen
                            viva esa tradición.
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
                <div class="kicker">Descubre la ciudad</div>
                <h2>Qué ver cerca de las playas de Biarritz</h2>
                <p class="lead">
                    La costa es solo una parte de los atractivos de Biarritz.
                    La ciudad cuenta con monumentos, paseos y rincones
                    que merecen una visita.
                </p>
            </div>

            <div class="feature-grid">
                <article class="feature reveal">
                    <div class="feature-icon">🦭</div>
                    <h3>Rocher de la Vierge</h3>
                    <p>
                        Uno de los lugares más conocidos de Biarritz.
                        Esta roca conectada a tierra por una pasarela
                        ofrece unas vistas espectaculares del litoral
                        y del océano.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🏛️</div>
                    <h3>Hôtel du Palais</h3>
                    <p>
                        Edificio histórico junto a la Grande Plage.
                        Antiguamente residencia imperial, es uno de
                        los grandes símbolos arquitectónicos de la ciudad.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🐠</div>
                    <h3>Aquarium de Biarritz</h3>
                    <p>
                        Una visita interesante para conocer la fauna
                        marina del golfo de Bizkaia y otros ecosistemas
                        acuáticos. Se encuentra junto al entorno del
                        Rocher de la Vierge.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🏙️</div>
                    <h3>Centro de Biarritz</h3>
                    <p>
                        Calles comerciales, mercados, terrazas y edificios
                        históricos completan la visita. Es un destino
                        perfecto para combinar playa, gastronomía y compras.
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
                <h2>Servicios de las playas de Biarritz</h2>
                <p class="lead">
                    Los equipamientos varían de una playa a otra.
                    La Grande Plage destaca por su ubicación urbana
                    y la oferta de servicios en sus alrededores.
                </p>
            </div>

            <div class="services-grid">
                <div class="service reveal"><span>🛟</span> Socorrismo en temporada</div>
                <div class="service reveal"><span>🚻</span> Aseos públicos</div>
                <div class="service reveal"><span>🍽️</span> Restaurantes y cafeterías</div>
                <div class="service reveal"><span>🏖️</span> Carpas y tumbonas estivales</div>
                <div class="service reveal"><span>🏄</span> Escuelas de surf</div>
                <div class="service reveal"><span>🚌</span> Transporte urbano</div>
                <div class="service reveal"><span>🅿️</span> Aparcamientos cercanos</div>
                <div class="service reveal"><span>🚲</span> Accesos peatonales y ciclistas</div>
                <div class="service reveal"><span>🚰</span> Fuentes en zonas urbanas</div>
                <div class="service reveal"><span>♿</span> Itinerarios accesibles</div>
                <div class="service reveal"><span>🧹</span> Limpieza y papeleras</div>
                <div class="service reveal"><span>🏥</span> Puestos de primeros auxilios</div>
            </div>
        </div>
    </section>

    <!-- SEGURIDAD -->
    <section>
        <div class="container">
            <div class="section-heading reveal">
                <div class="kicker">Disfruta con precaución</div>
                <h2>Mareas, corrientes y seguridad en el baño</h2>
                <p class="lead">
                    El océano Atlántico marca el ritmo de las playas de Biarritz.
                    Antes de entrar en el agua, es importante conocer las
                    condiciones de cada zona.
                </p>
            </div>

            <div class="feature-grid">
                <article class="feature reveal">
                    <div class="feature-icon">🌙</div>
                    <h3>Consulta las mareas</h3>
                    <p>
                        Las mareas pueden transformar por completo la superficie
                        de arena disponible. En la Côte des Basques pueden
                        dejar la playa totalmente cubierta durante la pleamar.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🚩</div>
                    <h3>Respeta las banderas</h3>
                    <p>
                        Las zonas de baño y surf pueden cambiar de ubicación
                        en función del coeficiente de marea, el oleaje
                        y la afluencia de personas.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🌊</div>
                    <h3>Cuidado con las corrientes</h3>
                    <p>
                        El oleaje y las corrientes pueden ser fuertes,
                        incluso en playas aparentemente tranquilas.
                        Bañaos siempre en zonas vigiladas cuando estén operativas.
                    </p>
                </article>

                <article class="feature reveal">
                    <div class="feature-icon">🪨</div>
                    <h3>Evita las rocas y acantilados</h3>
                    <p>
                        No accedas a zonas rocosas cerradas ni escales
                        los acantilados. Algunas áreas presentan riesgo
                        de caída, desprendimientos o cambios bruscos
                        en el nivel del agua.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- ACCESIBILIDAD -->
    <section class="accessibility">
        <div class="container access-box">
            <div class="reveal">
                <div class="kicker">Una ciudad junto al mar</div>
                <h2>Accesibilidad en las playas de Biarritz</h2>

                <p>
                    Biarritz dispone de itinerarios accesibles junto al océano.
                    El paseo de la Grande Plage, entre el Hôtel du Palais
                    y el Casino Municipal, ofrece un recorrido llano con
                    vistas a la playa y al litoral.
                </p>

                <p>
                    En esta zona existen aparcamientos y aseos públicos
                    accesibles próximos al paseo, además de establecimientos
                    de hostelería en el entorno.
                </p>

                <p>
                    La playa de Milady cuenta con infraestructura Handiplage,
                    una opción especialmente interesante para personas
                    con movilidad reducida.
                </p>

                <p>
                    Conviene consultar previamente la disponibilidad
                    de los equipamientos y servicios de baño adaptado,
                    ya que pueden variar según la temporada.
                </p>
            </div>

            <div class="access-photo reveal" role="img" aria-label="Paseo junto al mar"></div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section id="galeria">
        <div class="container">
            <div class="section-heading center reveal">
                <div class="kicker">Imágenes de la costa</div>
                <h2>Galería de las playas de Biarritz</h2>
                <p class="lead">
                    Arena, acantilados, olas y paisajes atlánticos
                    en uno de los destinos costeros más conocidos de Francia.
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
                <h2>Consejos para disfrutar de Biarritz</h2>
                <p class="lead">
                    Algunas recomendaciones para organizar una jornada
                    de playa o una escapada por la costa vascofrancesa.
                </p>
            </div>

            <div class="tips-grid">
                <div class="tip reveal">
                    <strong>🌙 Consulta las mareas</strong>
                    <p>
                        Especialmente si quieres visitar la Côte des Basques.
                        La pleamar puede cubrir por completo la playa y
                        dejar sin acceso al arenal.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🏄 Elige bien la playa para surfear</strong>
                    <p>
                        La Côte des Basques es uno de los lugares más conocidos
                        para practicar surf. Comprueba las condiciones del mar
                        y utiliza escuelas y profesionales si estás empezando.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🚶 Recorre el paseo marítimo</strong>
                    <p>
                        El litoral de Biarritz se disfruta mucho caminando.
                        Puedes enlazar la Grande Plage, Port Vieux y la
                        Côte des Basques mediante diferentes tramos de paseo.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🅿️ Planifica el aparcamiento</strong>
                    <p>
                        El estacionamiento próximo a las playas puede ser
                        limitado en verano. Valora los aparcamientos públicos
                        y el transporte urbano.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🐕 Consulta las normas para mascotas</strong>
                    <p>
                        Existen restricciones para los perros en las playas
                        durante la temporada estival. Comprueba la normativa
                        municipal antes de acudir con tu mascota.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🌅 No te pierdas el atardecer</strong>
                    <p>
                        Los acantilados y miradores de la Côte des Basques
                        ofrecen algunas de las mejores panorámicas del
                        litoral al final del día.
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
                <h2>Actividades y experiencias en Biarritz</h2>
                <p>
                    Completa tu visita a las playas con experiencias,
                    excursiones y actividades para descubrir Biarritz
                    y la costa del País Vasco francés.
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
                <h2>Dónde está la Grande Plage de Biarritz</h2>
                <p class="lead">
                    La Grande Plage se encuentra en el centro de Biarritz,
                    junto al Casino Municipal y el Hôtel du Palais.
                    Es accesible a pie desde las principales zonas comerciales
                    y turísticas de la ciudad.
                </p>
            </div>

            <div class="map-frame reveal">
                <iframe
                    src="https://www.google.com/maps?q=Grande+Plage+Biarritz+France&z=16&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de la Grande Plage de Biarritz">
                </iframe>
            </div>

            <div class="location-details">
                <div>
                    <h3>Grande Plage de Biarritz</h3>
                    <p>Grande Plage · 64200 Biarritz · Francia</p>
                    <p>Entorno del Casino Municipal y Hôtel du Palais</p>
                </div>

                <a
                    class="btn"
                    href="https://www.google.com/maps/dir/?api=1&destination=Grande+Plage+Biarritz+France"
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
                    las playas de Biarritz.
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
            <div class="kicker">Costa Atlántica · País Vasco francés</div>
            <h2>Descubre el encanto de las playas de Biarritz</h2>
            <p>
                Surf, playas urbanas, pequeñas calas, acantilados y paseos
                frente al océano. Biarritz es un destino perfecto para
                descubrir la costa atlántica francesa.
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
                    costeros del norte de España y del litoral atlántico.
                </p>
            </div>

            <div>
                <h3>Explora</h3>
                <div class="footer-links">
                    <a href="#playa">Grande Plage</a>
                    <a href="#cote">Côte des Basques</a>
                    <a href="#otras-playas">Otras playas</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#ubicacion">Cómo llegar</a>
                </div>
            </div>

            <div>
                <h3>Descubre Biarritz</h3>
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
