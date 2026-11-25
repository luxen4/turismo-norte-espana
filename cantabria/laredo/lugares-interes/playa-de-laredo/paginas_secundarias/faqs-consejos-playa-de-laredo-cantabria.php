<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FAQ & Consejos – Playa de Laredo</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <meta name="description" content="Resuelve tus dudas y descubre los mejores consejos para disfrutar al máximo de tu visita a la Playa de Laredo en Cantabria." />
  <meta name="keywords" content="FAQ Playa de Laredo, consejos Laredo, turismo Cantabria, qué llevar playa" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .faq-section, .consejos-section {
      background: #ffffff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
    }
    dt {
      font-weight: bold;
      margin-top: 20px;
      color: #2c3e50;
    }
    dd {
      margin-bottom: 20px;
    }
    i.fas {
      margin-right: 8px;
    }
    .section-header {
      text-align: center;
      margin-bottom: 40px;
      color: #2980b9;
    }
    .consejos-section h3 {
      margin-bottom: 20px;
      color: #8e44ad;
    }
  </style>
</head>
<body>
<?php require "./../../../../bloques/estructura/header.php"; ?>

<section class="py-5">
  <div class="container">

    <!-- FAQ -->
    <header class="section-header">
      <h2><i class="fas fa-question-circle"></i> Preguntas Frecuentes</h2>
      <p class="lead">Información clave para aprovechar tu visita a la Playa de Laredo</p>
    </header>
    <div class="faq-section">
      <dl>
        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Cómo es la arena de la Playa de Laredo?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Arena fina y dorada, perfecta para pasear descalzo y disfrutar con niños.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Está adaptada para personas con movilidad reducida?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Sí, cuenta con accesos adaptados, pasarelas, baños accesibles y zonas reservadas.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Qué deportes se pueden practicar en esta playa?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Surf, paddle surf, voleibol playa y paseos por el extenso litoral.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Qué servicios hay disponibles?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Duchas, aseos, vigilancia, chiringuitos, parque infantil y aparcamiento cercano.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Dónde puedo ver más información sobre esta playa?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Visita nuestra <a href="./caracteristicas-playa-de-laredo-cantabria.php" title="Guía Playa de Laredo">guía completa de la Playa de Laredo</a> para conocer todas sus características.</dd>
      </dl>
    </div>

    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_botas_hombre.php'; ?>

    <!-- Consejos Útiles -->
    <header class="section-header">
      <h2><i class="fas fa-info-circle"></i> Consejos Útiles</h2>
      <p class="lead">Todo lo que necesitas saber para planificar tu visita a Laredo</p>
    </header>
    <div class="consejos-section">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-calendar-day" style="color: #27ae60;"></i>
          <strong>¿Cuándo visitar?</strong><br>
          Los mejores meses para disfrutar del sol y el mar son entre <time datetime="2025-06">junio</time> y <time datetime="2025-09">septiembre</time>. Para evitar aglomeraciones, considera la primavera (<time datetime="2025-04">abril</time>–<time datetime="2025-05">mayo</time>) y el otoño (<time datetime="2025-10">octubre</time>).
        </li>
        <li class="my-4">
          <i class="fas fa-umbrella-beach" style="color: #f39c12;"></i>
          <strong>¿Qué llevar?</strong><br>
          Traje de baño, protector solar SPF 50, sombrero, toalla, tabla de surf o paddle (si practicas), y calzado cómodo para paseos por la arena y el paseo marítimo.
        </li>
        <li class="my-4">
          <i class="fas fa-map-marker-alt" style="color: #8e44ad;"></i>
          <strong>Lugares cercanos para explorar:</strong><br>
          No te pierdas el <a href="https://turismodecantabria.com/disfrutala/naturaleza/parque-natural-de-las-dunas-de-liencres/" target="_blank" rel="noopener noreferrer" title="Parque Natural de las Dunas de Liencres">Parque Natural de las Dunas de Liencres</a> o el centro histórico de Laredo con su arquitectura tradicional.
        </li>
      </ul>
    </div>

  </div>
</section>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';  ?>

<?php require "./../../../../bloques/estructura/footer.php"; ?>
<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


