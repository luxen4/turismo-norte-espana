
<?php
$pageTitle = 'Playa de Zarautz: surf, servicios, qué ver y cómo llegar';
$pageDescription = 'Descubre la Playa de Zarautz, el gran arenal de Gipuzkoa. 2,5 km de arena dorada, surf, paseo marítimo, dunas de Iñurritza, servicios y consejos para tu visita.';
$canonical = 'https://www.tudominio.com/gipuzkoa/zarautz/lugares-interes/playa-de-zarautz/';
$ogImage = 'https://www.tudominio.com/images/playa-de-zarautz.jpg';

$beach = [
    'name' => 'Playa de Zarautz',
    'city' => 'Zarautz',
    'region' => 'Gipuzkoa',
    'country' => 'España',
    'length' => '2.500 metros',
    'width' => '80 metros de anchura media',
    'type' => 'Playa urbana de arena fina y dorada',
    'tag' => 'Surf, naturaleza y paseo marítimo',
    'localidad' => 'zarautz',
    'archivo' => 'playa-de-zarautz'
];

$images = [
    'hero' => 'https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=2000&q=85',
    'beach' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=85',
    'surf' => 'https://images.unsplash.com/photo-1455729552865-3658a5d39692?auto=format&fit=crop&w=1200&q=85',
    'coast' => 'https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1200&q=85',
    'sunset' => 'https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?auto=format&fit=crop&w=1200&q=85'
];

