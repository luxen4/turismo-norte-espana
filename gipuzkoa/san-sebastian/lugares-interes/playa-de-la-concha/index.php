
<?php
$pageTitle = 'Playa de La Concha (San Sebastián): qué ver, servicios y cómo llegar';
$pageDescription = 'Descubre la Playa de La Concha en San Sebastián: arena dorada, aguas tranquilas, paseo marítimo, servicios, actividades, accesibilidad y consejos para visitarla.';
$canonical = 'https://www.tudominio.com/gipuzkoa/san-sebastian/lugares-interes/playa-de-la-concha/';
$ogImage = 'https://www.tudominio.com/images/playa-de-la-concha-san-sebastian.jpg';

$beach = [
    'name' => 'Playa de La Concha',
    'city' => 'San Sebastián',
    'region' => 'Gipuzkoa',
    'country' => 'España',
    'length' => '1.350 metros',
    'width' => '40 metros de anchura media',
    'type' => 'Playa urbana de arena fina y dorada',
    'tag' => 'Paisaje, baño y paseo marítimo',
    'localidad' => 'san-sebastian',
    'archivo' => 'playa-de-la-concha'
];

$images = [
    'hero' => 'https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=2000&q=85',
    'beach' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=85',
    'sea' => 'https://images.unsplash.com/photo-1518837695005-2083093ee35b?auto=format&fit=crop&w=1200&q=85',
    'coast' => 'https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1200&q=85',
    'sunset' => 'https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?auto=format&fit=crop&w=1200&q=85'
];

$faqs = [
    [
        'question' => '¿Dónde está la Playa de La Concha?',
        'answer' => 'La Playa de La Concha se encuentra en pleno centro de San Sebastián, en Gipuzkoa, dentro de la bahía del mismo nombre. Está rodeada por el monte Urgull, el monte Igeldo y la isla de Santa Clara.'
    ],
    [
        'question' => '¿Cuánto mide la Playa de La Concha?',
        'answer' => 'Tiene aproximadamente 1.350 metros de longitud y una anchura media de unos 40 metros, aunque la superficie disponible varía con las mareas.'
    ],
    [
        'question' => '¿Es una playa adecuada para ir con niños?',
        'answer' => 'Sus aguas generalmente tranquilas y su ubicación protegida dentro de la bahía la convierten en una opción interesante para familias. Conviene consultar siempre el estado del mar y respetar las indicaciones de los socorristas.'
    ],
    [
        'question' => '¿Qué servicios tiene la playa?',
        'answer' => 'Dispone de duchas, aseos, vestuarios y guardarropas en temporada, alquiler de toldos y hamacas, socorrismo en verano y diferentes opciones para practicar actividades náuticas.'
    ],
    [
        'question' => '¿Se puede acceder a la playa con movilidad reducida?',
        'answer' => 'La playa dispone de rampas, aseos adaptados, ducha accesible y una pasarela accesible durante la temporada de baño. También ofrece servicio de baño asistido en verano, con condiciones y horarios específicos.'
    ],
    [
        'question' => '¿Se puede practicar paddle surf en La Concha?',
        'answer' => 'Sí. La bahía permite disfrutar de actividades como paddle surf y piragüismo, además de otras propuestas náuticas. La disponibilidad de alquileres y actividades depende de la temporada y las condiciones del mar.'
    ],
    [
        'question' => '¿Qué se puede visitar cerca de La Concha?',
        'answer' => 'Desde la playa puedes recorrer el paseo de La Concha, acercarte al Palacio de Miramar, visitar la Parte Vieja, descubrir el puerto o contemplar las vistas de la isla de Santa Clara.'
    ],
    [
        'question' => '¿Hay aparcamiento cerca de la playa?',
        'answer' => 'Existen aparcamientos subterráneos en el entorno del centro, como el Parking Kontxa y el Parking San Martín. En verano y en días de gran afluencia es recomendable llegar en transporte público.'
    ]
];

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Beach',
    'name' => 'Playa de La Concha',
    'description' => $pageDescription,
    'url' => $canonical,
    'image' => $ogImage,
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'San Sebastián',
        'addressRegion' => 'Gipuzkoa',
        'addressCountry' => 'ES'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 43.3154,
        'longitude' => -1.9914
    ],
    'containedInPlace' => [
        '@type' => 'City',
        'name' => 'San Sebastián'
    ]
];

