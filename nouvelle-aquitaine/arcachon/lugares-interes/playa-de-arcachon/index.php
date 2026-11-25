
<?php
$pageTitle = "Playa de Arcachon: guía de playas, Pereire, Moulleau y el Bassin d’Arcachon";
$pageDescription = "Descubre las playas de Arcachon, Francia: Plage Pereire, Thiers, Eyrac, Abatilles y Le Moulleau. Qué hacer, mareas, accesibilidad, servicios, mapa y consejos para visitar el Bassin d’Arcachon.";
$canonical = "https://www.tudominio.com/francia/arcachon/lugares-interes/playa-de-arcachon/";
$ogImage = "https://www.tudominio.com/images/playa-de-arcachon.jpg";

$faqs = [
    [
        "q" => "¿Dónde está la playa de Arcachon?",
        "a" => "Arcachon se encuentra en el departamento de Gironde, en la región de Nueva Aquitania, al suroeste de Francia. Sus playas se extienden a lo largo del Bassin d’Arcachon, frente a la península de Cap Ferret."
    ],
    [
        "q" => "¿Cuántos kilómetros de playa tiene Arcachon?",
        "a" => "La oficina de turismo de Arcachon destaca aproximadamente siete kilómetros de playas de arena fina, repartidos entre diferentes sectores como Thiers, Eyrac, Pereire, Abatilles y Le Moulleau."
    ],
    [
        "q" => "¿Cuál es la playa más bonita de Arcachon?",
        "a" => "Pereire es una de las más populares por su extensión de arena, su paseo marítimo arbolado y sus vistas a Cap Ferret. Le Moulleau destaca por su ambiente y sus panorámicas hacia la Duna de Pilat."
    ],
    [
        "q" => "¿Qué playa de Arcachon es mejor para ir con niños?",
        "a" => "Pereire es una opción muy popular para familias por su amplitud, sus zonas verdes, sus juegos infantiles y sus servicios. La playa central de Thiers también es práctica por su ubicación y sus equipamientos."
    ],
    [
        "q" => "¿Se puede nadar en las playas de Arcachon?",
        "a" => "Sí. Las playas del Bassin d’Arcachon ofrecen zonas de baño, algunas vigiladas durante el verano. Es importante respetar las áreas delimitadas, las banderas y los horarios de vigilancia."
    ],
    [
        "q" => "¿Cómo afectan las mareas a las playas de Arcachon?",
        "a" => "Las mareas modifican notablemente la anchura de la playa y la distancia hasta el agua. Con marea baja pueden aparecer grandes bancos de arena y el agua puede quedar bastante alejada de la orilla. Consulta la tabla de mareas antes de organizar el baño."
    ],
    [
        "q" => "¿Qué playa de Arcachon es accesible para personas con movilidad reducida?",
        "a" => "La playa Thiers, en el centro de Arcachon, dispone de equipamiento Handiplage: rampa, alfombra de acceso al agua, sillas anfibias y servicios adaptados. La disponibilidad de asistencia y baño acompañado depende del calendario y horario municipal."
    ],
    [
        "q" => "¿Desde qué playa se ve la Duna de Pilat?",
        "a" => "Desde la playa de Le Moulleau y distintos puntos del litoral de Arcachon se disfrutan vistas hacia la Duna de Pilat y la península de Cap Ferret."
    ],
    [
        "q" => "¿Cuál es la diferencia entre Arcachon y la costa atlántica?",
        "a" => "Las playas de Arcachon están dentro del Bassin d’Arcachon y suelen estar más protegidas del oleaje directo del Atlántico. Las playas oceánicas próximas, como las de la Duna de Pilat o La Salie, tienen condiciones de mar abierto, corrientes y rompientes más intensas."
    ],
    [
        "q" => "¿Se puede visitar Arcachon durante todo el año?",
        "a" => "Sí. Arcachon es un destino agradable durante todo el año para pasear, recorrer su paseo marítimo, descubrir sus barrios y disfrutar del paisaje de la bahía. La vigilancia de las playas y muchos servicios son estacionales."
    ]
];

