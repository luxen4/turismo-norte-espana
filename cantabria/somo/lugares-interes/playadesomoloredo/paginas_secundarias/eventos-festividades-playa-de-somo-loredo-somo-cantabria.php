<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Somo-Loredo – Somo, Cantabria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Descubre los principales eventos en la Playa de Somo-Loredo: festivales de surf, conciertos en la playa, mercados artesanales y fiestas locales." />
  <meta name="keywords" content="Eventos Playa Somo Loredo, surf Somo, fiestas Ribamontán al Mar, mercado verano Cantabria, conciertos Somo" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Somo-Loredo – Somo, Cantabria" />
  <meta property="og:description" content="Conoce las celebraciones y actividades destacadas en Somo: surf, conciertos al aire libre, mercados y fiestas veraniegas." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/somo/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/somo-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Somo-Loredo – Somo, Cantabria" />
  <meta name="twitter:description" content="Actividades veraniegas, surf y tradición en la Playa de Somo-Loredo." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/somo-eventos.jpg" />

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
  $li_eventos_somo = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🏄‍♂️ Eventos y Actividades en la Playa de Somo-Loredo</h2>
      <p>La Playa de Somo-Loredo, en <a href="https://es.wikipedia.org/wiki/Somo_(Cantabria)" title="Somo en Cantabria">Somo</a>, es un lugar vibrante durante el verano, donde <strong>la cultura del surf, la música y las tradiciones</strong> se dan cita frente al mar.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-trophy" style="color: #3498db;"></i> 
          <strong>Festival Escuela Cántabra de Surf</strong> <time datetime="2025-08-15">(15 de agosto)</time><br>
          Un evento anual con <strong>clases, exhibiciones y competiciones</strong> de surf, música en vivo y ambiente familiar, ideal para amantes del mar y la adrenalina.
        </li>

        <li class="my-4">
          <i class="fas fa-music" style="color: #e67e22;"></i> 
          <strong>Conciertos de Verano en la Playa</strong> <time datetime="2025-07-20">(julio y agosto)</time><br>
          Conciertos gratuitos organizados por el Ayuntamiento de Ribamontán al Mar con bandas locales y regionales en un entorno natural inigualable.
        </li>

        <li class="my-4">
          <i class="fas fa-store" style="color: #2ecc71;"></i> 
          <strong>Mercado Artesanal de Somo</strong> <time datetime="2025-07-01">(julio-agosto)</time><br>
          Encuentra productos locales, souvenirs y gastronomía cántabra en este mercado veraniego junto al paseo marítimo.
        </li>

        <li class="my-4">
          <i class="fas fa-flag" style="color: #9b59b6;"></i> 
          <strong>Fiestas Patronales de Somo</strong> <time datetime="2025-07-25">(25 de julio)</time><br>
          Celebraciones con <strong>procesiones, actividades infantiles y fuegos artificiales</strong> en honor a Santiago Apóstol, patrón de Somo.
        </li>
      </ul>

      <p>¿Quieres ver más actividades veraniegas en Cantabria? Explora nuestra <a href="/agenda-cultural/" title="Agenda cultural en Cantabria">agenda cultural</a> completa.</p>
    </div>
  </section>
  ';

  echo $li_eventos_somo;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>