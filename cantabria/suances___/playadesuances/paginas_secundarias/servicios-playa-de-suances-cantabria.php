<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios en la Playa de La Concha – San Sebastián</title>
  
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  
  <!-- SEO -->
  <meta name="description" content="Explora los servicios turísticos en la Playa de La Concha: restaurantes frente al mar, duchas públicas, alquiler de equipos y zona de aparcamiento en San Sebastián." />
  <meta name="keywords" content="Servicios Playa La Concha, restaurantes San Sebastián, duchas La Concha, alquiler kayak San Sebastián, aparcamiento playa" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Servicios en la Playa de La Concha – San Sebastián" />
  <meta property="og:description" content="Descubre chiringuitos, alquiler de equipos, duchas y aparcamiento en la Playa de La Concha en San Sebastián." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/la-concha/servicios" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/la-concha-servicios.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Servicios en la Playa de La Concha – San Sebastián" />
  <meta name="twitter:description" content="Todo lo que necesitas saber sobre los servicios turísticos en la Playa de La Concha." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/la-concha-servicios.jpg" />

  <style>
    body { background-color: #f8f9fa; }
    .info-box { background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .info-box ul { padding-left: 1.2rem; }
    .info-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .info-box i { margin-right: .5rem; }
    #servicios p { font-size: 1.1rem; }
  </style>
</head>
<body>

  <?php require "./../../../../bloques/estructura/header.php"; ?>

  <?php
  $li_servicios_laconcha = '
  <section id="servicios" class="seccion-servicios container py-5">
    <header class="text-center mb-4">
      <h2 class="text-success">🌴 Servicios en la Playa de La Concha</h2>
      <p>Disfruta de todos los <strong>servicios turísticos</strong> que hacen de la Playa de La Concha un destino cómodo y completo para pasar el día en <a href="https://es.wikipedia.org/wiki/San_Sebasti%C3%A1n" title="Conoce San Sebastián">San Sebastián</a>.</p>
    </header>

    <div class="info-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-utensils" style="color: #e67e22;"></i> 
          <strong>Chiringuitos y Restaurantes en el Paseo Marítimo:</strong><br>
          A lo largo del paseo marítimo encontrarás <strong>restaurantes con vistas al mar</strong>, ideales para degustar la <a href="/gastronomia-pais-vasco/" title="Comida típica del País Vasco">gastronomía vasca</a>: pintxos, mariscos frescos y txakoli.
        </li>

        <li class="my-4">
          <i class="fas fa-suitcase-rolling" style="color: #3498db;"></i> 
          <strong>Alquiler de Equipamiento de Playa:</strong><br>
          Puedes alquilar <strong>sombrillas, hamacas y material deportivo</strong> como kayaks y tablas de paddle surf, para disfrutar del <a href="/deportes-acuaticos-pais-vasco/" title="Ocio acuático en el País Vasco">ocio acuático en la costa vasca</a>.
        </li>

        <li class="my-4">
          <i class="fas fa-shower" style="color: #1abc9c;"></i> 
          <strong>Duchas y Baños Públicos:</strong><br>
          La playa cuenta con <strong>duchas y aseos públicos</strong> estratégicamente ubicados para la comodidad y accesibilidad de los visitantes.
        </li>

        <li class="my-4">
          <i class="fas fa-parking" style="color: #f39c12;"></i> 
          <strong>Zona de Aparcamiento:</strong><br>
          Dispones de <strong>aparcamientos públicos y privados</strong> próximos a la playa, con plazas adaptadas para personas con movilidad reducida y fácil acceso desde el centro de San Sebastián.
        </li>
      </ul>

      <p>¿Buscas otras playas con servicios similares? <a href="./../../../../index.php" title="Guía de playas en el País Vasco">Consulta nuestra guía de playas en el País Vasco</a>.</p>
    </div>
  </section>
  ';

  echo $li_servicios_laconcha;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>
  
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

