<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios en la Playa de Berria – Santona</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Conoce todos los servicios que ofrece la Playa de Berria en Santona: chiringuitos, duchas, surf y zonas de aparcamiento." />
  <meta name="keywords" content="Servicios Playa Berria, restaurantes Santona, duchas Berria, surf Cantabria, aparcamiento playa Berria" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Servicios en la Playa de Berria – Santona" />
  <meta property="og:description" content="Explora los servicios turísticos disponibles en la Playa de Berria: chiringuitos, escuelas de surf, duchas públicas y parking." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/berria/servicios" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/berria-servicios.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Servicios en la Playa de Berria – Santona" />
  <meta name="twitter:description" content="Todo sobre los servicios turísticos disponibles en la Playa de Berria, Cantabria." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/berria-servicios.jpg" />

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
$li_servicios_berria = '
<section id="servicios" class="seccion-servicios container py-5">
  <header class="text-center mb-4">
    <h2 class="text-success">🏖️ Servicios en la Playa de Berria</h2>
    <p>La <strong>Playa de Berria</strong> en <a href="https://es.wikipedia.org/wiki/Santo%C3%B1a" title="Conoce Santona">Santona</a> ofrece servicios ideales para disfrutar de un día completo junto al mar.</p>
  </header>

  <div class="info-box">
    <ul class="list-unstyled">
      <li class="my-4">
        <i class="fas fa-utensils" style="color: #e67e22;"></i>
        <strong>Chiringuitos y Restauración:</strong><br>
        A lo largo del paseo y zona de acceso a la playa encontrarás <strong>chiringuitos, cafeterías y bares</strong> con vistas a las olas. Perfecto para un aperitivo o una comida ligera frente al mar.
      </li>

      <li class="my-4">
        <i class="fas fa-water" style="color: #3498db;"></i>
        <strong>Escuelas de Surf y Alquiler:</strong><br>
        Berria es uno de los <strong>mejores destinos para surfear en Cantabria</strong>. Hay varias escuelas de surf donde puedes tomar clases o alquilar tablas, trajes de neopreno y bodyboards.
      </li>

      <li class="my-4">
        <i class="fas fa-shower" style="color: #1abc9c;"></i>
        <strong>Duchas y Servicios Públicos:</strong><br>
        La playa cuenta con <strong>duchas al aire libre y aseos públicos</strong> distribuidos en los accesos principales. Todo preparado para mantener la comodidad de los visitantes.
      </li>

      <li class="my-4">
        <i class="fas fa-parking" style="color: #f39c12;"></i>
        <strong>Zona de Aparcamiento:</strong><br>
        Hay <strong>aparcamientos gratuitos</strong> en los alrededores de la playa, con espacio para vehículos y bicicletas. También se dispone de zonas habilitadas para personas con movilidad reducida.
      </li>
    </ul>

    <p>¿Buscas otras playas como Berria? <a href="./../../../../index.php" title="Guía de playas en Cantabria">Explora otras playas de Cantabria aquí</a>.</p>
  </div>
</section>
';
echo $li_servicios_berria;
?>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>
<?php require "./../../../../bloques/estructura/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>