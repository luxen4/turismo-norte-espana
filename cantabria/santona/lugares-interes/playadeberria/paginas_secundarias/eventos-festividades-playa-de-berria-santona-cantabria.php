<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Berria – Santona</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Descubre los principales eventos en la Playa de Berria: festividades, campeonatos de surf, rutas naturales y mercadillos de verano." />
  <meta name="keywords" content="Eventos Playa Berria, fiestas Santona, surf Berria, mercado verano Cantabria, Parque Natural Marismas" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Berria – Santona" />
  <meta property="og:description" content="Vive experiencias únicas en Berria: conciertos, surf, ferias artesanas y rutas por el Parque Natural de las Marismas de Santona." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/berria/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/berria-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Berria – Santona" />
  <meta name="twitter:description" content="Actividades culturales, surf y mercadillos en Berria, junto al Parque Natural de Santona." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/berria-eventos.jpg" />

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
  $li_eventos_berria = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🌊 Eventos y Actividades en la Playa de Berria</h2>
      <p>Disfruta de <strong>naturaleza, cultura y deporte</strong> en uno de los entornos costeros más bellos de <a href="https://es.wikipedia.org/wiki/Santona" title="Santona">Santona</a>, junto al Parque Natural de las Marismas. Aquí te presentamos los eventos más destacados del verano.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-wave-square" style="color: #3498db;"></i> 
          <strong>Campeonatos de Surf en Berria</strong> <time datetime="2025-08-15">(15 de agosto)</time><br>
          Torneo abierto con categorías amateur y profesional, donde las olas de Berria atraen a surfistas de todo el norte de España.
        </li>

        <li class="my-4">
          <i class="fas fa-drum" style="color: #e74c3c;"></i> 
          <strong>Conciertos de Verano en la Playa</strong> <time datetime="2025-07-20">(julio-agosto)</time><br>
          Música en vivo al atardecer con bandas locales y tributos. Ambientes chill-out junto a la arena.
        </li>

        <li class="my-4">
          <i class="fas fa-tree" style="color: #2ecc71;"></i> 
          <strong>Rutas Guiadas por el Parque Natural</strong> <time datetime="2025-07-05">(verano)</time><br>
          Excursiones ecológicas con guías especializados para descubrir aves migratorias y flora autóctona de las marismas de Santona.
        </li>

        <li class="my-4">
          <i class="fas fa-store" style="color: #f1c40f;"></i> 
          <strong>Mercado Artesanal de Verano</strong> <time datetime="2025-07-10">(julio-agosto)</time><br>
          Artesanía, productos ecológicos y gastronomía cántabra reunidos en un mercadillo frente al mar.
        </li>
      </ul>

      <p>¿Te interesa explorar más actividades en Santona? Visita nuestra <a href="/agenda-cultural/" title="Agenda cultural en Cantabria">agenda cultural</a>.</p>
    </div>
  </section>
  ';

  echo $li_eventos_berria;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>