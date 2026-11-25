
<?php
$pageTitle = "Playa de Lacanau: surf, playas oceánicas, lago y guía para visitarla";
$pageDescription = "Descubre las playas de Lacanau, en la costa atlántica francesa: Plage Centrale, Nord, Sud, Super Sud y las playas del lago de Moutchic y Grande Escoure. Surf, naturaleza y consejos.";
$canonical = "https://www.tudominio.com/francia/lacanau/lugares-interes/playa-de-lacanau/";
$ogImage = "https://www.tudominio.com/images/playa-de-lacanau.jpg";

$faqs = [
    [
        "q" => "¿Dónde está la playa de Lacanau?",
        "a" => "Lacanau se encuentra en el departamento de Gironda, en la región de Nueva Aquitania, al suroeste de Francia. Su litoral atlántico está formado por varios sectores de playa oceánica y, hacia el interior, cuenta con playas junto al lago de Lacanau."
    ],
    [
        "q" => "¿Cuál es la playa más conocida de Lacanau?",
        "a" => "La Plage Centrale, situada en Lacanau-Océan, es la más conocida y concurrida. Está junto al centro turístico, cerca de comercios, restaurantes y servicios."
    ],
    [
        "q" => "¿Qué playas hay en Lacanau?",
        "a" => "En el litoral oceánico destacan Plage Centrale, Plage Nord, Plage Sud o Les Écureuils y Super Sud. Junto al lago se encuentran playas como Le Moutchic y Grande Escoure."
    ],
    [
        "q" => "¿Es Lacanau un buen destino para hacer surf?",
        "a" => "Sí. Lacanau es uno de los destinos conocidos del surf francés. Sus playas oceánicas reciben oleaje atlántico y cuentan con escuelas y zonas para practicar este deporte, siempre respetando las áreas delimitadas y las condiciones del mar."
    ],
    [
        "q" => "¿Qué playa de Lacanau es mejor para familias?",
        "a" => "La Plage Centrale ofrece servicios urbanos y vigilancia estacional. Para disfrutar de aguas generalmente más tranquilas, las playas lacustres de Moutchic y Grande Escoure son alternativas interesantes."
    ],
    [
        "q" => "¿Hay playas vigiladas en Lacanau?",
        "a" => "El municipio dispone de seis puestos de socorro: cuatro en el océano y dos en el lago. La vigilancia se distribuye entre Plage Centrale, Nord, Sud, Super Sud, Moutchic y Grande Escoure, con calendarios y horarios diferentes."
    ],
    [
        "q" => "¿Qué son las baïnes de Lacanau?",
        "a" => "Son depresiones o canales de agua que se forman entre bancos de arena en la costa atlántica. Pueden generar corrientes de retorno muy peligrosas y no siempre son fáciles de identificar. Es fundamental bañarse dentro de las zonas vigiladas."
    ],
    [
        "q" => "¿Se puede visitar Lacanau fuera del verano?",
        "a" => "Sí. Lacanau es un destino interesante durante todo el año para pasear, practicar surf, recorrer los pinares y disfrutar del paisaje. Fuera de la temporada estival, algunos servicios y puestos de vigilancia reducen sus horarios o permanecen cerrados."
    ],
    [
        "q" => "¿Está adaptada la playa de Lacanau para personas con movilidad reducida?",
        "a" => "La playa lacustre de Moutchic dispone de equipamientos de accesibilidad y cuenta con el reconocimiento Handiplage. Conviene consultar con el municipio los servicios y el material disponible durante las fechas de la visita."
    ]
];

