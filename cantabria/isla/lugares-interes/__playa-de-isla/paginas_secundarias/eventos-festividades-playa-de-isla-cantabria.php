<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Isla – Castro-Urdiales</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Descubre los eventos principales en la Playa de Isla: festivales de verano, actividades deportivas y mercadillos artesanales." />
  <meta name="keywords" content="Eventos Playa Isla, fiestas Castro Urdiales, actividades deportivas Isla, mercadillos verano Cantabria" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Isla – Castro-Urdiales" />
  <meta property="og:description" content="Participa en festivales, competiciones deportivas y mercados en la Playa de Isla durante el verano." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/isla/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/isla-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Isla – Castro-Urdiales" />
  <meta name="twitter:description" content="Festivales, actividades deportivas y mercadillos en la Playa de Isla." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/isla-eventos.jpg" />

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
  $li_eventos_isla = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🎉 Eventos y Fiestas en la Playa de Isla</h2>
      <p>Disfruta de la <strong>cultura, tradición y deporte</strong> en esta preciosa playa de <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" title="Castro-Urdiales">Castro-Urdiales</a>. Aquí te presentamos los eventos más destacados del verano.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-music" style="color: #9b59b6;"></i> 
          <strong>Festival de Música de Verano</strong> <time datetime="2025-07-20">(20 de julio)</time><br>
          Conciertos al aire libre con artistas locales y nacionales, una cita imprescindible para los amantes de la música y la playa.
        </li>

        <li class="my-4">
          <i class="fas fa-wind" style="color: #f39c12;"></i> 
          <strong>Competición de Vela</strong> <time datetime="2025-08-05">(5 de agosto)</time><br>
          Evento deportivo donde los mejores regatistas se enfrentan en la bahía, con actividades para toda la familia en tierra.
        </li>

        <li class="my-4">
          <i class="fas fa-leaf" style="color: #2ecc71;"></i> 
          <strong>Mercado Ecológico y Artesanal</strong> <time datetime="2025-07-15">(julio-agosto, fines de semana)</time><br>
          Mercado con productos orgánicos, artesanía local y gastronomía sostenible para disfrutar mientras paseas junto al mar.
        </li>

        <li class="my-4">
          <i class="fas fa-fire" style="color: #e74c3c;"></i> 
          <strong>Celebración de la Noche de San Juan</strong> <time datetime="2025-06-23">(23 de junio)</time><br>
          Hogueras, música y actividades tradicionales para dar la bienvenida al verano en un ambiente mágico y festivo.
        </li>
      </ul>

      <p>Para más actividades culturales, visita nuestra <a href="/agenda-cultural/" title="Agenda cultural en Cantabria">agenda cultural</a>.</p>
    </div>
  </section>
  ';

  echo $li_eventos_isla;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>

  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>