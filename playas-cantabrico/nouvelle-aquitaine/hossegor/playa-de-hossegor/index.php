
<?php
$pageTitle = "Playa de Hossegor: surf, playas y guía para disfrutar del Atlántico";
$pageDescription = "Descubre la Playa de Hossegor en las Landas francesas: Plage Centrale, La Sud, La Gravière y La Nord. Surf, servicios, accesibilidad, consejos y mapa.";
$canonical = "https://www.tudominio.com/francia/hossegor/lugares-interes/playa-de-hossegor/";
$ogImage = "https://www.tudominio.com/images/playa-de-hossegor.jpg";

$faqs = [
    [
        "q" => "¿Dónde está la playa de Hossegor?",
        "a" => "Hossegor se encuentra en el municipio de Soorts-Hossegor, en el departamento francés de las Landas, en la región de Nueva Aquitania. Sus playas oceánicas se extienden frente al Atlántico, junto al núcleo turístico de la localidad."
    ],
    [
        "q" => "¿Cuál es la mejor playa de Hossegor para bañarse?",
        "a" => "La Plage Sud suele ser una de las opciones más cómodas para familias y personas que buscan un entorno algo más protegido. La Plage Centrale también dispone de servicios y vigilancia durante la temporada estival. Siempre hay que respetar las indicaciones de los socorristas."
    ],
    [
        "q" => "¿Es Hossegor un buen destino para hacer surf?",
        "a" => "Sí. Hossegor es uno de los destinos de surf más conocidos de Europa. La Gravière es famosa por sus olas rápidas y potentes, mientras que en otros sectores pueden encontrarse escuelas y condiciones más apropiadas para iniciarse, dependiendo del estado del mar."
    ],
    [
        "q" => "¿Cuándo están vigiladas las playas de Hossegor?",
        "a" => "La vigilancia varía según la playa y el calendario anual. En 2026, la Plage Sud tiene un periodo de vigilancia más amplio que la Plage Centrale y La Gravière. Consulta siempre los horarios municipales actualizados antes de viajar."
    ],
    [
        "q" => "¿Hay playas accesibles en Hossegor?",
        "a" => "La Plage Sud dispone de accesos adaptados, distintivos de accesibilidad y dos sillas anfibias Tiralo disponibles durante los horarios de vigilancia. La disponibilidad de los equipos y servicios debe confirmarse con el puesto de socorro."
    ],
    [
        "q" => "¿Se puede ir con perros a las playas de Hossegor?",
        "a" => "La normativa depende de la playa y de la época del año. En algunas zonas existen restricciones estivales. Comprueba los carteles de acceso y la regulación municipal antes de acudir con tu mascota."
    ],
    [
        "q" => "¿Es peligrosa la playa de Hossegor?",
        "a" => "Como en buena parte del litoral atlántico de las Landas, pueden aparecer corrientes, baïnes y rompientes fuertes. Hay que bañarse en las zonas delimitadas por los banderines rojo y amarillo cuando exista vigilancia y seguir las indicaciones de los socorristas."
    ],
    [
        "q" => "¿Qué se puede hacer además de surfear?",
        "a" => "Además de surf, puedes pasear por la arena y el paseo marítimo, disfrutar de las terrazas, practicar actividades de playa, contemplar el paisaje dunar y acercarte al lago marino de Hossegor."
    ]
];

$schemaBeach = [
    "@context" => "https://schema.org",
    "@type" => "Beach",
    "name" => "Playa de Hossegor",
    "description" => $pageDescription,
    "url" => $canonical,
    "image" => $ogImage,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Soorts-Hossegor",
        "addressRegion" => "Landes, Nouvelle-Aquitaine",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 43.665,
        "longitude" => -1.440
    ]
];

