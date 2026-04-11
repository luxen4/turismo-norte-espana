<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios en la Playa de Somo-Loredo – Somo, Cantabria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Conoce los servicios disponibles en la Playa de Somo-Loredo: chiringuitos frente al mar, escuelas de surf, duchas, aparcamiento y alquiler de material." />
  <meta name="keywords" content="Servicios Playa Somo Loredo, surf Somo, restaurantes frente al mar, duchas playa Cantabria, aparcamiento Somo" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Servicios en la Playa de Somo-Loredo – Somo, Cantabria" />
  <meta property="og:description" content="Descubre todo lo que ofrece la Playa de Somo-Loredo: chiringuitos, alquiler de tablas, duchas públicas y zonas de aparcamiento." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/somo/servicios" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/somo-servicios.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Servicios en la Playa de Somo-Loredo – Somo, Cantabria" />
  <meta name="twitter:description" content="Todo lo que necesitas saber sobre los servicios turísticos en la Playa de Somo-Loredo." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/somo-servicios.jpg" />




  
<!-- Estilos personalizados para "servicios en la playa" -->
<link rel="stylesheet" href="./../../../css/styles.css">
</head>
<body>

  <?php require "./../../../../bloques/estructura/header.php"; ?>

  <?php
  $li_servicios_somo = '
  <section id="servicios" class="seccion-servicios container py-5">
    <header class="text-center mb-4">
      <h2 class="text-success">🌊 Servicios en la Playa de Somo-Loredo</h2>
      <p>Explora los <strong>servicios turísticos</strong> que hacen de la Playa de Somo-Loredo un paraíso para surfistas, familias y amantes de la naturaleza en <a href="https://es.wikipedia.org/wiki/Somo" title="Conoce Somo en Cantabria">Somo</a>, Cantabria.</p>
    </header>

    <div class="info-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-utensils" style="color: #e67e22;"></i> 
          <strong>Chiringuitos y Restaurantes frente al mar:</strong><br>
          Degusta marisco fresco, bocadillos y comida local en los <strong>chiringuitos repartidos a lo largo del paseo</strong>, con vistas espectaculares al mar Cantábrico.
        </li>

        <li class="my-4">
          <i class="fas fa-person-swimming" style="color: #3498db;"></i> 
          <strong>Escuelas de Surf y Alquiler de Material:</strong><br>
          Somo es uno de los <a href="/surf-en-cantabria" title="Surf en Cantabria">destinos de surf más reconocidos</a> del norte de España. Hay numerosas escuelas donde puedes <strong>alquilar tablas, trajes de neopreno y recibir clases</strong>.
        </li>

        <li class="my-4">
          <i class="fas fa-shower" style="color: #1abc9c;"></i> 
          <strong>Duchas y Baños Públicos:</strong><br>
          Encontrarás duchas exteriores y aseos cerca de los accesos principales, ideales para <em>refrescarse y cambiarse tras una jornada de playa</em>.
        </li>

        <li class="my-4">
          <i class="fas fa-parking" style="color: #f39c12;"></i> 
          <strong>Zonas de Aparcamiento:</strong><br>
          Existen varias <strong>zonas de aparcamiento gratuito y regulado</strong> en las inmediaciones. Algunas áreas incluyen plazas para personas con movilidad reducida.
        </li>
      </ul>

      <p>¿Interesado en más playas con buenas instalaciones? <a href="./../../../../index.php" title="Guía de playas de Cantabria">Consulta nuestra guía completa</a>.</p>
    </div>
  </section>
  ';

  echo $li_servicios_somo;
  ?>
  
  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
