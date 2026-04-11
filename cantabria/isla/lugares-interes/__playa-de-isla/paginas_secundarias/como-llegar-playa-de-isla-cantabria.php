<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cómo llegar a la Playa de Isla – Castro-Urdiales</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO Básico -->
  <meta name="description" content="Guía completa para llegar a la Playa de Isla en Castro Urdiales: coche, autobús, senderos costeros y mapa interactivo actualizado." />
  <meta name="keywords" content="Playa de Isla, cómo llegar, transporte Isla, aparcamiento, senderos costeros, Castro Urdiales, Cantabria" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph (SEO Avanzado) -->
  <meta property="og:title" content="Cómo llegar a la Playa de Isla – Castro-Urdiales" />
  <meta property="og:description" content="Descubre cómo llegar fácilmente a la Playa de Isla: en coche, autobús o bicicleta. Incluye mapa interactivo." />
  <meta property="og:url" content="https://www.ejemplo.com/isla/como-llegar" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/como-llegar-isla.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Cómo llegar a la Playa de Isla – Castro-Urdiales" />
  <meta name="twitter:description" content="Guía con mapa para llegar a la Playa de Isla: coche, autobús, a pie o bici. Planifica tu visita a Castro-Urdiales." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/como-llegar-isla.jpg" />

  <!-- Estilos personalizados -->
  <style>
    body { background-color: #f8f9fa; }
    .info-box { background: #fff; border-radius: 12px; padding: 0.125rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .info-box ul { padding-left: 0.125rem; }
    .info-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .info-box i { margin-right: .5rem; }
    .section-header i { margin-right: .5rem; }
    .map-responsive iframe { border: 0; width: 100%; height: 450px; border-radius: 10px; }
  </style>

  <!-- Adcash (opcional) -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>
<body>

<?php require "./../../../../bloques/estructura/header.php"; ?>

<?php
$li_mapa_ubicacion = '
<section id="como-llegar-isla" class="container">
  <header class="text-center mb-4">
    <h2 class="text-danger section-header"><i class="fas fa-map-marked-alt"></i> Cómo llegar a la Playa de Isla</h2>
    <p class="lead">Planifica tu ruta hacia una de las playas más bonitas y tranquilas de <a href="/castro-urdiales/" style="color:#2980b9;" title="Visita Castro Urdiales">Castro Urdiales</a>, situada en pleno litoral cántabro.</p>
  </header>

  <div class="info-box">
    <ul class="list-unstyled">
      <li>
        <i class="fas fa-car" style="color:#3498db;"></i>
        <strong>En coche:</strong><br>
        Desde <strong>Santander</strong>, toma la <abbr title="Autovía del Cantábrico">A-67</abbr> (dirección Bilbao) y sigue la CA-131 durante unos 30 minutos. Existen <em>aparcamientos gratuitos y zonas habilitadas</em> cerca de la playa.
      </li>
      <li>
        <i class="fas fa-bus" style="color:#e67e22;"></i>
        <strong>En autobús:</strong><br>
        Líneas regulares con <a href="https://www.bizkaibus.eus/" target="_blank" rel="noopener noreferrer" style="color:#2980b9;" title="Horarios Bizkaibus">Bizkaibus</a> y transporte local desde Bilbao, Santander y pueblos cercanos. La parada más cercana es <em>“Playa Isla”</em>.
      </li>
      <li>
        <i class="fas fa-bicycle" style="color:#2ecc71;"></i>
        <strong>A pie o en bicicleta:</strong><br>
        Accede desde el centro de Castro-Urdiales a través de <a href="/ruta-costera-isla" style="color:#2980b9;" title="Ruta costera">senderos costeros señalizados</a>, ideales para pasear o pedalear (aprox. 25 minutos).
      </li>
    </ul>
  </div>

  <h5 class="mt-5 mb-3 text-primary"><i class="fas fa-map"></i> Mapa interactivo</h5>
  <div class="map-responsive mb-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5830.000000000000!2d-3.8520000000000000!3d43.4600000000000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd49358000000000%3A0x123456789abcdef0!2sPlaya%20de%20Isla!5e0!3m2!1ses!2ses!4v1692110569999!5m2!1ses!2ses" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ubicación Playa de Isla"></iframe>
  </div>

  <p class="text-center">
    ¿Vienes desde otro lugar? Usa <a href="https://www.google.com/maps/dir//Playa+de+Isla" target="_blank" rel="noopener noreferrer" title="Ruta en Google Maps" style="color:#2980b9;">Google Maps</a> para planificar tu ruta personalizada.
  </p>
</section>
';
echo $li_mapa_ubicacion;
?>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo4.php'; ?>

<?php require "./../../../../bloques/estructura/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<!-- jQuery (necesario para Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Popper.js (necesario para el dropdown y toggler de Bootstrap 4) -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>