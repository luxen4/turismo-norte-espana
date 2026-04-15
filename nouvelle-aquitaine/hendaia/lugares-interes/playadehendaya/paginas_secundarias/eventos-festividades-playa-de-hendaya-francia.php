<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Hendaya – Francia</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Descubre los principales eventos en la Playa de Hendaya: festivales de verano, campeonatos internacionales de surf, actividades familiares y mercados artesanales." />
  <meta name="keywords" content="Eventos Playa Hendaya, fiestas Hendaya, surf Hendaya, mercado verano Hendaya, festivales Francia" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Hendaya – Francia" />
  <meta property="og:description" content="Vive la magia de Hendaya con festivales culturales, surf y mercados artesanales en la emblemática playa de la costa vasca francesa." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/hendaya/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/hendaya-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Hendaya – Francia" />
  <meta name="twitter:description" content="Actividades culturales, surf y mercadillos en Hendaya, en la frontera vasca francesa." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/hendaya-eventos.jpg" />

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
  $li_eventos_hendaya = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🌊 Eventos y Actividades en la Playa de Hendaya</h2>
      <p>Disfruta de <strong>cultura, deporte y gastronomía</strong> en la extensa playa de <a href="https://es.wikipedia.org/wiki/Hendaya" target="_blank" rel="noopener noreferrer" title="Hendaya">Hendaya</a>, uno de los destinos más vibrantes del País Vasco francés. Aquí te presentamos los eventos destacados del verano.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-water" style="color: #3498db;"></i> 
          <strong>Campeonato Internacional de Surf</strong> <time datetime="2025-07-18">(18 de julio)</time><br>
          Competición con surfistas profesionales de Europa y el mundo, en las olas emblemáticas de Hendaya.
        </li>

        <li class="my-4">
          <i class="fas fa-guitar" style="color: #e74c3c;"></i> 
          <strong>Festival de Música en la Playa</strong> <time datetime="2025-08-10">(agosto)</time><br>
          Conciertos gratuitos con artistas locales e internacionales, ambiente familiar y food trucks.
        </li>

        <li class="my-4">
          <i class="fas fa-child" style="color: #2ecc71;"></i> 
          <strong>Actividades para Niños y Familias</strong> <time datetime="2025-07-05">(verano)</time><br>
          Talleres ecológicos, juegos en la arena y excursiones guiadas para los más pequeños.
        </li>

        <li class="my-4">
          <i class="fas fa-shopping-basket" style="color: #f1c40f;"></i> 
          <strong>Mercado de Artesanía y Productos Locales</strong> <time datetime="2025-07-25">(julio-agosto)</time><br>
          Puestos con artesanía vasca, gastronomía y productos frescos en un entorno único junto al mar.
        </li>
      </ul>

      <p>¿Quieres descubrir más eventos en Hendaya? Consulta nuestra <a href="/agenda-cultural/" title="Agenda cultural en Hendaya">agenda cultural</a>.</p>
    </div>
  </section>
  ';

  echo $li_eventos_hendaya;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>