<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cómo llegar a la Playa de Hendaya, Francia – Guía 2025"</title>

  <?php 
  // Variables para la página de Hendaya
  require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/francia/playadehendaya/fichas/sections/head/variables/web-playa/localizacion-playa.php';
  require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php';?>

<?php
  // Links y metas comunes
  require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php";

  // Metadatos específicos para la página de "cómo llegar"
  require PATH_RAIZ_LOCALIDADES . "/{$region}/{$localidad_minuscula}/paginas_secundarias/etiquetas_meta/como_llegar.php";
  ?>

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="./css/styles.css" />

  <!-- Adcash (opcional) -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA."/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>
<body>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA."/header.php"; ?>

<section id="como-llegar-hendaya" class="container py-5">
  <header class="text-center mb-4">
    <h2 class="text-danger section-header"><i class="fas fa-map-marked-alt"></i> Cómo llegar a la Playa de Hendaya</h2>
    <p class="lead">
      Conoce las mejores rutas para visitar esta hermosa playa del litoral francés en 
      <a href="/hendaya/" style="color:#2980b9;" title="Visita Hendaya">Hendaya</a>, País Vasco francés.
    </p>
  </header>

  <div class="info-box">
    <ul class="list-unstyled">
      <li class="mb-4">
        <i class="fas fa-car" style="color:#3498db;"></i>
        <strong>En coche:</strong><br>
        Desde <strong>San Sebastián</strong> o <strong>Biarritz</strong>, sigue la carretera N-1 o la A63 hacia Hendaya. Hay <em>aparcamientos públicos</em> cercanos a la playa, algunos gratuitos y otros de pago según temporada.
      </li>
      <li class="mb-4">
        <i class="fas fa-train" style="color:#9b59b6;"></i>
        <strong>En tren:</strong><br>
        El tren SNCF llega hasta la estación de Hendaya (Hendaye Gare). Desde ahí puedes caminar unos 20 minutos hasta la playa o tomar un autobús urbano.
      </li>
      <li class="mb-4">
        <i class="fas fa-bus" style="color:#e67e22;"></i>
        <strong>En autobús:</strong><br>
        Líneas desde San Juan de Luz, Irun o Biarritz. Consultar horarios locales. Algunos servicios conectan directamente con la zona costera en verano.
      </li>
      <li class="mb-4">
        <i class="fas fa-bicycle" style="color:#2ecc71;"></i>
        <strong>A pie o en bicicleta:</strong><br>
        La ciudad cuenta con carriles bici y rutas peatonales. Ideal para explorar la costa. También puedes llegar desde Irun cruzando el Puente Internacional a pie o en bici.
      </li>
    </ul>
  </div>

  <h5 class="mt-5 mb-3 text-primary"><i class="fas fa-map"></i> Mapa interactivo</h5>
  <div class="map-responsive mb-4" style="position:relative; overflow:hidden; padding-bottom:56.25%; height:0;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.623951781124!2d-1.7762410844374573!3d43.3726799791314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5115685e03f01f%3A0xb4cfe7e340f5b50a!2sPlage%20d%27Hendaye!5e0!3m2!1ses!2ses!4v1686749876543!5m2!1ses!2ses" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade" 
      title="Ubicación Playa de Hendaya" 
      style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;"
      allowfullscreen>
    </iframe>
  </div>

  <p class="text-center">
    ¿Desde otra ciudad? Usa 
    <a href="https://www.google.com/maps/dir//Plage+d%27Hendaye" target="_blank" rel="noopener noreferrer" title="Ruta a Playa de Hendaya" style="color:#2980b9;">
      Google Maps
    </a> 
    para planificar tu ruta.
  </p>
</section>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA.'/sections_generico/Carruseles_CSV/prueba_atuendo4.php'; ?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA."/footer.php"; ?>
<?php require PATH_RAIZ . "/anuncios/pop-up-publicitario2.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>

</body>
</html>