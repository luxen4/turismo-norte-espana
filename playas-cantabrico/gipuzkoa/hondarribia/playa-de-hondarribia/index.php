
<?php
$pageTitle = 'Playa de Hondarribia: qué ver, servicios, cómo llegar y actividades';
$pageDescription = 'Descubre la Playa de Hondarribia, en la bahía de Txingudi. Arena dorada, aguas tranquilas, puerto deportivo, deportes náuticos, accesibilidad y consejos para tu visita.';
$canonical = 'https://www.tudominio.com/gipuzkoa/hondarribia/lugares-interes/playa-de-hondarribia/';
$ogImage = 'https://www.tudominio.com/images/playa-de-hondarribia.jpg';

$beach = [
    'name' => 'Playa de Hondarribia',
    'city' => 'Hondarribia',
    'region' => 'Gipuzkoa',
    'country' => 'España',
    'length' => '700 metros',
    'width' => '232 metros de anchura media',
    'type' => 'Playa urbana de arena fina y dorada',
    'tag' => 'Baño, deportes náuticos y naturaleza',
    'localidad' => 'hondarribia',
    'archivo' => 'playa-de-hondarribia'
];

$images = [
    'hero' => 'https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=2000&q=85',
    'beach' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=85',
    'water' => 'https://images.unsplash.com/photo-1518837695005-2083093ee35b?auto=format&fit=crop&w=1200&q=85',
    'coast' => 'https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1200&q=85',
    'sunset' => 'https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?auto=format&fit=crop&w=1200&q=85'
];

