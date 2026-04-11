<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cómo llegar a la Playa de Noja – Cantabria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO Básico -->
  <meta name="description" content="Guía práctica para llegar a la Playa de Noja: en coche, autobús o bici. Incluye mapa interactivo y consejos para tu visita." />
  <meta name="keywords" content="Playa de Noja, cómo llegar, transporte, aparcamiento, rutas en Noja, Cantabria, playa Trengandín, Ris" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-11" />

  <!-- Open Graph -->
  <meta property="og:title" content="Cómo llegar a la Playa de Noja – Cantabria" />
  <meta property="og:description" content="Descubre las rutas para llegar a la Playa de Noja: coche, autobús o bicicleta. Mapa actualizado incluido." />
  <meta property="og:url" content="https://www.ejemplo.com/noja/como-llegar" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/como-llegar-noja.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Cómo llegar a la Playa de Noja – Cantabria" />
  <meta name="twitter:description" content="Consulta cómo llegar a la Playa de Noja: acceso en coche, autobús o a pie. Incluye mapa interactivo." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/como-llegar-noja.jpg" />

  <!-- Estilos -->
  <style>
    body { background-color: #f8f9fa; }
    .info-box { background: #fff; border-radius: 12px; padding: 0.125rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .info-box ul { padding-left: 0.125rem; }
    .info-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .info-box i { margin-right: .5rem; }
    .section-header i { margin-right: .5rem; }
    .map-responsive iframe { border: 0; width: 100%; height: 450px; border-radius: 10px; }
  </style>

  <!-- Adcash -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>

<body>

<?php require "./../../../../bloques/estructura/header.php"; ?>

<?php
$li_mapa_noja = '
<section id="como-llegar-noja" class="container">
  <header class="text-center mb-4">
    <h2 class="text-danger section-header"><i class="fas fa-map-marked-alt"></i> Cómo llegar a la Playa de Noja</h2>
    <p class="lead">Organiza tu llegada a <a href="/noja/" style="color:#2980b9;" title="Visita Noja">Noja</a>, uno de los enclaves costeros más bonitos de Cantabria.</p>
  </header>

  <div class="info-box">
    <ul class="list-unstyled">
      <li>
        <i class="fas fa-car" style="color:#3498db;"></i>
        <strong>En coche:</strong><br>
        Desde <strong>Santander</strong> o <strong>Bilbao</strong>, accede por la <abbr title="Autovía del Cantábrico">A-8</abbr> y toma la salida hacia <strong>Noja</strong> por la CA-147. Hay varios aparcamientos públicos próximos a las playas de <em>Trengandín</em> y <em>Ris</em>.
      </li>
      <li>
        <i class="fas fa-bus" style="color:#e67e22;"></i>
        <strong>En autobús:</strong><br>
        Líneas regulares desde Santander y Laredo. Consulta horarios con <a href="https://www.alsa.es" target="_blank" rel="noopener noreferrer" title="Autobuses ALSA" style="color:#2980b9;">ALSA</a>. La estación está a 10-15 minutos a pie de la playa.
      </li>
      <li>
        <i class="fas fa-bicycle" style="color:#2ecc71;"></i>
        <strong>A pie o en bicicleta:</strong><br>
        Disfruta de las sendas ecológicas y carriles bici que rodean el núcleo urbano. El acceso al arenal desde el centro es llano y cómodo.
      </li>
    </ul>
  </div>

  <h5 class="mt-5 mb-3 text-primary"><i class="fas fa-map"></i> Mapa interactivo</h5>
  <div class="map-responsive mb-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5832.475681090781!2d-3.5284595866103834!3d43.48804863704542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493aaa2641f595%3A0x9b78f713dc9be53c!2sPlaya%20de%20Trengand%C3%ADn!5e0!3m2!1ses!2ses!4v1692112223456!5m2!1ses!2ses" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ubicación Playa de Noja"></iframe>
  </div>

  <p class="text-center">
    ¿Desde otro punto? Usa <a href="https://www.google.com/maps/dir//Playa+de+Noja" target="_blank" rel="noopener noreferrer" title="Ruta en Google Maps" style="color:#2980b9;">Google Maps</a> para crear tu itinerario.
  </p>
</section>
';
echo $li_mapa_noja;
?>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo4.php'; ?>
<?php require "./../../../../bloques/estructura/footer.php"; ?>

<!-- JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery, Popper, Bootstrap 4 (si es necesario) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>