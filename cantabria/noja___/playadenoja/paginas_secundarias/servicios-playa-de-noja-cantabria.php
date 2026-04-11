<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios en la Playa de Noja – Cantabria</title>
  
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  
  <!-- SEO -->
  <meta name="description" content="Descubre los servicios turísticos en la Playa de Noja: restaurantes frente al mar, alquiler de equipos, duchas públicas y zona de aparcamiento." />
  <meta name="keywords" content="Servicios Playa Noja, restaurantes Noja, duchas Noja, alquiler surf Cantabria, aparcamiento playa Noja" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Servicios en la Playa de Noja – Cantabria" />
  <meta property="og:description" content="Información sobre chiringuitos, alquiler de equipos, duchas y aparcamiento en la Playa de Noja." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/noja/servicios" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/noja-servicios.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Servicios en la Playa de Noja – Cantabria" />
  <meta name="twitter:description" content="Todo lo que necesitas saber sobre los servicios turísticos en la Playa de Noja." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/noja-servicios.jpg" />


<!-- Estilos personalizados para "servicios en la playa" -->
<link rel="stylesheet" href="./../../../css/styles.css">


</head>
<body>

  <?php require "./../../../../bloques/estructura/header.php"; ?>

  <?php
  $li_servicios_noja = '
  <section id="servicios" class="seccion-servicios container py-5">
    <header class="text-center mb-4">
      <h2 class="text-success">🌴 Servicios en la Playa de Noja</h2>
      <p>Disfruta de los <strong>servicios turísticos</strong> que hacen de la Playa de Noja un destino completo y familiar en la costa cántabra.</p>
    </header>

    <div class="info-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-utensils" style="color: #e67e22;"></i> 
          <strong>Chiringuitos y Restaurantes frente al mar:</strong><br>
          En el paseo marítimo encontrarás <strong>restaurantes con vistas al mar</strong> donde degustar platos típicos de Cantabria como rabas, anchoas, y pescados frescos.
        </li>

        <li class="my-4">
          <i class="fas fa-suitcase-rolling" style="color: #3498db;"></i> 
          <strong>Alquiler de Equipamiento:</strong><br>
          Puedes alquilar <strong>sombrillas, tumbonas y material deportivo</strong> como tablas de surf, bodyboard y paddle surf, ideales para disfrutar de las olas en las playas de Ris y Trengandín.
        </li>

        <li class="my-4">
          <i class="fas fa-shower" style="color: #1abc9c;"></i> 
          <strong>Duchas y Baños Públicos:</strong><br>
          La playa dispone de <strong>duchas y aseos públicos</strong> distribuidos estratégicamente para mayor comodidad y limpieza de los visitantes.
        </li>

        <li class="my-4">
          <i class="fas fa-parking" style="color: #f39c12;"></i> 
          <strong>Zona de Aparcamiento:</strong><br>
          Dispones de <strong>parking público gratuito y de pago</strong> cerca de ambas playas, con plazas reservadas para personas con movilidad reducida y fácil acceso al centro de Noja.
        </li>
      </ul>

      <p>¿Quieres conocer más playas en Cantabria? <a href="./../../../../index.php" title="Guía de playas en Cantabria">Consulta nuestra guía completa</a>.</p>
    </div>
  </section>
  ';

  echo $li_servicios_noja;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>