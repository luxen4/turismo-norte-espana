
<?php
$pageTitle = "Playa de Biscarrosse: playas, surf, lagos y guía para visitarla";
$pageDescription = "Descubre las playas de Biscarrosse en las Landas francesas: Plage Centrale, Sud, Nord, Le Vivier y las playas del lago. Surf, naturaleza, accesibilidad y consejos.";
$canonical = "https://www.tudominio.com/francia/biscarrosse/lugares-interes/playa-de-biscarrosse/";
$ogImage = "https://www.tudominio.com/images/playa-de-biscarrosse.jpg";

$faqs = [
    [
        "q" => "¿Dónde está la playa de Biscarrosse?",
        "a" => "Biscarrosse se encuentra en el departamento de las Landas, en Nueva Aquitania, al suroeste de Francia. Su litoral combina playas oceánicas abiertas al Atlántico y playas de agua dulce en los lagos de la zona."
    ],
    [
        "q" => "¿Cuál es la playa principal de Biscarrosse?",
        "a" => "La Plage Centrale es la playa más conocida y concurrida de Biscarrosse-Plage. Está junto a la zona peatonal y el centro turístico, con restaurantes, comercios y servicios próximos."
    ],
    [
        "q" => "¿Qué playa de Biscarrosse es mejor para familias?",
        "a" => "La Plage Centrale cuenta con servicios y vigilancia estacional. Para quienes prefieren aguas más tranquilas, las playas lacustres de Maguide y Navarrosse son alternativas interesantes, con condiciones diferentes a las del océano."
    ],
    [
        "q" => "¿Dónde se puede hacer surf en Biscarrosse?",
        "a" => "Las playas oceánicas, especialmente la zona de Plage Sud y Le Vivier, son conocidas por sus condiciones para practicar surf. El estado del mar cambia con el viento, las mareas y los bancos de arena."
    ],
    [
        "q" => "¿Hay playas accesibles en Biscarrosse?",
        "a" => "Sí. Plage Sud dispone de equipamiento adaptado y servicio de acompañamiento para acceder a la arena y facilitar el baño durante determinados horarios de vigilancia. También destacan Maguide y Navarrosse por sus instalaciones accesibles."
    ],
    [
        "q" => "¿Es peligrosa la playa de Biscarrosse?",
        "a" => "El litoral atlántico puede presentar corrientes de retorno, baïnes y rompientes fuertes. Es importante bañarse en las zonas vigiladas delimitadas por los banderines rojo y amarillo y seguir las indicaciones de los socorristas."
    ],
    [
        "q" => "¿Qué diferencia hay entre las playas del océano y las del lago?",
        "a" => "Las playas oceánicas tienen oleaje, mareas y corrientes propias del Atlántico. Las playas lacustres, como Maguide y Navarrosse, tienen aguas generalmente más tranquilas, sin oleaje oceánico, y permiten practicar actividades como paddle surf, kayak y navegación recreativa."
    ],
    [
        "q" => "¿Se puede visitar Biscarrosse fuera del verano?",
        "a" => "Sí. Las playas oceánicas son atractivas para pasear, contemplar el paisaje y practicar actividades al aire libre durante buena parte del año. No obstante, los servicios y la vigilancia se reducen fuera de la temporada estival."
    ]
];