$faqs = [
    [
        'question' => '¿Dónde está la Playa de Hondarribia?',
        'answer' => 'Se encuentra en Hondarribia, en el extremo oriental de la costa de Gipuzkoa, junto al puerto deportivo y la bahía de Txingudi. Está próxima a la desembocadura del río Bidasoa, que marca la frontera entre España y Francia.'
    ],
    [
        'question' => '¿Cuánto mide la Playa de Hondarribia?',
        'answer' => 'La ficha de Turismo de Euskadi indica aproximadamente 700 metros de longitud y una anchura media de unos 232 metros. Algunas publicaciones turísticas locales ofrecen una longitud aproximada de 800 metros.'
    ],
    [
        'question' => '¿Cómo es el agua de la Playa de Hondarribia?',
        'answer' => 'La playa se encuentra en la bahía de Txingudi y suele presentar condiciones de baño tranquilas, especialmente en comparación con arenales más abiertos al Cantábrico. Aun así, siempre hay que atender a las banderas, las corrientes y las indicaciones del servicio de vigilancia.'
    ],
    [
        'question' => '¿Es una playa adecuada para familias con niños?',
        'answer' => 'Sí. Su arena fina, la amplitud del arenal, el entorno urbano y las condiciones generalmente tranquilas del agua la convierten en una opción atractiva para familias. Conviene vigilar siempre a los menores y respetar las indicaciones de los socorristas.'
    ],
    [
        'question' => '¿Qué actividades se pueden practicar?',
        'answer' => 'En la playa y su entorno se pueden practicar actividades como piragüismo, windsurf, natación, buceo, pesca deportiva y otras actividades náuticas. También hay opciones recreativas como el alquiler de pedalós, según la temporada y la oferta disponible.'
    ],
    [
        'question' => '¿Qué servicios tiene la playa?',
        'answer' => 'Entre los servicios recogidos en la información turística figuran aseos públicos, duchas, fuentes, bar o chiringuito, área recreativa, instalaciones deportivas e infantiles, aparcamiento y servicio de vigilancia y socorrismo en temporada.'
    ],
    [
        'question' => '¿Es accesible para personas con movilidad reducida?',
        'answer' => 'La playa dispone de rampas y pasillos rígidos sobre la arena, además de plazas de aparcamiento reservadas y servicios de baño asistido durante la temporada correspondiente. Es aconsejable confirmar previamente los horarios y la disponibilidad del servicio.'
    ],
    [
        'question' => '¿Se puede ver Francia desde la playa?',
        'answer' => 'Sí. La playa se encuentra en la bahía de Txingudi, frente a Hendaia, en el País Vasco francés. Desde la zona de playa y el entorno del puerto se pueden contemplar las vistas hacia la costa francesa.'
    ],
    [
        'question' => '¿Se puede cruzar a Hendaia en barco?',
        'answer' => 'Sí. Existe un servicio de barco entre Hondarribia y Hendaia que cruza la bahía de Txingudi. Consulta los horarios, la frecuencia y las condiciones del servicio antes de organizar el trayecto.'
    ],
    [
        'question' => '¿Se permiten perros en la playa?',
        'answer' => 'El acceso de animales domésticos está sujeto a la normativa municipal y a las restricciones de temporada. La documentación de la zona de baño indica que está prohibido durante la temporada de baño. Comprueba la normativa vigente antes de acudir con tu mascota.'
    ],
    [
        'question' => '¿Hay aparcamiento cerca de la playa?',
        'answer' => 'Sí. Hay zonas de aparcamiento en el entorno de la playa y del puerto. Durante los días de mayor afluencia, especialmente en verano, conviene llegar con tiempo.'
    ]
];

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Beach',
    'name' => 'Playa de Hondarribia',
    'description' => $pageDescription,
    'url' => $canonical,
    'image' => $ogImage,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Paseo Ramón Iribarren',
        'addressLocality' => 'Hondarribia',
        'addressRegion' => 'Gipuzkoa',
        'postalCode' => '20280',
        'addressCountry' => 'ES'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 43.3767987,
        'longitude' => -1.7969174
    ],
    'containedInPlace' => [
        '@type' => 'City',
        'name' => 'Hondarribia'
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
            gap: 23px;
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
            font-size: 1.2rem;
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

        .landscape-grid,
        .water-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 55px;
            align-items: center;
        }

        .landscape-grid img,
        .water-grid img {
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

        .water-section {
            background: #eaf4f1;
        }

        .water-box {
            background: white;
            border-radius: var(--radius);
            padding: 32px;
            box-shadow: var(--shadow);
            margin-top: 22px;
        }

        .water-box p {
            color: var(--muted);
            margin-bottom: 15px;
        }

        .water-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .water-tags span {
            background: #e8f5f2;
            color: var(--navy);
            padding: 9px 14px;
            border-radius: 50px;
            font-size: .82rem;
            font-weight: 700;
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
            .water-grid,
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
            .water-grid img,
            .landscape-grid img {
                height: 360px;
            }

            .image-note {
                left: 10px;
            }

            .water-box,
            .activity-box,
            .location-info {
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
        <a href="/turismo-norte-espana/playas-cantabrico/" class="brand">PLAYAS DEL <span>CANTÁBRICO</span></a>

        <nav class="nav-links" aria-label="Navegación principal">
            <a href="#descubre">La playa</a>
            <a href="#experiencias">Experiencias</a>
            <a href="#servicios">Servicios</a>
            <a href="#entorno">Entorno</a>
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
                <div class="eyebrow">Hondarribia · Gipuzkoa</div>

                <h1>Playa de<br>Hondarribia</h1>

                <p>
                    Arena fina y dorada, aguas tranquilas y vistas a la
                    bahía de Txingudi. Descubre una de las playas más
                    agradables del litoral guipuzcoano.
                </p>

                <div class="hero-buttons">
                    <a href="#descubre" class="btn btn-primary">Descubrir la playa</a>
                    <a href="#experiencias" class="btn btn-outline">Qué hacer</a>
                </div>
            </div>
        </div>

        <div class="hero-location">📍 Hondarribia · Gipuzkoa</div>
    </section>

    <!-- DATOS RÁPIDOS -->
    <div class="container quick-facts reveal">
        <div class="facts-grid">
            <div class="fact">
                <strong>700 m</strong>
                <span>Longitud aproximada</span>
            </div>
            <div class="fact">
                <strong>232 m</strong>
                <span>Anchura media</span>
            </div>
            <div class="fact">
                <strong>Arena dorada</strong>
                <span>Tipo de playa</span>
            </div>
            <div class="fact">
                <strong>Aguas tranquilas</strong>
                <span>Entorno de bahía</span>
            </div>
        </div>
    </div>

    <!-- INTRODUCCIÓN -->
    <section id="descubre">
        <div class="container intro-grid">
            <div class="intro-image reveal">
                <img
                    src="<?= htmlspecialchars($images['beach'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Playa de arena junto al mar"
                    loading="lazy"
                >
                <div class="image-note">Un rincón privilegiado de la bahía de Txingudi</div>
            </div>

            <div class="intro-copy reveal">
                <div class="section-kicker">Un paisaje entre dos países</div>
                <h2>Una playa tranquila junto a la frontera francesa</h2>

                <p>
                    La <span class="highlight">Playa de Hondarribia</span>
                    se encuentra en el extremo oriental de la costa de
                    Gipuzkoa, en plena bahía de Txingudi y junto a la
                    desembocadura del río Bidasoa.
                </p>

                <p>
                    Su arena fina y dorada, su amplitud y sus aguas
                    generalmente tranquilas hacen de este arenal un lugar
                    especialmente agradable para disfrutar del baño
                    y pasar una jornada junto al mar.
                </p>

                <p>
                    La playa está muy cerca del núcleo urbano y del puerto
                    deportivo. Su paseo marítimo permite recorrer el entorno
                    con comodidad y disfrutar de las vistas hacia Hendaia,
                    al otro lado de la bahía.
                </p>

                <p>
                    A diferencia de otros arenales más expuestos al oleaje
                    del Cantábrico, su ubicación en la bahía de Txingudi
                    ofrece un ambiente generalmente más resguardado.
                </p>

                <a href="#experiencias" class="text-link">Descubre qué hacer en Hondarribia →</a>
            </div>
        </div>
    </section>

    <!-- EXPERIENCIAS -->
    <section class="experiences" id="experiencias">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Mucho más que sol y arena</div>
                <h2>Experiencias para disfrutar de Hondarribia</h2>
                <p>
                    Baño, deportes acuáticos, paseos junto al puerto y
                    gastronomía vasca. La playa ofrece diferentes formas
                    de disfrutar del entorno de Txingudi.
                </p>
            </div>

            <div class="experience-grid">
                <article class="experience-card reveal">
                    <div class="card-icon">🏖️</div>
                    <h3>Un día de playa</h3>
                    <p>
                        Disfruta de la arena fina, toma el sol y aprovecha
                        las condiciones generalmente tranquilas de la bahía.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🛶</div>
                    <h3>Deportes náuticos</h3>
                    <p>
                        Descubre actividades como piragüismo, windsurf,
                        buceo y otras propuestas para disfrutar del agua.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🚶</div>
                    <h3>Paseo marítimo</h3>
                    <p>
                        Recorre el entorno de la playa y disfruta de las
                        vistas al puerto deportivo y a la bahía de Txingudi.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">⛵</div>
                    <h3>Ambiente marinero</h3>
                    <p>
                        Acércate al puerto pesquero y deportivo para
                        conocer la tradición marítima de Hondarribia.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🇫🇷</div>
                    <h3>Vistas a Hendaia</h3>
                    <p>
                        Contempla la costa francesa desde la playa y
                        descubre el carácter transfronterizo de la bahía.
                    </p>
                </article>

                <article class="experience-card reveal">
                    <div class="card-icon">🍽️</div>
                    <h3>Gastronomía vasca</h3>
                    <p>
                        Completa la jornada con pintxos, pescado y
                        restaurantes en el entorno del puerto y del casco histórico.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- BAHÍA DE TXINGUDI -->
    <section id="entorno">
        <div class="container landscape-grid">
            <div class="reveal">
                <div class="section-kicker">Un enclave singular</div>
                <h2>La bahía de Txingudi, entre Gipuzkoa y Lapurdi</h2>

                <p class="body-copy">
                    La Playa de Hondarribia ocupa un lugar privilegiado
                    en la bahía de Txingudi, un espacio compartido por
                    Hondarribia, Irun y Hendaia. En este entorno, el río
                    Bidasoa desemboca en el mar y separa las costas
                    española y francesa.
                </p>

                <p class="body-copy" style="margin-top:15px;">
                    La configuración de la bahía proporciona a la playa
                    un ambiente diferente al de los arenales más abiertos
                    al Cantábrico. El paisaje combina agua, puerto, playa
                    y montañas en el horizonte.
                </p>

                <ul class="feature-list">
                    <li>
                        <span><strong>Bahía de Txingudi:</strong> un espacio
                        natural y marítimo de gran personalidad.</span>
                    </li>
                    <li>
                        <span><strong>Río Bidasoa:</strong> desemboca en la
                        bahía y marca la frontera entre España y Francia.</span>
                    </li>
                    <li>
                        <span><strong>Hendaia:</strong> la localidad francesa
                        se encuentra frente a Hondarribia, al otro lado
                        de la bahía.</span>
                    </li>
                    <li>
                        <span><strong>Monte Jaizkibel:</strong> un referente
                        del paisaje natural de esta parte de la costa vasca.</span>
                    </li>
                    <li>
                        <span><strong>Puerto deportivo:</strong> completa
                        el paisaje marítimo y ofrece una zona agradable
                        para pasear.</span>
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

    <!-- ACTIVIDADES ACUÁTICAS -->
    <section class="water-section">
        <div class="container water-grid">
            <div class="reveal">
                <img
                    src="<?= htmlspecialchars($images['water'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Agua del mar y paisaje marítimo"
                    loading="lazy"
                >
            </div>

            <div class="reveal">
                <div class="section-kicker">El mar como protagonista</div>
                <h2>Deportes acuáticos y actividades en la bahía</h2>

                <p class="body-copy">
                    La Playa de Hondarribia no es solo un lugar para tomar
                    el sol y bañarse. Su ubicación en la bahía de Txingudi
                    permite disfrutar de distintas actividades náuticas
                    y deportivas.
                </p>

                <p class="body-copy" style="margin-top:15px;">
                    Entre las propuestas que recoge la información turística
                    oficial figuran el piragüismo, el windsurf, la pesca
                    deportiva, el buceo y otras actividades relacionadas
                    con el mar.
                </p>

                <div class="water-box">
                    <h3>Actividades que puedes encontrar</h3>
                    <p>
                        Consulta con los operadores locales las actividades
                        disponibles, los horarios y las condiciones de cada
                        servicio.
                    </p>

                    <div class="water-tags">
                        <span>🛶 Piragüismo</span>
                        <span>🏄 Windsurf</span>
                        <span>🤿 Buceo</span>
                        <span>🎣 Pesca deportiva</span>
                        <span>🚤 Actividades náuticas</span>
                        <span>🏊 Natación</span>
                    </div>
                </div>

                <p class="body-copy" style="font-size:.83rem;margin-top:15px;">
                    Durante el verano también pueden instalarse estructuras
                    recreativas en el agua, como toboganes y trampolines,
                    dependiendo de la temporada.
                </p>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section class="services" id="servicios">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Comodidad junto al mar</div>
                <h2>Servicios de la Playa de Hondarribia</h2>
                <p>
                    La playa dispone de una amplia oferta de instalaciones
                    y servicios para disfrutar de una jornada cómoda
                    junto al mar.
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
                    <p>Vigilancia y asistencia durante la temporada de baño.</p>
                </div>

                <div class="service reveal">
                    <span>🚰</span>
                    <strong>Fuentes</strong>
                    <p>Puntos de agua en las instalaciones de la playa.</p>
                </div>

                <div class="service reveal">
                    <span>🍹</span>
                    <strong>Bar y chiringuito</strong>
                    <p>Opciones para tomar algo cerca de la arena.</p>
                </div>

                <div class="service reveal">
                    <span>🛝</span>
                    <strong>Juegos infantiles</strong>
                    <p>Espacios recreativos para los más pequeños.</p>
                </div>

                <div class="service reveal">
                    <span>🏐</span>
                    <strong>Instalaciones deportivas</strong>
                    <p>Espacios para practicar actividades al aire libre.</p>
                </div>

                <div class="service reveal">
                    <span>🚗</span>
                    <strong>Aparcamiento</strong>
                    <p>Zonas de estacionamiento en el entorno de la playa.</p>
                </div>

                <div class="service reveal">
                    <span>🚲</span>
                    <strong>Guarda bicicletas</strong>
                    <p>Servicios para quienes llegan en bicicleta.</p>
                </div>

                <div class="service reveal">
                    <span>🧺</span>
                    <strong>Área recreativa</strong>
                    <p>Espacio de merendero para descansar al aire libre.</p>
                </div>

                <div class="service reveal">
                    <span>🩴</span>
                    <strong>Lavapiés</strong>
                    <p>Instalaciones para quitarse la arena.</p>
                </div>

                <div class="service reveal">
                    <span>♿</span>
                    <strong>Accesibilidad</strong>
                    <p>Rampas y pasillos adaptados en la arena.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ACCESIBILIDAD -->
    <section>
        <div class="container landscape-grid">
            <div class="reveal">
                <div class="section-kicker">Una playa para todos</div>
                <h2>Accesibilidad y baño asistido</h2>

                <p class="body-copy">
                    La Playa de Hondarribia dispone de diferentes recursos
                    para facilitar el acceso a personas con movilidad reducida.
                    El entorno cuenta con rampas y pasillos rígidos que
                    permiten desplazarse sobre la arena.
                </p>

                <p class="body-copy" style="margin-top:15px;">
                    La información turística de la zona también recoge
                    la existencia de plazas de aparcamiento reservadas,
                    aseos adaptados y servicio de baño asistido en temporada.
                </p>

                <ul class="feature-list">
                    <li>Rampas de acceso desde el paseo.</li>
                    <li>Pasillos rígidos sobre la arena.</li>
                    <li>Plazas de aparcamiento reservadas.</li>
                    <li>Recursos de apoyo para el baño asistido.</li>
                    <li>Servicios adaptados según disponibilidad estacional.</li>
                </ul>

                <p class="body-copy" style="font-size:.85rem;margin-top:15px;">
                    Se recomienda consultar previamente con los servicios
                    municipales para confirmar horarios, condiciones
                    y disponibilidad del baño asistido.
                </p>
            </div>

            <div class="reveal">
                <img
                    src="<?= htmlspecialchars($images['beach'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Arenal de playa de arena"
                    loading="lazy"
                >
            </div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section class="gallery">
        <div class="container">
            <div class="section-heading reveal">
                <div class="section-kicker">Postales de la costa vasca</div>
                <h2>La belleza de la bahía de Txingudi</h2>
                <p>
                    Un entorno donde se encuentran la playa, el puerto,
                    el río y los paisajes de la costa vasca.
                </p>
            </div>

            <div class="gallery-grid reveal">
                <img
                    class="large"
                    src="<?= htmlspecialchars($images['water'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Paisaje de agua y mar"
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
                    alt="Luz de atardecer junto al mar"
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
                <h2>Consejos para disfrutar de Hondarribia</h2>
                <p>
                    Algunas recomendaciones para organizar un día de playa
                    y aprovechar todo lo que ofrece este rincón de Gipuzkoa.
                </p>
            </div>

            <div class="tips-grid">
                <div class="tip reveal">
                    <strong>☀️ Aprovecha los días de verano</strong>
                    <p>
                        La playa es un destino muy popular en temporada alta.
                        Si quieres encontrar un buen sitio, procura llegar
                        con tiempo.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🌊 Consulta las condiciones del baño</strong>
                    <p>
                        Aunque la bahía suele ofrecer aguas tranquilas,
                        comprueba siempre las banderas y las indicaciones
                        del servicio de vigilancia.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🛶 Infórmate sobre las actividades náuticas</strong>
                    <p>
                        Consulta las empresas y servicios disponibles
                        en cada época del año para organizar tus actividades
                        en el agua.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🇫🇷 Descubre Hendaia</strong>
                    <p>
                        Desde Hondarribia puedes contemplar la costa francesa
                        y organizar un desplazamiento en barco por la bahía,
                        si el servicio está operativo.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🚶 Pasea por el puerto</strong>
                    <p>
                        Dedica un rato a recorrer el puerto deportivo
                        y el entorno marítimo para disfrutar de otra
                        perspectiva de la localidad.
                    </p>
                </div>

                <div class="tip reveal">
                    <strong>🍽️ Prueba la gastronomía local</strong>
                    <p>
                        Aprovecha la visita para conocer el casco histórico
                        y disfrutar de los pintxos y la cocina tradicional
                        de Hondarribia.
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
                <h2>Cómo llegar a la Playa de Hondarribia</h2>

                <p>
                    La playa se encuentra en el paseo Ramón Iribarren,
                    junto al puerto deportivo de Hondarribia y a poca
                    distancia del centro urbano.
                </p>

                <p>
                    <strong>Localidad:</strong> Hondarribia<br>
                    <strong>Provincia:</strong> Gipuzkoa<br>
                    <strong>Comunidad autónoma:</strong> País Vasco<br>
                    <strong>Dirección:</strong> Paseo Ramón Iribarren, s/n<br>
                    <strong>Código postal:</strong> 20280
                </p>

                <p>
                    Se puede llegar en coche y transporte público.
                    También existen conexiones en barco con Hendaia
                    a través de la bahía de Txingudi.
                </p>

                <p>
                    Si llegas en coche durante el verano, conviene
                    prever tiempo adicional para aparcar.
                </p>

                <a
                    href="https://www.google.com/maps/search/?api=1&query=Playa+de+Hondarribia+Gipuzkoa"
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
                    title="Mapa de ubicación de la Playa de Hondarribia"
                    src="https://www.google.com/maps?q=Playa+de+Hondarribia+Gipuzkoa&output=embed"
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
                <h2>Preguntas frecuentes sobre la Playa de Hondarribia</h2>
                <p>
                    Información práctica para preparar tu visita
                    a este arenal de la bahía de Txingudi.
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
                <div class="section-kicker">Descubre Gipuzkoa y el País Vasco francés</div>
                <h2>Completa tu visita con actividades y experiencias</h2>

                <p>
                    Aprovecha tu estancia en Hondarribia para descubrir
                    la bahía de Txingudi, conocer los pueblos de la costa
                    vasca, realizar actividades acuáticas o disfrutar
                    de experiencias gastronómicas y culturales.
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

            <h2>Descubre la Playa de Hondarribia y la bahía de Txingudi</h2>

            <p>
                Arena dorada, aguas tranquilas, ambiente marinero y
                un paisaje único entre Gipuzkoa y el País Vasco francés.
                Hondarribia es una visita imprescindible del Cantábrico.
            </p>

            <a
                href="https://hondarribiaturismo.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-primary"
            >
                Descubrir Hondarribia
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
            Playa de Hondarribia · Gipuzkoa · País Vasco
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