$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => []
];

foreach ($faqs as $faq) {
    $faqSchema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer']
        ]
    ];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">

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

    <meta name="theme-color" content="#073b4c">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

    <script type="application/ld+json">
        <?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <script type="application/ld+json">
        <?= json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <style>
        :root {
            --navy: #073b4c;
            --blue: #087e8b;
            --turquoise: #28a9a1;
            --sand: #f5efe3;
            --cream: #fcfaf6;
            --ink: #19323b;
            --muted: #64777c;
            --white: #fff;
            --radius: 22px;
            --shadow: 0 15px 45px rgba(7, 59, 76, .09);
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
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
            background: var(--cream);
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
            background: var(--navy);
            color: #d8eeee;
            padding: 9px 20px;
            font-size: .78rem;
            text-align: center;
            letter-spacing: .5px;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(252, 250, 246, .94);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(7, 59, 76, .08);
        }

        .nav-inner {
            min-height: 76px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
        }

        .brand {
            font-weight: 800;
            font-size: 1.12rem;
            color: var(--navy);
            letter-spacing: -.5px;
        }

        .brand span {
            color: var(--turquoise);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
            font-size: .88rem;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: var(--turquoise);
        }

        .nav-cta {
            background: var(--navy);
            color: white !important;
            padding: 11px 18px;
            border-radius: 50px;
        }

        .hero {
            min-height: 660px;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: var(--navy);
            color: white;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(3, 34, 47, .84), rgba(3, 34, 47, .35) 65%, rgba(3, 34, 47, .12)),
                url('<?= htmlspecialchars($images['hero'], ENT_QUOTES, 'UTF-8') ?>') center 48% / cover;
            transform: scale(1.04);
            animation: heroZoom 14s ease-in-out infinite alternate;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 760px;
            padding: 100px 0;
            animation: fadeUp .9s ease both;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: .73rem;
            font-weight: 800;
            color: #a7e5dc;
            margin-bottom: 22px;
        }

        .eyebrow::before {
            content: "";
            width: 30px;
            height: 2px;
            background: var(--turquoise);
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            line-height: 1.15;
        }

        h1 {
            font-size: clamp(3rem, 7vw, 5.8rem);
            letter-spacing: -2px;
            margin-bottom: 24px;
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.18rem);
            max-width: 620px;
            color: rgba(255,255,255,.88);
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 14px 23px;
            border-radius: 50px;
            font-weight: 700;
            font-size: .9rem;
            transition: .3s ease;
        }

        .btn-primary {
            background: var(--turquoise);
            color: white;
        }

        .btn-outline {
            border: 1px solid rgba(255,255,255,.65);
            color: white;
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0,0,0,.18);
        }

        .hero-location {
            position: absolute;
            right: 30px;
            bottom: 30px;
            z-index: 2;
            font-size: .8rem;
            color: white;
            background: rgba(0,0,0,.28);
            padding: 10px 17px;
            border-radius: 50px;
            backdrop-filter: blur(8px);
        }

        .quick-facts {
            position: relative;
            z-index: 3;
            margin-top: -48px;
        }

        .facts-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 28px 15px;
        }

        .fact {
            text-align: center;
            padding: 8px 14px;
            border-right: 1px solid #e8eeee;
        }

        .fact:last-child {
            border: 0;
        }

        .fact strong {
            display: block;
            color: var(--navy);
            font-size: 1.25rem;
            font-weight: 800;
        }

        .fact span {
            font-size: .79rem;
            color: var(--muted);
        }

        section {
            padding: 100px 0;
        }

        .section-heading {
            max-width: 720px;
            margin-bottom: 45px;
        }

        .section-kicker {
            color: var(--turquoise);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: .72rem;
            font-weight: 800;
            margin-bottom: 13px;
        }

        h2 {
            color: var(--navy);
            font-size: clamp(2.1rem, 4vw, 3.3rem);
            margin-bottom: 19px;
        }

        h3 {
            color: var(--navy);
            font-size: 1.45rem;
            margin-bottom: 12px;
        }

        .section-heading p,
        .body-copy {
            color: var(--muted);
            font-size: 1rem;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 65px;
        }

        .intro-image {
            position: relative;
        }

        .intro-image img {
            height: 480px;
            border-radius: 180px 180px 22px 22px;
            box-shadow: var(--shadow);
        }

        .image-note {
            position: absolute;
            bottom: 24px;
            left: -25px;
            background: white;
            padding: 17px 22px;
            border-radius: 14px;
            box-shadow: var(--shadow);
            font-size: .85rem;
            font-weight: 700;
            color: var(--navy);
        }

        .intro-copy p {
            margin-bottom: 17px;
            color: var(--muted);
        }

        .highlight {
            color: var(--navy);
            font-weight: 700;
        }

        .text-link {
            display: inline-block;
            margin-top: 10px;
            color: var(--blue);
            font-weight: 800;
            border-bottom: 2px solid var(--turquoise);
        }

        .experiences {
            background: var(--sand);
        }

        .experience-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .experience-card {
            background: white;
            padding: 30px;
            border-radius: var(--radius);
            transition: .35s ease;
            border: 1px solid rgba(7,59,76,.04);
        }

        .experience-card:hover {
            transform: translateY(-9px);
            box-shadow: var(--shadow);
        }

        .card-icon {
            width: 53px;
            height: 53px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            background: #e3f5f1;
            color: var(--blue);
            font-size: 1.5rem;
            margin-bottom: 22px;
        }

        .experience-card p {
            color: var(--muted);
            font-size: .92rem;
        }

        .landscape-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 55px;
            align-items: center;
        }

        .landscape-grid img {
            height: 460px;
            border-radius: var(--radius);
        }

        .feature-list {
            list-style: none;
            margin-top: 25px;
        }

        .feature-list li {
            display: flex;
            gap: 13px;
            align-items: flex-start;
            padding: 12px 0;
            border-bottom: 1px solid #e6eceb;
            color: var(--muted);
        }

        .feature-list li::before {
            content: "✓";
            color: var(--turquoise);
            font-weight: 900;
        }

        .services {
            background: var(--navy);
            color: white;
        }

        .services h2 {
            color: white;
        }

        .services .section-heading p {
            color: #b8ced1;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .service {
            padding: 23px 18px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.11);
            border-radius: 17px;
            transition: .3s;
        }

        .service:hover {
            background: rgba(255,255,255,.15);
            transform: translateY(-5px);
        }

        .service span {
            display: block;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .service strong {
            font-size: .9rem;
        }

        .service p {
            color: #b8ced1;
            font-size: .78rem;
            margin-top: 5px;
        }

        .accessibility-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 55px;
            align-items: center;
        }

        .accessibility-box {
            background: #e7f4f1;
            border-radius: var(--radius);
            padding: 35px;
        }

        .accessibility-box p {
            color: var(--muted);
            margin-bottom: 15px;
        }

        .accessibility-box ul {
            padding-left: 20px;
            color: var(--muted);
        }

        .accessibility-box li {
            margin: 9px 0;
        }

        .gallery {
            background: var(--sand);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr .8fr;
            grid-template-rows: 220px 220px;
            gap: 15px;
        }

        .gallery-grid img {
            height: 100%;
            border-radius: 17px;
            transition: .5s ease;
        }

        .gallery-grid img:hover {
            transform: scale(1.025);
        }

        .gallery-grid .large {
            grid-row: span 2;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .tip {
            padding: 25px;
            border: 1px solid #e5ebea;
            border-radius: 17px;
            background: white;
        }

        .tip strong {
            color: var(--navy);
            display: block;
            margin-bottom: 7px;
        }

        .tip p {
            color: var(--muted);
            font-size: .9rem;
        }

        .location {
            background: #eaf4f1;
        }

        .location-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .location-info {
            background: white;
            padding: 35px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .location-info p {
            color: var(--muted);
            margin-bottom: 15px;
        }

        .map-frame {
            width: 100%;
            height: 390px;
            border: 0;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .faq-list {
            max-width: 850px;
        }

        .faq-item {
            border-bottom: 1px solid #dfe8e7;
            padding: 22px 0;
        }

        .faq-item summary {
            cursor: pointer;
            list-style: none;
            color: var(--navy);
            font-weight: 800;
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        .faq-item summary::-webkit-details-marker {
            display: none;
        }

        .faq-item summary::after {
            content: "+";
            color: var(--turquoise);
            font-size: 1.4rem;
            line-height: 1;
        }

        .faq-item[open] summary::after {
            content: "−";
        }

        .faq-item p {
            color: var(--muted);
            padding-top: 15px;
            max-width: 760px;
        }

        .activities {
            background: var(--sand);
        }

        .activity-box {
            background: white;
            border-radius: 25px;
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .activity-box p {
            color: var(--muted);
            margin-bottom: 20px;
        }

        .gyg-widget {
            min-height: 100px;
            margin-top: 25px;
        }

        .final-cta {
            text-align: center;
            background:
                linear-gradient(120deg, rgba(3,34,47,.93), rgba(7,126,139,.85)),
                url('<?= htmlspecialchars($images['sunset'], ENT_QUOTES, 'UTF-8') ?>') center / cover;
            color: white;
        }

        .final-cta h2 {
            color: white;
            max-width: 750px;
            margin: 0 auto 20px;
        }

        .final-cta p {
            max-width: 650px;
            margin: 0 auto 28px;
            color: #e0f0ee;
        }

        footer {
            background: #052e3c;
            color: #b9d0d2;
            padding: 35px 0;
            font-size: .83rem;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-inner strong {
            color: white;
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

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes heroZoom {
            from { transform: scale(1.04); }
            to { transform: scale(1.12); }
        }

        @media (max-width: 900px) {
            .nav-links {
                gap: 13px;
                font-size: .78rem;
            }

            .intro-grid,
            .landscape-grid,
            .accessibility-grid,
            .location-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .experience-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .intro-image {
                max-width: 600px;
            }
        }

        @media (max-width: 650px) {
            .container {
                width: min(100% - 30px, 1160px);
            }

            .nav-inner {
                min-height: 65px;
            }

            .nav-links {
                display: none;
            }

            .hero {
                min-height: 610px;
            }

            .hero-content {
                padding: 85px 0;
            }

            h1 {
                font-size: 3.2rem;
            }

            section {
                padding: 72px 0;
            }

            .facts-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 18px 0;
                padding: 22px 10px;
            }

            .fact:nth-child(2) {
                border-right: 0;
            }

            .fact:nth-child(3),
            .fact:nth-child(4) {
                border-top: 1px solid #e8eeee;
                padding-top: 18px;
            }

            .experience-grid,
            .tips-grid {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .service {
                padding: 18px 13px;
            }

            .gallery-grid {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 230px 160px;
            }

            .gallery-grid .large {
                grid-column: span 2;
                grid-row: auto;
            }

            .intro-image img {
                height: 360px;
            }

            .image-note {
                left: 10px;
            }

            .activity-box,
            .location-info,
            .accessibility-box {
                padding: 25px;
            }

            .map-frame {
                height: 300px;
            }

            .hero-location {
                right: 15px;
                bottom: 15px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
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
    PLAYAS DEL CANTÁBRICO · DESCUBRE LA COSTA DE GIPUZKOA
</div>

<header class="navbar">
    <div class="container nav-inner">
        <a href="/" class="brand">PLAYAS DEL <span>CANTÁBRICO</span></a>

        <nav class="nav-links" aria-label="Navegación principal">
            <a href="#descubre">La playa</a>
            <a href="#experiencias">Experiencias</a>
            <a href="#servicios">Servicios</a>
            <a href="#ubicacion">Cómo llegar</a>
            <a href="#faq">Preguntas</a>
            <a href="#actividades" class="nav-cta">Actividades</a>
        </nav>
    </div>
</header>

<main>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="eyebrow">San Sebastián · Gipuzkoa</div>

                <h1>Playa de<br>La Concha</h1>

                <p>
                    Un paisaje inolvidable en el corazón de San Sebastián.
                    Descubre su bahía, su arena dorada y uno de los paseos
                    marítimos más emblemáticos del Cantábrico.
                </p>

                <div class="hero-buttons">
                    <a href="#descubre" class="btn btn-primary">Descubrir la playa</a>
                    <a href="#ubicacion" class="btn btn-outline">Cómo llegar</a>
                </div>
            </div>
        </div>

        <div class="hero-location">📍 Donostia / San Sebastián, Gipuzkoa</div>
    </section>

    <!-- DATOS RÁPIDOS -->
    <div class="container quick-facts reveal">
        <div class="facts-grid">
            <div class="fact">
                <strong>1.350 m</strong>
                <span>Longitud aproximada</span>
            </div>
            <div class="fact">
                <strong>Arena dorada</strong>
                <span>Tipo de playa</span>
            </div>
            <div class="fact">
                <strong>Bahía protegida</strong>
                <span>Entorno natural</span>
            </div>
            <div class="fact">
                <strong>Urbana</strong>
                <span>En pleno centro</span>
            </div>
        </div>
    </div>

    <!-- INTRODUCCIÓN -->
    <section id="descubre">
        <div class="container intro-grid">
            <div class="intro-image reveal">
                <img
                    src="<?= htmlspecialchars($images['beach'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Playa y mar en un paisaje costero"
                    loading="lazy"
                >
                <div class="image-note">La bahía más emblemática de Donostia</div>
            </div>

            <div class="intro-copy reveal">
                <div class="section-kicker">Un icono del Cantábrico</div>
                <h2>La belleza de San Sebastián frente al mar</h2>

                <p>
                    La <span class="highlight">Playa de La Concha</span> es uno
                    de los grandes símbolos de San Sebastián. Situada en pleno
                    centro de la ciudad, ocupa el fondo de una bahía de forma
                    característica que le da nombre.
                </p>

                <p>
                    Su arena fina y dorada, sus aguas generalmente tranquilas
                    y las vistas de la isla de Santa Clara crean un escenario
                    perfecto para disfrutar del mar en cualquier época del año.
                </p>

                <p>
                    La playa está flanqueada por los montes Urgull e Igeldo,
                    que enmarcan una de las panorámicas más reconocibles del
                    litoral vasco. El paseo marítimo, con su elegante
                    barandilla blanca, completa una estampa única.
                </p>

                <p>
                    Es un lugar para bañarse, caminar junto al agua, practicar
                    deporte o simplemente sentarse a contemplar la bahía.
                </p>

                <a href="#experiencias" class="text-link">Descubre qué hacer en La Concha →</a>
            </div>
        </div>
    </section>

    <!-- EXPERIENCIAS -->
    <section class="experiences" id="experiencias">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Mucho más que una playa</div>
                <h2>Experiencias para disfrutar de La Concha</h2>
                <p>
                    La bahía ofrece diferentes formas de disfrutar del mar,
                    desde un baño relajado hasta actividades deportivas y
                    paseos por algunos de los rincones más bonitos de Donostia.
                </p>
            </div>

            <div class="experience-grid">
                <article class="experience-card reveal">
                    <div class="card-icon">🏖️</div>
                    <h3>Un día de playa</h3>
                    <p>
                        Disfruta de la arena fina y dorada, toma el sol y
                        aprovecha las aguas generalmente tranquilas de la
                        bahía para darte un baño.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🚶</div>
                    <h3>Paseo marítimo</h3>
                    <p>
                        Recorre el paseo de La Concha, contempla su famosa
                        barandilla y disfruta de las vistas hacia la isla
                        de Santa Clara.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🛶</div>
                    <h3>Piragüismo y paddle surf</h3>
                    <p>
                        Explora la bahía desde el agua y descubre otra
                        perspectiva de la ciudad mediante actividades
                        náuticas disponibles en temporada.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🏐</div>
                    <h3>Deporte en la arena</h3>
                    <p>
                        La playa permite disfrutar de propuestas deportivas
                        como voleibol, fútbol playa y otras actividades
                        al aire libre.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🌅</div>
                    <h3>Atardeceres junto al mar</h3>
                    <p>
                        Pasea al final del día y contempla cómo cambia
                        la luz sobre la bahía, la isla y los montes
                        que rodean la playa.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">⛵</div>
                    <h3>Excursiones en barco</h3>
                    <p>
                        Desde el entorno del puerto puedes encontrar
                        propuestas para descubrir la costa y acercarte
                        a la isla de Santa Clara.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- ENTORNO -->
    <section>
        <div class="container landscape-grid">
            <div class="reveal">
                <div class="section-kicker">Un paisaje privilegiado</div>
                <h2>Una bahía rodeada de naturaleza y ciudad</h2>

                <p class="body-copy">
                    La Concha no destaca únicamente por su playa. Su entorno
                    reúne mar, montañas, arquitectura y espacios verdes en
                    un paisaje que forma parte de la identidad de San Sebastián.
                </p>

                <ul class="feature-list">
                    <li>
                        <span><strong>Isla de Santa Clara:</strong> el islote
                        que ocupa el centro de la bahía y protagoniza muchas
                        de sus panorámicas.</span>
                    </li>
                    <li>
                        <span><strong>Monte Urgull:</strong> un mirador natural
                        junto a la Parte Vieja donostiarra.</span>
                    </li>
                    <li>
                        <span><strong>Monte Igeldo:</strong> uno de los mejores
                        lugares para contemplar la bahía desde las alturas.</span>
                    </li>
                    <li>
                        <span><strong>Palacio de Miramar:</strong> un edificio
                        histórico rodeado de jardines con vistas al mar.</span>
                    </li>
                    <li>
                        <span><strong>Paseo de La Concha:</strong> un recorrido
                        urbano ideal para caminar junto a la costa.</span>
                    </li>
                </ul>
            </div>

            <div class="reveal">
                <img
                    src="<?= htmlspecialchars($images['coast'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Paisaje de costa y mar"
                    loading="lazy"
                >
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section class="services" id="servicios">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Comodidad junto al mar</div>
                <h2>Servicios de la Playa de La Concha</h2>
                <p>
                    La playa dispone de instalaciones y servicios que facilitan
                    la visita, especialmente durante los meses de verano.
                </p>
            </div>

            <div class="services-grid">
                <div class="service reveal">
                    <span>🚿</span>
                    <strong>Duchas</strong>
                    <p>Instalaciones para refrescarse después del baño.</p>
                </div>

                <div class="service reveal">
                    <span>🚻</span>
                    <strong>Aseos públicos</strong>
                    <p>Servicios higiénicos en el entorno de la playa.</p>
                </div>

                <div class="service reveal">
                    <span>🛟</span>
                    <strong>Socorrismo</strong>
                    <p>Servicio de vigilancia durante la temporada de baño.</p>
                </div>

                <div class="service reveal">
                    <span>⛱️</span>
                    <strong>Toldos y hamacas</strong>
                    <p>Alquiler de equipamiento de playa en temporada.</p>
                </div>

                <div class="service reveal">
                    <span>👕</span>
                    <strong>Vestuarios</strong>
                    <p>Cabinas colectivas y guardarropas en verano.</p>
                </div>

                <div class="service reveal">
                    <span>🛶</span>
                    <strong>Actividades náuticas</strong>
                    <p>Opciones para disfrutar de la bahía desde el agua.</p>
                </div>

                <div class="service reveal">
                    <span>♿</span>
                    <strong>Accesibilidad</strong>
                    <p>Rampas, instalaciones adaptadas y baño asistido.</p>
                </div>

                <div class="service reveal">
                    <span>🚰</span>
                    <strong>Fuentes y lavapiés</strong>
                    <p>Servicios para mayor comodidad de los bañistas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ACCESIBILIDAD -->
    <section>
        <div class="container accessibility-grid">
            <div class="reveal">
                <div class="section-kicker">Una playa accesible</div>
                <h2>Accesibilidad y baño asistido</h2>

                <p class="body-copy">
                    La Playa de La Concha cuenta con medidas para facilitar
                    el acceso y el disfrute del entorno a personas con
                    movilidad reducida, personas mayores y visitantes
                    con necesidades específicas.
                </p>

                <p class="body-copy" style="margin-top:15px;">
                    Durante la temporada de baño se habilitan recursos
                    específicos de accesibilidad y acompañamiento.
                    Es recomendable consultar las condiciones y reservar
                    con antelación cuando sea necesario.
                </p>

                <a
                    class="text-link"
                    href="https://accessibility.sansebastianturismoa.eus/que-hacer/naturaleza/playa-de-la-concha/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Consultar información oficial de accesibilidad →
                </a>
            </div>

            <div class="accessibility-box reveal">
                <h3>Recursos disponibles</h3>
                <p>
                    Entre las instalaciones y servicios de accesibilidad
                    destacan:
                </p>
                <ul>
                    <li>Rampas de acceso a la playa.</li>
                    <li>Aseos adaptados y ducha accesible.</li>
                    <li>Pasarela accesible durante la temporada de baño.</li>
                    <li>Servicio de baño asistido en verano.</li>
                    <li>Plazas de aparcamiento reservadas en las inmediaciones.</li>
                    <li>Acceso mediante transporte público adaptado.</li>
                </ul>
                <p style="margin-top:18px;font-size:.85rem;">
                    <strong>Importante:</strong> la pasarela accesible no llega
                    hasta la orilla. El baño asistido tiene calendario,
                    horario y condiciones específicas.
                </p>
            </div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section class="gallery">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Postales de Donostia</div>
                <h2>La belleza de la costa donostiarra</h2>
                <p>
                    Mar, arena, paseos y paisajes que hacen de La Concha
                    uno de los lugares más reconocibles del litoral vasco.
                </p>
            </div>

            <div class="gallery-grid reveal">
                <img
                    class="large"
                    src="<?= htmlspecialchars($images['sea'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Mar y costa"
                    loading="lazy"
                >
                <img
                    src="<?= htmlspecialchars($images['beach'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Arena y playa"
                    loading="lazy"
                >
                <img
                    src="<?= htmlspecialchars($images['coast'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Paisaje costero"
                    loading="lazy"
                >
                <img
                    src="<?= htmlspecialchars($images['sunset'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Luz de atardecer"
                    loading="lazy"
                >
            </div>
        </div>
    </section>

    <!-- CONSEJOS -->
    <section>
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Prepara tu visita</div>
                <h2>Consejos para disfrutar de La Concha</h2>
                <p>
                    Algunos detalles que conviene tener en cuenta antes
                    de organizar un día de playa en San Sebastián.
                </p>
            </div>

            <div class="tips-grid">
                <div class="tip reveal">
                    <strong>🌊 Consulta las mareas</strong>
                    <p>
                        La amplitud de las mareas modifica considerablemente
                        la superficie de arena disponible. Consulta el horario
                        de mareas antes de tu visita.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>☀️ Elige bien la hora</strong>
                    <p>
                        En los días de verano la playa puede registrar una
                        ocupación elevada. Llegar temprano puede ayudarte
                        a encontrar un buen sitio.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🚌 Utiliza el transporte público</strong>
                    <p>
                        La playa está en pleno centro y cuenta con buenas
                        conexiones de autobús. En temporada alta puede
                        resultar más cómodo que desplazarse en coche.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🛟 Respeta las indicaciones</strong>
                    <p>
                        Comprueba el estado del mar, presta atención a las
                        banderas y sigue siempre las recomendaciones
                        del servicio de socorrismo.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🚶 Recorre el paseo</strong>
                    <p>
                        No te limites a la arena. El paseo marítimo ofrece
                        una perspectiva diferente de la bahía y conecta
                        con otros puntos de interés de la ciudad.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>📸 No olvides la cámara</strong>
                    <p>
                        La isla de Santa Clara, la barandilla y las vistas
                        hacia los montes Urgull e Igeldo ofrecen rincones
                        perfectos para fotografiar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- UBICACIÓN -->
    <section class="location" id="ubicacion">
        <div class="container location-grid">
            <div class="location-info reveal">
                <div class="section-kicker">Dónde está</div>
                <h2>Cómo llegar a la Playa de La Concha</h2>

                <p>
                    La playa se encuentra en el centro de San Sebastián,
                    junto al paseo de La Concha y a poca distancia de la
                    Parte Vieja y otros lugares destacados de la ciudad.
                </p>

                <p>
                    <strong>Localidad:</strong> Donostia / San Sebastián<br>
                    <strong>Provincia:</strong> Gipuzkoa<br>
                    <strong>Comunidad autónoma:</strong> País Vasco
                </p>

                <p>
                    Puedes llegar caminando desde el centro, utilizar
                    los autobuses urbanos de Dbus o acceder en vehículo
                    y estacionar en alguno de los aparcamientos públicos
                    subterráneos de la zona.
                </p>

                <p>
                    Entre los aparcamientos próximos se encuentran
                    Parking Kontxa y Parking San Martín.
                </p>

                <a
                    href="https://www.google.com/maps/search/?api=1&query=Playa+de+La+Concha+San+Sebastian"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn btn-primary"
                >
                    Cómo llegar con Google Maps
                </a>
            </div>

            <div class="reveal">
                <iframe
                    class="map-frame"
                    title="Mapa de ubicación de la Playa de La Concha"
                    src="https://www.google.com/maps?q=Playa+de+La+Concha+San+Sebastian&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Resolvemos tus dudas</div>
                <h2>Preguntas frecuentes sobre La Concha</h2>
                <p>
                    Información útil para organizar tu visita a una de
                    las playas más conocidas de San Sebastián.
                </p>
            </div>

            <div class="faq-list reveal">
                <?php foreach ($faqs as $index => $faq): ?>
                    <details class="faq-item" <?= $index === 0 ? 'open' : '' ?>>
                        <summary>
                            <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
                        </summary>
                        <p>
                            <?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ACTIVIDADES Y EXCURSIONES -->
    <section class="activities" id="actividades">
        <div class="container">
            <div class="activity-box reveal">
                <div class="section-kicker">Descubre San Sebastián</div>
                <h2>Completa tu visita con experiencias y actividades</h2>

                <p>
                    Aprovecha tu estancia para descubrir San Sebastián
                    desde diferentes perspectivas. Puedes encontrar
                    visitas guiadas, excursiones, experiencias gastronómicas
                    y actividades para conocer mejor la ciudad y su entorno.
                </p>

                <div class="gyg-widget">
                    <div
                        data-gyg-widget="auto"
                        data-gyg-partner-id="VW16GKQ"
                    ></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="final-cta">
        <div class="container reveal">
            <div class="eyebrow">La Perla del Cantábrico</div>

            <h2>Descubre la magia de la Playa de La Concha</h2>

            <p>
                Un paseo junto al mar, un baño en la bahía o simplemente
                disfrutar de sus vistas. La Concha es una parada imprescindible
                en cualquier viaje a San Sebastián.
            </p>

            <a
                href="https://www.sansebastianturismoa.eus/"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-primary"
            >
                Descubrir San Sebastián
            </a>
        </div>
    </section>

</main>

<footer>
    <div class="container footer-inner">
        <div>
            <strong>Playas del Cantábrico</strong>
            <p>Descubre las mejores playas del norte de España.</p>
        </div>

        <div>
            Playa de La Concha · San Sebastián · Gipuzkoa
        </div>

        <div>
            © <?= date('Y') ?> Playas del Cantábrico
        </div>
    </div>
</footer>

<!-- ZONA PUBLICITARIA ADCASH -->
<div
    id="adcash-zone"
    data-adcash-zone="mnaewnieki"
    style="width:100%;text-align:center;"
></div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // Animaciones de entrada al hacer scroll
    const revealElements = document.querySelectorAll('.reveal');

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

        revealElements.forEach(element => observer.observe(element));
    } else {
        revealElements.forEach(element => element.classList.add('visible'));
    }

    // Cierre de otras preguntas al abrir una FAQ
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.addEventListener('toggle', function () {
            if (this.open) {
                faqItems.forEach(other => {
                    if (other !== this) {
                        other.open = false;
                    }
                });
            }
        });
    });

});
</script>

<!-- Widget oficial de GetYourGuide -->
<script async defer src="https://widget.getyourguide.com/v2/widget.js"></script>

</body>
</html>
