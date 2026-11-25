
<?php
/*
 * Página: Duna de Pilat - La Teste-de-Buch
 * Ruta sugerida:
 * /francia/la-teste-de-buch/lugares-interes/playa-de-la-duna-de-pilat/
 */

$siteName = 'Playas del Cantábrico';
$pageTitle = 'Duna de Pilat: cómo visitarla, playas y miradores | La Teste-de-Buch';
$pageDescription = 'Descubre la Duna de Pilat en La Teste-de-Buch: cómo llegar, subir a la duna, playa oceánica, vistas al Banc d’Arguin y Cap Ferret, servicios y consejos para tu visita.';
$canonical = 'https://www.tudominio.com/francia/la-teste-de-buch/lugares-interes/playa-de-la-duna-de-pilat/';
$heroImage = 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=2000&q=85';

$faq = [
    [
        'q' => '¿Dónde está la Duna de Pilat?',
        'a' => 'Está en Pyla-sur-Mer, dentro del municipio de La Teste-de-Buch, en el departamento de Gironda, junto a la entrada de la bahía de Arcachon, en Francia.'
    ],
    [
        'q' => '¿Hay que pagar entrada para visitar la Duna de Pilat?',
        'a' => 'El acceso a la duna es gratuito si llegas a pie, en bicicleta o en transporte público. El aparcamiento oficial para vehículos es de pago y sus tarifas pueden variar según la temporada.'
    ],
    [
        'q' => '¿Cuánto se tarda en subir a la Duna de Pilat?',
        'a' => 'La subida suele requerir unos 10-15 minutos a un ritmo tranquilo, aunque depende de la condición física, el estado de la arena y de si está instalada la escalera estacional.'
    ],
    [
        'q' => '¿Cuándo está instalada la escalera?',
        'a' => 'La escalera se instala normalmente durante la temporada de primavera y verano, aproximadamente de abril a octubre, pero las fechas pueden variar según las condiciones y la gestión del paraje.'
    ],
    [
        'q' => '¿Se puede bajar desde la duna hasta la playa?',
        'a' => 'Sí. Desde la cresta se puede descender por la vertiente orientada al océano hasta la playa, siempre con precaución y respetando las zonas señalizadas.'
    ],
    [
        'q' => '¿Se puede visitar la Duna de Pilat en silla de ruedas?',
        'a' => 'La subida a la duna no es accesible en silla de ruedas. El espacio de recepción dispone de zonas accesibles, pero el terreno arenoso y las pendientes limitan el acceso a la propia duna.'
    ],
    [
        'q' => '¿Se admiten perros?',
        'a' => 'Se toleran perros con correa en el espacio de recepción y en la duna, pero no en la playa. Es importante consultar la normativa vigente antes de acudir.'
    ],
    [
        'q' => '¿Cuál es la mejor hora para visitar la duna?',
        'a' => 'A primera hora de la mañana y al final de la tarde suele haber menos afluencia y temperaturas más agradables. El atardecer ofrece una luz especialmente atractiva.'
    ]
];

$highlights = [
    [
        'number' => '01',
        'title' => 'La gran cresta de arena',
        'text' => 'Sube hasta la parte más alta y contempla cómo el océano, el bosque y la bahía se encuentran en un paisaje cambiante.',
        'image' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'number' => '02',
        'title' => 'La playa oceánica',
        'text' => 'Desciende por la vertiente occidental para descubrir la extensa playa que se extiende junto al Atlántico.',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'number' => '03',
        'title' => 'El Banc d’Arguin',
        'text' => 'Observa desde las alturas los bancos de arena y las aguas que forman uno de los paisajes más reconocibles de la bahía.',
        'image' => 'https://images.unsplash.com/photo-1518837695005-2083093ee35b?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'number' => '04',
        'title' => 'El bosque de las Landas',
        'text' => 'En la vertiente oriental, la arena avanza sobre el paisaje forestal y muestra el carácter vivo de este sistema natural.',
        'image' => 'https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=1000&q=80'
    ]
];