$schemaFaq = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(function ($faq) {
        return [
            "@type" => "Question",
            "name" => $faq["q"],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $faq["a"]
            ]
        ];
    }, $faqs)
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">

    <meta property="og:type" content="article">
    <meta property="og:locale" content="es_ES">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

    <meta name="theme-color" content="#073b50">

    <script type="application/ld+json">
        <?= json_encode($schemaBeach, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>
    <script type="application/ld+json">
        <?= json_encode($schemaFaq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --ocean: #073b50;
            --ocean-dark: #052d3d;
            --blue: #087f9c;
            --turquoise: #36b7b0;
            --sand: #f4eddf;
            --cream: #fbfaf6;
            --ink: #18313a;
            --muted: #667b80;
            --white: #fff;
            --radius: 22px;
            --shadow: 0 16px 45px rgba(5, 45, 61, .10);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
            background: var(--cream);
            line-height: 1.7;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
        }

        .container {
            width: min(1160px, calc(100% - 40px));
            margin-inline: auto;
        }

        .topbar {
            background: var(--ocean-dark);
            color: #d8e9e9;
            font-size: .82rem;
            padding: 8px 0;
        }

        .topbar-inner {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(7,59,80,.08);
        }

        .nav-inner {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .brand {
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--ocean);
            text-decoration: none;
            letter-spacing: -.04em;
        }

        .brand span {
            color: var(--turquoise);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 23px;
            flex-wrap: wrap;
        }

        .nav-links a {
            font-size: .88rem;
            font-weight: 700;
            color: #35515a;
            text-decoration: none;
        }

        .nav-links a:hover {
            color: var(--blue);
        }

        .hero {
            min-height: 680px;
            display: flex;
            align-items: center;
            position: relative;
            color: white;
            overflow: hidden;
            background:
                linear-gradient(90deg, rgba(3,32,45,.78), rgba(3,32,45,.22)),
                linear-gradient(0deg, rgba(3,32,45,.35), transparent 60%),
                url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=2200&q=85') center 48%/cover;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 760px;
            padding: 100px 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            text-transform: uppercase;
            letter-spacing: .14em;
            font-size: .75rem;
            font-weight: 800;
            color: #b8f1e8;
            margin-bottom: 18px;
        }

        .eyebrow:before {
            content: "";
            height: 2px;
            width: 28px;
            background: var(--turquoise);
        }

        h1, h2, h3 {
            font-family: 'Manrope', sans-serif;
            line-height: 1.15;
            letter-spacing: -.045em;
        }

        h1 {
            font-size: clamp(2.8rem, 7vw, 5.8rem);
            margin: 0 0 25px;
            max-width: 850px;
        }

        .hero p {
            font-size: clamp(1.05rem, 2vw, 1.25rem);
            max-width: 650px;
            color: rgba(255,255,255,.9);
            margin: 0 0 32px;
        }

        .hero-actions {
            display: flex;
            gap: 13px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 13px 22px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 800;
            transition: transform .25s, background .25s;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .btn-primary {
            background: var(--turquoise);
            color: #062f3b;
        }

        .btn-light {
            background: white;
            color: var(--ocean);
        }

        .quick-wrap {
            position: relative;
            z-index: 2;
            margin-top: -48px;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .quick-item {
            padding: 25px 24px;
            border-right: 1px solid #edf1ee;
        }

        .quick-item:last-child {
            border: 0;
        }

        .quick-item strong {
            display: block;
            color: var(--ocean);
            font-size: 1.05rem;
            margin-bottom: 3px;
        }

        .quick-item span {
            color: var(--muted);
            font-size: .84rem;
        }

        section {
            padding: 95px 0;
        }

        .section-kicker {
            color: var(--blue);
            font-weight: 800;
            font-size: .76rem;
            letter-spacing: .14em;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3.3rem);
            color: var(--ocean);
            margin: 0 0 20px;
        }

        .section-intro {
            max-width: 760px;
            color: var(--muted);
            font-size: 1.08rem;
            margin-bottom: 38px;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 55px;
        }

        .intro-image {
            min-height: 450px;
            border-radius: 26px;
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1100&q=85') center/cover;
            box-shadow: var(--shadow);
        }

        .intro-copy p {
            color: #536a70;
        }

        .highlight {
            border-left: 4px solid var(--turquoise);
            padding: 15px 20px;
            margin-top: 25px;
            background: #edf8f5;
            border-radius: 0 14px 14px 0;
            color: var(--ocean);
            font-weight: 600;
        }

        .beaches-section {
            background: #f0f5f2;
        }

        .beach-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .beach-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(5,45,61,.06);
            transition: transform .3s, box-shadow .3s;
        }

        .beach-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow);
        }

        .beach-photo {
            height: 250px;
            background-size: cover;
            background-position: center;
        }

        .photo-central {
            background-image: url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1000&q=80');
        }

        .photo-sud {
            background-image: url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1000&q=80');
        }

        .photo-graviere {
            background-image: url('https://images.unsplash.com/photo-1455729552865-3658a5d39692?auto=format&fit=crop&w=1000&q=80');
        }

        .photo-nord {
            background-image: url('https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1000&q=80');
        }

        .beach-content {
            padding: 27px;
        }

        .beach-content h3 {
            color: var(--ocean);
            font-size: 1.5rem;
            margin: 0 0 12px;
        }

        .beach-content p {
            color: var(--muted);
            margin: 0;
        }

        .tag {
            display: inline-block;
            background: #e6f5f1;
            color: #087d79;
            font-size: .72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .08em;
            padding: 6px 10px;
            border-radius: 50px;
            margin-bottom: 13px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .feature {
            padding: 27px;
            border: 1px solid #e6eeea;
            border-radius: 18px;
            background: white;
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 15px;
            display: grid;
            place-items: center;
            background: #e5f5f1;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .feature h3 {
            color: var(--ocean);
            font-size: 1.18rem;
            margin: 0 0 10px;
        }

        .feature p {
            color: var(--muted);
            font-size: .94rem;
            margin: 0;
        }

        .surf-section {
            background: var(--ocean);
            color: white;
        }

        .surf-section .section-title {
            color: white;
        }

        .surf-section .section-kicker {
            color: #8de2d7;
        }

        .surf-section .section-intro {
            color: #c4d9dc;
        }

        .surf-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 45px;
            align-items: center;
        }

        .surf-image {
            min-height: 450px;
            border-radius: 25px;
            background: url('https://images.unsplash.com/photo-1455729552865-3658a5d39692?auto=format&fit=crop&w=1100&q=85') center/cover;
        }

        .surf-copy p {
            color: #d1e1e2;
        }

        .surf-list {
            padding-left: 20px;
            color: #d1e1e2;
        }

        .surf-list li {
            margin: 10px 0;
        }

        .access-box {
            background: #eaf6f2;
            border-radius: 25px;
            padding: 38px;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 30px;
            align-items: center;
        }

        .access-box h3 {
            font-size: 1.65rem;
            color: var(--ocean);
            margin: 0 0 12px;
        }

        .access-box p {
            color: #536a70;
            margin: 0;
        }

        .access-symbol {
            font-size: 4rem;
        }

        .season-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(5,45,61,.05);
        }

        .season-table th,
        .season-table td {
            text-align: left;
            padding: 16px 18px;
            border-bottom: 1px solid #edf1ee;
        }

        .season-table th {
            background: var(--ocean);
            color: white;
            font-size: .86rem;
        }

        .season-table td {
            color: #536a70;
        }

        .season-table tr:last-child td {
            border-bottom: 0;
        }

        .warning {
            margin-top: 22px;
            background: #fff4e5;
            border-left: 4px solid #e7a34d;
            padding: 18px 20px;
            border-radius: 0 14px 14px 0;
            color: #79501e;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr .8fr;
            grid-template-rows: 220px 220px;
            gap: 14px;
        }

        .gallery-item {
            border-radius: 18px;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .gallery-item:first-child {
            grid-row: span 2;
        }

        .gallery-one {
            background-image: url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1000&q=85');
        }

        .gallery-two {
            background-image: url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=800&q=85');
        }

        .gallery-three {
            background-image: url('https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=800&q=85');
        }

        .gallery-four {
            background-image: url('https://images.unsplash.com/photo-1455729552865-3658a5d39692?auto=format&fit=crop&w=800&q=85');
        }

        .gallery-five {
            background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=85');
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .tip {
            display: flex;
            gap: 15px;
            padding: 20px;
            background: white;
            border-radius: 16px;
            border: 1px solid #e8eeeb;
        }

        .tip span {
            font-size: 1.5rem;
        }

        .tip p {
            margin: 0;
            color: #536a70;
        }

        .map-section {
            background: #f0f5f2;
        }

        .map-frame {
            width: 100%;
            height: 440px;
            border: 0;
            border-radius: 22px;
            box-shadow: var(--shadow);
        }

        .faq-list {
            max-width: 900px;
        }

        .faq-item {
            background: white;
            border: 1px solid #e8eeeb;
            border-radius: 15px;
            margin-bottom: 12px;
            overflow: hidden;
        }

        .faq-item summary {
            padding: 20px 23px;
            font-weight: 800;
            color: var(--ocean);
            cursor: pointer;
            list-style: none;
            position: relative;
            padding-right: 55px;
        }

        .faq-item summary::-webkit-details-marker {
            display: none;
        }

        .faq-item summary:after {
            content: "+";
            position: absolute;
            right: 22px;
            top: 13px;
            font-size: 1.6rem;
            color: var(--turquoise);
        }

        .faq-item[open] summary:after {
            content: "−";
        }

        .faq-answer {
            padding: 0 23px 21px;
            color: var(--muted);
        }

        .cta {
            background:
                linear-gradient(110deg, rgba(4,42,57,.94), rgba(5,82,96,.83)),
                url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1800&q=80') center/cover;
            color: white;
            text-align: center;
            border-radius: 28px;
            padding: 75px 30px;
        }

        .cta h2 {
            font-size: clamp(2rem, 4vw, 3.4rem);
            max-width: 760px;
            margin: 0 auto 18px;
        }

        .cta p {
            max-width: 650px;
            color: #d3e4e5;
            margin: 0 auto 28px;
        }

        .ad-container {
            margin: 40px auto;
            min-height: 90px;
            text-align: center;
        }

        footer {
            background: #052d3d;
            color: #d2e1e2;
            padding: 45px 0;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            gap: 25px;
            flex-wrap: wrap;
        }

        footer a {
            color: #9ce4db;
            text-decoration: none;
        }

        .reveal {
            opacity: 0;
            transform: translateY(25px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 850px) {
            .nav-links {
                display: none;
            }

            .quick-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-item:nth-child(2) {
                border-right: 0;
            }

            .quick-item:nth-child(-n+2) {
                border-bottom: 1px solid #edf1ee;
            }

            .intro-grid,
            .surf-grid {
                grid-template-columns: 1fr;
            }

            .intro-image {
                min-height: 340px;
            }

            .feature-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-grid {
                grid-template-rows: 180px 180px;
            }
        }

        @media (max-width: 600px) {
            .container {
                width: min(100% - 28px, 1160px);
            }

            .hero {
                min-height: 620px;
            }

            .hero-content {
                padding: 75px 0;
            }

            section {
                padding: 70px 0;
            }

            .quick-grid,
            .beach-grid,
            .feature-grid,
            .tips-grid {
                grid-template-columns: 1fr;
            }

            .quick-item {
                border-right: 0;
                border-bottom: 1px solid #edf1ee;
            }

            .quick-item:last-child {
                border-bottom: 0;
            }

            .beach-photo {
                height: 215px;
            }

            .access-box {
                grid-template-columns: 1fr;
                padding: 27px;
            }

            .access-symbol {
                font-size: 2.7rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 200px 150px 150px;
            }

            .gallery-item:first-child {
                grid-column: span 2;
                grid-row: auto;
            }

            .season-table th,
            .season-table td {
                padding: 12px 10px;
                font-size: .84rem;
            }

            .map-frame {
                height: 330px;
            }

            .topbar-inner {
                justify-content: center;
                text-align: center;
            }
        }

        @media (prefers-reduced-motion: reduce) {
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

    <div class="topbar">
        <div class="container topbar-inner">
            <span>Playas del Cantábrico y del Atlántico</span>
            <span>Soorts-Hossegor · Landas · Francia</span>
        </div>
    </div>

    <header class="navbar">
        <div class="container nav-inner">
            <a class="brand" href="/turismo-norte-espana/playas-cantabrico/">PLAYAS <span>DEL NORTE</span></a>
            <nav class="nav-links" aria-label="Navegación principal">
                <a href="#descubre">Descubre</a>
                <a href="#playas">Las playas</a>
                <a href="#surf">Surf</a>
                <a href="#servicios">Servicios</a>
                <a href="#mapa">Cómo llegar</a>
                <a href="#faq">FAQ</a>
            </nav>
        </div>
    </header>

    <main>

        <section class="hero">
            <div class="container hero-content">
                <div class="eyebrow">Costa de las Landas · Francia</div>
                <h1>Playa de Hossegor, el gran paraíso del surf atlántico</h1>
                <p>
                    Kilómetros de arena dorada, dunas naturales y olas legendarias.
                    Descubre las playas de Hossegor, uno de los destinos más
                    emblemáticos del litoral atlántico francés.
                </p>
                <div class="hero-actions">
                    <a href="#playas" class="btn btn-primary">Explorar las playas ↓</a>
                    <a href="#mapa" class="btn btn-light">Ver ubicación</a>
                </div>
            </div>
        </section>

        <div class="container quick-wrap">
            <div class="quick-grid">
                <div class="quick-item">
                    <strong>Soorts-Hossegor</strong>
                    <span>Landas, Nueva Aquitania</span>
                </div>
                <div class="quick-item">
                    <strong>Océano Atlántico</strong>
                    <span>Playas de arena fina y dunas</span>
                </div>
                <div class="quick-item">
                    <strong>Surf internacional</strong>
                    <span>Olas reconocidas mundialmente</span>
                </div>
                <div class="quick-item">
                    <strong>Plage Sud</strong>
                    <span>Opción destacada de accesibilidad</span>
                </div>
            </div>
        </div>

        <section id="descubre">
            <div class="container intro-grid">
                <div class="intro-copy reveal">
                    <div class="section-kicker">Un litoral espectacular</div>
                    <h2 class="section-title">Hossegor: naturaleza, océano y cultura surfera</h2>
                    <p>
                        En el suroeste de Francia, dentro del departamento de las
                        Landas, Soorts-Hossegor es uno de los destinos costeros
                        más conocidos de la costa atlántica. Sus playas oceánicas
                        combinan grandes extensiones de arena, sistemas dunares
                        y un paisaje abierto al océano.
                    </p>
                    <p>
                        La localidad es especialmente famosa por sus condiciones
                        para practicar surf. Sus rompientes atraen a deportistas
                        de distintos países, pero Hossegor también ofrece espacios
                        para pasear, descansar y disfrutar de la gastronomía
                        y el ambiente de una localidad vacacional.
                    </p>
                    <p>
                        La Plage Centrale es uno de los puntos más animados,
                        mientras que La Sud ofrece un entorno generalmente
                        más resguardado. La Gravière y otros sectores del litoral
                        son conocidos por sus olas exigentes.
                    </p>
                    <div class="highlight">
                        Consejo: si buscas combinar playa, paseo y terrazas,
                        empieza por la Plage Centrale. Si priorizas la
                        accesibilidad, consulta los servicios de la Plage Sud.
                    </div>
                </div>
                <div class="intro-image reveal" role="img" aria-label="Paisaje de playa atlántica"></div>
            </div>
        </section>

        <section class="beaches-section" id="playas">
            <div class="container">
                <div class="section-kicker">Conoce el litoral</div>
                <h2 class="section-title">Las principales playas de Hossegor</h2>
                <p class="section-intro">
                    La costa de Hossegor ofrece ambientes diferentes. Desde
                    playas urbanas con servicios hasta rompientes famosas
                    entre los surfistas, cada zona tiene su propia personalidad.
                </p>

                <div class="beach-grid">

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-central"></div>
                        <div class="beach-content">
                            <span class="tag">Playa urbana</span>
                            <h3>Plage Centrale</h3>
                            <p>
                                Es el corazón playero de Hossegor y se encuentra
                                junto a la Place des Landais. Su paseo marítimo,
                                restaurantes, bares y ambiente veraniego la
                                convierten en una de las zonas más populares.
                                Dispone de puesto de socorro durante el periodo
                                oficial de vigilancia y servicios próximos.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-sud"></div>
                        <div class="beach-content">
                            <span class="tag">Accesibilidad y ambiente familiar</span>
                            <h3>Plage Sud</h3>
                            <p>
                                Destaca por ofrecer un entorno más protegido
                                que otras playas oceánicas de la localidad.
                                Cuenta con accesos adaptados, distintivos
                                Handiplage y Tourisme & Handicap, además de
                                dos sillas anfibias Tiralo disponibles en el
                                puesto de socorro durante la vigilancia.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-graviere"></div>
                        <div class="beach-content">
                            <span class="tag">Surf de alto nivel</span>
                            <h3>Plage de la Gravière</h3>
                            <p>
                                Una de las rompientes más famosas de Hossegor.
                                Sus olas pueden ser rápidas, potentes y tubulares,
                                con rompientes que exigen experiencia. Es un
                                lugar espectacular para contemplar el surf,
                                pero no conviene confundir su fama deportiva
                                con unas condiciones sencillas para bañarse.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-nord"></div>
                        <div class="beach-content">
                            <span class="tag">Entorno más natural</span>
                            <h3>Plage de La Nord</h3>
                            <p>
                                Sector de costa de ambiente más abierto y
                                natural, con arena, dunas y exposición directa
                                al Atlántico. Es una zona para disfrutar del
                                paisaje y del litoral, prestando especial
                                atención a las condiciones del mar y a la
                                señalización local.
                            </p>
                        </div>
                    </article>

                </div>

                <div style="margin-top:28px;max-width:850px;color:#667b80;">
                    <strong>También existe una playa naturista señalizada.</strong>
                    Se encuentra en un sector específico del litoral y tiene
                    su propia regulación. Antes de acudir, consulta los accesos
                    y las fechas de vigilancia municipales.
                </div>
            </div>
        </section>

        <section id="experiencias">
            <div class="container">
                <div class="section-kicker">Mucho más que bañarse</div>
                <h2 class="section-title">Qué hacer en Hossegor</h2>
                <p class="section-intro">
                    La experiencia de Hossegor combina actividades deportivas,
                    naturaleza y ocio junto al mar.
                </p>

                <div class="feature-grid">
                    <article class="feature reveal">
                        <div class="feature-icon">🏄</div>
                        <h3>Surf</h3>
                        <p>
                            Disfruta de una de las grandes referencias europeas
                            del surf. Hay escuelas y opciones de aprendizaje
                            en función de las condiciones y del nivel.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚶</div>
                        <h3>Paseos junto al mar</h3>
                        <p>
                            Recorre los accesos y paseos del frente marítimo,
                            contempla las dunas y disfruta de las vistas
                            abiertas del océano.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🌅</div>
                        <h3>Atardeceres</h3>
                        <p>
                            La costa atlántica ofrece magníficas panorámicas
                            al final del día, cuando la luz cambia sobre
                            el agua y la arena.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🍽️</div>
                        <h3>Gastronomía</h3>
                        <p>
                            Aprovecha la proximidad de bares, restaurantes,
                            terrazas y heladerías de la zona de la Place
                            des Landais.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚴</div>
                        <h3>Ciclismo</h3>
                        <p>
                            Hossegor y su entorno cuentan con recorridos
                            para explorar la localidad y los paisajes
                            naturales de las Landas.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🌿</div>
                        <h3>Naturaleza</h3>
                        <p>
                            Descubre las dunas y los pinares de las Landas,
                            y acércate también al lago marino de Hossegor
                            para conocer otro paisaje de la localidad.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="surf-section" id="surf">
            <div class="container surf-grid">
                <div class="surf-copy reveal">
                    <div class="section-kicker">La capital francesa del surf</div>
                    <h2 class="section-title">Un destino imprescindible para los amantes de las olas</h2>
                    <p>
                        Hossegor es conocida internacionalmente por la calidad
                        y potencia de sus rompientes. La Gravière es uno de
                        sus nombres más reconocidos, con olas que pueden
                        formar tubos rápidos y exigentes.
                    </p>
                    <p>
                        Las condiciones cambian con la marea, el viento,
                        el tamaño del oleaje y la configuración de los
                        bancos de arena. Por eso, una playa que parece
                        tranquila en un momento puede presentar corrientes
                        o rompientes complicadas unas horas después.
                    </p>
                    <ul class="surf-list">
                        <li>Elige un spot adecuado a tu experiencia.</li>
                        <li>Consulta el parte de olas y las condiciones del viento.</li>
                        <li>Respeta las zonas delimitadas para el baño.</li>
                        <li>Utiliza material apropiado y respeta las prioridades.</li>
                        <li>No entres al agua durante tormentas eléctricas.</li>
                    </ul>
                </div>
                <div class="surf-image reveal" role="img" aria-label="Olas del océano para practicar surf"></div>
            </div>
        </section>

        <section id="servicios">
            <div class="container">
                <div class="section-kicker">Información práctica</div>
                <h2 class="section-title">Servicios y vigilancia de las playas</h2>
                <p class="section-intro">
                    Los servicios cambian según el sector y la temporada.
                    La Plage Centrale cuenta con servicios próximos y puesto
                    de socorro en temporada. La Plage Sud destaca por su
                    equipamiento accesible.
                </p>

                <div class="feature-grid">
                    <article class="feature reveal">
                        <div class="feature-icon">🚑</div>
                        <h3>Puestos de socorro</h3>
                        <p>
                            Hay vigilancia estacional en distintas playas.
                            Los periodos no son iguales en todos los sectores.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚻</div>
                        <h3>Sanitarios</h3>
                        <p>
                            La Plage Centrale dispone de aseos y servicios
                            en su entorno. Consulta la señalización para
                            localizar los equipamientos abiertos.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🥤</div>
                        <h3>Restauración</h3>
                        <p>
                            En el entorno de la Place des Landais encontrarás
                            bares, restaurantes, heladerías y otros locales
                            de temporada.
                        </p>
                    </article>
                </div>

                <h3 style="font-size:1.55rem;color:#073b50;margin:55px 0 20px;">
                    Calendario de vigilancia publicado para 2026
                </h3>

                <div style="overflow-x:auto;">
                    <table class="season-table">
                        <thead>
                            <tr>
                                <th>Playa</th>
                                <th>Periodo de vigilancia 2026</th>
                                <th>Horario general</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Plage Sud</td>
                                <td>4 abril – 25 octubre</td>
                                <td>Variable según temporada</td>
                            </tr>
                            <tr>
                                <td>Plage Centrale</td>
                                <td>13 junio – 20 septiembre</td>
                                <td>11:00–19:00 en temporada alta</td>
                            </tr>
                            <tr>
                                <td>Plage Naturiste</td>
                                <td>20 junio – 13 septiembre</td>
                                <td>Consultar calendario municipal</td>
                            </tr>
                            <tr>
                                <td>Plage de la Gravière</td>
                                <td>4 julio – 30 agosto</td>
                                <td>11:00–19:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="warning">
                    <strong>Importante:</strong> estos son los periodos
                    publicados para 2026, no un horario permanente. Fuera
                    del horario de vigilancia la responsabilidad de la
                    actividad recae en cada usuario. Consulta siempre
                    el calendario oficial, los paneles y las banderas
                    antes de entrar en el agua.
                </div>
            </div>
        </section>

        <section id="accesibilidad" style="background:#fff;">
            <div class="container">
                <div class="section-kicker">Playa para todos</div>
                <h2 class="section-title">Accesibilidad en la Plage Sud</h2>

                <div class="access-box reveal">
                    <div>
                        <h3>Una de las opciones más accesibles de Hossegor</h3>
                        <p>
                            La Plage Sud cuenta con los distintivos
                            «Tourisme & Handicap» y «Handiplage». Dispone
                            de una rampa de acceso adaptada, instalaciones
                            accesibles y dos sillas anfibias Tiralo en el
                            puesto de socorro, disponibles durante los
                            horarios de vigilancia. Es recomendable
                            contactar con el servicio municipal antes
                            de la visita para confirmar disponibilidad,
                            condiciones y posibles reservas.
                        </p>
                    </div>
                    <div class="access-symbol" aria-hidden="true">♿</div>
                </div>
            </div>
        </section>

        <section id="galeria">
            <div class="container">
                <div class="section-kicker">Paisajes atlánticos</div>
                <h2 class="section-title">Imágenes de la costa de Hossegor</h2>
                <p class="section-intro">
                    Arena, olas, luz atlántica y paisajes abiertos caracterizan
                    este tramo de la costa de las Landas.
                </p>

                <div class="gallery-grid reveal">
                    <div class="gallery-item gallery-one" role="img" aria-label="Playa atlántica"></div>
                    <div class="gallery-item gallery-two" role="img" aria-label="Olas del océano"></div>
                    <div class="gallery-item gallery-three" role="img" aria-label="Costa y dunas"></div>
                    <div class="gallery-item gallery-four" role="img" aria-label="Mar y surf"></div>
                    <div class="gallery-item gallery-five" role="img" aria-label="Arena y mar"></div>
                </div>
                <p style="font-size:.82rem;color:#829397;margin-top:14px;">
                    Imágenes ilustrativas. Sustituir por fotografías propias
                    o imágenes identificadas específicamente como Hossegor
                    antes de publicar.
                </p>
            </div>
        </section>

        <section id="consejos" style="background:#f0f5f2;">
            <div class="container">
                <div class="section-kicker">Prepara tu visita</div>
                <h2 class="section-title">Consejos para disfrutar de Hossegor</h2>
                <p class="section-intro">
                    El Atlántico es espectacular, pero sus condiciones
                    pueden cambiar rápidamente. Ten en cuenta estas
                    recomendaciones antes de organizar tu día de playa.
                </p>

                <div class="tips-grid">
                    <div class="tip reveal">
                        <span>🌊</span>
                        <p>
                            <strong>Respeta las corrientes.</strong>
                            Las baïnes y las corrientes de retorno pueden
                            ser peligrosas incluso cuando el mar parece
                            relativamente tranquilo.
                        </p>
                    </div>
                    <div class="tip reveal">
                        <span>🚩</span>
                        <p>
                            <strong>Atiende a las banderas.</strong>
                            Durante la vigilancia, báñate en la zona
                            delimitada entre las banderas rojo y amarillo.
                        </p>
                    </div>
                    <div class="tip reveal">
                        <span>🌞</span>
                        <p>
                            <strong>Protégete del sol.</strong>
                            Lleva agua, protección solar, gorra y sombra,
                            especialmente durante las horas centrales.
                        </p>
                    </div>
                    <div class="tip reveal">
                        <span>🚲</span>
                        <p>
                            <strong>Valora ir en bicicleta.</strong>
                            En verano los aparcamientos próximos a las
                            playas pueden llenarse rápidamente.
                        </p>
                    </div>
                    <div class="tip reveal">
                        <span>🐕</span>
                        <p>
                            <strong>Comprueba la normativa para mascotas.</strong>
                            Los permisos y restricciones pueden variar
                            por playa y temporada.
                        </p>
                    </div>
                    <div class="tip reveal">
                        <span>🕒</span>
                        <p>
                            <strong>Consulta las mareas.</strong>
                            La marea y el estado del mar condicionan
                            tanto el surf como las zonas de baño.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="actividades">
            <div class="container">
                <div class="section-kicker">Organiza tu estancia</div>
                <h2 class="section-title">Actividades y experiencias en Hossegor</h2>
                <p class="section-intro">
                    Completa tu visita a la playa con experiencias,
                    excursiones y actividades en los alrededores.
                </p>

                <div id="gyg-widget" style="min-height:250px;">
                    <div data-gyg-widget="auto" data-gyg-partner-id="VW16GKQ"></div>
                </div>
            </div>
        </section>

        <section class="map-section" id="mapa">
            <div class="container">
                <div class="section-kicker">Cómo llegar</div>
                <h2 class="section-title">Ubicación de la Playa de Hossegor</h2>
                <p class="section-intro">
                    Las playas oceánicas se encuentran en Soorts-Hossegor,
                    junto al núcleo urbano y el frente marítimo. La
                    Plage Centrale está próxima a la Place des Landais.
                </p>

                <iframe
                    class="map-frame"
                    src="https://www.google.com/maps?q=Plage+Centrale+Hossegor+France&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de la Plage Centrale de Hossegor">
                </iframe>

                <p style="margin-top:18px;color:#667b80;">
                    <strong>Dirección de referencia:</strong>
                    Boulevard de la Dune, 40150 Soorts-Hossegor, Francia.
                    Comprueba el acceso y el aparcamiento más conveniente
                    según la playa que quieras visitar.
                </p>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <div class="section-kicker">Resolvemos tus dudas</div>
                <h2 class="section-title">Preguntas frecuentes sobre Hossegor</h2>

                <div class="faq-list">
                    <?php foreach ($faqs as $faq): ?>
                        <details class="faq-item">
                            <summary><?= htmlspecialchars($faq["q"], ENT_QUOTES, 'UTF-8') ?></summary>
                            <div class="faq-answer">
                                <?= htmlspecialchars($faq["a"], ENT_QUOTES, 'UTF-8') ?>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="cta reveal">
                    <div class="eyebrow">Descubre la costa atlántica francesa</div>
                    <h2>Hossegor te espera entre dunas, arena y olas legendarias</h2>
                    <p>
                        Un destino para disfrutar del océano, descubrir
                        paisajes naturales y conocer una de las grandes
                        referencias del surf europeo.
                    </p>
                    <a href="#mapa" class="btn btn-primary">Planifica tu visita</a>
                </div>
            </div>
        </section>

        <div class="container ad-container">
            <div id="adcash-zone" data-adcash-zone="mnaewnieki" style="width:100%;text-align:center;"></div>
        </div>

    </main>

    <footer>
        <div class="container footer-inner">
            <div>
                <a class="brand" href="/" style="color:white;">PLAYAS <span>DEL NORTE</span></a>
                <p style="max-width:430px;color:#b9cdcf;">
                    Guía de playas, destinos costeros y lugares para
                    descubrir el litoral del norte de España y las
                    costas atlánticas cercanas.
                </p>
            </div>
            <div>
                <strong>Explora</strong>
                <p><a href="#playas">Playas de Hossegor</a></p>
                <p><a href="#surf">Surf y actividades</a></p>
                <p><a href="#mapa">Ubicación</a></p>
            </div>
        </div>
    </footer>

    <script src="https://widget.getyourguide.com/v2/widget.js" async></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll(".reveal");

            if ("IntersectionObserver" in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible");
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12
                });

                elements.forEach((element) => observer.observe(element));
            } else {
                elements.forEach((element) => element.classList.add("visible"));
            }
        });
    </script>

</body>
</html>
