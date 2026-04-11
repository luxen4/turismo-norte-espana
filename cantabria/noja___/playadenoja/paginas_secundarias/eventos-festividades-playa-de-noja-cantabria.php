<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Noja – Cantabria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Conoce los principales eventos en la Playa de Noja: fiestas populares, ferias gastronómicas, deporte acuático y mercadillos estivales." />
  <meta name="keywords" content="Eventos Playa Noja, fiestas Cantabria, surf Noja, mercado verano Noja" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Noja – Cantabria" />
  <meta property="og:description" content="Descubre las fiestas, ferias y actividades veraniegas más destacadas en la Playa de Noja." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/noja/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/noja-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Noja – Cantabria" />
  <meta name="twitter:description" content="Fiestas tradicionales, ferias locales y competiciones deportivas en Noja." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/noja-eventos.jpg" />

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
  $li_eventos_noja = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-success">🎊 Eventos y Fiestas en la Playa de Noja</h2>
      <p>Sumérgete en la <strong>cultura local, actividades al aire libre y gastronomía</strong> que ofrece Noja durante los meses de verano. Aquí te mostramos los eventos más populares.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-fish" style="color: #3498db;"></i> 
          <strong>Fiesta de San Emeterio y San Celedonio</strong> <time datetime="2025-08-29">(29 de agosto)</time><br>
          Fiesta patronal de Noja con pasacalles, música en vivo, gastronomía cántabra y eventos en la playa.
        </li>

        <li class="my-4">
          <i class="fas fa-utensils" style="color: #e67e22;"></i> 
          <strong>Feria de la Anchoa y el Producto Local</strong> <time datetime="2025-07-20">(julio)</time><br>
          Un festival gastronómico dedicado al producto estrella del Cantábrico. Degustaciones, showcookings y música.
        </li>

        <li class="my-4">
          <i class="fas fa-water" style="color: #1abc9c;"></i> 
          <strong>Encuentro de Paddle Surf y Kayak</strong> <time datetime="2025-08-12">(agosto)</time><br>
          Actividades deportivas en el entorno de Ris y Trengandín. Ideal para toda la familia y para amantes del mar.
        </li>

        <li class="my-4">
          <i class="fas fa-shopping-basket" style="color: #2ecc71;"></i> 
          <strong>Mercado Noja Natural</strong> <time datetime="2025-07-01">(julio-agosto)</time><br>
          Mercadillo ecológico con artesanía, productos orgánicos y talleres infantiles, a pocos pasos de la playa.
        </li>
      </ul>

      <p>¿Te interesa más? Explora nuestra <a href="/agenda-noja/" title="Agenda de eventos en Noja">agenda de eventos</a> para ver todas las actividades del año.</p>
    </div>
  </section>
  ';

  echo $li_eventos_noja;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>