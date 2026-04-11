<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Suances – Suances</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Conoce los principales eventos en la Playa de Suances: festivales veraniegos, competiciones de surf y mercados locales." />
  <meta name="keywords" content="Eventos Playa Suances, fiestas Suances, surf Suances, mercado verano Cantabria" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Suances – Suances" />
  <meta property="og:description" content="Descubre las celebraciones y competiciones en Suances: festivales, surf y mercados de verano." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/suances/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/suances-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Suances – Suances" />
  <meta name="twitter:description" content="Fiestas locales, surf y mercados en la Playa de Suances." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/suances-eventos.jpg" />

  <style>
    body { background-color: #f8f9fa; }
    .event-box { background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .event-box ul { padding-left: 1.2rem; }
    .event-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .event-box i { margin-right: .5rem; }
    time { font-weight: 500; color: #555; }
  </style>
</head>
<body>

  <?php require "./../../../../bloques/estructura/header.php"; ?>

  <?php
  $li_eventos_suances = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🎉 Eventos y Fiestas en la Playa de Suances</h2>
      <p>Disfruta de la <strong>cultura, tradición y deporte</strong> en una de las playas más populares de <a href="https://es.wikipedia.org/wiki/Suances" title="Suances">Suances</a>. Estos son algunos de los eventos destacados de la temporada estival.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-cross" style="color: #9b59b6;"></i> 
          <strong>Fiesta de Nuestra Señora de las Nieves</strong> <time datetime="2025-08-05">(5 de agosto)</time><br>
          Celebración tradicional con misa, procesión y actos populares en honor a la patrona de Suances.
        </li>

        <li class="my-4">
          <i class="fas fa-fire" style="color: #f39c12;"></i> 
          <strong>Verbena de San Juan</strong> <time datetime="2025-06-23">(23 de junio)</time><br>
          Noche festiva con hogueras en la playa, música y actividades para toda la familia.
        </li>

        <li class="my-4">
          <i class="fas fa-anchor" style="color: #3498db;"></i> 
          <strong>Campeonato de Surf Suances</strong> <time datetime="2025-07-20">(julio)</time><br>
          Competición nacional e internacional que reúne a los mejores surfistas en las olas de Suances.
        </li>

        <li class="my-4">
          <i class="fas fa-store" style="color: #2ecc71;"></i> 
          <strong>Mercado Artesanal de Verano</strong> <time datetime="2025-07-01">(julio-agosto)</time><br>
          Mercadillo con productos locales, artesanía y gastronomía típica para disfrutar en un ambiente familiar.
        </li>
      </ul>

      <p>¿Quieres descubrir más eventos en Cantabria? Visita nuestra <a href="/agenda-cultural/" title="Agenda cultural en Cantabria">agenda cultural</a>.</p>
    </div>
  </section>
  ';

  echo $li_eventos_suances;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>

  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>