$schemaBeach = [
    "@context" => "https://schema.org",
    "@type" => "Beach",
    "name" => "Playa de Biscarrosse",
    "description" => $pageDescription,
    "url" => $canonical,
    "image" => $ogImage,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Biscarrosse",
        "addressRegion" => "Landes, Nouvelle-Aquitaine",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 44.445,
        "longitude" => -1.254
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
            --shadow: 0 16px 45px rgba(5,45,61,.10);
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

        .photo-nord {
            background-image: url('https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1000&q=80');
        }

        .photo-vivier {
            background-image: url('https://images.unsplash.com/photo-1455729552865-3658a5d39692?auto=format&fit=crop&w=1000&q=80');
        }

        .photo-lake {
            background-image: url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1000&q=80');
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

        .lake-section {
            background: #f0f5f2;
        }

        .lake-banner {
            padding: 35px;
            border-radius: 25px;
            background: #e2f1ed;
            color: var(--ocean);
            margin-top: 35px;
        }

        .lake-banner h3 {
            font-size: 1.6rem;
            margin: 0 0 12px;
        }

        .lake-banner p {
            color: #536a70;
            margin: 0;
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
            <span>Biscarrosse · Landas · Francia</span>
        </div>
    </div>

    <header class="navbar">
        <div class="container nav-inner">
            <a class="brand" href="/">PLAYAS <span>DEL NORTE</span></a>
            <nav class="nav-links" aria-label="Navegación principal">
                <a href="#descubre">Descubre</a>
                <a href="#playas">Las playas</a>
                <a href="#lagos">Los lagos</a>
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
                <h1>Playa de Biscarrosse, océano, dunas y lagos naturales</h1>
                <p>
                    Descubre uno de los grandes destinos costeros de las Landas:
                    kilómetros de arena atlántica, playas de surf, pinares y
                    lagos de aguas tranquilas para disfrutar de la naturaleza.
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
                    <strong>Biscarrosse</strong>
                    <span>Landas, Nueva Aquitania</span>
                </div>
                <div class="quick-item">
                    <strong>5 km de costa</strong>
                    <span>Playas oceánicas de arena</span>
                </div>
                <div class="quick-item">
                    <strong>Surf y naturaleza</strong>
                    <span>Un litoral abierto al Atlántico</span>
                </div>
                <div class="quick-item">
                    <strong>Océano y lagos</strong>
                    <span>Dos experiencias diferentes</span>
                </div>
            </div>
        </div>

        <section id="descubre">
            <div class="container intro-grid">
                <div class="intro-copy reveal">
                    <div class="section-kicker">Un destino entre agua y bosque</div>
                    <h2 class="section-title">Biscarrosse: mucho más que una playa</h2>
                    <p>
                        En el departamento francés de las Landas, Biscarrosse
                        reúne algunos de los paisajes más característicos
                        del suroeste atlántico. Sus playas oceánicas se
                        extienden al pie de grandes dunas, rodeadas por
                        pinares y abiertas a las olas del golfo de Vizcaya.
                    </p>
                    <p>
                        La Plage Centrale es el punto más conocido de
                        Biscarrosse-Plage, con acceso desde la zona peatonal
                        y una oferta de comercios, restaurantes y actividades.
                        Hacia el norte y el sur se suceden otros sectores
                        de costa con ambientes más naturales.
                    </p>
                    <p>
                        Pero Biscarrosse tiene otra cara: sus lagos.
                        El lago de Cazaux-Sanguinet y el lago de
                        Biscarrosse-Parentis ofrecen paisajes y actividades
                        diferentes, con zonas de baño más tranquilas
                        que las playas oceánicas.
                    </p>
                    <div class="highlight">
                        Consejo: combina una mañana en la playa oceánica
                        con una tarde junto al lago. Son dos ambientes
                        muy distintos y ambos forman parte de la identidad
                        de Biscarrosse.
                    </div>
                </div>
                <div class="intro-image reveal" role="img" aria-label="Paisaje de playa atlántica"></div>
            </div>
        </section>

        <section class="beaches-section" id="playas">
            <div class="container">
                <div class="section-kicker">Conoce el litoral</div>
                <h2 class="section-title">Las playas oceánicas de Biscarrosse</h2>
                <p class="section-intro">
                    La costa de Biscarrosse ofrece varios sectores de playa
                    con diferentes ambientes. Desde la zona urbana y
                    animada hasta rincones naturales rodeados de dunas.
                </p>

                <div class="beach-grid">

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-central"></div>
                        <div class="beach-content">
                            <span class="tag">Playa urbana</span>
                            <h3>Plage Centrale</h3>
                            <p>
                                Es la playa más conocida y concurrida de
                                Biscarrosse-Plage. Se encuentra al final
                                de la calle peatonal y junto al centro
                                turístico, por lo que resulta cómoda para
                                combinar el baño con restaurantes, comercios
                                y terrazas. Cuenta con servicios próximos
                                y vigilancia estacional.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-sud"></div>
                        <div class="beach-content">
                            <span class="tag">Surf y accesibilidad</span>
                            <h3>Plage Sud</h3>
                            <p>
                                Es uno de los sectores más conocidos del
                                litoral y dispone de un puesto de socorro
                                principal durante buena parte de la temporada.
                                Sus condiciones atraen a surfistas, aunque
                                el oleaje y las corrientes exigen precaución.
                                También destaca por sus equipamientos
                                de accesibilidad y baño asistido.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-nord"></div>
                        <div class="beach-content">
                            <span class="tag">Costa abierta</span>
                            <h3>Plage Nord</h3>
                            <p>
                                Una extensa zona de arena al norte del
                                centro de Biscarrosse-Plage. Permite
                                disfrutar de paseos junto al mar y de
                                un paisaje más abierto. En temporada
                                cuenta con vigilancia en los periodos
                                establecidos por el municipio.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-vivier"></div>
                        <div class="beach-content">
                            <span class="tag">Naturaleza y dunas</span>
                            <h3>Plage du Vivier</h3>
                            <p>
                                Situada al norte de Biscarrosse-Plage,
                                destaca por su entorno natural y su
                                acceso a través del pinar y las dunas.
                                El recorrido desde el aparcamiento
                                permite descubrir un paisaje menos
                                urbanizado. Es una zona apreciada por
                                los aficionados al surf y a los paseos.
                            </p>
                        </div>
                    </article>

                </div>

                <div style="margin-top:28px;max-width:850px;color:#667b80;">
                    <strong>Un litoral de varios kilómetros:</strong>
                    las playas se suceden a lo largo de la costa y
                    ofrecen diferentes accesos y servicios. No todos
                    los sectores tienen vigilancia ni equipamientos
                    permanentes.
                </div>
            </div>
        </section>

        <section id="experiencias">
            <div class="container">
                <div class="section-kicker">Mucho más que bañarse</div>
                <h2 class="section-title">Qué hacer en Biscarrosse</h2>
                <p class="section-intro">
                    La localidad permite combinar actividades de playa,
                    deportes acuáticos, naturaleza y ocio al aire libre.
                </p>

                <div class="feature-grid">
                    <article class="feature reveal">
                        <div class="feature-icon">🏄</div>
                        <h3>Surf</h3>
                        <p>
                            Las playas oceánicas son conocidas por sus
                            olas y cuentan con escuelas y actividades
                            para distintos niveles, según las condiciones.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚶</div>
                        <h3>Paseos por las dunas</h3>
                        <p>
                            Recorre los accesos y senderos del entorno
                            dunar y disfruta de las vistas sobre el
                            Atlántico y los pinares.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚴</div>
                        <h3>Ciclismo</h3>
                        <p>
                            Las rutas ciclistas permiten descubrir
                            los bosques de las Landas, la costa y
                            los alrededores de los lagos.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🛶</div>
                        <h3>Actividades en el lago</h3>
                        <p>
                            En las zonas habilitadas puedes practicar
                            kayak, paddle surf, vela y otras actividades
                            náuticas recreativas.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🌅</div>
                        <h3>Atardeceres</h3>
                        <p>
                            La costa atlántica ofrece magníficas
                            panorámicas al final del día, con la
                            puesta de sol sobre el océano.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🌲</div>
                        <h3>Entorno natural</h3>
                        <p>
                            Los pinares, las dunas y los espacios
                            naturales próximos permiten disfrutar
                            de rutas y observación del paisaje.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="surf-section" id="surf">
            <div class="container surf-grid">
                <div class="surf-copy reveal">
                    <div class="section-kicker">El Atlántico en estado puro</div>
                    <h2 class="section-title">Biscarrosse, destino para los amantes del surf</h2>
                    <p>
                        Las playas oceánicas de Biscarrosse forman parte
                        de la extensa costa surfera de las Landas.
                        Sus bancos de arena generan rompientes que
                        cambian con las mareas, el viento y el oleaje.
                    </p>
                    <p>
                        Plage Sud y Le Vivier son dos de los sectores
                        conocidos entre los aficionados a este deporte.
                        En la zona también hay escuelas que ofrecen
                        clases y alquiler de material en temporada.
                    </p>
                    <ul class="surf-list">
                        <li>Comprueba el parte de olas antes de entrar al agua.</li>
                        <li>Elige una zona adecuada a tu nivel de experiencia.</li>
                        <li>Respeta las áreas delimitadas para el baño.</li>
                        <li>Evita bañarte fuera de las zonas vigiladas si no conoces el litoral.</li>
                        <li>Consulta las indicaciones de los socorristas.</li>
                    </ul>
                </div>
                <div class="surf-image reveal" role="img" aria-label="Olas del océano para practicar surf"></div>
            </div>
        </section>

        <section class="lake-section" id="lagos">
            <div class="container">
                <div class="section-kicker">La otra cara de Biscarrosse</div>
                <h2 class="section-title">Las playas de los lagos: aguas más tranquilas</h2>
                <p class="section-intro">
                    Además del Atlántico, Biscarrosse cuenta con playas
                    lacustres de agua dulce. Son una alternativa
                    interesante para quienes buscan actividades
                    acuáticas en un entorno diferente al de las
                    playas oceánicas.
                </p>

                <div class="beach-grid">

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-lake"></div>
                        <div class="beach-content">
                            <span class="tag">Lago de Cazaux-Sanguinet</span>
                            <h3>Plage de Maguide</h3>
                            <p>
                                Una de las playas lacustres más populares
                                de Biscarrosse. Sus aguas suelen ser
                                tranquilas y poco profundas cerca de
                                la orilla. Cuenta con actividades
                                náuticas, restaurantes y servicios
                                de temporada. También dispone de
                                equipamientos específicos de accesibilidad.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-lake"></div>
                        <div class="beach-content">
                            <span class="tag">Lago de Cazaux-Sanguinet</span>
                            <h3>Plage de Navarrosse</h3>
                            <p>
                                Situada en el entorno lacustre de
                                Biscarrosse, es conocida por sus
                                aguas generalmente tranquilas y
                                su ambiente familiar. La escasa
                                profundidad en una amplia franja
                                próxima a la orilla la convierte
                                en una opción atractiva para
                                disfrutar del baño y de actividades
                                junto al agua.
                            </p>
                        </div>
                    </article>

                </div>

                <div class="lake-banner reveal">
                    <h3>Océano o lago: elige la experiencia que buscas</h3>
                    <p>
                        Las playas oceánicas están expuestas a las mareas,
                        las corrientes y el oleaje del Atlántico. Las
                        playas lacustres ofrecen un entorno generalmente
                        más calmado, pero también requieren respetar
                        las zonas de baño, las normas de navegación
                        y las indicaciones de vigilancia.
                    </p>
                </div>
            </div>
        </section>

        <section id="servicios">
            <div class="container">
                <div class="section-kicker">Información práctica</div>
                <h2 class="section-title">Servicios y vigilancia de las playas</h2>
                <p class="section-intro">
                    Biscarrosse cuenta con varios puestos de socorro
                    en la costa oceánica y en las playas lacustres.
                    Los horarios y periodos de apertura varían
                    según el sector y la época del año.
                </p>

                <div class="feature-grid">
                    <article class="feature reveal">
                        <div class="feature-icon">🚑</div>
                        <h3>Puestos de socorro</h3>
                        <p>
                            Existen puestos de vigilancia en las playas
                            Centrale, Nord, Sud y Vivier, además de
                            puntos de socorro en determinadas playas
                            lacustres durante la temporada.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚻</div>
                        <h3>Sanitarios y equipamientos</h3>
                        <p>
                            En los principales accesos turísticos
                            encontrarás servicios como aseos,
                            restauración y aparcamientos. La
                            disponibilidad concreta depende del sector.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚲</div>
                        <h3>Accesos y aparcamiento</h3>
                        <p>
                            La Plage Centrale está conectada con
                            la zona peatonal. También hay accesos
                            en coche y bicicleta en otros sectores,
                            como Plage Sud y Le Vivier.
                        </p>
                    </article>
                </div>

                <div class="warning">
                    <strong>Seguridad en el baño:</strong> el municipio
                    recomienda acercarse a las zonas vigiladas.
                    Durante el horario de vigilancia, la zona de baño
                    autorizada se identifica mediante banderas
                    rojo y amarillo. La bandera roja indica baño
                    prohibido. Respeta también las indicaciones
                    específicas de las zonas de actividades náuticas.
                </div>

                <h3 style="font-size:1.55rem;color:#073b50;margin:55px 0 20px;">
                    Puestos de vigilancia y calendario
                </h3>

                <div style="overflow-x:auto;">
                    <table style="width:100%;border-collapse:collapse;background:white;border-radius:18px;overflow:hidden;box-shadow:0 10px 30px rgba(5,45,61,.05);">
                        <thead>
                            <tr style="background:#073b50;color:white;">
                                <th style="text-align:left;padding:16px;">Puesto</th>
                                <th style="text-align:left;padding:16px;">Periodo estival habitual</th>
                                <th style="text-align:left;padding:16px;">Teléfono</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage Centrale</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Temporada de verano</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">05 58 78 20 76</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage Sud</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Periodo ampliado según calendario municipal</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">05 58 78 20 34</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage Nord</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Temporada de verano</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">05 58 78 19 58</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;">Plage du Vivier</td>
                                <td style="padding:16px;">Temporada de verano</td>
                                <td style="padding:16px;">05 58 78 30 67</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p style="font-size:.88rem;color:#829397;margin-top:15px;">
                    Teléfonos de los puestos publicados en el directorio
                    de playas de las Landas. Los periodos exactos y
                    horarios deben comprobarse en el calendario municipal
                    de cada temporada.
                </p>
            </div>
        </section>

        <section id="accesibilidad" style="background:#fff;">
            <div class="container">
                <div class="section-kicker">Playa para todos</div>
                <h2 class="section-title">Accesibilidad en Biscarrosse</h2>

                <div class="access-box reveal">
                    <div>
                        <h3>Plage Sud: acceso adaptado y baño asistido</h3>
                        <p>
                            Plage Sud dispone de equipamientos reconocidos
                            por Handiplage. Cuenta con plazas de
                            aparcamiento reservadas, zona de recepción,
                            alfombra de acceso y una silla anfibia Tiralo.
                            El acceso final a la arena puede requerir
                            la intervención del personal de socorrismo
                            debido a la pendiente del recorrido sobre
                            la duna. El acompañamiento y el baño asistido
                            están sujetos a los horarios de servicio.
                        </p>
                    </div>
                    <div class="access-symbol" aria-hidden="true">♿</div>
                </div>

                <div class="lake-banner reveal">
                    <h3>También hay alternativas accesibles junto al lago</h3>
                    <p>
                        Maguide y Navarrosse cuentan con instalaciones
                        adaptadas para personas con movilidad reducida.
                        Maguide destaca por sus accesos de superficie
                        firme, plazas reservadas y sillas anfibias.
                        Comprueba la disponibilidad de los equipos
                        y la asistencia antes de desplazarte.
                    </p>
                </div>
            </div>
        </section>

        <section id="galeria">
            <div class="container">
                <div class="section-kicker">Paisajes de las Landas</div>
                <h2 class="section-title">Imágenes de Biscarrosse</h2>
                <p class="section-intro">
                    Arena atlántica, dunas, pinares y lagos forman
                    un paisaje muy característico del suroeste francés.
                </p>

                <div class="gallery-grid reveal">
                    <div class="gallery-item gallery-one" role="img" aria-label="Playa atlántica"></div>
                    <div class="gallery-item gallery-two" role="img" aria-label="Olas del océano"></div>
                    <div class="gallery-item gallery-three" role="img" aria-label="Costa y dunas"></div>
                    <div class="gallery-item gallery-four" role="img" aria-label="Mar y surf"></div>
                    <div class="gallery-item gallery-five" role="img" aria-label="Arena y mar"></div>
                </div>
                <p style="font-size:.82rem;color:#829397;margin-top:14px;">
                    Imágenes ilustrativas. Sustituir por fotografías
                    propias o imágenes identificadas específicamente
                    como Biscarrosse antes de publicar.
                </p>
            </div>
        </section>

        <section id="consejos" style="background:#f0f5f2;">
            <div class="container">
                <div class="section-kicker">Prepara tu visita</div>
                <h2 class="section-title">Consejos para disfrutar de Biscarrosse</h2>
                <p class="section-intro">
                    La costa atlántica es espectacular, pero conviene
                    conocer sus particularidades para disfrutarla
                    con seguridad.
                </p>

                <div class="tips-grid">
                    <div class="tip reveal">
                        <span>🌊</span>
                        <p>
                            <strong>Respeta las corrientes.</strong>
                            Las baïnes y corrientes de retorno pueden
                            ser peligrosas incluso cuando el mar
                            parece relativamente tranquilo.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🚩</span>
                        <p>
                            <strong>Atiende a las banderas.</strong>
                            Durante la vigilancia, báñate dentro
                            de la zona delimitada por las banderas
                            rojo y amarillo.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🌞</span>
                        <p>
                            <strong>Protégete del sol.</strong>
                            Lleva agua, protección solar, gorra
                            y sombra, especialmente durante
                            las horas centrales.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🚲</span>
                        <p>
                            <strong>Valora ir en bicicleta.</strong>
                            Las rutas ciclistas de las Landas
                            permiten desplazarse entre pinares,
                            playas y lagos.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🐕</span>
                        <p>
                            <strong>Comprueba la normativa para mascotas.</strong>
                            Los permisos y restricciones pueden
                            variar por playa y periodo de vigilancia.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🧭</span>
                        <p>
                            <strong>Planifica los accesos.</strong>
                            Le Vivier requiere caminar desde el
                            aparcamiento por un entorno natural.
                            Lleva calzado adecuado.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="actividades">
            <div class="container">
                <div class="section-kicker">Organiza tu estancia</div>
                <h2 class="section-title">Actividades y experiencias en Biscarrosse</h2>
                <p class="section-intro">
                    Completa tu visita con actividades en el océano,
                    experiencias en los lagos y excursiones por
                    el entorno natural de las Landas.
                </p>

                <div id="gyg-widget" style="min-height:250px;">
                    <div data-gyg-widget="auto" data-gyg-partner-id="VW16GKQ"></div>
                </div>
            </div>
        </section>

        <section class="map-section" id="mapa">
            <div class="container">
                <div class="section-kicker">Cómo llegar</div>
                <h2 class="section-title">Ubicación de la Playa de Biscarrosse</h2>
                <p class="section-intro">
                    La Plage Centrale se encuentra en Biscarrosse-Plage,
                    junto al núcleo turístico y la zona peatonal.
                    Desde allí puedes recorrer el litoral y acceder
                    a otros sectores de playa.
                </p>

                <iframe
                    class="map-frame"
                    src="https://www.google.com/maps?q=Plage+Centrale+Biscarrosse+France&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de la Plage Centrale de Biscarrosse">
                </iframe>

                <p style="margin-top:18px;color:#667b80;">
                    <strong>Dirección de referencia:</strong>
                    Plage Centrale, Biscarrosse-Plage, 40600 Biscarrosse,
                    Francia. Para Maguide y Navarrosse utiliza sus
                    accesos específicos junto al lago.
                </p>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <div class="section-kicker">Resolvemos tus dudas</div>
                <h2 class="section-title">Preguntas frecuentes sobre Biscarrosse</h2>

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
                    <div class="eyebrow">Descubre las Landas francesas</div>
                    <h2>Biscarrosse te espera entre océano, pinares y lagos</h2>
                    <p>
                        Un destino para disfrutar del surf, pasear
                        por las dunas, descubrir playas naturales
                        y relajarse junto a sus lagos.
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
                <p><a href="#playas">Playas de Biscarrosse</a></p>
                <p><a href="#lagos">Playas de los lagos</a></p>
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