$experiences = [
    [
        'icon' => '🌅',
        'title' => 'Amanecer y atardecer',
        'text' => 'La luz baja transforma los tonos de la arena y crea panorámicas espectaculares sobre el océano y la bahía.'
    ],
    [
        'icon' => '📷',
        'title' => 'Fotografía de paisaje',
        'text' => 'La cresta, las sombras de las ondulaciones y el contraste entre bosque y mar ofrecen múltiples encuadres.'
    ],
    [
        'icon' => '🪂',
        'title' => 'Parapente',
        'text' => 'La zona es conocida por la práctica del vuelo libre. Consulta las condiciones meteorológicas y las normas locales.'
    ],
    [
        'icon' => '🥾',
        'title' => 'Paseos por el entorno',
        'text' => 'Completa la visita con los caminos y espacios naturales del entorno del Grand Site.'
    ]
];

$quickFacts = [
    ['label' => 'Ubicación', 'value' => 'Pyla-sur-Mer, La Teste-de-Buch'],
    ['label' => 'Longitud aproximada', 'value' => '2,7 km'],
    ['label' => 'Altura aproximada', 'value' => '100-115 m'],
    ['label' => 'Tipo de entorno', 'value' => 'Duna, bosque y playa oceánica'],
    ['label' => 'Acceso', 'value' => 'Gratuito a pie, bici o bus'],
    ['label' => 'Aparcamiento', 'value' => 'De pago en el acceso oficial']
];

$escape = function ($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
};