$schemaBeach = [
    "@context" => "https://schema.org",
    "@type" => "Beach",
    "name" => "Playas de Arcachon",
    "description" => $pageDescription,
    "url" => $canonical,
    "image" => $ogImage,
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Arcachon",
        "addressRegion" => "Gironde, Nouvelle-Aquitaine",
        "postalCode" => "33120",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 44.6615,
        "longitude" => -1.1685
    ],
    "isPartOf" => [
        "@type" => "Place",
        "name" => "Bassin d’Arcachon"
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
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <meta property="og:type" content="article">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="Playas del Norte">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

    <meta name="theme-color" content="#073b50">

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
            --ocean: #073b50;
            --ocean-deep: #052c3c;
            --blue: #087f9c;
            --turquoise: #38b9ad;
            --mint: #dff4ed;
            --sand: #f3eadb;
            --cream: #fbfaf6;
            --ink: #18313a;
            --muted: #687c80;
            --white: #fff;
            --line: #e7eeeb;
            --radius: 24px;
            --shadow: 0 18px 55px rgba(5,45,61,.11);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            margin: 0;
            background: var(--cream);
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
            line-height: 1.72;
        }

        img {
            display: block;
            max-width: 100%;
        }

        a {
            color: inherit;
        }

        .container {
            width: min(1180px, calc(100% - 42px));
            margin: 0 auto;
        }

        .topbar {
            background: var(--ocean-deep);
            color: #d9eeee;
            font-size: .79rem;
            letter-spacing: .03em;
            padding: 8px 0;
        }

        .topbar-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255,255,255,.94);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(7,59,80,.08);
        }

        .nav-inner {
            min-height: 74px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
        }

        .brand {
            color: var(--ocean);
            text-decoration: none;
            font-family: 'Manrope', sans-serif;
            font-size: 1.13rem;
            font-weight: 800;
            letter-spacing: -.05em;
            white-space: nowrap;
        }

        .brand span {
            color: var(--turquoise);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 21px;
        }

        .nav-links a {
            color: #35515a;
            font-size: .84rem;
            font-weight: 700;
            text-decoration: none;
            transition: color .2s;
        }

        .nav-links a:hover {
            color: var(--blue);
        }

        .hero {
            min-height: 730px;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            color: white;
            background:
                linear-gradient(90deg, rgba(3,29,43,.78), rgba(3,29,43,.25) 72%),
                linear-gradient(0deg, rgba(3,29,43,.45), transparent 60%),
                url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=2200&q=90') center 52%/cover;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 580px;
            height: 580px;
            border: 1px solid rgba(255,255,255,.17);
            border-radius: 50%;
            right: -150px;
            bottom: -330px;
            box-shadow: 0 0 0 45px rgba(255,255,255,.035), 0 0 0 90px rgba(255,255,255,.025);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 850px;
            padding: 110px 0 130px;
            animation: heroIn 1s ease both;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #b9f2e8;
            text-transform: uppercase;
            letter-spacing: .16em;
            font-size: .75rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .eyebrow::before {
            content: "";
            width: 32px;
            height: 2px;
            background: var(--turquoise);
        }

        h1, h2, h3 {
            font-family: 'Manrope', sans-serif;
            line-height: 1.15;
            letter-spacing: -.045em;
        }

        h1 {
            max-width: 850px;
            font-size: clamp(3rem, 7vw, 6.1rem);
            margin: 0 0 25px;
        }

        .hero p {
            max-width: 690px;
            color: rgba(255,255,255,.91);
            font-size: clamp(1.05rem, 2vw, 1.25rem);
            margin: 0 0 34px;
        }

        .hero-actions {
            display: flex;
            gap: 13px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 48px;
            padding: 13px 23px;
            border-radius: 999px;
            font-weight: 800;
            text-decoration: none;
            transition: transform .25s, background .25s, box-shadow .25s;
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0,0,0,.15);
        }

        .btn-primary {
            color: #073b50;
            background: var(--turquoise);
        }

        .btn-light {
            color: var(--ocean);
            background: white;
        }

        .quick-wrap {
            position: relative;
            z-index: 3;
            margin-top: -55px;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            overflow: hidden;
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .quick-item {
            padding: 27px 25px;
            border-right: 1px solid var(--line);
        }

        .quick-item:last-child {
            border: 0;
        }

        .quick-item strong {
            display: block;
            color: var(--ocean);
            font-family: 'Manrope', sans-serif;
            font-size: 1.12rem;
            margin-bottom: 3px;
        }

        .quick-item span {
            color: var(--muted);
            font-size: .83rem;
        }

        section {
            padding: 100px 0;
        }

        .section-kicker {
            color: var(--blue);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
            margin-bottom: 13px;
        }

        .section-title {
            max-width: 850px;
            color: var(--ocean);
            font-size: clamp(2.1rem, 4.4vw, 3.5rem);
            margin: 0 0 20px;
        }

        .section-intro {
            max-width: 800px;
            color: var(--muted);
            font-size: 1.08rem;
            margin: 0 0 42px;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 60px;
        }

        .intro-copy p {
            color: #536b70;
        }

        .intro-image {
            min-height: 500px;
            border-radius: 28px;
            background:
                url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=85') center/cover;
            box-shadow: var(--shadow);
            position: relative;
        }

        .intro-image::after {
            content: "Bassin d’Arcachon";
            position: absolute;
            left: 22px;
            bottom: 22px;
            background: rgba(255,255,255,.94);
            color: var(--ocean);
            padding: 11px 17px;
            border-radius: 50px;
            font-weight: 800;
            font-size: .85rem;
        }

        .highlight {
            padding: 18px 22px;
            border-left: 4px solid var(--turquoise);
            border-radius: 0 15px 15px 0;
            background: #eaf7f2;
            color: var(--ocean);
            font-weight: 700;
            margin-top: 27px;
        }

        .beaches-section {
            background: #f0f5f2;
        }

        .beach-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 27px;
        }

        .beach-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(5,45,61,.06);
            transition: transform .35s, box-shadow .35s;
        }

        .beach-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow);
        }

        .beach-photo {
            height: 270px;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .beach-photo::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(4,36,48,.2), transparent 60%);
        }

        .photo-thiers {
            background-image: url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1100&q=85');
        }

        .photo-pereire {
            background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1100&q=85');
        }

        .photo-eyrac {
            background-image: url('https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1100&q=85');
        }

        .photo-abatilles {
            background-image: url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=1100&q=85');
        }

        .photo-moulleau {
            background-image: url('https://images.unsplash.com/photo-1498307833015-e7b400441eb8?auto=format&fit=crop&w=1100&q=85');
        }

        .photo-aiguillon {
            background-image: url('https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=1100&q=85');
        }

        .beach-content {
            padding: 29px;
        }

        .tag {
            display: inline-block;
            color: #087d79;
            background: #e5f5ef;
            border-radius: 50px;
            padding: 6px 11px;
            margin-bottom: 13px;
            font-size: .69rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .09em;
        }

        .beach-content h3 {
            color: var(--ocean);
            font-size: 1.55rem;
            margin: 0 0 13px;
        }

        .beach-content p {
            color: var(--muted);
            margin: 0;
        }

        .beach-meta {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 18px;
        }

        .beach-meta span {
            color: #557078;
            background: #f4f7f5;
            border-radius: 50px;
            padding: 6px 10px;
            font-size: .75rem;
            font-weight: 700;
        }

        .tide-section {
            background: var(--ocean);
            color: white;
            overflow: hidden;
            position: relative;
        }

        .tide-section::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
            right: -220px;
            top: -240px;
            box-shadow: 0 0 0 55px rgba(255,255,255,.025), 0 0 0 110px rgba(255,255,255,.02);
        }

        .tide-section .section-title {
            color: white;
        }

        .tide-section .section-kicker {
            color: #8ee1d5;
        }

        .tide-section .section-intro {
            color: #c8dfe0;
        }

        .tide-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 45px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .tide-copy p {
            color: #d1e2e3;
        }

        .tide-image {
            min-height: 430px;
            border-radius: 25px;
            background: url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1200&q=85') center/cover;
        }

        .tide-points {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 13px;
            margin-top: 25px;
        }

        .tide-point {
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 15px;
            padding: 17px;
            color: #e5f2f1;
            background: rgba(255,255,255,.05);
        }

        .tide-point strong {
            display: block;
            color: #9ce9dd;
            margin-bottom: 5px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .feature {
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: white;
            transition: transform .3s, box-shadow .3s;
        }

        .feature:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow);
        }

        .feature-icon {
            width: 52px;
            height: 52px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            background: var(--mint);
            font-size: 1.45rem;
            margin-bottom: 19px;
        }

        .feature h3 {
            color: var(--ocean);
            font-size: 1.2rem;
            margin: 0 0 10px;
        }

        .feature p {
            color: var(--muted);
            font-size: .94rem;
            margin: 0;
        }

        .access-section {
            background: #f0f5f2;
        }

        .access-box {
            padding: 40px;
            border-radius: 25px;
            background: #e3f3ed;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 30px;
            align-items: center;
        }

        .access-box h3 {
            color: var(--ocean);
            font-size: 1.65rem;
            margin: 0 0 13px;
        }

        .access-box p {
            color: #536b70;
            margin: 0;
        }

        .access-symbol {
            font-size: 4.5rem;
        }

        .notice {
            margin-top: 24px;
            padding: 19px 22px;
            border-left: 4px solid #d99b42;
            border-radius: 0 15px 15px 0;
            background: #fff4e5;
            color: #79501e;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr .8fr;
            grid-template-rows: 225px 225px;
            gap: 14px;
        }

        .gallery-item {
            border-radius: 19px;
            background-size: cover;
            background-position: center;
            transition: transform .35s, filter .35s;
        }

        .gallery-item:hover {
            transform: scale(1.025);
            filter: saturate(1.15);
        }

        .gallery-item:first-child {
            grid-row: span 2;
        }

        .gallery-one {
            background-image: url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1000&q=85');
        }

        .gallery-two {
            background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=85');
        }

        .gallery-three {
            background-image: url('https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=800&q=85');
        }

        .gallery-four {
            background-image: url('https://images.unsplash.com/photo-1498307833015-e7b400441eb8?auto=format&fit=crop&w=800&q=85');
        }

        .gallery-five {
            background-image: url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=800&q=85');
        }

        .tips-section {
            background: #f0f5f2;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 17px;
        }

        .tip {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 21px;
            background: white;
            border: 1px solid var(--line);
            border-radius: 17px;
        }

        .tip-icon {
            font-size: 1.5rem;
        }

        .tip p {
            color: #536b70;
            margin: 0;
        }

        .map-section {
            background: #f0f5f2;
        }

        .map-frame {
            width: 100%;
            height: 460px;
            border: 0;
            border-radius: 24px;
            box-shadow: var(--shadow);
        }

        .map-caption {
            color: var(--muted);
            margin-top: 18px;
        }

        .faq-list {
            max-width: 930px;
        }

        .faq-item {
            overflow: hidden;
            background: white;
            border: 1px solid var(--line);
            border-radius: 16px;
            margin-bottom: 13px;
        }

        .faq-item summary {
            position: relative;
            padding: 21px 58px 21px 23px;
            color: var(--ocean);
            font-weight: 800;
            cursor: pointer;
            list-style: none;
        }

        .faq-item summary::-webkit-details-marker {
            display: none;
        }

        .faq-item summary::after {
            content: "+";
            position: absolute;
            top: 12px;
            right: 22px;
            color: var(--turquoise);
            font-size: 1.7rem;
        }

        .faq-item[open] summary::after {
            content: "−";
        }

        .faq-answer {
            padding: 0 23px 22px;
            color: var(--muted);
        }

        .cta {
            padding: 82px 30px;
            border-radius: 30px;
            text-align: center;
            color: white;
            background:
                linear-gradient(110deg, rgba(3,36,50,.94), rgba(5,83,96,.75)),
                url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1800&q=85') center/cover;
        }

        .cta h2 {
            max-width: 820px;
            margin: 0 auto 20px;
            font-size: clamp(2.1rem, 4.5vw, 3.6rem);
        }

        .cta p {
            max-width: 690px;
            color: #d7e8e8;
            margin: 0 auto 30px;
        }

        .ad-container {
            min-height: 90px;
            margin: 42px auto;
            text-align: center;
        }

        footer {
            padding: 48px 0;
            background: var(--ocean-deep);
            color: #d1e2e3;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
        }

        footer a {
            color: #9ce4db;
            text-decoration: none;
        }

        .footer-description {
            max-width: 440px;
            color: #b9cdcf;
        }

        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .75s ease, transform .75s cubic-bezier(.2,.7,.2,1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-1 { transition-delay: .08s; }
        .delay-2 { transition-delay: .16s; }
        .delay-3 { transition-delay: .24s; }

        @keyframes heroIn {
            from {
                opacity: 0;
                transform: translateY(28px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 950px) {
            .nav-links {
                gap: 13px;
            }

            .nav-links a {
                font-size: .76rem;
            }

            .intro-grid,
            .tide-grid {
                gap: 35px;
            }

            .feature-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 800px) {
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
                border-bottom: 1px solid var(--line);
            }

            .intro-grid,
            .tide-grid {
                grid-template-columns: 1fr;
            }

            .intro-image {
                min-height: 350px;
            }

            .tide-image {
                min-height: 340px;
            }

            .gallery-grid {
                grid-template-rows: 190px 190px;
            }
        }

        @media (max-width: 600px) {
            .container {
                width: min(100% - 28px, 1180px);
            }

            .hero {
                min-height: 650px;
            }

            .hero-content {
                padding: 80px 0 110px;
            }

            section {
                padding: 72px 0;
            }

            .quick-grid,
            .beach-grid,
            .feature-grid,
            .tips-grid {
                grid-template-columns: 1fr;
            }

            .quick-item {
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }

            .quick-item:last-child {
                border-bottom: 0;
            }

            .beach-photo {
                height: 220px;
            }

            .tide-points {
                grid-template-columns: 1fr;
            }

            .access-box {
                grid-template-columns: 1fr;
                padding: 28px;
            }

            .access-symbol {
                font-size: 3rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 190px 145px 145px;
            }

            .gallery-item:first-child {
                grid-column: span 2;
                grid-row: auto;
            }

            .map-frame {
                height: 340px;
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
            <span>Playas del Atlántico francés</span>
            <span>Arcachon · Gironde · Nouvelle-Aquitaine</span>
        </div>
    </div>

    <header class="navbar">
        <div class="container nav-inner">
            <a class="brand" href="/">PLAYAS <span>DEL NORTE</span></a>

            <nav class="nav-links" aria-label="Navegación principal">
                <a href="#descubre">Descubre</a>
                <a href="#playas">Las playas</a>
                <a href="#mareas">Las mareas</a>
                <a href="#actividades">Actividades</a>
                <a href="#accesibilidad">Accesibilidad</a>
                <a href="#mapa">Ubicación</a>
                <a href="#faq">FAQ</a>
            </nav>
        </div>
    </header>

    <main>

        <section class="hero">
            <div class="container hero-content">
                <div class="eyebrow">Bassin d’Arcachon · Francia</div>

                <h1>Playa de Arcachon, siete kilómetros de arena junto a la bahía</h1>

                <p>
                    Descubre las playas de Arcachon: la extensa Pereire,
                    la céntrica playa Thiers, la tranquila Eyrac,
                    Abatilles y el encantador barrio marinero de Le Moulleau.
                    Un destino de paseos, mareas, naturaleza y paisajes únicos.
                </p>

                <div class="hero-actions">
                    <a href="#playas" class="btn btn-primary">Descubrir las playas ↓</a>
                    <a href="#mapa" class="btn btn-light">Ver ubicación</a>
                </div>
            </div>
        </section>

        <div class="container quick-wrap">
            <div class="quick-grid">
                <div class="quick-item">
                    <strong>Arcachon</strong>
                    <span>Gironde, Nueva Aquitania</span>
                </div>
                <div class="quick-item">
                    <strong>7 km</strong>
                    <span>Playas de arena fina</span>
                </div>
                <div class="quick-item">
                    <strong>Bassin d’Arcachon</strong>
                    <span>Entorno de bahía protegida</span>
                </div>
                <div class="quick-item">
                    <strong>Playas familiares</strong>
                    <span>Paseos, baño y naturaleza</span>
                </div>
            </div>
        </div>

        <section id="descubre">
            <div class="container intro-grid">
                <div class="intro-copy reveal">
                    <div class="section-kicker">Un destino diferente</div>

                    <h2 class="section-title">
                        Arcachon: playas, pinos y paisajes de la bahía
                    </h2>

                    <p>
                        Arcachon es uno de los destinos costeros más
                        conocidos de la costa atlántica francesa.
                        Situada en el departamento de Gironde,
                        esta localidad se asoma al Bassin d’Arcachon,
                        una gran laguna litoral conectada con el océano.
                    </p>

                    <p>
                        Su litoral reúne alrededor de siete kilómetros
                        de playas de arena fina. Cada una tiene su
                        personalidad: desde la animada playa central,
                        junto al paseo marítimo y las terrazas,
                        hasta los amplios arenales de Pereire
                        o el ambiente relajado de Le Moulleau.
                    </p>

                    <p>
                        La bahía ofrece un paisaje cambiante.
                        Las mareas transforman la anchura de la arena,
                        dejan al descubierto bancos de arena y modifican
                        la distancia hasta el agua. Al otro lado del
                        Bassin se encuentra la península de Cap Ferret,
                        mientras que hacia el sur se alza la espectacular
                        Duna de Pilat.
                    </p>

                    <div class="highlight">
                        La mejor forma de conocer Arcachon es recorrer
                        sus diferentes playas: cada tramo del paseo
                        marítimo ofrece una perspectiva distinta
                        de la bahía.
                    </div>
                </div>

                <div class="intro-image reveal" role="img" aria-label="Paisaje de playa y mar"></div>
            </div>
        </section>

        <section class="beaches-section" id="playas">
            <div class="container">
                <div class="section-kicker">Encuentra tu playa ideal</div>

                <h2 class="section-title">
                    Las mejores playas de Arcachon
                </h2>

                <p class="section-intro">
                    Desde la playa urbana de Thiers hasta los arenales
                    de Pereire y Moulleau, descubre los principales
                    sectores del litoral de Arcachon y qué puedes
                    encontrar en cada uno.
                </p>

                <div class="beach-grid">

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-thiers"></div>

                        <div class="beach-content">
                            <span class="tag">Centro urbano · Accesible</span>
                            <h3>Plage Thiers o playa central</h3>

                            <p>
                                Es la playa más céntrica y animada
                                de Arcachon. Se extiende frente al
                                Boulevard de la Plage, entre los
                                espigones Thiers y Pierre Lataillade.
                                Su paseo marítimo reúne restaurantes,
                                cafeterías, comercios, actividades
                                infantiles y embarcaderos.
                            </p>

                            <p style="margin-top:13px;">
                                Es una opción cómoda para quienes
                                desean combinar baño, paseo y ocio
                                sin alejarse del centro. También
                                destaca por sus instalaciones
                                de accesibilidad.
                            </p>

                            <div class="beach-meta">
                                <span>Playa urbana</span>
                                <span>Servicios próximos</span>
                                <span>Handiplage</span>
                            </div>
                        </div>
                    </article>

                    <article class="beach-card reveal delay-1">
                        <div class="beach-photo photo-pereire"></div>

                        <div class="beach-content">
                            <span class="tag">La gran playa de Arcachon</span>
                            <h3>Plage Pereire</h3>

                            <p>
                                Es la playa más extensa y una de las
                                más apreciadas de Arcachon. Sus cerca
                                de tres kilómetros de arena fina están
                                acompañados por un largo paseo peatonal
                                y ciclista, zonas verdes y espacios
                                arbolados con pinos.
                            </p>

                            <p style="margin-top:13px;">
                                Sus vistas hacia la península de
                                Cap Ferret, su amplitud y sus zonas
                                de descanso la convierten en una
                                de las favoritas de familias,
                                caminantes y amantes de la playa.
                            </p>

                            <div class="beach-meta">
                                <span>3 km de paseo</span>
                                <span>Familias</span>
                                <span>Playa vigilada en temporada</span>
                            </div>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-eyrac"></div>

                        <div class="beach-content">
                            <span class="tag">Tranquilidad junto al puerto</span>
                            <h3>Plage d’Eyrac</h3>

                            <p>
                                Situada entre el centro urbano y el
                                puerto, Eyrac es una playa de ambiente
                                más tranquilo. Cuenta con unos
                                600 metros de longitud y un paseo
                                peatonal y ciclista que acompaña
                                el litoral.
                            </p>

                            <p style="margin-top:13px;">
                                Es una buena alternativa para dar
                                un paseo junto al agua, contemplar
                                las embarcaciones y disfrutar
                                de una zona menos animada que
                                la playa central.
                            </p>

                            <div class="beach-meta">
                                <span>600 m aprox.</span>
                                <span>Zona del puerto</span>
                                <span>Paseo marítimo</span>
                            </div>
                        </div>
                    </article>

                    <article class="beach-card reveal delay-1">
                        <div class="beach-photo photo-abatilles"></div>

                        <div class="beach-content">
                            <span class="tag">Deporte y zonas verdes</span>
                            <h3>Plage des Abatilles-Arbousiers</h3>

                            <p>
                                Al sur de Pereire, esta playa combina
                                arena, zonas de sombra y espacios
                                de descanso. Es conocida por sus
                                instalaciones deportivas y por
                                atraer a aficionados a actividades
                                de tabla, como windsurf y kitesurf,
                                cuando las condiciones lo permiten.
                            </p>

                            <p style="margin-top:13px;">
                                Dispone de servicios como duchas,
                                aparcamiento y espacios de ocio
                                en su entorno. Conviene comprobar
                                las condiciones de baño, ya que
                                no debe darse por hecho que cuenta
                                con vigilancia de socorristas.
                            </p>

                            <div class="beach-meta">
                                <span>Deportes náuticos</span>
                                <span>Zonas de sombra</span>
                                <span>Ambiente familiar</span>
                            </div>
                        </div>
                    </article>

                    <article class="beach-card reveal">
                        <div class="beach-photo photo-moulleau"></div>

                        <div class="beach-content">
                            <span class="tag">Vistas a la Duna de Pilat</span>
                            <h3>Plage du Moulleau</h3>

                            <p>
                                En el extremo sur de Arcachon,
                                Le Moulleau reúne playa, paseo,
                                terrazas y un ambiente muy especial.
                                Su emblemático embarcadero ofrece
                                vistas hacia la Duna de Pilat
                                y el faro de Cap Ferret.
                            </p>

                            <p style="margin-top:13px;">
                                Es uno de los lugares más agradables
                                para pasear al atardecer, tomar
                                un helado y disfrutar de las
                                panorámicas del Bassin.
                                Durante el verano dispone
                                de zona de baño vigilada.
                            </p>

                            <div class="beach-meta">
                                <span>Ambiente marinero</span>
                                <span>Embarcadero</span>
                                <span>Vigilancia estival</span>
                            </div>
                        </div>
                    </article>

                    <article class="beach-card reveal delay-1">
                        <div class="beach-photo photo-aiguillon"></div>

                        <div class="beach-content">
                            <span class="tag">Norte de Arcachon</span>
                            <h3>Plages de l’Aiguillon y La Pointe</h3>

                            <p>
                                En la zona norte de Arcachon se
                                encuentran sectores de playa más
                                tranquilos, próximos al barrio
                                de Aiguillon y a los espacios
                                portuarios.
                            </p>

                            <p style="margin-top:13px;">
                                Son interesantes para descubrir
                                otra cara de la localidad,
                                pasear junto al puerto y alejarse
                                de los tramos más concurridos
                                del paseo marítimo central.
                                Comprueba los accesos y las
                                condiciones de baño en cada punto.
                            </p>

                            <div class="beach-meta">
                                <span>Ambiente tranquilo</span>
                                <span>Zona norte</span>
                                <span>Paseos</span>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <section class="tide-section" id="mareas">
            <div class="container tide-grid">
                <div class="tide-copy reveal">
                    <div class="section-kicker">El ritmo del Bassin</div>

                    <h2 class="section-title">
                        Las mareas de Arcachon: un paisaje que cambia cada día
                    </h2>

                    <p>
                        Uno de los grandes atractivos de las playas
                        de Arcachon es la influencia de las mareas.
                        A diferencia de una playa oceánica convencional,
                        la línea de agua puede desplazarse mucho
                        a lo largo del día.
                    </p>

                    <p>
                        Con marea baja aparecen grandes extensiones
                        de arena y bancos que transforman por completo
                        el paisaje. Con marea alta, el agua se acerca
                        a la orilla y el baño suele resultar más cómodo
                        en muchos sectores.
                    </p>

                    <p>
                        Antes de acudir a la playa, consulta los
                        horarios de pleamar y bajamar. Ten especial
                        cuidado al caminar por bancos de arena:
                        la subida de la marea puede aislar zonas
                        que parecían accesibles.
                    </p>

                    <div class="tide-points">
                        <div class="tide-point">
                            <strong>Marea alta</strong>
                            El agua se acerca a la orilla y reduce
                            la superficie de arena disponible.
                        </div>

                        <div class="tide-point">
                            <strong>Marea baja</strong>
                            Aparecen amplios bancos y zonas de arena
                            que cambian la forma de la playa.
                        </div>
                    </div>
                </div>

                <div class="tide-image reveal" role="img" aria-label="Paisaje de mar y arena"></div>
            </div>
        </section>

        <section id="experiencias">
            <div class="container">
                <div class="section-kicker">Vive Arcachon</div>

                <h2 class="section-title">
                    Qué hacer en Arcachon además de ir a la playa
                </h2>

                <p class="section-intro">
                    El destino ofrece mucho más que sol y baño:
                    paseos marítimos, actividades náuticas,
                    excursiones por la bahía, gastronomía
                    y rincones naturales para descubrir.
                </p>

                <div class="feature-grid">

                    <article class="feature reveal">
                        <div class="feature-icon">⛵</div>
                        <h3>Excursiones en barco</h3>
                        <p>
                            Descubre el Bassin d’Arcachon desde el agua,
                            sus paisajes, sus canales y sus tradicionales
                            cabañas sobre pilotes.
                        </p>
                    </article>

                    <article class="feature reveal delay-1">
                        <div class="feature-icon">🚴</div>
                        <h3>Paseo en bicicleta</h3>
                        <p>
                            Recorre el paseo de Pereire y las rutas
                            ciclistas que conectan diferentes barrios
                            y zonas verdes de Arcachon.
                        </p>
                    </article>

                    <article class="feature reveal delay-2">
                        <div class="feature-icon">🌅</div>
                        <h3>Atardecer en Le Moulleau</h3>
                        <p>
                            Acércate al embarcadero y disfruta
                            de las vistas hacia Cap Ferret
                            y la Duna de Pilat.
                        </p>
                    </article>

                    <article class="feature reveal">
                        <div class="feature-icon">🏛️</div>
                        <h3>Ville d’Hiver</h3>
                        <p>
                            Descubre las villas históricas,
                            la arquitectura singular y los
                            jardines de uno de los barrios
                            más característicos de Arcachon.
                        </p>
                    </article>

                    <article class="feature reveal delay-1">
                        <div class="feature-icon">🦪</div>
                        <h3>Gastronomía local</h3>
                        <p>
                            Prueba las ostras del Bassin,
                            los pescados y los productos
                            gastronómicos de la costa de Gironde.
                        </p>
                    </article>

                    <article class="feature reveal delay-2">
                        <div class="feature-icon">🏖️</div>
                        <h3>La Duna de Pilat</h3>
                        <p>
                            Organiza una excursión a la gran duna
                            de arena situada al sur de la bahía,
                            uno de los paisajes más conocidos
                            de la costa francesa.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <section class="access-section" id="accesibilidad">
            <div class="container">
                <div class="section-kicker">Turismo accesible</div>

                <h2 class="section-title">
                    Playa accesible en Arcachon: equipamiento Handiplage
                </h2>

                <div class="access-box reveal">
                    <div>
                        <h3>Plage Thiers: acceso adaptado al baño</h3>

                        <p>
                            La playa central de Thiers cuenta con
                            la certificación Handiplage y dispone
                            de equipamientos para facilitar el
                            acceso a personas con movilidad reducida.
                            Entre ellos figuran plazas de aparcamiento
                            reservadas en las inmediaciones, rampa
                            de acceso, alfombra hasta el agua,
                            sillas anfibias, vestuario y sanitarios
                            adaptados.
                        </p>

                        <p style="margin-top:13px;">
                            El acompañamiento al baño se organiza
                            mediante personal formado y en horarios
                            concretos. Consulta con el Ayuntamiento
                            o la oficina de turismo para conocer
                            el calendario, disponibilidad y
                            condiciones del servicio.
                        </p>
                    </div>

                    <div class="access-symbol" aria-hidden="true">♿</div>
                </div>

                <div class="notice">
                    <strong>Importante:</strong> la disponibilidad
                    de material y asistencia puede variar según
                    la temporada. Conviene confirmar previamente
                    el servicio de baño adaptado, especialmente
                    fuera del verano.
                </div>
            </div>
        </section>

        <section id="servicios">
            <div class="container">
                <div class="section-kicker">Información práctica</div>

                <h2 class="section-title">
                    Servicios, vigilancia y seguridad en las playas
                </h2>

                <p class="section-intro">
                    Arcachon dispone de diferentes zonas de baño,
                    paseos, equipamientos y servicios turísticos.
                    La vigilancia se concentra en playas y periodos
                    concretos durante la temporada estival.
                </p>

                <div class="feature-grid">

                    <article class="feature reveal">
                        <div class="feature-icon">🚑</div>
                        <h3>Vigilancia estival</h3>
                        <p>
                            Las zonas de baño vigiladas se habilitan
                            durante el verano en Thiers, Pereire
                            y Le Moulleau, de acuerdo con el
                            calendario municipal.
                        </p>
                    </article>

                    <article class="feature reveal delay-1">
                        <div class="feature-icon">🚿</div>
                        <h3>Duchas y equipamientos</h3>
                        <p>
                            En los principales sectores turísticos
                            existen servicios como duchas,
                            sanitarios, restauración y zonas
                            de descanso, con disponibilidad
                            variable según el lugar y la época.
                        </p>
                    </article>

                    <article class="feature reveal delay-2">
                        <div class="feature-icon">🚲</div>
                        <h3>Paseos y carriles bici</h3>
                        <p>
                            El paseo marítimo de Pereire y los
                            itinerarios junto a Eyrac permiten
                            recorrer buena parte del litoral
                            a pie o en bicicleta.
                        </p>
                    </article>

                </div>

                <div style="overflow-x:auto;margin-top:40px;">
                    <table style="width:100%;border-collapse:collapse;background:white;border-radius:18px;overflow:hidden;box-shadow:0 10px 30px rgba(5,45,61,.05);">
                        <thead>
                            <tr style="background:#073b50;color:white;">
                                <th style="text-align:left;padding:17px;">Playa</th>
                                <th style="text-align:left;padding:17px;">Características</th>
                                <th style="text-align:left;padding:17px;">Vigilancia estival</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Thiers / playa central</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Centro urbano y accesibilidad</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Sí, según calendario municipal</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Pereire</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Gran arenal y paseo marítimo</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Sí, según calendario municipal</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Le Moulleau</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Playa y embarcadero</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Sí, según calendario municipal</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Eyrac</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">Playa junto al puerto</td>
                                <td style="padding:16px;border-bottom:1px solid #edf1ee;">No figura entre los principales puestos indicados</td>
                            </tr>
                            <tr>
                                <td style="padding:16px;">Abatilles</td>
                                <td style="padding:16px;">Deporte y zonas de sombra</td>
                                <td style="padding:16px;">Playa no vigilada según ficha turística</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="notice">
                    <strong>Seguridad:</strong> báñate en las zonas
                    autorizadas y vigiladas, respeta las banderas
                    y consulta las condiciones del día. La marea
                    puede modificar mucho la distancia hasta el agua.
                    No confundas las playas resguardadas del Bassin
                    con las playas oceánicas de mar abierto.
                </div>
            </div>
        </section>

        <section id="galeria">
            <div class="container">
                <div class="section-kicker">Paisajes de la bahía</div>

                <h2 class="section-title">
                    Galería de playas de Arcachon
                </h2>

                <p class="section-intro">
                    Arena fina, paseos marítimos, pinares y
                    panorámicas del Bassin d’Arcachon.
                    Una costa para disfrutar con calma.
                </p>

                <div class="gallery-grid reveal">
                    <div class="gallery-item gallery-one" role="img" aria-label="Paisaje de playa y mar"></div>
                    <div class="gallery-item gallery-two" role="img" aria-label="Arena y agua"></div>
                    <div class="gallery-item gallery-three" role="img" aria-label="Costa y paseo"></div>
                    <div class="gallery-item gallery-four" role="img" aria-label="Paisaje costero"></div>
                    <div class="gallery-item gallery-five" role="img" aria-label="Olas y playa"></div>
                </div>

                <p style="font-size:.82rem;color:#829397;margin-top:14px;">
                    Las fotografías de esta maqueta son ilustrativas.
                    Sustituir por imágenes propias o fotografías
                    identificadas específicamente con cada playa
                    de Arcachon antes de publicar.
                </p>
            </div>
        </section>

        <section class="tips-section" id="consejos">
            <div class="container">
                <div class="section-kicker">Prepara tu visita</div>

                <h2 class="section-title">
                    Consejos para disfrutar de las playas de Arcachon
                </h2>

                <p class="section-intro">
                    Unos pequeños detalles te ayudarán a organizar
                    mejor tu día de playa y aprovechar el paisaje
                    cambiante de la bahía.
                </p>

                <div class="tips-grid">

                    <div class="tip reveal">
                        <span class="tip-icon">🌊</span>
                        <p>
                            <strong>Consulta las mareas.</strong>
                            La pleamar y la bajamar cambian
                            considerablemente la superficie
                            de arena y la distancia al agua.
                        </p>
                    </div>

                    <div class="tip reveal delay-1">
                        <span class="tip-icon">🚩</span>
                        <p>
                            <strong>Respeta las banderas.</strong>
                            En las zonas vigiladas, sigue
                            las instrucciones de los socorristas
                            y las delimitaciones de baño.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span class="tip-icon">🚲</span>
                        <p>
                            <strong>Recorre Pereire en bicicleta.</strong>
                            Su paseo marítimo es uno de los
                            mejores lugares para disfrutar
                            de la costa de Arcachon.
                        </p>
                    </div>

                    <div class="tip reveal delay-1">
                        <span class="tip-icon">🌅</span>
                        <p>
                            <strong>Acércate a Le Moulleau.</strong>
                            El embarcadero y sus vistas
                            convierten esta zona en un lugar
                            especial al final del día.
                        </p>
                    </div>

                    <div class="tip reveal">
                        <span class="tip-icon">☀️</span>
                        <p>
                            <strong>Protégete del sol.</strong>
                            Lleva agua, crema solar, gorra
                            y protección para las horas
                            de mayor radiación.
                        </p>
                    </div>

                    <div class="tip reveal delay-1">
                        <span class="tip-icon">🧭</span>
                        <p>
                            <strong>Explora más allá de la playa.</strong>
                            Reserva tiempo para descubrir
                            Ville d’Hiver, los puertos y
                            los pueblos del Bassin.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section id="actividades">
            <div class="container">
                <div class="section-kicker">Organiza tu estancia</div>

                <h2 class="section-title">
                    Actividades y excursiones en Arcachon
                </h2>

                <p class="section-intro">
                    Completa tu visita con paseos en barco,
                    excursiones por el Bassin d’Arcachon,
                    experiencias gastronómicas y visitas
                    a los paisajes naturales de la región.
                </p>

                <div id="gyg-widget" style="min-height:250px;">
                    <div data-gyg-widget="auto" data-gyg-partner-id="VW16GKQ"></div>
                </div>
            </div>
        </section>

        <section class="map-section" id="mapa">
            <div class="container">
                <div class="section-kicker">Cómo llegar</div>

                <h2 class="section-title">
                    Dónde está la playa de Arcachon
                </h2>

                <p class="section-intro">
                    Arcachon se encuentra en la costa suroeste
                    de Francia, junto al Bassin d’Arcachon.
                    La playa central está junto al Boulevard
                    de la Plage y los embarcaderos del centro.
                </p>

                <iframe
                    class="map-frame"
                    src="https://www.google.com/maps?q=Plage+Thiers+Arcachon+France&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de la playa central de Arcachon">
                </iframe>

                <p class="map-caption">
                    <strong>Dirección de referencia:</strong>
                    Plage Thiers, Boulevard de la Plage,
                    33120 Arcachon, Francia.
                    Para Pereire, Eyrac, Abatilles y Le Moulleau,
                    utiliza sus accesos y aparcamientos específicos.
                </p>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <div class="section-kicker">Resolvemos tus dudas</div>

                <h2 class="section-title">
                    Preguntas frecuentes sobre las playas de Arcachon
                </h2>

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
                    <div class="eyebrow">Descubre el Bassin d’Arcachon</div>

                    <h2>
                        Arcachon te espera entre playas, mareas y paisajes inolvidables
                    </h2>

                    <p>
                        Recorre Pereire, descubre el ambiente de Le Moulleau,
                        pasea por el centro y disfruta de una de las bahías
                        más especiales de la costa francesa.
                    </p>

                    <a href="#mapa" class="btn btn-primary">
                        Planifica tu visita
                    </a>
                </div>
            </div>
        </section>

        <div class="container ad-container">
            <div
                id="adcash-zone"
                data-adcash-zone="mnaewnieki"
                style="width:100%;text-align:center;">
            </div>
        </div>

    </main>

    <footer>
        <div class="container footer-inner">
            <div>
                <a class="brand" href="/" style="color:white;">
                    PLAYAS <span>DEL NORTE</span>
                </a>

                <p class="footer-description">
                    Guía de playas, destinos costeros y lugares
                    para descubrir el litoral del norte de España
                    y las costas atlánticas cercanas.
                </p>
            </div>

            <div>
                <strong>Explora Arcachon</strong>
                <p><a href="#playas">Playas de Arcachon</a></p>
                <p><a href="#mareas">Mareas y consejos</a></p>
                <p><a href="#actividades">Actividades</a></p>
                <p><a href="#mapa">Cómo llegar</a></p>
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
                    threshold: 0.12,
                    rootMargin: "0px 0px -35px 0px"
                });

                elements.forEach((element) => {
                    observer.observe(element);
                });
            } else {
                elements.forEach((element) => {
                    element.classList.add("visible");
                });
            }
        });
    </script>

</body>
</html>