$faqs = [
    [
        'question' => '¿Dónde está la Playa de Zarautz?',
        'answer' => 'La Playa de Zarautz se encuentra en el municipio de Zarautz, en la costa de Gipuzkoa, País Vasco. Está junto al centro urbano y cuenta con un paseo marítimo que recorre buena parte de su longitud.'
    ],
    [
        'question' => '¿Cuánto mide la Playa de Zarautz?',
        'answer' => 'Tiene aproximadamente 2.500 metros de longitud y una anchura media cercana a los 80 metros. Es uno de los arenales más extensos de la costa vasca.'
    ],
    [
        'question' => '¿Es Zarautz una buena playa para practicar surf?',
        'answer' => 'Sí. Zarautz es uno de los destinos de surf más conocidos del País Vasco. Cuenta con diferentes rompientes, escuelas de surf y zonas habituales de práctica. Las condiciones dependen del oleaje, el viento y las mareas.'
    ],
    [
        'question' => '¿Se puede aprender surf en Zarautz?',
        'answer' => 'Sí. En el entorno de la playa hay escuelas que ofrecen cursos e iniciación al surf. Es recomendable informarse de los horarios, disponibilidad y condiciones de cada escuela antes de reservar.'
    ],
    [
        'question' => '¿Es una playa adecuada para ir con niños?',
        'answer' => 'Su gran extensión, el paseo marítimo y sus servicios la convierten en una opción interesante para familias. Sin embargo, es una playa abierta al Cantábrico y puede tener oleaje, corrientes y viento. Es importante respetar las zonas señalizadas para el baño y las indicaciones de los socorristas.'
    ],
    [
        'question' => '¿Qué servicios tiene la playa?',
        'answer' => 'Dispone de aseos públicos, duchas, vestuarios, fuentes, zonas recreativas, instalaciones deportivas, aparcamiento y servicios de vigilancia y socorrismo durante la temporada correspondiente. También hay establecimientos de hostelería y escuelas de surf en sus inmediaciones.'
    ],
    [
        'question' => '¿Qué son las dunas de Iñurritza?',
        'answer' => 'Son un entorno natural situado en el extremo oriental de la playa, junto a la desembocadura de la ría de Iñurritza. Conservan vegetación y hábitats dunares de interés ecológico. Es importante respetar los itinerarios habilitados y no pisar las zonas protegidas.'
    ],
    [
        'question' => '¿Se puede ir andando desde Zarautz hasta Getaria?',
        'answer' => 'Sí. Existe un paseo peatonal costero que conecta Zarautz con Getaria y permite disfrutar de las vistas del Cantábrico y de los acantilados. Es una ruta muy popular para caminar junto al mar.'
    ],
    [
        'question' => '¿Hay aparcamiento cerca de la playa?',
        'answer' => 'Hay zonas de aparcamiento y aparcamientos públicos en el entorno urbano. En verano y durante los días de mayor afluencia conviene llegar con tiempo o utilizar el transporte público.'
    ],
    [
        'question' => '¿Se permiten perros en la playa?',
        'answer' => 'El acceso de perros está sujeto a la normativa municipal y a las restricciones de temporada. Consulta la ordenanza vigente del Ayuntamiento de Zarautz antes de acudir con tu mascota.'
    ]
];

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Beach',
    'name' => 'Playa de Zarautz',
    'description' => $pageDescription,
    'url' => $canonical,
    'image' => $ogImage,
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Zarautz',
        'addressRegion' => 'Gipuzkoa',
        'addressCountry' => 'ES'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 43.2871545,
        'longitude' => -2.1773403
    ],
    'containedInPlace' => [
        '@type' => 'City',
        'name' => 'Zarautz'
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

        .surf-section {
            background: #eaf4f1;
        }

        .surf-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 55px;
            align-items: center;
        }

        .surf-grid img {
            height: 460px;
            border-radius: var(--radius);
        }

        .surf-box {
            background: white;
            border-radius: var(--radius);
            padding: 32px;
            box-shadow: var(--shadow);
        }

        .surf-box p {
            color: var(--muted);
            margin-bottom: 15px;
        }

        .surf-zones {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 22px;
        }

        .surf-zone {
            padding: 15px 10px;
            border-radius: 13px;
            background: #e8f5f2;
            text-align: center;
        }

        .surf-zone strong {
            display: block;
            color: var(--navy);
            font-size: .88rem;
        }

        .surf-zone span {
            color: var(--muted);
            font-size: .73rem;
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
            .surf-grid,
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

            .intro-image img,
            .surf-grid img {
                height: 360px;
            }

            .image-note {
                left: 10px;
            }

            .surf-box,
            .activity-box,
            .location-info {
                padding: 25px;
            }

            .surf-zones {
                grid-template-columns: 1fr;
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
            <a href="#surf">Surf</a>
            <a href="#servicios">Servicios</a>
            <a href="#entorno">Naturaleza</a>
            <a href="#ubicacion">Cómo llegar</a>
            <a href="#actividades" class="nav-cta">Actividades</a>
        </nav>
    </div>
</header>

<main>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="eyebrow">Zarautz · Gipuzkoa</div>

                <h1>Playa de<br>Zarautz</h1>

                <p>
                    Dos kilómetros y medio de arena dorada, olas para todos
                    los niveles y un paseo marítimo lleno de vida.
                    Descubre uno de los grandes destinos de surf del Cantábrico.
                </p>

                <div class="hero-buttons">
                    <a href="#descubre" class="btn btn-primary">Descubrir la playa</a>
                    <a href="#surf" class="btn btn-outline">Vivir el surf</a>
                </div>
            </div>
        </div>

        <div class="hero-location">📍 Zarautz · Gipuzkoa</div>
    </section>

    <!-- DATOS RÁPIDOS -->
    <div class="container quick-facts reveal">
        <div class="facts-grid">
            <div class="fact">
                <strong>2.500 m</strong>
                <span>Longitud aproximada</span>
            </div>
            <div class="fact">
                <strong>80 m</strong>
                <span>Anchura media</span>
            </div>
            <div class="fact">
                <strong>Arena dorada</strong>
                <span>Tipo de playa</span>
            </div>
            <div class="fact">
                <strong>Surf</strong>
                <span>Destino deportivo</span>
            </div>
        </div>
    </div>

    <!-- INTRODUCCIÓN -->
    <section id="descubre">
        <div class="container intro-grid">
            <div class="intro-image reveal">
                <img
                    src="<?= htmlspecialchars($images['beach'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Playa de arena y mar en un paisaje costero"
                    loading="lazy"
                >
                <div class="image-note">Uno de los grandes arenales de Euskadi</div>
            </div>

            <div class="intro-copy reveal">
                <div class="section-kicker">Un arenal extraordinario</div>
                <h2>La playa más extensa de Gipuzkoa</h2>

                <p>
                    La <span class="highlight">Playa de Zarautz</span> es uno
                    de los lugares más emblemáticos de la costa guipuzcoana.
                    Con aproximadamente 2.500 metros de longitud, ofrece
                    un enorme arenal de fina arena dorada abierto al Cantábrico.
                </p>

                <p>
                    Su amplitud permite disfrutar de diferentes ambientes:
                    zonas para bañistas, espacios para practicar deportes
                    y áreas especialmente frecuentadas por surfistas.
                </p>

                <p>
                    El paseo marítimo recorre buena parte de la playa y está
                    acompañado por bares, cafeterías, restaurantes y terrazas.
                    Es uno de los puntos de encuentro más animados de la localidad.
                </p>

                <p>
                    Zarautz combina ambiente marinero, deporte, gastronomía
                    y naturaleza. Un destino perfecto tanto para pasar un
                    día de playa como para organizar una escapada por la
                    costa de Gipuzkoa.
                </p>

                <a href="#experiencias" class="text-link">Descubre qué hacer en Zarautz →</a>
            </div>
        </div>
    </section>

    <!-- EXPERIENCIAS -->
    <section class="experiences" id="experiencias">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Mucho más que sol y arena</div>
                <h2>Experiencias para disfrutar de Zarautz</h2>
                <p>
                    Surf, paseos junto al mar, gastronomía y naturaleza.
                    La playa ofrece propuestas para diferentes tipos
                    de visitantes y épocas del año.
                </p>
            </div>

            <div class="experience-grid">
                <article class="experience-card reveal">
                    <div class="card-icon">🏄</div>
                    <h3>Surf para todos</h3>
                    <p>
                        Aprende a surfear o mejora tu técnica en una playa
                        reconocida por sus olas, sus escuelas y su ambiente
                        deportivo.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🏖️</div>
                    <h3>Un día de playa</h3>
                    <p>
                        Disfruta de un arenal enorme, toma el sol y encuentra
                        tu rincón favorito para descansar junto al Cantábrico.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🚶</div>
                    <h3>Paseo marítimo</h3>
                    <p>
                        Recorre el paseo de Zarautz, contempla el mar y
                        disfruta de sus terrazas y de su animado ambiente.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🚴</div>
                    <h3>Deporte al aire libre</h3>
                    <p>
                        Camina, corre o practica actividades deportivas
                        en el entorno del paseo y de la playa.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🌿</div>
                    <h3>Naturaleza y dunas</h3>
                    <p>
                        Descubre el entorno de Iñurritza, sus dunas y
                        los espacios naturales del extremo oriental
                        del arenal.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🍽️</div>
                    <h3>Gastronomía vasca</h3>
                    <p>
                        Completa el día con pintxos, pescado, cocina
                        tradicional y restaurantes junto al mar.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SURF -->
    <section class="surf-section" id="surf">
        <div class="container surf-grid">
            <div class="reveal">
                <img
                    src="<?= htmlspecialchars($images['surf'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Persona practicando surf sobre una ola"
                    loading="lazy"
                >
            </div>

            <div class="reveal">
                <div class="section-kicker">La capital del surf guipuzcoano</div>
                <h2>Zarautz, un referente del surf en el Cantábrico</h2>

                <p class="body-copy">
                    Zarautz es uno de los destinos de surf más conocidos
                    del País Vasco. Sus 2,5 kilómetros de playa y sus
                    diferentes rompientes atraen tanto a quienes se inician
                    en este deporte como a surfistas experimentados.
                </p>

                <p class="body-copy" style="margin-top:15px;">
                    La playa cuenta con escuelas de surf y una importante
                    tradición deportiva. A lo largo del año también acoge
                    competiciones y encuentros relacionados con este deporte.
                </p>

                <div class="surf-box" style="margin-top:25px;">
                    <h3>Algunas zonas conocidas</h3>
                    <p>
                        A lo largo del arenal existen diferentes rompientes.
                        Las condiciones cambian según el oleaje, el viento
                        y las mareas.
                    </p>

                    <div class="surf-zones">
                        <div class="surf-zone">
                            <strong>El Muelle</strong>
                            <span>Extremo occidental</span>
                        </div>
                        <div class="surf-zone">
                            <strong>Argiñano</strong>
                            <span>Zona central</span>
                        </div>
                        <div class="surf-zone">
                            <strong>El Canal</strong>
                            <span>Extremo oriental</span>
                        </div>
                    </div>

                    <p style="font-size:.82rem;margin-top:18px;">
                        Consulta las condiciones del mar y respeta siempre
                        la señalización de las zonas de baño y surf.
                    </p>
                </div>

                <a
                    href="https://turismo.euskadi.eus/es/surf-euskadi/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-link"
                >
                    Descubrir el surf en Euskadi →
                </a>
            </div>
        </div>
    </section>

    <!-- ENTORNO NATURAL -->
    <section id="entorno">
        <div class="container landscape-grid">
            <div class="reveal">
                <div class="section-kicker">Paisaje y biodiversidad</div>
                <h2>Las dunas de Iñurritza y el entorno natural</h2>

                <p class="body-copy">
                    En el extremo oriental de la playa se encuentra el
                    entorno de Iñurritza, un espacio natural de gran interés
                    que conserva zonas dunares, vegetación litoral y ambientes
                    ligados a la desembocadura de la ría.
                </p>

                <p class="body-copy" style="margin-top:15px;">
                    Este paisaje contrasta con el ambiente urbano y deportivo
                    del centro de la playa. Es una zona perfecta para pasear
                    con tranquilidad y observar otra cara de la costa de Zarautz.
                </p>

                <ul class="feature-list">
                    <li>
                        <span><strong>Dunas litorales:</strong> formaciones
                        naturales de arena que albergan vegetación adaptada
                        al ambiente costero.</span>
                    </li>
                    <li>
                        <span><strong>Ría de Iñurritza:</strong> entorno
                        de desembocadura que aporta diversidad al paisaje.</span>
                    </li>
                    <li>
                        <span><strong>Pasarelas y caminos:</strong> recorridos
                        para disfrutar del entorno sin invadir las zonas
                        naturales protegidas.</span>
                    </li>
                    <li>
                        <span><strong>Talaimendi:</strong> ladera y entorno
                        natural que enmarcan el extremo oriental de la playa.</span>
                    </li>
                    <li>
                        <span><strong>Protección ambiental:</strong> respeta
                        los itinerarios señalizados y evita pisar la vegetación
                        dunar.</span>
                    </li>
                </ul>
            </div>

            <div class="reveal">
                <img
                    src="<?= htmlspecialchars($images['coast'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Paisaje natural de costa"
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
                <h2>Servicios de la Playa de Zarautz</h2>
                <p>
                    La playa cuenta con una amplia oferta de instalaciones
                    y servicios para disfrutar de la jornada junto al mar.
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
                    <p>Servicios higiénicos en el entorno del arenal.</p>
                </div>

                <div class="service reveal">
                    <span>🛟</span>
                    <strong>Socorrismo</strong>
                    <p>Vigilancia durante la temporada de baño.</p>
                </div>

                <div class="service reveal">
                    <span>👕</span>
                    <strong>Vestuarios</strong>
                    <p>Instalaciones para cambiarse en temporada.</p>
                </div>

                <div class="service reveal">
                    <span>⛱️</span>
                    <strong>Hamacas y toldos</strong>
                    <p>Opciones de alquiler según temporada.</p>
                </div>

                <div class="service reveal">
                    <span>🏄</span>
                    <strong>Escuelas de surf</strong>
                    <p>Cursos y actividades para diferentes niveles.</p>
                </div>

                <div class="service reveal">
                    <span>🏐</span>
                    <strong>Instalaciones deportivas</strong>
                    <p>Espacios para actividades y deportes de playa.</p>
                </div>

                <div class="service reveal">
                    <span>🛝</span>
                    <strong>Juegos infantiles</strong>
                    <p>Espacios recreativos para los más pequeños.</p>
                </div>

                <div class="service reveal">
                    <span>🚰</span>
                    <strong>Fuentes</strong>
                    <p>Puntos de agua en el entorno de la playa.</p>
                </div>

                <div class="service reveal">
                    <span>🚗</span>
                    <strong>Aparcamiento</strong>
                    <p>Opciones de estacionamiento en la localidad.</p>
                </div>

                <div class="service reveal">
                    <span>🍹</span>
                    <strong>Bares y terrazas</strong>
                    <p>Oferta hostelera junto al paseo marítimo.</p>
                </div>

                <div class="service reveal">
                    <span>🌳</span>
                    <strong>Área recreativa</strong>
                    <p>Entorno para descansar y disfrutar al aire libre.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section class="gallery">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Postales de la costa vasca</div>
                <h2>La belleza del litoral de Zarautz</h2>
                <p>
                    Un paisaje de arena, olas y paseos que cambia de aspecto
                    con las mareas y las condiciones del Cantábrico.
                </p>
            </div>

            <div class="gallery-grid reveal">
                <img
                    class="large"
                    src="<?= htmlspecialchars($images['surf'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Surf en el mar"
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
                <h2>Consejos para disfrutar de Zarautz</h2>
                <p>
                    Algunas recomendaciones para organizar un día de playa
                    y aprovechar al máximo todo lo que ofrece la localidad.
                </p>
            </div>

            <div class="tips-grid">
                <div class="tip reveal">
                    <strong>🌊 Consulta el estado del mar</strong>
                    <p>
                        Zarautz es una playa abierta al Cantábrico. Comprueba
                        el oleaje, las corrientes y las banderas antes
                        de entrar al agua.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🏄 Respeta las zonas de surf</strong>
                    <p>
                        Presta atención a la señalización que separa las
                        zonas de baño y las áreas destinadas a la práctica
                        de deportes acuáticos.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🕒 Ten en cuenta las mareas</strong>
                    <p>
                        Las mareas modifican la superficie de arena disponible
                        y las condiciones de las rompientes. Consulta sus
                        horarios antes de organizar actividades.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>☀️ Llega temprano en verano</strong>
                    <p>
                        La playa recibe muchos visitantes durante los meses
                        estivales. Llegar pronto facilita encontrar sitio
                        y disfrutar del paseo con tranquilidad.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🌿 Cuida las dunas</strong>
                    <p>
                        Utiliza las pasarelas y caminos habilitados.
                        La vegetación dunar es frágil y necesita protección.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🚶 Camina hasta Getaria</strong>
                    <p>
                        Si te apetece alargar el paseo, sigue el camino
                        costero hacia Getaria y disfruta de las vistas
                        del mar y los acantilados.
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
                <h2>Cómo llegar a la Playa de Zarautz</h2>

                <p>
                    La playa se encuentra junto al centro urbano de Zarautz,
                    en la costa de Gipuzkoa. Su ubicación permite llegar
                    caminando desde buena parte de la localidad.
                </p>

                <p>
                    <strong>Localidad:</strong> Zarautz<br>
                    <strong>Provincia:</strong> Gipuzkoa<br>
                    <strong>Comunidad autónoma:</strong> País Vasco<br>
                    <strong>Acceso por carretera:</strong> N-634 y AP-8
                </p>

                <p>
                    También puedes llegar en transporte público mediante
                    los servicios ferroviarios de Euskotren y las líneas
                    de autobús que conectan Zarautz con otras localidades
                    de la costa.
                </p>

                <p>
                    En verano y durante los días de gran afluencia,
                    conviene prever más tiempo para aparcar.
                </p>

                <a
                    href="https://www.google.com/maps/search/?api=1&query=Playa+de+Zarautz"
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
                    title="Mapa de ubicación de la Playa de Zarautz"
                    src="https://www.google.com/maps?q=Playa+de+Zarautz+Gipuzkoa&output=embed"
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
                <h2>Preguntas frecuentes sobre la Playa de Zarautz</h2>
                <p>
                    Información práctica para preparar tu visita a uno
                    de los grandes arenales de la costa vasca.
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

    <!-- ACTIVIDADES -->
    <section class="activities" id="actividades">
        <div class="container">
            <div class="activity-box reveal">
                <div class="section-kicker">Descubre Gipuzkoa</div>
                <h2>Completa tu visita con actividades y experiencias</h2>

                <p>
                    Aprovecha tu estancia en Zarautz para descubrir
                    la costa vasca, conocer sus pueblos marineros,
                    practicar deportes acuáticos o disfrutar de visitas
                    y experiencias por Gipuzkoa.
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
            <div class="eyebrow">La costa de Gipuzkoa</div>

            <h2>Descubre la energía de la Playa de Zarautz</h2>

            <p>
                Un arenal inmenso, olas para surfear, naturaleza y un
                ambiente marinero único. Zarautz es una parada imprescindible
                para descubrir el Cantábrico.
            </p>

            <a
                href="https://www.zarautz.eus/"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-primary"
            >
                Descubrir Zarautz
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
            Playa de Zarautz · Gipuzkoa · País Vasco
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