$faqSchema = [];
foreach ($faq as $item) {
    $faqSchema[] = [
        '@type' => 'Question',
        'name' => $item['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $item['a']
        ]
    ];
}

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'TouristAttraction',
            '@id' => $canonical . '#duna',
            'name' => 'Duna de Pilat',
            'alternateName' => 'Dune du Pilat',
            'description' => $pageDescription,
            'url' => $canonical,
            'image' => $heroImage,
            'touristType' => ['Nature lovers', 'Hikers', 'Photography enthusiasts'],
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'La Teste-de-Buch',
                'addressRegion' => 'Gironde',
                'postalCode' => '33115',
                'addressCountry' => 'FR'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 44.589245,
                'longitude' => -1.213303
            ],
            'isAccessibleForFree' => true
        ],
        [
            '@type' => 'FAQPage',
            '@id' => $canonical . '#faq',
            'mainEntity' => $faqSchema
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $pageTitle,
            'description' => $pageDescription,
            'inLanguage' => 'es',
            'isPartOf' => [
                '@type' => 'WebSite',
                'name' => $siteName,
                'url' => 'https://www.tudominio.com/'
            ],
            'about' => [
                '@id' => $canonical . '#duna'
            ]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $escape($pageTitle) ?></title>
    <meta name="description" content="<?= $escape($pageDescription) ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?= $escape($canonical) ?>">

    <meta property="og:type" content="article">
    <meta property="og:locale" content="es_ES">
    <meta property="og:site_name" content="<?= $escape($siteName) ?>">
    <meta property="og:title" content="<?= $escape($pageTitle) ?>">
    <meta property="og:description" content="<?= $escape($pageDescription) ?>">
    <meta property="og:url" content="<?= $escape($canonical) ?>">
    <meta property="og:image" content="<?= $escape($heroImage) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $escape($pageTitle) ?>">
    <meta name="twitter:description" content="<?= $escape($pageDescription) ?>">
    <meta name="twitter:image" content="<?= $escape($heroImage) ?>">

    <meta name="theme-color" content="#102d35">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    <?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <style>
        :root {
            --ink: #102d35;
            --ink-soft: #46616a;
            --sand: #f4eee4;
            --sand-light: #fbf8f2;
            --sea: #176d78;
            --sea-dark: #104d58;
            --orange: #d68c52;
            --white: #fff;
            --line: rgba(16,45,53,.12);
            --shadow: 0 22px 70px rgba(16,45,53,.12);
            --radius: 24px;
            --font-body: 'DM Sans', sans-serif;
            --font-display: 'Playfair Display', serif;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; scroll-padding-top: 100px; }
        body {
            margin: 0;
            color: var(--ink);
            background: var(--sand-light);
            font-family: var(--font-body);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }
        a { color: inherit; }
        img { display: block; max-width: 100%; }
        .container { width: min(1160px, calc(100% - 44px)); margin-inline: auto; }
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--sea);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }
        .eyebrow:before {
            content: "";
            width: 26px;
            height: 2px;
            background: var(--orange);
        }
        h1, h2, h3 { line-height: 1.12; }
        h1, h2 { font-family: var(--font-display); font-weight: 600; }
        h2 { font-size: clamp(2.2rem, 4.5vw, 4rem); letter-spacing: -.035em; }
        p { color: var(--ink-soft); }
        .section { padding: 105px 0; }
        .section-heading { max-width: 760px; margin-bottom: 44px; }
        .section-heading h2 { margin: 15px 0 16px; }
        .section-heading p { max-width: 680px; font-size: 1.04rem; }
        .topbar {
            position: absolute;
            z-index: 20;
            top: 0;
            left: 0;
            width: 100%;
            color: white;
            border-bottom: 1px solid rgba(255,255,255,.18);
        }
        .nav {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }
        .brand {
            color: white;
            text-decoration: none;
            font-size: 1.05rem;
            font-weight: 800;
            letter-spacing: -.03em;
        }
        .brand span { color: #e7bd91; }
        .nav-links { display: flex; align-items: center; gap: 25px; }
        .nav-links a {
            color: rgba(255,255,255,.88);
            text-decoration: none;
            font-size: .83rem;
            font-weight: 600;
            transition: color .25s;
        }
        .nav-links a:hover { color: #f2c99f; }
        .nav-cta {
            padding: 11px 18px;
            border: 1px solid rgba(255,255,255,.55);
            border-radius: 50px;
        }
        .hero {
            position: relative;
            min-height: 790px;
            display: flex;
            align-items: flex-end;
            overflow: hidden;
            color: white;
            background: #31515a;
        }
        .hero:before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(8,28,34,.72), rgba(8,28,34,.12) 78%),
                linear-gradient(0deg, rgba(8,28,34,.72), transparent 65%),
                url("<?= $escape($heroImage) ?>") center 48% / cover no-repeat;
            transform: scale(1.02);
            animation: heroZoom 16s ease-in-out infinite alternate;
        }
        .hero-content {
            position: relative;
            z-index: 1;
            width: min(1160px, calc(100% - 44px));
            margin: 0 auto;
            padding: 170px 0 100px;
        }
        .hero .eyebrow { color: #f2c99f; }
        .hero h1 {
            max-width: 900px;
            margin: 22px 0;
            color: white;
            font-size: clamp(3.4rem, 8vw, 7.6rem);
            letter-spacing: -.055em;
        }
        .hero h1 span { color: #f0c99e; }
        .hero-copy {
            max-width: 630px;
            color: rgba(255,255,255,.88);
            font-size: clamp(1rem, 1.5vw, 1.2rem);
        }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 13px; margin-top: 32px; }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 52px;
            padding: 13px 22px;
            border-radius: 50px;
            text-decoration: none;
            font-size: .9rem;
            font-weight: 800;
            transition: transform .25s, background .25s;
        }
        .btn:hover { transform: translateY(-3px); }
        .btn-primary { color: var(--ink); background: #f0c99e; }
        .btn-outline { color: white; border: 1px solid rgba(255,255,255,.65); }
        .hero-location {
            position: absolute;
            right: 0;
            bottom: 36px;
            color: rgba(255,255,255,.8);
            font-size: .78rem;
            letter-spacing: .08em;
            text-transform: uppercase;
        }
        .facts-wrap { position: relative; z-index: 3; margin-top: -42px; }
        .facts {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            overflow: hidden;
            border-radius: var(--radius);
            background: white;
            box-shadow: var(--shadow);
        }
        .fact {
            min-height: 105px;
            padding: 24px 28px;
            border-right: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }
        .fact:nth-child(3n) { border-right: 0; }
        .fact-label {
            display: block;
            color: #819198;
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .1em;
            text-transform: uppercase;
        }
        .fact-value { display: block; margin-top: 5px; font-size: 1rem; font-weight: 800; }
        .intro-grid {
            display: grid;
            grid-template-columns: 1fr .88fr;
            gap: 80px;
            align-items: center;
        }
        .intro-copy h2 { margin: 16px 0 22px; }
        .intro-copy p { font-size: 1.04rem; }
        .intro-photo { position: relative; }
        .intro-photo img {
            width: 100%;
            height: 520px;
            object-fit: cover;
            border-radius: 48% 48% 22px 22px;
            box-shadow: var(--shadow);
        }
        .photo-note {
            position: absolute;
            right: -22px;
            bottom: 28px;
            max-width: 210px;
            padding: 19px 22px;
            color: white;
            background: var(--sea-dark);
            border-radius: 18px;
            box-shadow: var(--shadow);
            font-size: .85rem;
            font-weight: 700;
        }
        .highlight-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
        .highlight-card {
            position: relative;
            min-height: 410px;
            overflow: hidden;
            border-radius: var(--radius);
            background: #29434a;
            isolation: isolate;
        }
        .highlight-card img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .8s cubic-bezier(.2,.7,.2,1);
            z-index: -2;
        }
        .highlight-card:hover img { transform: scale(1.07); }
        .highlight-card:after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(0deg, rgba(8,28,34,.86), transparent 75%);
        }
        .highlight-content { position: absolute; inset: auto 28px 28px; color: white; }
        .highlight-number { color: #f0c99e; font-size: .78rem; font-weight: 800; letter-spacing: .15em; }
        .highlight-content h3 {
            margin: 9px 0;
            color: white;
            font-family: var(--font-display);
            font-size: 2rem;
        }
        .highlight-content p { max-width: 470px; margin: 0; color: rgba(255,255,255,.83); }
        .dark-section { color: white; background: var(--ink); }
        .dark-section .eyebrow { color: #f0c99e; }
        .dark-section h2 { color: white; }
        .dark-section p { color: rgba(255,255,255,.72); }
        .experience-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }
        .experience-card {
            padding: 28px 23px;
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 20px;
            background: rgba(255,255,255,.045);
            transition: transform .3s, background .3s;
        }
        .experience-card:hover { transform: translateY(-7px); background: rgba(255,255,255,.09); }
        .experience-icon { font-size: 1.8rem; }
        .experience-card h3 { margin: 18px 0 9px; color: white; font-size: 1.05rem; }
        .experience-card p { margin: 0; font-size: .9rem; }
        .notice {
            display: flex;
            gap: 18px;
            align-items: flex-start;
            margin-top: 35px;
            padding: 23px 25px;
            border: 1px solid rgba(240,201,158,.32);
            border-radius: 18px;
            background: rgba(240,201,158,.08);
        }
        .notice strong { display: block; margin-bottom: 4px; color: #f0c99e; }
        .notice p { margin: 0; }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 55px;
            align-items: start;
        }
        .info-list { display: grid; gap: 0; }
        .info-row {
            display: grid;
            grid-template-columns: 175px 1fr;
            gap: 20px;
            padding: 18px 0;
            border-bottom: 1px solid var(--line);
        }
        .info-row strong { font-size: .9rem; }
        .info-row span { color: var(--ink-soft); font-size: .93rem; }
        .tips-panel {
            padding: 34px;
            border-radius: var(--radius);
            background: var(--sand);
        }
        .tips-panel h3 { margin-top: 0; font-family: var(--font-display); font-size: 1.8rem; }
        .tips-panel ul { padding-left: 20px; color: var(--ink-soft); }
        .tips-panel li { padding: 5px 0; }
        .accessibility {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 45px;
            align-items: center;
            padding: 38px;
            border-radius: var(--radius);
            background: #e9f0ed;
        }
        .accessibility h2 { margin: 12px 0; font-size: 2.4rem; }
        .accessibility p { margin-bottom: 0; }
        .accessibility-tag {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 50px;
            color: #175b4d;
            background: #d1e5dc;
            font-size: .75rem;
            font-weight: 800;
            text-transform: uppercase;
        }
        .gallery {
            display: grid;
            grid-template-columns: 1.3fr .7fr .7fr;
            grid-template-rows: 220px 220px;
            gap: 14px;
        }
        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
        }
        .gallery img:first-child { grid-row: span 2; }
        .map-layout {
            display: grid;
            grid-template-columns: .75fr 1.25fr;
            gap: 35px;
            align-items: stretch;
        }
        .map-copy {
            padding: 35px;
            border-radius: var(--radius);
            background: var(--sand);
        }
        .map-copy h3 { font-family: var(--font-display); font-size: 1.8rem; }
        .map-frame {
            min-height: 430px;
            overflow: hidden;
            border-radius: var(--radius);
            background: #dbe6e3;
            box-shadow: var(--shadow);
        }
        .map-frame iframe { width: 100%; height: 100%; min-height: 430px; border: 0; }
        .faq-list { max-width: 900px; margin: auto; }
        .faq-item { border-bottom: 1px solid var(--line); }
        .faq-item summary {
            position: relative;
            padding: 23px 45px 23px 0;
            cursor: pointer;
            list-style: none;
            font-weight: 800;
        }
        .faq-item summary::-webkit-details-marker { display: none; }
        .faq-item summary:after {
            content: "+";
            position: absolute;
            top: 17px;
            right: 5px;
            color: var(--sea);
            font-size: 1.7rem;
            font-weight: 400;
        }
        .faq-item[open] summary:after { content: "−"; }
        .faq-item p { max-width: 780px; margin: 0 0 23px; }
        .cta {
            position: relative;
            overflow: hidden;
            padding: 85px 25px;
            color: white;
            text-align: center;
            background:
                linear-gradient(rgba(13,48,57,.84), rgba(13,48,57,.84)),
                url("https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1800&q=85") center / cover;
        }
        .cta h2 { max-width: 760px; margin: 15px auto; color: white; }
        .cta p { max-width: 620px; margin: 0 auto 28px; color: rgba(255,255,255,.8); }
        .ad-slot {
            min-height: 90px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 35px auto;
            padding: 15px;
            border: 1px dashed rgba(16,45,53,.22);
            border-radius: 14px;
            color: #8a999d;
            font-size: .75rem;
        }
        .footer {
            padding: 35px 0;
            color: rgba(255,255,255,.7);
            background: #0b2229;
            font-size: .82rem;
        }
        .footer-inner { display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap; }
        .footer a { color: white; text-decoration: none; }
        .reveal { opacity: 0; transform: translateY(28px); transition: opacity .8s ease, transform .8s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        @keyframes heroZoom { from { transform: scale(1.02); } to { transform: scale(1.09); } }

        @media (max-width: 900px) {
            .nav-links { gap: 13px; }
            .nav-links a:not(.nav-cta) { display: none; }
            .intro-grid, .info-grid, .map-layout, .accessibility { grid-template-columns: 1fr; gap: 35px; }
            .intro-photo { max-width: 620px; }
            .experience-grid { grid-template-columns: repeat(2, 1fr); }
            .facts { grid-template-columns: repeat(2, 1fr); }
            .fact:nth-child(3n) { border-right: 1px solid var(--line); }
            .fact:nth-child(2n) { border-right: 0; }
        }
        @media (max-width: 620px) {
            .container { width: min(100% - 30px, 1160px); }
            .section { padding: 75px 0; }
            .hero { min-height: 720px; }
            .hero-content { width: calc(100% - 30px); padding-bottom: 90px; }
            .hero h1 { font-size: clamp(3.2rem, 16vw, 5rem); }
            .hero-location { left: 0; right: auto; bottom: 20px; }
            .facts { grid-template-columns: 1fr 1fr; }
            .fact { min-height: 92px; padding: 17px; }
            .fact-value { font-size: .88rem; }
            .highlight-grid { grid-template-columns: 1fr; }
            .highlight-card { min-height: 350px; }
            .experience-grid { grid-template-columns: 1fr; }
            .info-row { grid-template-columns: 1fr; gap: 3px; }
            .tips-panel { padding: 25px; }
            .accessibility { padding: 26px; }
            .gallery { grid-template-columns: 1fr 1fr; grid-template-rows: 190px 150px; }
            .gallery img:first-child { grid-column: span 2; grid-row: auto; }
            .map-frame, .map-frame iframe { min-height: 340px; }
            .nav { min-height: 70px; }
            .nav-cta { padding: 9px 13px; font-size: .75rem !important; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *:before, *:after {
                scroll-behavior: auto !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
            .reveal { opacity: 1; transform: none; }
        }
    </style>
</head>
<body>

<header class="topbar">
    <div class="container nav">
        <a class="brand" href="/">PLAYAS <span>DEL CANTÁBRICO</span></a>
        <nav class="nav-links" aria-label="Navegación principal">
            <a href="#descubre">Descubre</a>
            <a href="#experiencias">Experiencias</a>
            <a href="#visita">Planifica tu visita</a>
            <a href="#faq">Preguntas frecuentes</a>
            <a class="nav-cta" href="#ubicacion">Cómo llegar ↗</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="hero-content">
            <span class="eyebrow">La Teste-de-Buch · Gironda · Francia</span>
            <h1>La Duna <span>de Pilat</span></h1>
            <p class="hero-copy">
                Un océano de arena frente al Atlántico. Sube hasta su cresta,
                contempla la bahía de Arcachon y descubre uno de los paisajes
                naturales más extraordinarios de la costa francesa.
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="#descubre">Explorar la duna ↓</a>
                <a class="btn btn-outline" href="#ubicacion">Preparar la visita ↗</a>
            </div>
            <div class="hero-location">44°35′21″N · 1°12′48″W</div>
        </div>
    </section>

    <div class="container facts-wrap">
        <div class="facts">
            <?php foreach ($quickFacts as $fact): ?>
                <div class="fact">
                    <span class="fact-label"><?= $escape($fact['label']) ?></span>
                    <span class="fact-value"><?= $escape($fact['value']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <section class="section" id="descubre">
        <div class="container intro-grid">
            <div class="intro-copy reveal">
                <span class="eyebrow">Un paisaje en movimiento</span>
                <h2>Una montaña de arena entre el bosque y el mar</h2>
                <p>
                    La Duna de Pilat es uno de los grandes iconos naturales de
                    Nueva Aquitania. Situada en la entrada de la bahía de
                    Arcachon, esta enorme formación de arena domina el litoral
                    y ofrece una panorámica excepcional del océano Atlántico,
                    el Banc d’Arguin y el Cap Ferret.
                </p>
                <p>
                    Sus dimensiones cambian con el viento y los movimientos
                    naturales de la arena. La duna avanza progresivamente hacia
                    el bosque de las Landas, cubriendo parte de la vegetación
                    y transformando el paisaje con el paso del tiempo.
                </p>
                <p>
                    La visita es mucho más que una subida: es una experiencia
                    para caminar descalzo por la arena, contemplar el horizonte
                    y descubrir la relación entre el viento, el mar y el bosque.
                </p>
            </div>
            <div class="intro-photo reveal">
                <img
                    src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=1200&q=85"
                    alt="Paisaje natural de dunas y costa atlántica"
                    loading="lazy">
                <div class="photo-note">Un paisaje natural que cambia con el viento y las estaciones.</div>
            </div>
        </div>
    </section>

    <section class="section" style="background:var(--sand);">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Qué descubrir</span>
                <h2>Cuatro paisajes en una misma visita</h2>
                <p>
                    La Duna de Pilat permite contemplar distintos ambientes
                    naturales desde una única cresta: el océano, los bancos
                    de arena, el bosque y la gran playa a sus pies.
                </p>
            </div>
            <div class="highlight-grid">
                <?php foreach ($highlights as $item): ?>
                    <article class="highlight-card reveal">
                        <img src="<?= $escape($item['image']) ?>" alt="<?= $escape($item['title']) ?>" loading="lazy">
                        <div class="highlight-content">
                            <span class="highlight-number"><?= $escape($item['number']) ?> / EXPERIENCIA</span>
                            <h3><?= $escape($item['title']) ?></h3>
                            <p><?= $escape($item['text']) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section dark-section" id="experiencias">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Vive el Grand Site</span>
                <h2>Mucho más que subir a una duna</h2>
                <p>
                    Dedica tiempo a disfrutar del entorno y a observar cómo
                    cambia la luz sobre el mar, la arena y el bosque.
                </p>
            </div>
            <div class="experience-grid">
                <?php foreach ($experiences as $item): ?>
                    <article class="experience-card reveal">
                        <div class="experience-icon"><?= $escape($item['icon']) ?></div>
                        <h3><?= $escape($item['title']) ?></h3>
                        <p><?= $escape($item['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="notice reveal">
                <div style="font-size:1.5rem;">⚠️</div>
                <div>
                    <strong>Un entorno natural que merece protección</strong>
                    <p>
                        Camina por los accesos habilitados, evita dañar la
                        vegetación, no dejes residuos y respeta las indicaciones
                        del personal del Grand Site. No fumes sobre la duna y
                        presta atención al viento y a la estabilidad de la arena.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="visita">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Información práctica</span>
                <h2>Prepara tu visita a la Duna de Pilat</h2>
                <p>
                    El acceso al paraje está disponible durante todo el año.
                    La experiencia cambia según la estación, el viento y la
                    instalación de la escalera temporal.
                </p>
            </div>

            <div class="info-grid">
                <div class="info-list reveal">
                    <div class="info-row">
                        <strong>Cómo llegar</strong>
                        <span>Por la carretera D218 / Route de Biscarrosse, en Pyla-sur-Mer.</span>
                    </div>
                    <div class="info-row">
                        <strong>En autobús</strong>
                        <span>La línea 3 de Baïa conecta la estación de Arcachon con la Duna. Consulta horarios y posibles líneas exprés de temporada.</span>
                    </div>
                    <div class="info-row">
                        <strong>En bicicleta</strong>
                        <span>El entorno está conectado con itinerarios ciclistas de la bahía y la ruta Vélodyssée. Hay aparcabicis en el área de recepción.</span>
                    </div>
                    <div class="info-row">
                        <strong>En coche</strong>
                        <span>Existe un aparcamiento oficial de pago junto al espacio de recepción. Las tarifas cambian según temporada y vehículo.</span>
                    </div>
                    <div class="info-row">
                        <strong>Escalera</strong>
                        <span>Se instala habitualmente entre abril y octubre, aunque las fechas pueden variar.</span>
                    </div>
                    <div class="info-row">
                        <strong>Tiempo de subida</strong>
                        <span>Calcula unos 10-15 minutos como orientación, dependiendo del estado de la arena y tu ritmo.</span>
                    </div>
                    <div class="info-row">
                        <strong>Servicios</strong>
                        <span>En el área de recepción hay aseos, información turística, comercios y opciones de restauración.</span>
                    </div>
                    <div class="info-row">
                        <strong>Acceso a pie</strong>
                        <span>El acceso al paraje es gratuito si llegas caminando, en bicicleta o en transporte público.</span>
                    </div>
                </div>

                <aside class="tips-panel reveal">
                    <span class="eyebrow">Consejos útiles</span>
                    <h3>Disfruta de la visita con tranquilidad</h3>
                    <ul>
                        <li>Lleva agua, protección solar y gorra, especialmente en verano.</li>
                        <li>Utiliza calzado cómodo o camina descalzo si la temperatura de la arena lo permite.</li>
                        <li>Consulta la previsión del viento antes de subir.</li>
                        <li>Evita las horas centrales de los días más calurosos.</li>
                        <li>Consulta la ocupación del aparcamiento antes de desplazarte.</li>
                        <li>No aparques en los márgenes de la carretera ni en el bosque.</li>
                        <li>Recoge todos tus residuos: en la cresta no hay papeleras.</li>
                        <li>Comprueba la normativa local sobre perros y acceso a la playa.</li>
                    </ul>
                    <a class="btn btn-primary" href="https://ladunedupilat.com/es/preparacion/tus-preguntas/" target="_blank" rel="noopener">
                        Consultar información oficial ↗
                    </a>
                </aside>
            </div>
        </div>
    </section>

    <section class="section" style="padding-top:0;">
        <div class="container">
            <div class="accessibility reveal">
                <div>
                    <span class="accessibility-tag">Accesibilidad</span>
                    <h2>Información importante antes de subir</h2>
                </div>
                <div>
                    <p>
                        La subida a la Duna de Pilat no es accesible en silla
                        de ruedas debido a la pendiente y a la superficie de
                        arena. El área de recepción dispone de espacios y
                        servicios accesibles, pero no debe confundirse con
                        un acceso adaptado a la cresta o a la playa.
                    </p>
                    <p>
                        Si necesitas información concreta sobre accesibilidad,
                        asistencia o equipamiento, contacta previamente con
                        el punto de recepción del Grand Site.
                    </p>
                    <p><strong>Teléfono de información:</strong> +33 5 56 22 12 85</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="background:var(--sand);">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Galería de inspiración</span>
                <h2>La belleza del paisaje atlántico</h2>
                <p>
                    Arena, mar, cielo y bosque: un escenario natural que cambia
                    de aspecto a lo largo del día.
                </p>
            </div>
            <div class="gallery reveal">
                <img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=1200&q=85" alt="Mar y costa atlántica" loading="lazy">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Playa de arena junto al océano" loading="lazy">
                <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=800&q=80" alt="Bosque de pinos" loading="lazy">
                <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=800&q=80" alt="Paisaje natural al atardecer" loading="lazy">
                <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?auto=format&fit=crop&w=800&q=80" alt="Olas del océano" loading="lazy">
            </div>
            <p style="margin-top:14px;font-size:.78rem;">
                Fotografías ilustrativas. Sustituir por imágenes propias o verificadas de la Duna de Pilat antes de publicar.
            </p>
        </div>
    </section>

    <section class="section" id="ubicacion">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Ubicación</span>
                <h2>Cómo llegar a la Duna de Pilat</h2>
                <p>
                    El acceso principal se encuentra en Route de Biscarrosse,
                    junto al espacio de recepción del Grand Site, en
                    Pyla-sur-Mer, municipio de La Teste-de-Buch.
                </p>
            </div>
            <div class="map-layout">
                <div class="map-copy reveal">
                    <h3>En la entrada de la bahía de Arcachon</h3>
                    <p>
                        La duna se sitúa frente al Cap Ferret y al Banc d’Arguin,
                        en un punto privilegiado del litoral de Gironda.
                    </p>
                    <p><strong>Dirección:</strong><br>Route de Biscarrosse, 33115 Pyla-sur-Mer, Francia.</p>
                    <p><strong>Coordenadas:</strong><br>44.589245, -1.213303</p>
                    <a class="btn btn-primary" href="https://www.google.com/maps?q=44.589245,-1.213303" target="_blank" rel="noopener">
                        Abrir en Google Maps ↗
                    </a>
                </div>
                <div class="map-frame reveal">
                    <iframe
                        title="Mapa de ubicación de la Duna de Pilat"
                        src="https://www.google.com/maps?q=44.589245,-1.213303&z=13&output=embed"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="background:var(--sand);" id="faq">
        <div class="container">
            <div class="section-heading reveal" style="margin-inline:auto;text-align:center;">
                <span class="eyebrow">Resolvemos tus dudas</span>
                <h2>Preguntas frecuentes sobre la Duna de Pilat</h2>
                <p>Información útil para organizar tu escapada a este paraje natural de Francia.</p>
            </div>
            <div class="faq-list reveal">
                <?php foreach ($faq as $index => $item): ?>
                    <details class="faq-item" <?= $index === 0 ? 'open' : '' ?>>
                        <summary><?= $escape($item['q']) ?></summary>
                        <p><?= $escape($item['a']) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="actividades">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Completa tu escapada</span>
                <h2>Actividades y excursiones en la bahía de Arcachon</h2>
                <p>
                    Aprovecha la visita para descubrir el entorno de Arcachon,
                    sus paisajes marítimos y las experiencias que ofrece la
                    costa de Gironda.
                </p>
            </div>

            <div class="gyg-widget reveal">
                <div data-gyg-href="https://widget.getyourguide.com/default/activities.frame"
                     data-gyg-location-id="200"
                     data-gyg-locale-code="es-ES"
                     data-gyg-widget="city"
                     data-gyg-partner-id="VW16GKQ">
                </div>
            </div>
            <script async defer src="https://widget.getyourguide.com/v2/widget.js"></script>
        </div>
    </section>

    <div class="container">
        <div class="ad-slot" id="adcash-zone-mnaewnieki">
            Espacio publicitario
        </div>
    </div>

    <section class="cta">
        <span class="eyebrow">Tu próxima escapada</span>
        <h2>Sube a la Duna. Mira el horizonte. Vive el Atlántico.</h2>
        <p>
            Una visita inolvidable entre arena, océano y bosque en uno de los
            grandes paisajes naturales de la costa francesa.
        </p>
        <a class="btn btn-primary" href="#ubicacion">Planificar mi visita ↗</a>
    </section>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <div>© <?= date('Y') ?> <?= $escape($siteName) ?>. Todos los derechos reservados.</div>
        <div>
            <a href="/">Inicio</a>
            &nbsp;·&nbsp;
            <a href="#descubre">Descubrir</a>
            &nbsp;·&nbsp;
            <a href="#faq">Preguntas frecuentes</a>
        </div>
    </div>
</footer>

<script>
(function () {
    const elements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        elements.forEach(element => observer.observe(element));
    } else {
        elements.forEach(element => element.classList.add('visible'));
    }
})();
</script>

</body>
</html>
