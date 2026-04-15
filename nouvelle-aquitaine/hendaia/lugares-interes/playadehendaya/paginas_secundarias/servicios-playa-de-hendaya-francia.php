<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios en la Playa de Hendaya – Hendaye</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Conoce todos los servicios que ofrece la Playa de Hendaya en Hendaye: chiringuitos, duchas, surf y zonas de aparcamiento." />
  <meta name="keywords" content="Servicios Playa Hendaya, restaurantes Hendaye, duchas Hendaya, surf País Vasco Francés, aparcamiento playa Hendaya" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Servicios en la Playa de Hendaya – Hendaye" />
  <meta property="og:description" content="Explora los servicios turísticos disponibles en la Playa de Hendaya: chiringuitos, escuelas de surf, duchas públicas y parking." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/hendaya/servicios" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/hendaya-servicios.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Servicios en la Playa de Hendaya – Hendaye" />
  <meta name="twitter:description" content="Todo sobre los servicios turísticos disponibles en la Playa de Hendaya, País Vasco Francés." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/hendaya-servicios.jpg" />

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
$li_servicios_hendaya = '
<section id="servicios" class="seccion-servicios container py-5">
  <header class="text-center mb-4">
    <h2 class="text-success">🏖️ Servicios en la Playa de Hendaya</h2>
    <p>La <strong>Playa de Hendaya</strong> en <a href="https://es.wikipedia.org/wiki/Hendaya" title="Conoce Hendaya">Hendaye</a> ofrece servicios ideales para disfrutar de un día completo junto al mar.</p>
  </header>

  <div class="info-box">
    <ul class="list-unstyled">
      <li class="my-4">
        <i class="fas fa-utensils" style="color: #e67e22;"></i>
        <strong>Chiringuitos y Restauración:</strong><br>
        A lo largo del paseo y zonas cercanas encontrarás <strong>restaurantes, cafeterías y bares</strong> con vistas al océano. Perfecto para degustar la gastronomía vasca frente al mar.
      </li>

      <li class="my-4">
        <i class="fas fa-water" style="color: #3498db;"></i>
        <strong>Escuelas de Surf y Alquiler:</strong><br>
        Hendaya es un destino emblemático para el <strong>surf y paddle surf</strong>. Hay varias escuelas donde puedes tomar clases o alquilar equipamiento.
      </li>

      <li class="my-4">
        <i class="fas fa-shower" style="color: #1abc9c;"></i>
        <strong>Duchas y Servicios Públicos:</strong><br>
        La playa dispone de <strong>duchas al aire libre, aseos públicos y puntos de agua potable</strong> para comodidad de los visitantes.
      </li>

      <li class="my-4">
        <i class="fas fa-parking" style="color: #f39c12;"></i>
        <strong>Zona de Aparcamiento:</strong><br>
        Hay <strong>varias opciones de aparcamiento</strong> tanto gratuitas como de pago cerca de la playa, incluyendo plazas para personas con movilidad reducida.
      </li>
    </ul>

    <p>¿Quieres conocer más playas de la región? <a href="./../../../../index.php" title="Guía de playas en el País Vasco Francés">Explora otras playas cerca de Hendaya aquí</a>.</p>
  </div>
</section>
';
echo $li_servicios_hendaya;
?>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>
<?php require "./../../../../bloques/estructura/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>