<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Laredo – Cantabria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Conoce los principales eventos en la Playa de Laredo: festivales, campeonatos deportivos y mercados veraniegos." />
  <meta name="keywords" content="Eventos Playa Laredo, fiestas Laredo, surf Laredo, mercado verano Cantabria" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Laredo – Cantabria" />
  <meta property="og:description" content="Descubre celebraciones únicas en Laredo: Fiesta de la Virgen, campeonatos de surf y mercados de verano." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/laredo/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/laredo-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Laredo – Cantabria" />
  <meta name="twitter:description" content="Fiestas locales, surf y mercados en la Playa de Laredo." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/laredo-eventos.jpg" />

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
  $li_eventos_laredo = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🎉 Eventos y Fiestas en la Playa de Laredo</h2>
      <p>Vive la <strong>tradición, cultura y deporte</strong> en una de las playas más emblemáticas de Cantabria. Aquí tienes una selección de los eventos más destacados del verano.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-cross" style="color: #9b59b6;"></i> 
          <strong>Fiesta de Nuestra Señora Virgen de la Asunción</strong> <time datetime="2025-08-15">(15 de agosto)</time><br>
          Procesión y actos religiosos en honor a la patrona local, acompañados de música y festejos en la playa.
        </li>

        <li class="my-4">
          <i class="fas fa-fire" style="color: #f39c12;"></i> 
          <strong>Fiesta de San Juan</strong> <time datetime="2025-06-23">(23 de junio)</time><br>
          Noche de hogueras, música en vivo y actividades para toda la familia junto al mar Cantábrico.
        </li>

        <li class="my-4">
          <i class="fas fa-anchor" style="color: #3498db;"></i> 
          <strong>Campeonatos de Surf en Laredo</strong> <time datetime="2025-07-20">(julio)</time><br>
          Competición que reúne a surfistas de toda España, con olas ideales para el deporte en esta playa extensa.
        </li>

        <li class="my-4">
          <i class="fas fa-store" style="color: #2ecc71;"></i> 
          <strong>Mercado de Verano</strong> <time datetime="2025-07-01">(julio-agosto)</time><br>
          Mercadillos de artesanía local, gastronomía típica cántabra y productos frescos, perfectos para disfrutar en familia.
        </li>
      </ul>

      <p>¿Quieres saber más sobre la cultura local? Visita nuestra <a href="/agenda-cultural/" title="Agenda cultural en Cantabria">agenda cultural</a>.</p>
    </div>
  </section>
  ';

  echo $li_eventos_laredo;
  ?>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>

  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>