<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios en la Playa de Rodiles – Villaviciosa, Asturias</title>
  
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  
  <!-- SEO -->
  <meta name="description" content="Descubre los servicios turísticos en la Playa de Rodiles: chiringuitos, duchas públicas, alquiler de equipos y aparcamiento cerca del paraje natural." />
  <meta name="keywords" content="Servicios Playa Rodiles, restaurantes Villaviciosa, duchas Rodiles, alquiler surf Asturias, aparcamiento playa" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-25" />

  <!-- Open Graph -->
  <meta property="og:title" content="Servicios en la Playa de Rodiles – Villaviciosa, Asturias" />
  <meta property="og:description" content="Disfruta de chiringuitos, alquiler de equipos, duchas y aparcamiento en la Playa de Rodiles en Asturias." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/rodiles/servicios" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/rodiles-servicios.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Servicios en la Playa de Rodiles – Villaviciosa, Asturias" />
  <meta name="twitter:description" content="Todo lo que necesitas saber sobre los servicios turísticos en la Playa de Rodiles." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/rodiles-servicios.jpg" />

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
  $li_servicios_rodiles = '
  <section id="servicios" class="seccion-servicios container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🌊 Servicios en la Playa de Rodiles</h2>
      <p>Disfruta de todos los <strong>servicios turísticos</strong> que hacen de la Playa de Rodiles un destino natural y completo para pasar el día en <a href="https://es.wikipedia.org/wiki/Villaviciosa_(Asturias)" title="Conoce Villaviciosa">Villaviciosa</a>.</p>
    </header>

    <div class="info-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-utensils" style="color: #8e44ad;"></i> 
          <strong>Chiringuitos y Restaurantes cercanos:</strong><br>
          En las inmediaciones encontrarás <strong>restaurantes y bares</strong> con cocina asturiana tradicional: fabada, quesos, pescados frescos y sidra natural.
        </li>

        <li class="my-4">
          <i class="fas fa-suitcase-rolling" style="color: #2980b9;"></i> 
          <strong>Alquiler de Equipamiento de Playa:</strong><br>
          Dispones de alquiler de <strong>tabla de surf, bodyboard y kayaks</strong>, ideales para disfrutar de las olas y el entorno del <a href="https://turismoasturias.es/que-hacer/naturaleza/espacios-protegidos/parque-natural-de-las-ules" target="_blank" rel="noopener noreferrer" title="Parque Natural de las Ules">Parque Natural de las Ules</a>.
        </li>

        <li class="my-4">
          <i class="fas fa-shower" style="color: #16a085;"></i> 
          <strong>Duchas y Baños Públicos:</strong><br>
          La playa dispone de <strong>duchas y aseos públicos</strong> para mejorar la comodidad de los visitantes durante toda la temporada.
        </li>

        <li class="my-4">
          <i class="fas fa-parking" style="color: #f39c12;"></i> 
          <strong>Zona de Aparcamiento:</strong><br>
          Hay <strong>aparcamientos gratuitos y de pago</strong> próximos a la playa, con plazas adaptadas y buen acceso desde la carretera regional.
        </li>
      </ul>

      <p>¿Quieres descubrir más playas asturianas? <a href="./../../../../index.php" title="Guía de playas en Asturias">Consulta nuestra guía de playas en Asturias</a>.</p>
    </div>
  </section>
  ';

  echo $li_servicios_rodiles;
  ?>
  
  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>