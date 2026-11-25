
<?php
$title = 'Playas del Cantábrico';
$lugar_minuscula = 'playas-cantabrico';
$localidad_minuscula = '';
$lugar_interes = '';
$region_minuscula = 'cantabria';

define('LUGAR', 'Turismo Norte de España');
define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR)));
define('TITLE', 'Playas del Cantábrico | Turismo Norte de España');
define('DESCRIPTION', 'Descubre las playas del Cantábrico, sus paisajes, acantilados, pueblos costeros y rincones naturales de la costa norte de España.');
define('KEYWORDS_CONTENT', 'playas de España, playas del Cantábrico, turismo costero, turismo de playa, naturaleza y mar, costa de Cantabria, surf en España, rutas por la costa, vacaciones en la playa, turismo y naturaleza');
define('COLOR_PAGE', 'orange');

require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_utilidades/defines-comunes.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars(TITLE, ENT_QUOTES, 'UTF-8'); ?></title>

    <?php require PATH_HOME_HEAD_VARIABLES . "/meta-tags.php"; ?>

    <meta name="description" content="<?= htmlspecialchars(DESCRIPTION, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?= htmlspecialchars(KEYWORDS_CONTENT, ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="theme-color" content="#071d2b">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --mar: #062433;
            --mar-claro: #0d5265;
            --turquesa: #51d6c5;
            --arena: #f4ead8;
            --blanco: #ffffff;
            --texto: #18313c;
            --texto-suave: #6b7e87;
            --radio: 28px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--texto);
            background: #f5f8f8;
            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .cantabrico-page {
            overflow: hidden;
        }

        .cantabrico-container {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        /* HERO */

        .cantabrico-hero {
            position: relative;
            min-height: 740px;
            padding: 28px 0 90px;
            color: white;
            background:
                radial-gradient(circle at 80% 20%, rgba(81, 214, 197, .2), transparent 30%),
                linear-gradient(135deg, #041923 0%, #073447 55%, #0b5967 100%);
            isolation: isolate;
        }

        .cantabrico-hero::before,
        .cantabrico-hero::after {
            content: "";
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            filter: blur(2px);
            pointer-events: none;
        }

        .cantabrico-hero::before {
            width: 520px;
            height: 520px;
            right: -180px;
            top: 100px;
            background: rgba(81, 214, 197, .09);
            animation: cantabrico-float 12s ease-in-out infinite;
        }

        .cantabrico-hero::after {
            width: 350px;
            height: 350px;
            left: -150px;
            bottom: -100px;
            background: rgba(255, 255, 255, .04);
            animation: cantabrico-float 15s ease-in-out infinite reverse;
        }

        .cantabrico-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 90px;
        }

        .cantabrico-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-size: 17px;
            letter-spacing: -.5px;
        }

        .cantabrico-logo-icon {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 15px;
            color: var(--mar);
            background: var(--turquesa);
            font-size: 22px;
        }

        .cantabrico-nav-link {
            color: rgba(255,255,255,.8);
            font-size: 14px;
            font-weight: 600;
            transition: color .25s ease;
        }

        .cantabrico-nav-link:hover {
            color: var(--turquesa);
        }

        .cantabrico-hero-content {
            max-width: 760px;
            position: relative;
            z-index: 1;
        }

        .cantabrico-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 9px 15px;
            margin-bottom: 25px;
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 100px;
            background: rgba(255,255,255,.07);
            color: #b6f4e9;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            backdrop-filter: blur(12px);
        }

        .cantabrico-eyebrow span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--turquesa);
            box-shadow: 0 0 15px var(--turquesa);
        }

        .cantabrico-hero h1 {
            max-width: 780px;
            margin-bottom: 25px;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(42px, 7vw, 82px);
            font-weight: 800;
            line-height: 1.04;
            letter-spacing: -4px;
        }

        .cantabrico-hero h1 em {
            color: var(--turquesa);
            font-style: normal;
        }

        .cantabrico-hero-description {
            max-width: 580px;
            color: rgba(255,255,255,.75);
            font-size: 18px;
            line-height: 1.8;
        }

        .cantabrico-hero-actions {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 15px;
            margin-top: 35px;
        }

        .cantabrico-button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            min-height: 54px;
            padding: 0 24px;
            border-radius: 100px;
            font-size: 14px;
            font-weight: 700;
            transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
        }

        .cantabrico-button:hover {
            transform: translateY(-4px);
        }

        .cantabrico-button-primary {
            color: #052633;
            background: var(--turquesa);
            box-shadow: 0 10px 30px rgba(81,214,197,.2);
        }

        .cantabrico-button-primary:hover {
            box-shadow: 0 15px 40px rgba(81,214,197,.35);
        }

        .cantabrico-button-secondary {
            color: white;
            border: 1px solid rgba(255,255,255,.25);
            background: rgba(255,255,255,.05);
        }

        .cantabrico-hero-bottom {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-top: 75px;
            color: rgba(255,255,255,.6);
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .cantabrico-hero-bottom-line {
            width: 55px;
            height: 1px;
            background: var(--turquesa);
        }

        /* VIDEO */

        .cantabrico-video-section {
            position: relative;
            z-index: 2;
            margin-top: -65px;
        }

        .cantabrico-video-card {
            padding: 12px;
            border: 1px solid rgba(255,255,255,.8);
            border-radius: 32px;
            background: white;
            box-shadow: 0 30px 90px rgba(5, 37, 52, .16);
        }

        .cantabrico-video-frame {
            position: relative;
            overflow: hidden;
            aspect-ratio: 16 / 9;
            border-radius: 23px;
            background: #071d2b;
        }

        .cantabrico-video-frame iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .cantabrico-video-caption {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 22px 18px 12px;
        }

        .cantabrico-video-caption h2 {
            font-family: 'Manrope', sans-serif;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .cantabrico-video-caption p {
            margin-top: 5px;
            color: var(--texto-suave);
            font-size: 13px;
        }

        .cantabrico-video-tag {
            flex-shrink: 0;
            padding: 9px 14px;
            border-radius: 100px;
            color: #087c78;
            background: #e2f8f3;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .8px;
        }

        /* INTRO */

        .cantabrico-intro {
            padding: 115px 0 80px;
            text-align: center;
        }

        .cantabrico-section-label {
            margin-bottom: 18px;
            color: #138c88;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .cantabrico-intro h2 {
            max-width: 760px;
            margin: 0 auto 22px;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(30px, 4vw, 48px);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -2px;
        }

        .cantabrico-intro h2 span {
            color: #159d95;
        }

        .cantabrico-intro p {
            max-width: 690px;
            margin: 0 auto;
            color: var(--texto-suave);
            font-size: 16px;
            line-height: 1.9;
        }

        /* DESTINOS */

        .cantabrico-destinos {
            padding: 30px 0 110px;
        }

        .cantabrico-destinos-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 30px;
            margin-bottom: 35px;
        }

        .cantabrico-destinos-heading h2 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 800;
            letter-spacing: -1.5px;
        }

        .cantabrico-destinos-heading p {
            max-width: 350px;
            color: var(--texto-suave);
            font-size: 14px;
            line-height: 1.7;
        }

        .cantabrico-destinos-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .cantabrico-destino-card {
            position: relative;
            min-height: 260px;
            padding: 28px;
            overflow: hidden;
            border: 1px solid rgba(13, 82, 101, .08);
            border-radius: var(--radio);
            background: white;
            box-shadow: 0 10px 35px rgba(10, 48, 62, .04);
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .cantabrico-destino-card:hover {
            transform: translateY(-9px);
            box-shadow: 0 25px 55px rgba(10, 48, 62, .12);
        }

        .cantabrico-destino-icon {
            display: grid;
            place-items: center;
            width: 52px;
            height: 52px;
            margin-bottom: 30px;
            border-radius: 18px;
            background: #e6f8f5;
            font-size: 25px;
        }

        .cantabrico-destino-card h3 {
            margin-bottom: 12px;
            font-family: 'Manrope', sans-serif;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .cantabrico-destino-card p {
            color: var(--texto-suave);
            font-size: 13px;
            line-height: 1.7;
        }

        .cantabrico-destino-number {
            position: absolute;
            right: 20px;
            bottom: 12px;
            color: rgba(13, 82, 101, .06);
            font-family: 'Manrope', sans-serif;
            font-size: 70px;
            font-weight: 800;
            line-height: 1;
        }

        /* BANNER */

        .cantabrico-banner {
            position: relative;
            margin-bottom: 100px;
            padding: 65px;
            overflow: hidden;
            border-radius: 32px;
            color: white;
            background:
                radial-gradient(circle at 90% 20%, rgba(81,214,197,.2), transparent 30%),
                linear-gradient(135deg, #062433, #0b5263);
        }

        .cantabrico-banner h2 {
            max-width: 650px;
            margin-bottom: 18px;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(30px, 4vw, 48px);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .cantabrico-banner p {
            max-width: 600px;
            margin-bottom: 28px;
            color: rgba(255,255,255,.72);
            font-size: 15px;
            line-height: 1.8;
        }

        /* FOOTER */

        .cantabrico-footer {
            padding: 30px 0;
            border-top: 1px solid rgba(13, 82, 101, .1);
            background: white;
        }

        .cantabrico-footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            color: var(--texto-suave);
            font-size: 12px;
        }

        .cantabrico-footer strong {
            color: var(--texto);
        }

        /* ANIMACIONES */

        .cantabrico-reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .cantabrico-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes cantabrico-float {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-25px) scale(1.04);
            }
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {
            .cantabrico-destinos-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .cantabrico-hero {
                min-height: auto;
                padding-bottom: 120px;
            }

            .cantabrico-nav {
                margin-bottom: 65px;
            }

            .cantabrico-banner {
                padding: 45px;
            }
        }

        @media (max-width: 600px) {
            .cantabrico-container {
                width: min(100% - 28px, 1180px);
            }

            .cantabrico-hero {
                padding-top: 20px;
            }

            .cantabrico-nav {
                margin-bottom: 55px;
            }

            .cantabrico-logo {
                font-size: 14px;
            }

            .cantabrico-logo-icon {
                width: 36px;
                height: 36px;
                border-radius: 12px;
            }

            .cantabrico-nav-link {
                font-size: 12px;
            }

            .cantabrico-hero h1 {
                letter-spacing: -2px;
            }

            .cantabrico-hero-description {
                font-size: 15px;
            }

            .cantabrico-hero-bottom {
                margin-top: 50px;
                font-size: 10px;
            }

            .cantabrico-video-card {
                padding: 7px;
                border-radius: 22px;
            }

            .cantabrico-video-frame {
                border-radius: 16px;
            }

            .cantabrico-video-caption {
                align-items: flex-start;
                padding: 17px 10px 10px;
            }

            .cantabrico-video-caption h2 {
                font-size: 16px;
            }

            .cantabrico-video-tag {
                padding: 7px 9px;
                font-size: 9px;
            }

            .cantabrico-intro {
                padding: 85px 0 60px;
            }

            .cantabrico-intro h2 {
                letter-spacing: -1px;
            }

            .cantabrico-intro p {
                font-size: 14px;
            }

            .cantabrico-destinos-heading {
                display: block;
            }

            .cantabrico-destinos-heading p {
                margin-top: 12px;
            }

            .cantabrico-destinos-grid {
                grid-template-columns: 1fr;
                gap: 13px;
            }

            .cantabrico-destino-card {
                min-height: 220px;
            }

            .cantabrico-banner {
                margin-bottom: 65px;
                padding: 30px 24px;
                border-radius: 24px;
            }

            .cantabrico-footer-inner {
                flex-direction: column;
                align-items: flex-start;
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

            .cantabrico-reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body>
<div class="cantabrico-page">

    <header class="cantabrico-hero">
        <div class="cantabrico-container">

            <nav class="cantabrico-nav">
                <a href="#" class="cantabrico-logo">
                    <span class="cantabrico-logo-icon">≈</span>
                    <span>Turismo Norte de España</span>
                </a>

                <a href="#destinos" class="cantabrico-nav-link">
                    Explorar destinos ↓
                </a>
            </nav>

            <div class="cantabrico-hero-content cantabrico-reveal">
                <div class="cantabrico-eyebrow">
                    <span></span>
                    Costa norte · España
                </div>

                <h1>
                    El Cantábrico.<br>
                    Donde la tierra<br>
                    <em>se encuentra con el mar.</em>
                </h1>

                <p class="cantabrico-hero-description">
                    Playas salvajes, acantilados infinitos, pueblos marineros
                    y paisajes que invitan a detenerse. Descubre la belleza
                    de la costa cantábrica.
                </p>

                <div class="cantabrico-hero-actions">
                    <a href="#video" class="cantabrico-button cantabrico-button-primary">
                        Ver el vídeo <span>▶</span>
                    </a>

                    <a href="#destinos" class="cantabrico-button cantabrico-button-secondary">
                        Descubrir la costa <span>↓</span>
                    </a>
                </div>

                <div class="cantabrico-hero-bottom">
                    <span class="cantabrico-hero-bottom-line"></span>
                    <span>Una costa para sentir</span>
                </div>
            </div>

        </div>
    </header>

    <main>

        <section class="cantabrico-video-section" id="video">
            <div class="cantabrico-container">
                <div class="cantabrico-video-card cantabrico-reveal">

                    <div class="cantabrico-video-frame">
                        <iframe
                            src="https://www.youtube-nocookie.com/embed/0ZvtKu0XBMg"
                            title="Playas del Cantábrico"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div class="cantabrico-video-caption">
                        <div>
                            <h2>Descubre las playas del Cantábrico</h2>
                            <p>Un recorrido visual por la costa norte.</p>
                        </div>

                        <span class="cantabrico-video-tag">Costa norte</span>
                    </div>

                </div>
            </div>
        </section>

        <section class="cantabrico-intro cantabrico-container cantabrico-reveal">
            <div class="cantabrico-section-label">Naturaleza en estado puro</div>

            <h2>
                Una costa llena de lugares<br>
                <span>que merecen ser descubiertos.</span>
            </h2>

            <p>
                El litoral cantábrico combina playas de arena dorada,
                calas escondidas, verdes montañas y pueblos con una
                personalidad única. Cada tramo de costa ofrece una
                experiencia diferente, desde paseos tranquilos junto
                al mar hasta jornadas de aventura y surf.
            </p>
        </section>

        <section class="cantabrico-destinos" id="destinos">
            <div class="cantabrico-container">

                <div class="cantabrico-destinos-heading cantabrico-reveal">
                    <div>
                        <div class="cantabrico-section-label">Explora el litoral</div>
                        <h2>Cuatro costas, mil experiencias.</h2>
                    </div>

                    <p>
                        Recorre algunos de los territorios más especiales
                        del norte y déjate sorprender por sus paisajes.
                    </p>
                </div>

                <div class="cantabrico-destinos-grid">

                    <article class="cantabrico-destino-card cantabrico-reveal">
                        <div class="cantabrico-destino-icon">🌊</div>
                        <h3>Cantabria</h3>
                        <p>
                            Playas abiertas, acantilados, naturaleza
                            y pueblos marineros junto al Cantábrico.
                        </p>
                        <span class="cantabrico-destino-number">01</span>
                    </article>

                    <article class="cantabrico-destino-card cantabrico-reveal">
                        <div class="cantabrico-destino-icon">🏄</div>
                        <h3>Bizkaia</h3>
                        <p>
                            Costa llena de carácter, rincones naturales
                            y playas ideales para disfrutar del mar.
                        </p>
                        <span class="cantabrico-destino-number">02</span>
                    </article>

                    <article class="cantabrico-destino-card cantabrico-reveal">
                        <div class="cantabrico-destino-icon">⛰️</div>
                        <h3>Gipuzkoa</h3>
                        <p>
                            Bahías, montañas verdes y localidades
                            costeras con una belleza extraordinaria.
                        </p>
                        <span class="cantabrico-destino-number">03</span>
                    </article>

                    <article class="cantabrico-destino-card cantabrico-reveal">
                        <div class="cantabrico-destino-icon">🐚</div>
                        <h3>Costa francesa</h3>
                        <p>
                            Descubre el encanto atlántico de Nouvelle-Aquitaine,
                            sus playas y sus paisajes naturales.
                        </p>
                        <span class="cantabrico-destino-number">04</span>
                    </article>

                </div>
            </div>
        </section>

        <section class="cantabrico-container">
            <div class="cantabrico-banner cantabrico-reveal">
                <div class="cantabrico-section-label">Tu próxima escapada</div>

                <h2>Respira. Desconecta.<br>Déjate llevar por el Cantábrico.</h2>

                <p>
                    El norte de España te espera con paisajes únicos,
                    aire puro y kilómetros de costa para explorar
                    a tu ritmo.
                </p>

                <a href="#destinos" class="cantabrico-button cantabrico-button-primary">
                    Explorar destinos <span>→</span>
                </a>
            </div>
        </section>

    </main>

    <footer class="cantabrico-footer">
        <div class="cantabrico-container cantabrico-footer-inner">
            <div>
                <strong>Turismo Norte de España</strong>
                <span> · Playas del Cantábrico</span>
            </div>

            <div>
                Naturaleza · Mar · Viajes
            </div>
        </div>
    </footer>

</div>

<script>
(function () {
    const elementos = document.querySelectorAll('.cantabrico-reveal');

    if (!('IntersectionObserver' in window)) {
        elementos.forEach(function (elemento) {
            elemento.classList.add('is-visible');
        });
        return;
    }

    const observador = new IntersectionObserver(function (entradas) {
        entradas.forEach(function (entrada) {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('is-visible');
                observador.unobserve(entrada.target);
            }
        });
    }, {
        threshold: 0.12
    });

    elementos.forEach(function (elemento) {
        observador.observe(elemento);
    });
})();
</script>

</body>
</html>
