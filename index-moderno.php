

<?php
$title = 'Playas del Cantábrico';
$lugar_minuscula = 'playas-cantabrico';
$localidad_minuscula = '';
$lugar_interes = '';
$region_minuscula = 'cantabria';

$siteName = 'Turismo Norte de España';
$pageTitle = 'Playas del Cantábrico | Turismo Norte de España';
$description = 'Descubre las mejores playas del Cantábrico en Cantabria, Bizkaia, Gipuzkoa y la costa atlántica francesa. Naturaleza, mar y escapadas inolvidables.';
$keywords = 'playas del Cantábrico, playas de Cantabria, playas de Bizkaia, playas de Gipuzkoa, playas de Francia, turismo costero, surf, naturaleza, vacaciones en la playa';

$regions = [
    [
        'name' => 'Cantabria',
        'slug' => 'cantabria',
        'icon' => '🏖️',
        'subtitle' => 'Acantilados, naturaleza y arena dorada',
        'description' => 'Descubre una costa de paisajes verdes, playas salvajes, pueblos marineros y rincones naturales donde disfrutar del mar Cantábrico.',
        'destinations' => [
            [
                'name' => 'Playa de Somo',
                'description' => 'Una extensa playa de arena ideal para pasear, disfrutar del paisaje y practicar surf.',
                'tag' => 'Surf y naturaleza'
            ],
            [
                'name' => 'Playa de El Sardinero',
                'description' => 'Una de las playas más emblemáticas de Santander, rodeada de elegantes paseos y jardines.',
                'tag' => 'Playa urbana'
            ],
            [
                'name' => 'Playa de Langre',
                'description' => 'Un espectacular arenal protegido por altos acantilados y un entorno natural impresionante.',
                'tag' => 'Paisaje salvaje'
            ],
            [
                'name' => 'Playa de Oyambre',
                'description' => 'Un espacio natural de gran belleza, con dunas, marismas y amplias vistas al litoral.',
                'tag' => 'Espacio natural'
            ],
            [
                'name' => 'Playa de Laredo',
                'description' => 'Una gran playa de arena fina perfecta para disfrutar de largos paseos junto al mar.',
                'tag' => 'Arena dorada'
            ],
            [
                'name' => 'Playa de San Vicente',
                'description' => 'Un entorno costero con vistas a los Picos de Europa y un ambiente marinero especial.',
                'tag' => 'Vistas y mar'
            ]
        ]
    ],
    [
        'name' => 'Bizkaia',
        'slug' => 'bizkaia',
        'icon' => '🌅',
        'subtitle' => 'Surf, costa abierta y paisajes marineros',
        'description' => 'La costa vizcaína combina playas de ambiente surfero, acantilados, pueblos con encanto y paisajes que sorprenden en cualquier época del año.',
        'destinations' => [
            [
                'name' => 'Playa de Bakio',
                'description' => 'Una playa abierta al Cantábrico, muy conocida por sus olas y sus vistas hacia San Juan de Gaztelugatxe.',
                'tag' => 'Surf'
            ],
            [
                'name' => 'Playa de Sopela',
                'description' => 'Un litoral de acantilados y arena que atrae a amantes del surf y de los paseos junto al mar.',
                'tag' => 'Costa abierta'
            ],
            [
                'name' => 'Playa de Laga',
                'description' => 'Un arenal de gran belleza situado en la Reserva de la Biosfera de Urdaibai.',
                'tag' => 'Naturaleza'
            ],
            [
                'name' => 'Playa de Laida',
                'description' => 'Una playa de arena fina en un entorno de marismas y paisajes protegidos.',
                'tag' => 'Urdaibai'
            ],
            [
                'name' => 'Playa de Gorliz',
                'description' => 'Una playa amplia y familiar, ideal para disfrutar del paseo marítimo y del entorno.',
                'tag' => 'Familiar'
            ],
            [
                'name' => 'Playa de Arrigunaga',
                'description' => 'Un rincón costero con vistas a los acantilados y al entorno de Getxo.',
                'tag' => 'Vistas al mar'
            ]
        ]
    ],
    [
        'name' => 'Gipuzkoa',
        'slug' => 'gipuzkoa',
        'icon' => '⛵',
        'subtitle' => 'Bahías, pueblos costeros y mar Cantábrico',
        'description' => 'Explora playas rodeadas de montañas, bahías espectaculares y localidades marineras con una personalidad única.',
        'destinations' => [
            [
                'name' => 'Playa de La Concha',
                'description' => 'La famosa bahía de San Sebastián, con su paseo, sus vistas y su ambiente elegante.',
                'tag' => 'Playa urbana'
            ],
            [
                'name' => 'Playa de Zarautz',
                'description' => 'Una extensa playa con ambiente surfero, paseo marítimo y una animada vida costera.',
                'tag' => 'Surf y paseo'
            ],
            [
                'name' => 'Playa de Itzurun',
                'description' => 'Un paisaje espectacular de acantilados y formaciones geológicas junto a Zumaia.',
                'tag' => 'Geología'
            ],
            [
                'name' => 'Playa de Hondarribia',
                'description' => 'Una playa tranquila junto a una localidad llena de historia y tradición marinera.',
                'tag' => 'Escapada'
            ],
            [
                'name' => 'Playa de Getaria',
                'description' => 'Un pequeño destino costero perfecto para combinar mar, paseo y gastronomía.',
                'tag' => 'Gastronomía'
            ],
            [
                'name' => 'Playa de Deba',
                'description' => 'Una playa rodeada de naturaleza, acantilados y paisajes del litoral guipuzcoano.',
                'tag' => 'Naturaleza'
            ]
        ]
    ],
    [
        'name' => 'Nouvelle-Aquitaine',
        'slug' => 'nouvelle-aquitaine',
        'icon' => '🇫🇷',
        'subtitle' => 'Grandes arenales y costa atlántica francesa',
        'description' => 'Descubre la costa francesa, con enormes playas de arena, bosques de pinos, dunas y destinos ideales para disfrutar del océano Atlántico.',
        'destinations' => [
            [
                'name' => 'Playa de Biarritz',
                'description' => 'Una localidad elegante y conocida por su ambiente surfero y sus paisajes atlánticos.',
                'tag' => 'Surf y ciudad'
            ],
            [
                'name' => 'Playa de Hossegor',
                'description' => 'Un destino internacional para surfistas, rodeado de naturaleza y ambiente vacacional.',
                'tag' => 'Surf'
            ],
            [
                'name' => 'Playa de Biscarrosse',
                'description' => 'Grandes extensiones de arena junto a bosques, lagos y paisajes naturales.',
                'tag' => 'Naturaleza'
            ],
            [
                'name' => 'Playa de Lacanau',
                'description' => 'Una costa abierta al Atlántico, famosa por sus olas y su ambiente deportivo.',
                'tag' => 'Deporte'
            ],
            [
                'name' => 'Playa de Arcachon',
                'description' => 'Un destino costero con una bahía especial, paseos y una gran tradición marinera.',
                'tag' => 'Bahía'
            ],
            [
                'name' => 'Playa de la Duna de Pilat',
                'description' => 'Un paisaje extraordinario junto a una de las grandes dunas de Europa.',
                'tag' => 'Paisaje único'
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

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="Turismo Norte de España">
    <meta name="theme-color" content="#075985">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:locale" content="es_ES">

    <style>
        :root {
            --ink: #143247;
            --muted: #647b8d;
            --blue: #087e9d;
            --blue-dark: #075985;
            --gold: #fbbf24;
            --white: #ffffff;
            --surface: rgba(255, 255, 255, 0.78);
            --border: rgba(255, 255, 255, 0.85);
            --shadow: 0 18px 55px rgba(20, 67, 94, 0.10);
            --radius: 28px;
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
            color: var(--ink);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background:
                radial-gradient(circle at 8% 10%, rgba(125, 211, 252, 0.30), transparent 30%),
                radial-gradient(circle at 92% 20%, rgba(251, 191, 36, 0.16), transparent 25%),
                linear-gradient(180deg, #effaff 0%, #f8fcff 48%, #edf7fb 100%);
        }

        a {
            color: inherit;
        }

        .site-shell {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            min-height: 100vh;
        }

        .site-shell::before,
        .site-shell::after {
            content: "";
            position: absolute;
            z-index: -1;
            pointer-events: none;
            border-radius: 50%;
            filter: blur(2px);
        }

        .site-shell::before {
            width: 420px;
            height: 420px;
            top: 350px;
            left: -230px;
            background: rgba(125, 211, 252, 0.18);
            animation: floatShape 18s ease-in-out infinite;
        }

        .site-shell::after {
            width: 360px;
            height: 360px;
            top: 950px;
            right: -200px;
            background: rgba(251, 191, 36, 0.12);
            animation: floatShape 22s ease-in-out infinite reverse;
        }

        .container {
            width: min(1500px, calc(100% - 36px));
            margin-inline: auto;
        }

        /* NAVBAR */

        .site-nav {
            position: relative;
            z-index: 20;
            width: min(1500px, calc(100% - 36px));
            margin: 18px auto 0;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            border: 1px solid rgba(255, 255, 255, 0.9);
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.78);
            box-shadow: 0 10px 35px rgba(20, 67, 94, 0.08);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 900;
            letter-spacing: -0.03em;
        }

        .brand-icon {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 15px;
            color: white;
            background: linear-gradient(145deg, #0891b2, #075985);
            box-shadow: 0 8px 18px rgba(8, 126, 157, 0.22);
            font-size: 1.3rem;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .nav-links a {
            color: #526b7d;
            font-size: 0.88rem;
            font-weight: 750;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: var(--blue);
        }

        .nav-cta {
            padding: 10px 16px;
            border-radius: 999px;
            color: white !important;
            background: var(--blue-dark);
        }

        /* HERO */

        .hero {
            position: relative;
            margin: 28px auto 30px;
            padding: clamp(24px, 5vw, 58px);
            border: 1px solid rgba(255, 255, 255, 0.85);
            border-radius: 36px;
            overflow: hidden;
            color: white;
            background:
                linear-gradient(120deg, rgba(7, 89, 133, 0.96), rgba(14, 116, 144, 0.88)),
                #075985;
            box-shadow: 0 25px 70px rgba(7, 89, 133, 0.22);
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 380px;
            height: 380px;
            right: -90px;
            top: -150px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow:
                0 0 0 35px rgba(255, 255, 255, 0.04),
                0 0 0 75px rgba(255, 255, 255, 0.035);
            animation: rotateShape 40s linear infinite;
        }

        .hero-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(280px, 0.9fr);
            gap: 34px;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 18px;
            padding: 8px 14px;
            border: 1px solid rgba(255, 255, 255, 0.22);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.10);
            color: #e0f2fe;
            font-size: 0.75rem;
            font-weight: 850;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--gold);
            box-shadow: 0 0 12px rgba(251, 191, 36, 0.8);
        }

        .hero h1 {
            max-width: 760px;
            margin: 0 0 22px;
            color: white;
            font-size: clamp(2.5rem, 5.2vw, 5.2rem);
            font-weight: 950;
            line-height: 0.98;
            letter-spacing: -0.06em;
        }

        .hero h1 span {
            color: #fde68a;
        }

        .hero-description {
            max-width: 680px;
            margin: 0;
            color: rgba(240, 249, 255, 0.88);
            font-size: clamp(1rem, 1.4vw, 1.15rem);
            line-height: 1.85;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 12px 20px;
            border: 1px solid transparent;
            border-radius: 999px;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 850;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        }

        .button:hover {
            transform: translateY(-3px);
        }

        .button-primary {
            color: #123047;
            background: #fde68a;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
        }

        .button-primary:hover {
            background: #fcd34d;
        }

        .button-secondary {
            color: white;
            border-color: rgba(255, 255, 255, 0.28);
            background: rgba(255, 255, 255, 0.08);
        }

        .button-secondary:hover {
            background: rgba(255, 255, 255, 0.16);
        }

        /* VIDEO */

        .video-card {
            padding: 10px;
            border: 1px solid rgba(255, 255, 255, 0.24);
            border-radius: 26px;
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.18);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            transform: rotate(1.5deg);
            transition: transform 0.35s ease;
        }

        .video-card:hover {
            transform: rotate(0deg) translateY(-5px);
        }

        .video-frame {
            position: relative;
            overflow: hidden;
            aspect-ratio: 16 / 9;
            border-radius: 18px;
            background: #082f49;
        }

        .video-frame iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-caption {
            padding: 13px 8px 5px;
            color: #e0f2fe;
            font-size: 0.85rem;
            font-weight: 750;
            text-align: center;
        }

        /* INTRO */

        .intro-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.4fr) minmax(220px, 0.6fr);
            gap: 24px;
            margin-bottom: 28px;
        }

        .intro-card,
        .intro-highlight {
            border: 1px solid rgba(255, 255, 255, 0.85);
            border-radius: var(--radius);
            background: var(--surface);
            box-shadow: var(--shadow);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .intro-card {
            padding: clamp(22px, 3vw, 36px);
        }

        .section-kicker {
            margin: 0 0 10px;
            color: var(--blue);
            font-size: 0.76rem;
            font-weight: 900;
            letter-spacing: 0.13em;
            text-transform: uppercase;
        }

        .intro-card h2 {
            margin: 0 0 16px;
            color: var(--ink);
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: -0.04em;
        }

        .intro-card p {
            margin: 0 0 13px;
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.85;
        }

        .intro-card p:last-child {
            margin-bottom: 0;
        }

        .intro-highlight {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 26px;
            background: linear-gradient(145deg, rgba(255,255,255,.92), rgba(224,242,254,.75));
        }

        .highlight-icon {
            display: grid;
            place-items: center;
            width: 58px;
            height: 58px;
            margin-bottom: 18px;
            border-radius: 20px;
            background: #dbeafe;
            font-size: 1.8rem;
        }

        .intro-highlight strong {
            display: block;
            margin-bottom: 8px;
            color: var(--ink);
            font-size: 1.2rem;
            font-weight: 900;
        }

        .intro-highlight span {
            color: var(--muted);
            line-height: 1.7;
        }

        /* DESTINATIONS */

        .destinations-heading {
            display: flex;
            flex-wrap: wrap;
            align-items: end;
            justify-content: space-between;
            gap: 14px;
            margin: 0 0 20px;
            padding: 0 4px;
        }

        .destinations-heading h2 {
            margin: 0;
            color: var(--ink);
            font-size: clamp(1.7rem, 3vw, 2.5rem);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: -0.045em;
        }

        .destinations-heading p {
            margin: 8px 0 0;
            color: var(--muted);
            line-height: 1.6;
        }

        .region-list {
            display: grid;
            gap: 24px;
        }

        .region-card {
            position: relative;
            padding: clamp(17px, 2.5vw, 28px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.78);
            box-shadow: var(--shadow);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .region-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 65px rgba(20, 67, 94, 0.15);
        }

        .region-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 28px;
            right: 28px;
            height: 4px;
            border-radius: 0 0 999px 999px;
            background: linear-gradient(90deg, #0e7490, #38bdf8, #fbbf24);
            opacity: 0.8;
        }

        .region-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }

        .region-icon {
            display: grid;
            flex: 0 0 52px;
            place-items: center;
            width: 52px;
            height: 52px;
            border-radius: 18px;
            background: linear-gradient(145deg, #e0f2fe, #f0f9ff);
            font-size: 1.6rem;
        }

        .region-header h3 {
            margin: 0;
            color: var(--ink);
            font-size: 1.35rem;
            font-weight: 900;
            letter-spacing: -0.03em;
        }

        .region-header p {
            margin: 5px 0 0;
            color: var(--muted);
            font-size: 0.88rem;
        }

        .region-description {
            margin: 0 0 20px;
            color: var(--muted);
            line-height: 1.8;
        }

        .beach-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 13px;
        }

        .beach-item {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            min-height: 170px;
            padding: 18px;
            border: 1px solid #e3eef5;
            border-radius: 20px;
            background: linear-gradient(145deg, #ffffff, #f4fbff);
            transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .beach-item:hover {
            transform: translateY(-4px);
            border-color: #9bdcf2;
            box-shadow: 0 12px 28px rgba(8, 126, 157, 0.10);
        }

        .beach-tag {
            align-self: flex-start;
            margin-bottom: 12px;
            padding: 6px 10px;
            border-radius: 999px;
            color: #087e9d;
            background: #e0f7ff;
            font-size: 0.68rem;
            font-weight: 900;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .beach-item h4 {
            margin: 0 0 8px;
            color: var(--ink);
            font-size: 1.02rem;
            font-weight: 900;
        }

        .beach-item p {
            margin: 0;
            color: var(--muted);
            font-size: 0.88rem;
            line-height: 1.7;
        }

        .region-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-top: 18px;
            padding-top: 15px;
            border-top: 1px solid #e5eef4;
            color: #8295a4;
            font-size: 0.8rem;
            font-weight: 750;
        }

        .region-footer span:last-child {
            color: var(--blue);
        }

        /* ADS */

        .ad-card {
            display: grid;
            place-items: center;
            min-height: 110px;
            margin: 24px 0;
            padding: 18px;
            border: 1px dashed #cbd5e1;
            border-radius: 22px;
            color: #94a3b8;
            background: rgba(255, 255, 255, 0.55);
            font-size: 0.75rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-align: center;
            text-transform: uppercase;
        }

        /* CTA */

        .final-cta {
            position: relative;
            overflow: hidden;
            margin: 32px 0 50px;
            padding: clamp(25px, 4vw, 42px);
            border-radius: 30px;
            color: white;
            background: linear-gradient(120deg, #075985, #0e7490);
            box-shadow: 0 20px 55px rgba(7, 89, 133, 0.18);
            text-align: center;
        }

        .final-cta h2 {
            margin: 0 0 12px;
            color: white;
            font-size: clamp(1.7rem, 3vw, 2.6rem);
            font-weight: 900;
            letter-spacing: -0.04em;
        }

        .final-cta p {
            max-width: 700px;
            margin: 0 auto 22px;
            color: #e0f2fe;
            line-height: 1.8;
        }

        /* FOOTER */

        .site-footer {
            padding: 30px 18px;
            color: #dbeafe;
            background: #102f43;
        }

        .footer-inner {
            width: min(1500px, 100%);
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .footer-brand {
            font-weight: 900;
            font-size: 1.05rem;
        }

        .footer-text {
            margin: 7px 0 0;
            color: #9fb9ca;
            font-size: 0.85rem;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .footer-links a {
            color: #c8dce8;
            font-size: 0.85rem;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: white;
        }

        /* REVEAL */

        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s ease, transform 0.7s cubic-bezier(0.2, 0.7, 0.2, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .region-card:nth-child(2) {
            transition-delay: 80ms;
        }

        .region-card:nth-child(3) {
            transition-delay: 160ms;
        }

        .region-card:nth-child(4) {
            transition-delay: 240ms;
        }

        @keyframes floatShape {
            0%, 100% {
                transform: translate3d(0, 0, 0);
            }
            50% {
                transform: translate3d(30px, -45px, 0);
            }
        }

        @keyframes rotateShape {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {
            .hero-grid {
                grid-template-columns: 1fr;
            }

            .video-card {
                max-width: 650px;
                transform: none;
            }

            .intro-grid {
                grid-template-columns: 1fr;
            }

            .nav-links {
                gap: 13px;
            }
        }

        @media (max-width: 600px) {
            .container,
            .site-nav {
                width: calc(100% - 22px);
            }

            .site-nav {
                margin-top: 10px;
                padding: 12px;
            }

            .brand {
                font-size: 0.85rem;
            }

            .brand-icon {
                width: 36px;
                height: 36px;
            }

            .nav-links a:not(.nav-cta) {
                display: none;
            }

            .hero {
                margin-top: 14px;
                padding: 26px 20px;
                border-radius: 26px;
            }

            .hero h1 {
                font-size: clamp(2.35rem, 12vw, 3.6rem);
            }

            .hero-description {
                font-size: 0.98rem;
                line-height: 1.75;
            }

            .hero-actions {
                flex-direction: column;
            }

            .button {
                width: 100%;
            }

            .intro-card,
            .intro-highlight {
                border-radius: 22px;
                padding: 22px;
            }

            .region-card {
                padding: 18px 15px;
                border-radius: 23px;
            }

            .region-header h3 {
                font-size: 1.18rem;
            }

            .region-icon {
                flex-basis: 46px;
                width: 46px;
                height: 46px;
                border-radius: 15px;
            }

            .beach-grid {
                grid-template-columns: 1fr;
            }

            .beach-item {
                min-height: auto;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>



<script async defer src="https://widget.getyourguide.com/dist/pa.umd.production.min.js"></script>

</head>

<body>

<div class="site-shell">

    <!-- NAVBAR INTEGRADA -->
    <nav class="site-nav" aria-label="Navegación principal">

        <a class="brand" href="/">
            <span class="brand-icon" aria-hidden="true">🌊</span>
            <span>Turismo Norte de España</span>
        </a>

        <div class="nav-links">
            <a href="#cantabria">Cantabria</a>
            <a href="#bizkaia">Bizkaia</a>
            <a href="#gipuzkoa">Gipuzkoa</a>
            <a href="#francia">Francia</a>
            <a class="nav-cta" href="#destinos">Explorar</a>
        </div>

    </nav>

    <!-- HERO -->
    <header class="container hero reveal">

        <div class="hero-grid">

            <div>
                <div class="eyebrow">
                    Costa norte · España y Francia
                </div>

                <h1>
                    Playas del <span>Cantábrico</span>
                </h1>

                <p class="hero-description">
                    Un viaje entre acantilados, playas salvajes, pueblos marineros
                    y rincones donde el verde se encuentra con el azul.
                    Descubre las costas más especiales del norte y encuentra
                    tu próximo destino junto al mar.
                </p>

                <div class="hero-actions">
                    <a href="#destinos" class="button button-primary">
                        Explorar destinos ↓
                    </a>

                    <a href="#inspiracion" class="button button-secondary">
                        Inspirarme para viajar
                    </a>
                </div>
            </div>

            <div class="video-card">

                <div class="video-frame">
                    <iframe
                        src="https://www.youtube-nocookie.com/embed/0ZvtKu0XBMg?rel=0"
                        title="Vídeo de playas del Cantábrico"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="video-caption">
                    Déjate inspirar por la costa cantábrica
                </div>

            </div>

        </div>

    </header>

    <!-- INTRO -->
    <section class="container intro-grid reveal" id="inspiracion">

        <div class="intro-card">

            <p class="section-kicker">Naturaleza · Mar · Escapadas</p>

            <h2>Descubre una costa llena de contrastes</h2>

            <p>
                Bienvenido a nuestra guía de las playas más impresionantes
                del Cantábrico, uno de los destinos más espectaculares
                del norte de España.
            </p>

            <p>
                Desde los acantilados salvajes de Cantabria hasta las playas
                urbanas del País Vasco y las extensas costas del suroeste
                de Francia, aquí encontrarás inspiración para tu próxima escapada.
            </p>

            <p>
                Explora calas tranquilas, playas de arena dorada, paisajes
                verdes y lugares ideales para disfrutar del mar, practicar surf
                o simplemente desconectar.
            </p>

            <p>
                Y después de un día junto al agua, descubre la gastronomía
                local: pescados, mariscos, pintxos y sabores tradicionales
                que hacen que cada viaje sea aún más especial.
            </p>

        </div>

        <div class="intro-highlight">

            <div class="highlight-icon" aria-hidden="true">🌊</div>

            <strong>Tu próxima escapada empieza aquí</strong>

            <span>
                Cuatro territorios, cientos de paisajes y muchas playas
                por descubrir a lo largo de la costa atlántica.
            </span>

        </div>

    </section>



<?php /* <!-- getyourguide --> */ ?>
<section class="gyg-city-section container">

    <div class="gyg-heading">
        <span>🧭 PLANIFICA TU ESCAPADA</span>
        <h2>Descubre actividades y visitas</h2>
        <p>Explora experiencias para disfrutar de tu viaje.</p>
    </div>

    <div
        data-gyg-href="https://widget.getyourguide.com/default/city.frame"
        data-gyg-location-id="200"
        data-gyg-locale-code="en-US"
        data-gyg-widget="city"
        data-gyg-partner-id="VW16GKQ">
    </div>

</section>




    <!-- REGIONES -->
    <main class="container" id="destinos">

        <header class="destinations-heading reveal">
            <div>
                <p class="section-kicker">Elige tu destino</p>
                <h2>Explora por regiones</h2>
                <p>Encuentra tu playa ideal y empieza a preparar tu viaje.</p>
            </div>
        </header>

        <div class="region-list">

            <?php foreach ($regions as $index => $region): ?>

                <?php
                $regionId = $region['slug'];

                if ($regionId === 'nouvelle-aquitaine') {
                    $regionId = 'francia';
                }
                ?>

                <section
                    class="region-card reveal"
                    id="<?= htmlspecialchars($regionId, ENT_QUOTES, 'UTF-8'); ?>">

                    <div class="region-header">

                        <div class="region-icon" aria-hidden="true">
                            <?= htmlspecialchars($region['icon'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                        <div>
                            <h3>
                                Playas de <?= htmlspecialchars($region['name'], ENT_QUOTES, 'UTF-8'); ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars($region['subtitle'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        </div>

                    </div>

                    <p class="region-description">
                        <?= htmlspecialchars($region['description'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>

                    <div class="beach-grid">

                        <?php foreach ($region['destinations'] as $beach): ?>

                            <article class="beach-item">

                                <span class="beach-tag">
                                    <?= htmlspecialchars($beach['tag'], ENT_QUOTES, 'UTF-8'); ?>
                                </span>

                                <h4>
                                    <?= htmlspecialchars($beach['name'], ENT_QUOTES, 'UTF-8'); ?>
                                </h4>

                                <p>
                                    <?= htmlspecialchars($beach['description'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>

                            </article>

                        <?php endforeach; ?>

                    </div>

                    <div class="region-footer">
                        <span>
                            <?= count($region['destinations']); ?> destinos destacados
                        </span>

                        <span>
                            <?= htmlspecialchars($region['name'], ENT_QUOTES, 'UTF-8'); ?> · Costa norte
                        </span>
                    </div>

                </section>

                <?php if ($index === 0): ?>

                    <!-- ESPACIO PUBLICITARIO -->
                    <div class="ad-card reveal">
                        Espacio publicitario
                        <div id="adcash-zone" style="width:100%;"></div>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

        <!-- CTA FINAL -->
        <section class="final-cta reveal">

            <h2>El Cantábrico te está esperando</h2>

            <p>
                Prepara tu próxima escapada, descubre nuevos paisajes
                y disfruta de una de las costas más especiales de Europa.
            </p>

            <a href="#destinos" class="button button-primary">
                Volver a explorar destinos ↑
            </a>

        </section>



<?php /* <!-- getyourguide --> */ ?>
<div class="gyg-container">

    <div class="gyg-heading">
        <span>✈️ DESCUBRE EXPERIENCIAS</span>
        <h2>Qué hacer en el norte</h2>
        <p>Encuentra excursiones, visitas y actividades para completar tu viaje.</p>
    </div>

    <div
        data-gyg-widget="auto"
        data-gyg-partner-id="VW16GKQ">
    </div>

</div>




    </main>

    <!-- FOOTER INTEGRADO -->
    <footer class="site-footer">

        <div class="footer-inner">

            <div>
                <div class="footer-brand">
                    Turismo Norte de España
                </div>

                <p class="footer-text">
                    Descubre el norte, disfruta del mar.
                </p>
            </div>

            <div class="footer-links">
                <a href="#cantabria">Cantabria</a>
                <a href="#bizkaia">Bizkaia</a>
                <a href="#gipuzkoa">Gipuzkoa</a>
                <a href="#francia">Francia</a>
                <a href="#destinos">Destinos</a>
            </div>

        </div>

    </footer>

</div>

<!-- AdCash -->
<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
<script type="text/javascript">
    if (typeof aclib !== 'undefined') {
        aclib.runAutoTag({
            zoneId: 'mnaewnieki'
        });
    }
</script>

<!-- ANIMACIONES DE ENTRADA -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.reveal');

    if (!('IntersectionObserver' in window)) {
        elements.forEach(function (element) {
            element.classList.add('visible');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -35px 0px'
    });

    elements.forEach(function (element) {
        observer.observe(element);
    });
});
</script>

</body>
</html>

<?php /* <!-- getyourguide --> */ ?>
<style>

.gyg-container,
.gyg-city-section {
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 25px;
    border: 1px solid rgba(255,255,255,.9);
    border-radius: 26px;
    background: rgba(255,255,255,.82);
    box-shadow: 0 18px 45px rgba(20,67,94,.09);
    overflow: hidden;
}

.gyg-heading {
    margin-bottom: 20px;
    text-align: center;
}

.gyg-heading span {
    color: #087e9d;
    font-size: .75rem;
    font-weight: 900;
    letter-spacing: .12em;
}

.gyg-heading h2 {
    margin: 8px 0;
    color: #143247;
    font-size: clamp(1.5rem, 3vw, 2.2rem);
    font-weight: 900;
}

.gyg-heading p {
    color: #647b8d;
    line-height: 1.7;
}

.gyg-container iframe,
.gyg-city-section iframe {
    max-width: 100%;
}


</style>