$schemaBeach = [
    "@context" => "https://schema.org",
    "@type" => "Beach",
    "name" => "Playa de Lacanau",
    "description" => $pageDescription,
    "url" => $canonical,
    "image" => $ogImage,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Lacanau",
        "addressRegion" => "Gironde, Nouvelle-Aquitaine",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 44.977,
        "longitude" => -1.199
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
            gap: 21px;
            flex-wrap: wrap;
        }

        .nav-links a {
            font-size: .86rem;
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
                linear-gradient(90deg, rgba(3,32,45,.80), rgba(3,32,45,.20)),
                linear-gradient(0deg, rgba(3,32,45,.35), transparent 60%),
                url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=2200&q=85') center 48%/cover;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 780px;
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
            max-width: 670px;
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
            max-width: 780px;
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

        .photo-super {
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
            margin-top: 25px;
            background: #fff4e5;
            border-left: 4px solid #e7a34d;
            padding: 18px 20px;
            border-radius: 0 14px 14px 0;
            color: #79501e;
        }

        .schedule-note {
            margin-top: 25px;
            padding: 24px;
            border: 1px solid #e5eeea;
            border-radius: 18px;
            background: white;
        }

        .schedule-note h3 {
            margin: 0 0 12px;
            color: var(--ocean);
            font-size: 1.3rem;
        }

        .schedule-note p {
            margin: 0;
            color: var(--muted);
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
            padding: 20px 55px 20px 23px;
            font-weight: 800;
            color: var(--ocean);
            cursor: pointer;
            list-style: none;
            position: relative;
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
            <span>Playas del Atlántico</span>
            <span>Lacanau · Gironda · Francia</span>
        </div>
    </div>

    <header class="navbar">
        <div class="container nav-inner">
            <a class="brand" href="/">PLAYAS <span>DEL NORTE</span></a>

            <nav class="nav-links" aria-label="Navegación principal">
                <a href="#descubre">Descubre</a>
                <a href="#playas">Las playas</a>
                <a href="#surf">Surf</a>
                <a href="#lago">El lago</a>
                <a href="#servicios">Servicios</a>
                <a href="#mapa">Ubicación</a>
                <a href="#faq">FAQ</a>
            </nav>
        </div>
    </header>

    <main>

        <section class="hero">
            <div class="container hero-content">
                <div class="eyebrow">Costa atlántica · Gironda · Francia</div>

                <h1>Playa de Lacanau, naturaleza y surf frente al Atlántico</h1>

                <p>
                    Descubre uno de los grandes destinos de la costa
                    francesa: playas interminables, dunas, pinares,
                    cultura surfera y un lago de aguas tranquilas
                    a pocos kilómetros del océano.
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
                    <strong>Lacanau</strong>
                    <span>Gironda, Nueva Aquitania</span>
                </div>
                <div class="quick-item">
                    <strong>16 km de playas</strong>
                    <span>Litoral oceánico</span>
                </div>
                <div class="quick-item">
                    <strong>Surf y naturaleza</strong>
                    <span>Destino atlántico</span>
                </div>
                <div class="quick-item">
                    <strong>Océano y lago</strong>
                    <span>Dos ambientes diferentes</span>
                </div>
            </div>
        </div>

        <section id="descubre">
            <div class="container intro-grid">
                <div class="intro-copy reveal">
                    <div class="section-kicker">Un destino entre océano y bosque</div>

                    <h2 class="section-title">Lacanau: una de las grandes playas de la costa francesa</h2>

                    <p>
                        Situada en el departamento de Gironda, en la
                        región de Nueva Aquitania, Lacanau es uno de
                        los destinos más conocidos de la costa atlántica
                        francesa. Su litoral combina largas extensiones
                        de arena, dunas móviles y bosques de pinos que
                        forman parte del paisaje característico de las
                        Landas y del Médoc.
                    </p>

                    <p>
                        Lacanau-Océan concentra la vida turística junto
                        al mar. La Plage Centrale se encuentra a pocos
                        pasos de restaurantes, comercios y terrazas,
                        mientras que las playas Nord, Sud y Super Sud
                        permiten descubrir sectores de costa con
                        ambientes distintos.
                    </p>

                    <p>
                        A poca distancia del océano se encuentra el
                        lago de Lacanau, un espacio natural de agua
                        dulce con playas como Le Moutchic y Grande
                        Escoure. Allí el ambiente es más tranquilo
                        y se pueden practicar actividades como vela,
                        kayak y paddle surf.
                    </p>

                    <div class="highlight">
                        Una buena forma de conocer Lacanau es combinar
                        el ambiente surfera de la costa oceánica con
                        una tarde de baño y actividades en el lago.
                    </div>
                </div>

                <div class="intro-image reveal" role="img" aria-label="Paisaje de playa atlántica"></div>
            </div>
        </section>

        <section class="beaches-section" id="playas">
            <div class="container">
                <div class="section-kicker">Descubre el litoral</div>

                <h2 class="section-title">Las playas oceánicas de Lacanau</h2>

                <p class="section-intro">
                    La costa de Lacanau ofrece varios sectores de
                    playa con características propias. Desde la
                    animación del centro hasta los rincones más
                    naturales del extremo sur de la estación.
                </p>

                <div class="beach-grid">

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-central"></div>

                        <div class="beach-content">
                            <span class="tag">Playa urbana</span>

                            <h3>Plage Centrale</h3>

                            <p>
                                Es la playa más emblemática de Lacanau-Océan.
                                Se encuentra junto al paseo marítimo,
                                muy cerca de restaurantes, bares y
                                comercios. Su ubicación la convierte
                                en una de las zonas más animadas del
                                destino y en un punto habitual de
                                encuentro para bañistas y surfistas.
                                Dispone de vigilancia estacional,
                                duchas y servicios próximos.
                            </p>

                            <p style="margin-top:12px;">
                                Hay que tener en cuenta que con marea
                                alta la superficie de arena puede
                                reducirse considerablemente. En esas
                                condiciones, las playas Nord y Sud
                                pueden ofrecer más espacio.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-nord"></div>

                        <div class="beach-content">
                            <span class="tag">Surf y ambiente familiar</span>

                            <h3>Plage Nord</h3>

                            <p>
                                Situada al norte del núcleo turístico,
                                es una larga playa de arena bordeada
                                por dunas. El acceso se realiza
                                mediante caminos que atraviesan el
                                entorno dunar y forestal. Es conocida
                                entre los aficionados al surf y
                                cuenta con vigilancia durante
                                determinados periodos del año.
                            </p>

                            <p style="margin-top:12px;">
                                En temporada puede disponer de
                                restauración y escuelas de surf.
                                Su entorno permite disfrutar de
                                una jornada de playa algo más
                                alejada del centro urbano.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-sud"></div>

                        <div class="beach-content">
                            <span class="tag">Les Écureuils</span>

                            <h3>Plage Sud</h3>

                            <p>
                                También conocida como Les Écureuils,
                                se encuentra al sur de la Plage
                                Centrale. Es una alternativa
                                interesante cuando el centro está
                                muy concurrido. El acceso atraviesa
                                la duna por pasarelas y existe
                                una conexión peatonal con la zona
                                central de aproximadamente 600 metros.
                            </p>

                            <p style="margin-top:12px;">
                                Dispone de vigilancia estacional,
                                aseos y espacios para bicicletas.
                                Es un sector apreciado por quienes
                                buscan playa y surf en un ambiente
                                algo menos urbano.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-super"></div>

                        <div class="beach-content">
                            <span class="tag">La más natural</span>

                            <h3>Plage Super Sud</h3>

                            <p>
                                Situada en el extremo sur de
                                Lacanau-Océan, es una de las playas
                                más naturales de la estación.
                                Para llegar a la arena hay que
                                atravesar la duna por los caminos
                                habilitados, lo que contribuye
                                a preservar el entorno.
                            </p>

                            <p style="margin-top:12px;">
                                Cuenta con un gran aparcamiento
                                entre los pinos y vigilancia
                                durante el periodo estival
                                establecido por el municipio.
                                Es una buena opción para quienes
                                buscan un paisaje menos urbanizado.
                            </p>
                        </div>
                    </article>

                </div>

                <div class="lake-banner">
                    <h3>Un litoral de unos 16 kilómetros</h3>
                    <p>
                        El municipio describe el frente oceánico
                        de Lacanau como una sucesión de playas
                        que alcanza aproximadamente 16 kilómetros.
                        Los accesos, servicios y horarios de
                        vigilancia cambian según el sector.
                    </p>
                </div>
            </div>
        </section>

        <section id="experiencias">
            <div class="container">
                <div class="section-kicker">Mucho más que bañarse</div>

                <h2 class="section-title">Qué hacer en Lacanau</h2>

                <p class="section-intro">
                    Lacanau combina deportes de mar, actividades
                    en el lago, rutas por el bosque y una animada
                    vida turística durante los meses de verano.
                </p>

                <div class="feature-grid">

                    <article class="feature reveal">
                        <div class="feature-icon">🏄</div>
                        <h3>Surf</h3>
                        <p>
                            Las playas oceánicas son uno de los
                            grandes atractivos de Lacanau.
                            Hay escuelas y actividades para
                            distintos niveles.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚴</div>
                        <h3>Rutas en bicicleta</h3>
                        <p>
                            Una red de carriles y pistas ciclistas
                            permite recorrer Lacanau, sus pinares,
                            el litoral y el entorno del lago.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🛶</div>
                        <h3>Deportes en el lago</h3>
                        <p>
                            En las zonas habilitadas se pueden
                            practicar kayak, paddle surf, vela
                            y otras actividades náuticas.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🌲</div>
                        <h3>Paseos por el bosque</h3>
                        <p>
                            Los pinares que rodean Lacanau ofrecen
                            rutas para caminar, pedalear y descubrir
                            el paisaje natural de Gironda.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🌅</div>
                        <h3>Atardeceres atlánticos</h3>
                        <p>
                            La orientación oeste de las playas
                            permite contemplar la puesta de sol
                            sobre el océano.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">⛵</div>
                        <h3>Vela y navegación</h3>
                        <p>
                            El lago de Lacanau es un espacio
                            especialmente interesante para
                            descubrir actividades de vela
                            y navegación recreativa.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <section class="surf-section" id="surf">
            <div class="container surf-grid">

                <div class="surf-copy reveal">
                    <div class="section-kicker">Cultura surfera</div>

                    <h2 class="section-title">Lacanau, uno de los destinos clásicos del surf francés</h2>

                    <p>
                        Lacanau forma parte de la cultura surfera
                        de la costa atlántica francesa. Sus playas
                        reciben el oleaje del golfo de Vizcaya y
                        ofrecen rompientes que cambian en función
                        de los bancos de arena, el viento y las mareas.
                    </p>

                    <p>
                        La Plage Centrale es uno de los puntos
                        más emblemáticos de la estación. La ciudad
                        también cuenta con sectores como Nord,
                        Sud y Super Sud, donde se pueden encontrar
                        diferentes ambientes para disfrutar
                        del mar y de los deportes de deslizamiento.
                    </p>

                    <p>
                        Lacanau acoge además competiciones y
                        encuentros vinculados al surf, que
                        contribuyen a su identidad deportiva
                        y turística.
                    </p>

                    <ul class="surf-list">
                        <li>Consulta el estado del mar y el parte de olas.</li>
                        <li>Escoge una zona adecuada a tu nivel.</li>
                        <li>Respeta las zonas delimitadas para el baño.</li>
                        <li>No entres al agua si las condiciones superan tu experiencia.</li>
                        <li>Si eres principiante, considera contratar una clase con una escuela local.</li>
                    </ul>
                </div>

                <div class="surf-image reveal" role="img" aria-label="Surf en una playa atlántica"></div>

            </div>
        </section>

        <section class="lake-section" id="lago">
            <div class="container">

                <div class="section-kicker">La otra cara de Lacanau</div>

                <h2 class="section-title">Las playas del lago de Lacanau</h2>

                <p class="section-intro">
                    A pocos kilómetros de la costa se encuentra
                    el lago de Lacanau, un espacio natural de
                    agua dulce rodeado de vegetación. Sus playas
                    ofrecen una experiencia diferente a la del
                    océano, con zonas de baño generalmente más
                    tranquilas y actividades náuticas.
                </p>

                <div class="beach-grid">

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-lake"></div>

                        <div class="beach-content">
                            <span class="tag">Playa lacustre</span>

                            <h3>Plage du Moutchic</h3>

                            <p>
                                Es una de las playas más populares
                                del lago de Lacanau. Su ambiente
                                familiar, el paisaje arbolado y
                                la proximidad de restaurantes
                                y actividades náuticas la convierten
                                en una alternativa muy atractiva
                                a la costa oceánica.
                            </p>

                            <p style="margin-top:12px;">
                                En sus alrededores se pueden
                                encontrar propuestas de paddle,
                                kayak, vela y otras actividades
                                acuáticas. Cuenta con vigilancia
                                estacional y equipamientos
                                de accesibilidad.
                            </p>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-lake"></div>

                        <div class="beach-content">
                            <span class="tag">Vela y baño</span>

                            <h3>Plage de la Grande Escoure</h3>

                            <p>
                                Situada junto al lago, es una
                                zona de playa de ambiente
                                tranquilo y vinculada a la
                                actividad náutica. Su entorno
                                es especialmente interesante
                                para quienes buscan disfrutar
                                del agua dulce y de los paisajes
                                naturales de Lacanau.
                            </p>

                            <p style="margin-top:12px;">
                                El municipio incluye esta playa
                                entre los sectores con vigilancia
                                estacional. En sus inmediaciones
                                se encuentra la base de actividades
                                de vela y navegación.
                            </p>
                        </div>
                    </article>

                </div>

                <div class="lake-banner reveal">
                    <h3>Océano o lago: dos formas de disfrutar Lacanau</h3>
                    <p>
                        En el Atlántico encontrarás olas, mareas
                        y corrientes propias de la costa abierta.
                        En el lago el agua suele estar más
                        resguardada, lo que favorece actividades
                        como paddle surf, kayak y vela.
                        Aun así, hay que respetar siempre las
                        zonas de baño, las normas de navegación
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
                    El municipio dispone de seis puestos de socorro:
                    cuatro en las playas oceánicas y dos en el lago.
                    Los calendarios varían según el lugar y el
                    momento de la temporada.
                </p>

                <div class="feature-grid">

                    <article class="feature reveal">
                        <div class="feature-icon">🚑</div>
                        <h3>Puestos de socorro</h3>
                        <p>
                            Hay vigilancia estacional en Centrale,
                            Nord, Sud y Super Sud, además de
                            Moutchic y Grande Escoure junto al lago.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚿</div>
                        <h3>Servicios de playa</h3>
                        <p>
                            En las principales playas encontrarás
                            distintos servicios, como aseos,
                            duchas, restauración, zonas de
                            descanso y aparcamientos.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🚲</div>
                        <h3>Acceso en bicicleta</h3>
                        <p>
                            Lacanau cuenta con una red de
                            itinerarios ciclistas que conecta
                            diferentes zonas de la estación,
                            el bosque y el lago.
                        </p>
                    </article>

                </div>

                <div class="schedule-note reveal">
                    <h3>Calendario de vigilancia publicado para 2026</h3>
                    <p>
                        El municipio ha publicado horarios específicos
                        para cada puesto. Como referencia, Plage
                        Centrale cuenta con uno de los calendarios
                        más amplios: desde primavera hasta el
                        1 de noviembre, con horarios variables.
                        En temporada alta, del 4 de julio al
                        30 de agosto, el horario habitual de
                        los puestos oceánicos principales es
                        de 11:00 a 19:00. En las playas del
                        lago la vigilancia se concentra en
                        periodos y franjas horarias diferentes.
                    </p>
                </div>

                <div style="overflow-x:auto;margin-top:30px;">
                    <table style="width:100%;border-collapse:collapse;background:white;border-radius:18px;overflow:hidden;box-shadow:0 10px 30px rgba(5,45,61,.05);">
                        <thead>
                            <tr style="background:#073b50;color:white;">
                                <th style="text-align:left;padding:16px;">Puesto de socorro</th>
                                <th style="text-align:left;padding:16px;">Ubicación</th>
                                <th style="text-align:left;padding:16px;">Temporada 2026</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage Centrale</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Océano</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">25 abril – 1 noviembre, con fechas y horarios específicos</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage Nord</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Océano</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Fechas seleccionadas desde mayo hasta septiembre</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage Sud – Les Écureuils</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Océano</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Fechas seleccionadas desde mayo hasta septiembre</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage Super Sud</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Océano</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">4 julio – 30 agosto</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Plage du Moutchic</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Lago</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Fechas seleccionadas desde mayo hasta agosto</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;">Plage de la Grande Escoure</td>
                                <td style="padding:16px;">Lago</td>
                                <td style="padding:16px;">4 julio – 30 agosto</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p style="font-size:.88rem;color:#829397;margin-top:15px;">
                    Información basada en el calendario municipal
                    publicado para 2026. Consulta la web del
                    Ayuntamiento para comprobar los horarios
                    concretos del día de tu visita.
                </p>

                <div class="warning">
                    <strong>Importante:</strong> no te bañes fuera
                    de las zonas vigiladas cuando exista riesgo
                    de corrientes. Las baïnes pueden generar
                    corrientes de retorno muy fuertes, incluso
                    cuando el agua parece tranquila.
                </div>

            </div>
        </section>

        <section id="accesibilidad" style="background:#fff;">
            <div class="container">

                <div class="section-kicker">Playa para todos</div>

                <h2 class="section-title">Accesibilidad en Lacanau</h2>

                <div class="access-box reveal">
                    <div>
                        <h3>Plage du Moutchic: una opción adaptada junto al lago</h3>

                        <p>
                            La playa de Moutchic cuenta con el
                            reconocimiento Handiplage y dispone
                            de instalaciones destinadas a facilitar
                            el acceso de personas con movilidad
                            reducida. Su entorno lacustre es una
                            alternativa interesante a las playas
                            oceánicas, especialmente para quienes
                            prefieren aguas más resguardadas.
                        </p>

                        <p style="margin-top:12px;">
                            Antes de acudir, conviene confirmar
                            con el municipio la disponibilidad
                            de material adaptado, las condiciones
                            de asistencia y los horarios del
                            servicio durante la temporada.
                        </p>
                    </div>

                    <div class="access-symbol" aria-hidden="true">♿</div>
                </div>

                <div class="lake-banner reveal">
                    <h3>Accesibilidad y entorno natural</h3>
                    <p>
                        Las playas oceánicas tienen accesos que
                        pueden incluir pasarelas y recorridos
                        sobre las dunas. Las pendientes y las
                        condiciones del terreno varían de un
                        sector a otro, por lo que es recomendable
                        comprobar previamente el acceso concreto
                        que se desea utilizar.
                    </p>
                </div>

            </div>
        </section>

        <section id="galeria">
            <div class="container">

                <div class="section-kicker">Paisajes atlánticos</div>

                <h2 class="section-title">Imágenes de Lacanau</h2>

                <p class="section-intro">
                    Dunas, pinares, olas y playas de arena
                    forman parte del paisaje de este destino
                    de la costa francesa.
                </p>

                <div class="gallery-grid reveal">
                    <div class="gallery-item gallery-one" role="img" aria-label="Playa atlántica"></div>
                    <div class="gallery-item gallery-two" role="img" aria-label="Olas del océano"></div>
                    <div class="gallery-item gallery-three" role="img" aria-label="Costa y dunas"></div>
                    <div class="gallery-item gallery-four" role="img" aria-label="Mar y surf"></div>
                    <div class="gallery-item gallery-five" role="img" aria-label="Arena y mar"></div>
                </div>

                <p style="font-size:.82rem;color:#829397;margin-top:14px;">
                    Imágenes ilustrativas de costa y paisaje.
                    Sustituir por fotografías propias o imágenes
                    identificadas específicamente como Lacanau
                    antes de publicar.
                </p>

            </div>
        </section>

        <section id="consejos" style="background:#f0f5f2;">
            <div class="container">

                <div class="section-kicker">Prepara tu visita</div>

                <h2 class="section-title">Consejos para disfrutar de Lacanau</h2>

                <p class="section-intro">
                    El litoral atlántico es espectacular,
                    pero tiene características que conviene
                    conocer antes de entrar al agua.
                </p>

                <div class="tips-grid">

                    <div class="tip reveal">
                        <span>🌊</span>
                        <p>
                            <strong>Ten cuidado con las baïnes.</strong>
                            Las corrientes de retorno pueden
                            arrastrar mar adentro incluso a
                            personas que saben nadar.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🚩</span>
                        <p>
                            <strong>Respeta las banderas.</strong>
                            Báñate únicamente dentro de las
                            zonas autorizadas y durante los
                            horarios de vigilancia.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🌞</span>
                        <p>
                            <strong>Protégete del sol.</strong>
                            Lleva agua, protección solar,
                            gorra y algo de sombra para
                            las horas centrales del día.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🚲</span>
                        <p>
                            <strong>Muévete en bicicleta.</strong>
                            Las pistas ciclistas facilitan
                            el acceso a distintas zonas
                            de playa y al entorno natural.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🐕</span>
                        <p>
                            <strong>Consulta la normativa para perros.</strong>
                            Las restricciones pueden cambiar
                            durante la temporada estival y
                            en las zonas de baño vigiladas.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span>🌲</span>
                        <p>
                            <strong>Cuida las dunas.</strong>
                            Utiliza los accesos señalizados
                            y evita caminar por zonas de
                            vegetación protegida.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <section id="actividades">
            <div class="container">

                <div class="section-kicker">Organiza tu estancia</div>

                <h2 class="section-title">Actividades y experiencias en Lacanau</h2>

                <p class="section-intro">
                    Completa tu visita con actividades en el
                    océano, experiencias en el lago y excursiones
                    por el entorno natural de Gironda.
                </p>

                <div id="gyg-widget" style="min-height:250px;">
                    <div data-gyg-widget="auto" data-gyg-partner-id="VW16GKQ"></div>
                </div>

            </div>
        </section>

        <section class="map-section" id="mapa">
            <div class="container">

                <div class="section-kicker">Cómo llegar</div>

                <h2 class="section-title">Ubicación de la Playa de Lacanau</h2>

                <p class="section-intro">
                    La Plage Centrale se encuentra en Lacanau-Océan,
                    junto al centro turístico. Desde allí puedes
                    desplazarte hacia las playas Nord y Sud o
                    acercarte al lago de Lacanau para conocer
                    Moutchic y Grande Escoure.
                </p>

                <iframe
                    class="map-frame"
                    src="https://www.google.com/maps?q=Plage+Centrale+Lacanau+France&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de la Plage Centrale de Lacanau">
                </iframe>

                <p style="margin-top:18px;color:#667b80;">
                    <strong>Dirección de referencia:</strong>
                    Boulevard de la Plage, 33680 Lacanau-Océan,
                    Francia. Para visitar las playas lacustres,
                    utiliza los accesos específicos de Moutchic
                    y Grande Escoure.
                </p>

            </div>
        </section>

        <section id="faq">
            <div class="container">

                <div class="section-kicker">Resolvemos tus dudas</div>

                <h2 class="section-title">Preguntas frecuentes sobre Lacanau</h2>

                <div class="faq-list">
                    <?php foreach ($faqs as $faq): ?>
                        <details class="faq-item">
                            <summary>
                                <?= htmlspecialchars($faq["q"], ENT_QUOTES, 'UTF-8') ?>
                            </summary>
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
                    <div class="eyebrow">Descubre la costa francesa</div>

                    <h2>Lacanau te espera entre olas, dunas y pinares</h2>

                    <p>
                        Un destino para practicar surf,
                        pasear junto al océano, recorrer
                        los bosques y descubrir la tranquilidad
                        del lago.
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
                <a class="brand" href="/" style="color:white;">
                    PLAYAS <span>DEL NORTE</span>
                </a>

                <p style="max-width:430px;color:#b9cdcf;">
                    Guía de playas, destinos costeros y lugares
                    para descubrir el litoral del norte de España
                    y las costas atlánticas cercanas.
                </p>
            </div>

            <div>
                <strong>Explora</strong>
                <p><a href="#playas">Playas de Lacanau</a></p>
                <p><a href="#surf">Surf y actividades</a></p>
                <p><a href="#lago">Playas del lago</a></p>
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
